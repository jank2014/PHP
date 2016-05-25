<?php
/*
implode — 将一个一维数组的值转化为字符串

说明

string implode ( string $glue , array $pieces )
string implode ( array $pieces )
用 glue 将一维数组的值连接为一个字符串。

*/

$user = array(
  'user' => 'Mankong',
  'age' =>23,
  'sex' =>'Man',
  'email'=>'jankz@jankz.com'
);
echo implode(',',$user).PHP_EOL;
echo implode("-",$user).PHP_EOL;
