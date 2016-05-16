<?php
//goto 的测试 跳转指定位置仅对本文件有效
echo "starting...";

echo "<hr>";

goto next;

echo "我不会显示的..";//这里被跳过

next:
echo "this is a test .";
echo "<hr>";

//goto没有办法跳入循环 switch case 函数 类
//goto可以跳出循环

echo "goto没有办法跳入循环 switch case 函数 类<br>";
/*
goto err_0;
for ($i=0; $i <10 ; $i++) {
  echo "$i";
  if ($i==3) {
      err_0:
      echo "err_0";
  }
}

Fatal error: 'goto' into loop or switch statement is disallowed in /Users/jankz/htdocs/php/demo1/goto.php on line 19*/
echo "<hr>";
echo "goto可以跳出循环<br>";
for ($i=0; $i <10 ; $i++) {
  echo "$i";
  if ($i==3) {
    goto err_1;
  }
}
echo "<hr>";
err_1:
echo "err_1<br>";

for ($i=1; $i < 10; $i++) {
  for ($j=1; $j < 10; $j++) {
    echo "{$i} x {$j}<br>";
    goto exit_for;
  }
}
exit_for:

echo "ending the looping...";
