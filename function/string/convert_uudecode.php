<?php

$string = convert_uuencode("I love JANKZ!");
echo $string.PHP_EOL;

/* 你猜会输出啥？:) */
echo  convert_uudecode ( "+22!L;W9E(%!(4\"$`\n`" ).PHP_EOL;
