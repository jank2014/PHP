#PHP isset()与empty()的使用区别详解

##PHP的isset()函数 一般用来检测变量是否设置 
格式：bool isset ( mixed var [, mixed var [, ...]] ) 

功能：检测变量是否设置 

###返回值： 

若变量不存在则返回 FALSE 
若变量存在且其值为NULL，也返回 FALSE 
若变量存在且值不为NULL，则返回 TURE 
同时检查多个变量时，每个单项都符合上一条要求时才返回 TRUE，否则结果为 FALSE 
版本：PHP 3, PHP 4, PHP 5 
更多说明： 
使用 unset() 释放变量之后，它将不再是 isset()。 
PHP函数isset()只能用于变量，传递任何其它参数都将造成解析错误。 
检测常量是否已设置可使用 defined() 函数。 

##PHP的empty()函数 判断值为否为空 

格式：bool empty ( mixed var ) 

功能：检查一个变量是否为空 

###返回值： 

若变量不存在则返回 TRUE 
若变量存在且其值为""、0、"0"、NULL、、FALSE、array()、var $var; 以及没有任何属性的对象，则返回 TURE 
若变量存在且值不为""、0、"0"、NULL、、FALSE、array()、var $var; 以及没有任何属性的对象，则返回 FALSE 
版本：PHP 3, PHP 4, PHP 5 
更多说明： 
empty()的返回值=!(boolean) var，但不会因为变量未定义而产生警告信息。参见转换为布尔值获取更多信息。 
empty() 只能用于变量，传递任何其它参数都将造成Paser error而终止运行。 
检测常量是否已设置可使用 defined() 函数。


```
<?php 
$var = 0; 
// 结果为 true，因为 $var 为空 
if (empty($var)) { 
echo '$var is either 0 or not set at all'; 
} 
// 结果为 false，因为 $var 已设置 
if (!isset($var)) { 
echo '$var is not set at all'; 
} 
?> 
```



