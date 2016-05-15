#	PHP安全策略
一、文件系统安全
php如果具有root权限，且在脚本中允许用户删除文件，那么用户提交数据，不进行过滤，就非常有可能删除系统文件
<?php
// 从用户目录中删除指定的文件
$username = $_POST['user_submitted_name'];
$userfile = $_POST['user_submitted_filename'];
$homedir = "/home/$username";
unlink ("$homedir/$userfile");
echo "The file has been deleted!";
?>
上面的代码，假设用户提交的$userfile值是 ../etc/，那么/etc目录就会被删除
防范文件系统攻击，策略如下
只给php有限的权限
用户提交上来的变量要监测和过滤，不能包含文件路径等特殊字符
尽量避免使用PHP操作文件（删除），如果有这方面的需求，那用户可删除文件也必须是系统生成的随机名称，不可被用户控制
二、数据库安全
数据库安全主要防范的是sql injection，即sql注入攻击，提升数据库安全的策略如下：
不用使用root帐号或者数据库所有者帐号连接数据库，连接数据库限定连接用户的ip
使用php的pdo扩展，有效防止sql注入，除了安全方面的优势，php的pdo扩展在性能方面有有很大优势
请参看 http://php.net/manual/en/pdo.prepared-statements.php
对一些敏感信息进行加密，常见的比如对密码进行加密
三、用户数据过滤
对用户数据过滤，可以防范XSS和CSRF攻击
使用白名单（用户输入是固定模式）的方式
比如用户名只能使用数字字母，那么可以使用函数ctype_alnum判断
对用户输入使用函数 htmlentities或者htmlspecialchars进行处理，输入url不允许传入非http协议
用户身份验证使用令牌 token(csrf)
http://htmlpurifier.org/ HTML Purifier 是开源的防范xss攻击的有效解决方案，
四、其他安全策略
线上环境关闭错误报告(error_reporting,dislay_erros，可在php.ini中配置error_log路径，记录错误信息，这样有助于发现可能的用户攻击)
Register Globals,弃用（移除）的特性，不要使用
魔术引号特性，不要开启，在PHP-5.4中已经被移除
尽量使用PHP的最新版本，最新版本修复了已知的很多安全漏洞和bug
代码中严格遵守上述策略，基本能保证代码不会有太多的安全漏洞，能防范常见攻击。

