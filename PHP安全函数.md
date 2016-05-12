#PHP安全函数

1. mysql_real_escape_string()
这个函数在PHP中防止SQL注入攻击时非常有用。这个函数会对一些例如单引号、双引号、反斜杠等特殊字符添加一个反斜杠以确保在查询这些数据之前，用户提供的输入是干净的。但要注意，你是在连接数据库的前提下使用这个函数。

但是现在已经不推荐使用mysql_real_escape_string()了，所有新的应用应该使用像PDO一样的函数库执行数据库操作，也就是说，我们可以使用现成的语句防止SQL注入攻击。

2. addslashes()
这个函数的原理跟mysql_real_escape_string()相似。但是当在php.ini文件中，“magic_quotes_gpc“的值是“on”的时候，就不要使用这个函数。magic_quotes_gpc 的默认值是on，对所有的 GET、POST 和 COOKIE 数据自动运行 addslashes()。不要对已经被 magic_quotes_gpc 转义过的字符串使用 addslashes()，因为这样会导致双层转义。你可以使用get_magic_quotes_gpc()函数来确定它是否开启。

3. htmlentities()
这个函数对于过滤用户输入的数据非常有用。它会将一些特殊字符转换为HTML实体。例如，用户输入<时，就会被该函数转化为HTML实体<（&lt），输入>就被转为实体&gt.(HTML实体对照表：http://www.w3school.com.cn/html/html_entities.asp)，可以防止XSS和SQL注入攻击。

4. htmlspecialchars()
在HTML中，一些特定字符有特殊的含义，如果要保持字符原来的含义，就应该转换为HTML实体。这个函数会返回转换后的字符串，例如‘&’ (ampersand) 转为’&amp‘（ps:请参照第三点中的实体对照表链接）

附上此函数常见的转换字符：

The translations performed are:

‘&’ (ampersand) becomes ‘&amp;’
‘”‘ (double quote) becomes ‘&quot;’ when ENT_NOQUOTES is not set.
“‘” (single quote) becomes ‘&#039;’ (or &apos;) only when ENT_QUOTES is set.
‘<’ (less than) becomes ‘&lt;’
‘>’ (greater than) becomes ‘&gt;’
5. strip_tags()
这个函数可以去除字符串中所有的HTML，JavaScript和PHP标签，当然你也可以通过设置该函数的第二个参数，让一些特定的标签出现。

6. md5()
从安全的角度来说，一些开发者在数据库中存储简单的密码的行为并不值得推荐。md5()函数可以产生给定字符串的32个字符的md5散列，而且这个过程不可逆，即你不能从md5()的结果得到原始字符串。

现在这个函数并不被认为是安全的，因为开源的数据库可以反向检查一个散列值的明文。你可以在这里找到一个MD5散列数据库列表

7. sha1()
这个函数与md5()类似，但是它使用了不同的算法来产生40个字符的SHA-1散列（md5产生的是32个字符的散列）。也不要把绝对安全寄托在这个函数上，否则会有意想不到的结果。

8. intval()
先别笑，我知道这个函数和安全没什么关系。intval()函数是将变量转成整数类型，你可以用这个函数让你的PHP代码更安全，特别是当你在解析id，年龄这样的数据时。

