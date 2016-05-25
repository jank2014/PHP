<?php
/*
base64_encode() 使用 base64 对 data 进行编码。

设计此种编码是为了使二进制数据可以通过非纯 8-bit 的传输层传输，例如电子邮件的主体。

Base64-encoded 数据要比原始数据多占用 33% 左右的空间。


base64_decode 对 base64 编码的 data 进行解码。
 */
$str = "作者:Mankong jankz";

echo base64_encode($str).PHP_EOL;

$b_str = base64_encode($str);

echo "解码:".base64_decode($b_str).PHP_EOL;
$url = "http://jzopen.com/index.php/admin/index/index.html?name = Mankong&age = 23";
$b_url = base64_encode($url);
echo $b_url.PHP_EOL;

echo "解码url:".base64_decode($b_url).PHP_EOL;
