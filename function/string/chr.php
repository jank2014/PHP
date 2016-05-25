<?php
//chr 返回相对应于 ascii 所指定的单个字符。
for ($i=33; $i < 128; $i++) {
  echo "$i:".chr($i).PHP_EOL;
}
