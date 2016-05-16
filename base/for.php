<?php
header('content-type:text/html;charset=utf-8');
// for 循环
for ($i=1; $i <=10; $i++) {
	echo "this is the {$i} times <br/>";

}
echo $i;
echo "<br>";
for ($i=1; $i >=10; $i++) {
	echo 'hello wolld';
}
echo $i;//无条件执行第一个表达式$i= 1 输出1

//不要写死循环 要给出循环条件
for ($i=1; $i <=100 ; $i+=2) { 
	echo "$i ";
}
for ($i=0; $i <=100 ; $i+=2) { 
	echo "$i ";
}
//1到100求和
$sum = 0;
for ($i=1; $i <=100; $i++) { 
	$sum +=$i;
}

echo "<hr>";
echo $sum;
function sum_n($n){
	$sum = 0;
	for ($i=1; $i <=$n; $i++) { 
		$sum +=$i;
	}
	return $sum;
}
echo "<br>";

echo sum_n(100);
echo "<br>";

//循环嵌套 输出9 9 乘法表

for ($i=1; $i <10; $i++) {
	for ($j=1; $j <=$i; $j++) {
		echo "{$j}x{$i} =" .($i*$j).'&nbsp&nbsp&nbsp';
	}
	echo "<br>";
}
$header = "jankz";
//NowDoc 不会解析变量
$table = <<<'TABLE'
<table border="1">
	<caption>table title and/or explanatory text</caption>
	<thead>
		<tr>
			<th>$header</th>
			<th>two</th>
			<th>three</th>
			<th>four</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
		</tr>
		<tr>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
		</tr>
		<tr>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
		</tr>
	</tbody>
</table>
TABLE;

//HereDoc 会解析变量
$table2 = <<<"TABLE2"
<table border="1">
	<caption>table title and/or explanatory text</caption>
	<thead>
		<tr>
			<th>$header</th>
			<th>two</th>
			<th>three</th>
			<th>four</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
		</tr>
		<tr>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
		</tr>
		<tr>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
		</tr>
	</tbody>
</table>
TABLE2;
echo $table;
echo "<br>";
echo $table2;

//break 结束for
for ($i=1; $i >0 ; $i++) {
	if($i == 10){
		break;
	}
	echo "{$i}<br>";
}

for ($i=1; $i < 4; $i++) {
	echo "<h3>外层循环{$i}次</h3>";
	for ($j=0; $j < 10; $j++) {
		if($j==3){
			break 2; //结束两层
		}
		echo "内层循环第{$j}次<br>";
	}
}

//continue 跳过本次循环
for ($i=0; $i <10; $i++) {
	if($i ==5){
		continue;
	}
	echo $i.'<br>';
}
echo "<hr>";

//for 高级1
echo "第二个表达式中最后一个 表达式决定是否执行循环条件<br>";
for ($i = 3,$j = 4,$k = 6; $i < 10,$j < 30,$k < 8; $i++,$j++,$k++) {
	echo "{$i}-{$j}-{$k} <br>";
}
/*
3-4-6
4-5-7
 */

echo "<hr>";

//for 高级2 省略表达式 1 表达式 2 默认为true ,表达式3写到循环体内
$i = 2;
for (;;) {
	if ($i>5) {
		break;
	}
	echo $i,'<br>';
	$i++;
}
//for 高级3 省略第一个条件
echo "<hr>";
echo "省略第一个条件<br>";
$i = 1;
for (;$i < 4; $i++) {
	echo $i,'<br>';
}
//for 高级4 省略前两个条件
echo "<hr>";
$i = 1;
for (;;$i++) {
	if($i>4){
		break;
	}
	echo "{$i}<br>";
}

for ($i=1; $i <9; $i++):
	echo $i.'<br>';
endfor;

//输出水仙花数100-999
function is_water($n){
$q = ($n-$n%100)/100;
$b = ($n/10)%10;
$g = $n%10;

if($n == $q*$q*$q+$b*$b*$b+$g*$g*$g){
	return $n.'是水仙花数<br>';
}

}

for ($i=100; $i < 1000; $i++) {
	echo is_water($i);
}






