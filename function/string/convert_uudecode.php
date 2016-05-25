<?php
/*
convert_uudecode — 解码一个 uuencode 编码的字符串

说明

string convert_uudecode ( string $data )
convert_uudecode() 解码一个 uuencode 编码的字符串。

*/
$string = convert_uuencode("I love JANKZ!");
echo $string.PHP_EOL;

/* 你猜会输出啥？:) */
echo  convert_uudecode ( "+22!L;W9E(%!(4\"$`\n`" ).PHP_EOL;
