#PHP基础-变量
##变量 在程序执行过程中可以变换的量 变量
###变量声明
* 变量以 $变量名  = 值
* 变量名以字母或者下划线开始 后面跟上数组 字母下划线
* 名称不要包含特殊字符
* 变量名称含义明确
* 遵循驼峰标记法
  小驼峰: firstName,lastName
  大驼峰: FirstName,LastName

* 下划线法
first_name,last_name

* 变量名称严格区分大小写


```
$a = 1;
$A = 2;
echo $a,$A;
```

* 当变量名称重复的时候,相当于对变量重新赋值,后面的会覆盖之前的变量

* 弱类型 变量可以不声明 直接使用
 注意不是错误

*同一个文件风格保持一致*
```
<?php
//通过header函数发送头信息,作用就是以什么编码方式解析什么类型的文档. 
header('content-type:text/html;charset=utf-8');
$var = 123;
$username = 'jankz';
$age = 23;
$married = false;
$salary = 3456;
echo '用户名: '.$username;

$salary = 6678;
echo $salary;

?>
```

###一次赋值多个变量

```
$i = $j = $k = $m = $n = 1;
echo $i,$j,$k,$m,$n;
 
```
##可变变量
等量代换原则,

```
<?php
//可变变量的例子
$a = 'b';
$b = 'c';
$c = 'd';
echo $$$a;//$$b->$c->d

?>
```

##引用赋值
###指向同一块地址 两个变量互为别名 

```
<?php
//& 取地址符 
$i = 1;
$j = &$i;//指向同一块地址 两个变量互为别名
$j = 100;
echo $i; //$i->100

?>
```

###unset变量销毁

```
<?php
$i = 1;
$j = &$i;
unset($i);
echo $i;//没有值
echo $j;//不影响
?>
```

