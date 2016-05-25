<?php
/*
 addslashes — 使用反斜线引用字符串
 返回字符串，该字符串为了数据库查询语句等的需要在某些字符前加上了反斜线。
 这些字符是单引号（'）、双引号（"）、反斜线（\）与 NUL（ NULL 字符）
 PHP 5.4 之前 PHP 指令 magic_quotes_gpc 默认是 on， 实际上所有的 GET、POST 和 COOKIE 数据都用被 addslashes()了。
 不要对已经被 magic_quotes_gpc 转义过的字符串使用 addslashes() ，因为这样会导致双层转义。
 遇到这种情况时可以使用函数 get_magic_quotes_gpc() 进行检测。

 */

$sql = "I'm Mankong  \ a good man NULL";
echo addslashes($sql).PHP_EOL;//I\'m Mankong  \\ a good man NULL
$sql1 = NULL;
echo addslashes($sql1).PHP_EOL;



$str  =  "Is your name O'reilly?" ;

// 输出： Is your name O\'reilly?
echo  addslashes ( $str ).PHP_EOL;
