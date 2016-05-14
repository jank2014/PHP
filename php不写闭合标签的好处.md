#php不写闭合标签的好处
好处：如果这个是一个被别人包含的程序，没有这个结束符，可以减少很多很多问题，比如说：header, setcookie, session_start这些动作之前不能有输出，如果不小心在?> 后边加了不可见字符（多余的空格、换行符）等破坏页面显示，就会报"Header already sent"错误，不写的话不会有此问题。另，可以直接把光标移到最后，接着编程。
坏处：在dreamweaver的视图模式下，一团糟。
关于PHP闭合标签官方解释是：PHP闭合标签"?>"在PHP中对PHP的分析器是可选的。但是，如果使用闭合标签，任何由开发者，用户， 或者FTP应用程序插入闭合标签后面的空格都有可能会引起多余的输出、php错误、之后的输出无法显示、空白页。因此，所有的php文件应该省略这个php闭合标签，并插入一段注释来标明这是文件的底部并定位这个文件在这个应用的相对路径。这样有利于你确定这个文件已经结束而不是被删节的。
在Zend的代码规范中，也提到了这一点：http://framework.zend.com/manual/1.12/en/coding-standard.php-file-formatting.html
代码示例：

```

<?php
echo "Here's my code!";
?>

```


```
<?php
echo "Here's my code!";
/* End of file myfile.php */
/* Location: ./system/modules/mymodule/myfile.php */
```

##因此，如果是纯php code文件的话，应该省略?>结束标识符。

