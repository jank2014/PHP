<?php
header('content-type:text/html;charset=utf-8');
/*
mixed count_chars ( string $string [, int $mode = 0 ] )
统计 string 中每个字节值（0..255）出现的次数，使用多种模式返回结果。

返回值

根据不同的 mode， count_chars() 返回下列不同的结果：

0 - 以所有的每个字节值作为键名，出现次数作为值的数组。
1 - 与 0 相同，但只列出出现次数大于零的字节值。
2 - 与 0 相同，但只列出出现次数等于零的字节值。
3 - 返回由所有使用了的字节值组成的字符串。
4 - 返回由所有未使用的字节值组成的字符串。
*/
$str = "This is Mankong,he is the caption of jzopen!";

foreach (count_chars($str, 1) as $key => $value) {
  echo "有{$value}个".chr( $key )."字符 ACSII:{$key}".PHP_EOL;
}
echo count_chars($str, 3).PHP_EOL;

echo count_chars($str, 4).PHP_EOL;
