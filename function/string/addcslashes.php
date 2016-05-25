<?php
/*

addcslashes(str, charlist);
返回字符串，该字符串在属于参数 charlist 列表中的字符前都加上了反斜线。

*/
$str = "<h1>jankz <small>mankong</small></h1>";
echo $str.PHP_EOL;

echo addcslashes($str, '<abcdefj>').PHP_EOL;

// 当选择对字符 0，a，b，f，n，r，t 和 v 进行转义时需要小心，它们将被转换成
//  \0，\a，\b，\f，\n，\r，\t 和 \v。在 PHP 中，只有 \0（NULL），\r（回车符），\n（换行符）和 \t（制表符）是预定义的转义序列，
// 而在 C 语言中，上述的所有转换后的字符都是预定义的转义序列。
