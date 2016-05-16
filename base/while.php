<?php
//while 与 do while


/*

while (exp) {
    循环体;
}


do {
   循环体;
} while (exp);

*/


$j = 1;
while ($j <= 10) {
  echo "$j<br>";
  $j++;
}
echo "<hr>";
echo "$j";
echo "<hr>";
$i=1;
do {
  echo "$i<br>";
  $i++;
} while ($i < 3);

$k=1;
do {
  echo "do while 会不判断先执行一次 {$k}";
$k++;
}while($k<=3);
echo "<br>";
echo "<hr>";
echo "<h1>while输出九九乘法</h1>";

//while输出九九乘法
$a=1;
while ($a < 10) {
  $b=1;
  while ($b <= $a) {
    echo "{$b} x {$a} =".($a*$b).'&nbsp;&nbsp;&nbsp;';
    $b++;
  }
  echo "<br>";
  $a++;
}
echo "<hr>";
echo "<h1>do while输出九九乘法</h1>";
//do while 不能用:结束
$a = 1;
do {
  $b = 1;
  do {
    echo "{$b} x {$a} =".($a*$b).'&nbsp;&nbsp;&nbsp;';
    $b++;
  } while ($b <= $a);
  echo "<br>";
  $a++;
} while ($a < 10);
