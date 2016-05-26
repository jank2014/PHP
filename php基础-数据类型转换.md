#php基础-数据类型转换
##自动转换/隐式转换
###其他类型转换成数值型
bool类型转换数值型

```
<?php
echo 1+true;//2
echo 1.2 + true //2.2
//true-> 1;

echo 1+ false;//1
//false-> 0;

echo 1+null;//1
//null->0;

//字符串
echo 1+ 'a';//1 a->0 
echo 1+'true';//1 
//不以合法数字开始直接转换成0

echo 1+ '123jankz';//124 取到第一个非法数字
echo 1+ '123jankz345';//124
echo 1+ '3.21erfg';//4.2
echo 1+ '3e2adrf';//301
echo 1 +'-2adff';//-1

```
###其他类型转化成字符串类型
echo 123;
echo '123';
echo true;//1
echo false;//空字符串 不是0
echo 'a'false'b';//a b 

//数组不能用echo
$arr = array();
echo $arr;//Array;

//资源
$handle = fopen('test.php','r');
echo $handle;//Resource id #数字
//对象
$obj = new stdClass();
echo $obj;//致命错误不能直接输出对象

###其他转换成booL
空 ，空数组 和 0 转换成假  false
``` 
<?php
$var = 1.2;
$var = 0.0;//false
$var = '';//false
$var ='0';//false
$var = '0.0''//false
$var= array();//false
$arr = new stdClass();//true
$var = fopen('test.php','r');/true

if($var){
	echo 'true';
	} else {
	echo 'false';
}
?>
```


##强制转换(显示转换)
###临时转换
（int）(integer)->整形；
（bool）(boolean)->布尔型
（float）（double）（real）->浮点型
 (string)->字符串
 (unset)->空
（array）->数组
（object）->对象


```
<?php
$var = 12;
var_dump((float)$var,(double)$var,(real)$var),(bool)$var,(boolean)$var);

var_dump((unset)$var,(array)$var,(object)$var));
```

####通过函数的形式实现临时转换
intval($var) //返回变量的整型
floatval($var)
double($var)//返回转换成浮点型的值没有real
strval($var) //返回转换成字符串类型的值
boolval($var)//返回转化成布尔类型的值 要求php版本>5.5.0

```
$var = true;
echo intval($var);
echo floatval($var);

echo strval($var);

echo intval($var);

```
###永久转换
改变变量类型
settype($val,$type);//设置变量类型
gettype($val)//得到变量类型

```
<?php
$var =123;
var_dump($var);
echo gettype($var);

$var = 1;
settype($var,'float');
var_dump($var);//float(1)


settype($var,'string');
var_dump($var);//string(1)
/*
settype 类型

type 的可能值为：
“boolean” （或为“bool”，从 PHP 4.2.0 起）
“integer” （或为“int”，从 PHP 4.2.0 起）
“float” （只在 PHP 4.2.0 之后可以使用，对于旧版本中使用的“double”现已停用）
"string"
"array"
"object"
“null” （从 PHP 4.2.0 起）
*/
```
###检测数据类型
is_int() is_integer — is_int() 的别名— 检测变量是否是整数
is_bool()
is_float()
is_integer()
is_numeric()-测试一个变量是否是数字或数字字符串
is_string()
is_array()
is_object — 检测变量是否是一个对象
is_file — 判断给定文件名是否为一个正常的文件
is_

若想测试一个变量是否是数字或数字字符串（如表单输入，它们通常为字符串），必须使用 is_numeric() 。
//返回的是布尔类型



