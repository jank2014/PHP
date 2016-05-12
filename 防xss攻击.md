　一、HttpOnly防止劫取Cookie

　　HttpOnly最早由微软提出，至今已经成为一个标准。浏览器将禁止页面的Javascript访问带有HttpOnly属性的Cookie。目前主流浏览器都支持，HttpOnly解决是XSS后的Cookie支持攻击。

　　我们来看下百度有没有使用。

　　未登录时的Cookie信息
　　可以看到，所有Cookie都没有设置HttpOnly，现在我登录下

　　发现在个叫BDUSS的Cookie设置了HttpOnly。可以猜测此Cookie用于认证。

　　下面我用PHP来实现下：

　　<?php
　　header("Set-Cookie: cookie1=test1;");
　　header("Set-Cookie: cookie2=test2;httponly",false);

　　setcookie('cookie3','test3',NULL,NULL,NULL,NULL,false);
　　setcookie('cookie4','test4',NULL,NULL,NULL,NULL,true);
　　?>
　　<script>
　　alert(document.cookie);
　　</script>
　　js只能读到没有HttpOnly标识的Cookie

　　二、输入检查

　　输入检查一般是检查用户输入的数据中是否包含一些特殊字符，如<、>、'、"等，如果发现存在特殊字符，则将这些字符过滤或者编码。

　　例如网站注册经常用户名只允许字母和数字的组合，或者邮箱电话，我们会在前端用js进行检查，但在服务器端代码必须再次检查一次，因为客户端的检查很容易绕过。

　　网上有许多开源的“XSS Filter”的实现，但是它们应该选择性的使用，因为它们对特殊字符的过滤可能并非数据的本意。比如一款php的lib_filter类：

　　$filter = new lib_filter();
　　echo $filter->go('1+1>1');
　　它输出的是1，这大大歪曲了数据的语义，因此什么情况应该对哪些字符进行过滤应该适情况而定。

　　三、输出检查

　　大多人都知道输入需要做检查，但却忽略了输出检查。

　　1、在HTML标签中输出

　　如代码：

　　<?php
　　$a = "<script>alert(1);</script>";
　　$b = "<img src=# onerror=alert(2) />";
　　?>
　　<div><?=$b?></div>
　　<a href="#"><?=$a?></a>
　　这样客户端受到xss攻击，解决方法就是对变量使用htmlEncode,php中的函数是htmlentities

　　<?php
　　$a = "<script>alert(1);</script>";
　　$b = "<img src=# onerror=alert(2) />";
　　?>
　　<div><?=htmlentities($b)?></div>
　　<a href="#"><?=htmlentities($a)?></a>

　　2、在HTML属性中输出

　　<div id="div" name ="$var"></div>
　　这种情况防御也是使用htmlEncode

　　在owasp-php中实现：

　　$immune_htmlattr = array(',', '.', '-', '_');
　　$this->htmlEntityCodec->encode($this->immune_htmlattr, "\"><script>123123;</script><\"");

　　3、在<script>标签中输出

　　如代码：
　　<?php
　　$c = "1;alert(3)";
　　?>
　　<script type="text/javascript">
　　var c = <?=$c?>;
　　</script>
　　这样xss又生效了。首先js变量输出一定要在引号内，但是如果我$c = "\"abc;alert(123);//"，你会发现放引号中都没用，自带的函数都不能很好的满足。这时只能使用一个更加严格的JavascriptEncode函数来保证安全——除数字、字母外的所有字符，都使用十六进制"\xHH"的方式进行编码。这里我采用开源的owasp-php方法来实现
　　$immune = array("");
　　echo $this->javascriptCodec->encode($immune, "\"abc;alert(123);//");
　　最后输出\x22abc\x3Balert\x28123\x29\x3B\x2F\x2F

　　4、在事件中输出

　　<a href="#" onclick="funcA('$var')" >test</a>
　　可能攻击方法
　　<a href="#" onclick="funcA('');alter(/xss/;//')">test</a>
　　这个其实就是写在<script>中，所以跟3防御相同

　　5、在css中输出

　　在owasp-php中实现：

　　$immune = array("");
　　$this->cssCodec->encode($immune, 'background:expression(window.x?0:(alert(/XSS/),window.x=1));');
　　6、在地址中输出

　　先确保变量是否是"http"开头，然后再使用js的encodeURI或encodeURIComponent方法。

　　在owasp-php中实现：

　　$instance = ESAPI::getEncoder();
　　$instance->encodeForURL(‘url’);
　　四、处理富文体

　　就像我写这篇博客，我几乎可以随意输入任意字符，插入图片，插入代码，还可以设置样式。这个时要做的就是设置好白名单，严格控制标签。能自定义 css件麻烦事，因此最好使用成熟的开源框架来检查。php可以使用htmlpurify

　　五、防御DOM Based XSS

　　DOM Based XSS是从javascript中输出数据到HTML页面里。

　　<script>
　　var x = "$var";
　　document.write("<a href='"+x+"'>test</a>");
　　</script>
　　按照三中输出检查用到的防御方法，在x赋值时进行编码，但是当document.write输出数据到HTML时，浏览器重新渲染了页面，会将x进行解码，因此这么一来，相当于没有编码，而产生xss。
　　防御方法：首先，还是应该做输出防御编码的，但后面如果是输出到事件或脚本，则要再做一次javascriptEncode编码，如果是输出到HTML内容或属性，则要做一次HTMLEncode。

　　会触发DOM Based XSS的地方有很多：

　　document.write()、document.writeln()、xxx.innerHTML=、xxx.outerHTML=、innerHTML.replace、document.attachEvent()、window.attachEvent()、document.location.replace()、document.location.assign()

