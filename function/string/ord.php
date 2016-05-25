<?php
//返回字符串 string 第一个字符的 ASCII 码值。
for ($i=33; $i <128 ; $i++) {
  echo chr($i).":".ord(chr($i));
}
