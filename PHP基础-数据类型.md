#PHP基础-数据类型
##8种主要数据类型
###标量类型
* 整形
八进制 十进制 十六进制

```
 <?php
 //声明一个整形
 $int = 1;
 echo $int,'<br>';
  $int = -12;
 echo $int,'<br>';
  $int = 0123;
 echo $int,'<br>';
  $int = 0xffff;
 echo $int,'<br>';
 ?>
 
```
带符号 -21亿~ 21亿
无符号0~ 42亿
超出整形存储范围,会产生溢出
####常用函数
var_dump($int);

```
<?php
 //声明一个整形
 $int = 1;
 echo $int,'<br>';
  $int = -12;
 echo $int,'<br>';
  $int = 0123;
 echo $int,'<br>';
  $int = 0xffff;
 echo $int,'<br>';
 
 var_dump($int);
 ?>
```


* 浮点类型
* 布尔类型
* 字符串类型


###复合类型
数组
对象

###特殊类型
resource
null 
未声明变量值为NULL 
声明且赋值为null 
已声明 被注销
##3种伪类型
数值型(number)
混合类型(mixed)
回调函数(callback)

##单引号 双引号
单引号直接按字符串输出,双引号会解析变量输出. 

双引号解析所有的转移符,
单引号只解析 2个转移符 \' \\ 
##转义符
\' '
\" "
\\ \
\n 换行
\r 回测
\t 水平制表符
\v 垂直制表符
\f 走纸
##{} 
1.${变量名称} {$变量名称} //名称和花括号之间不要有空格
2.通过{}对指定字符增删改查

//查找字符
$string = 'abcdefg';
echo $string{0};//a

//替换 字符 只能替换一个字符 但是不能替换中文
$string{4} = 'k';


//下标重复相当于重新赋值,下标不存在会新增 有空的时候 留空格;

//删除
$string{0} = '';//空字符串替换
##php引擎解析变量时会尽量向后取 合法字符,认为取得合法字符越多 变量含义就越明确

```
<?php
$sting1 = 'jankz';
echo "{$string1}s";

```

##定界符
###单引号 双引号
单引号直接按字符串输出,双引号会解析变量输出. 

双引号解析所有的转移符,
单引号只解析 2个转移符 \' \\ 
###HereDoc
<<<名称,在结束时 相当于双引号 "" 会解释变量

```
<?php
header()
$table =<<<TABLE
<table border='1' cellpadding='0' cellspacing='0' bgcolor="pink">
	<tr>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
	</tr>
</table>
TABLE;
```

###NowDoc
<<<'TABLE' TABLE结束 相当于''不会解释变量

