#php-基础 常量
##系统常量

```
<?php
echo PHP_VERSION;
echo PHP_OS;
echo M_PI;

```  
自定义常量通过define定义常量
bool define ( string $name , mixed $value [, bool $case_insensitive = false ] )

case_insensitive
如果设置为 TRUE ，该常量则大小写不敏感。默认是大小写敏感的。比如， CONSTANT 和 Constant 代表了不同的值。
deine('USERNAME','jankz');


```
<?php
define('USERNAME','jankz2014',true);//不去分大小写
echo USERNAME;
echo username;

```
###const定义常量
const ROOT = 'this is root';
echo ROOT;
echo constant('ROOT');
echo root;//const定义区分大小写
###constant ( string $name )
通过 name 返回常量的值。
当你不知道常量名，却需要获取常量的值时， constant() 就很有用了。也就是常量名储存在一个变量里，或者由函数返回常量名。

###检测常量是否定义
bool defined ( string $name )
如果你要检查一个变量是否存在，请使用 isset() 。 defined() 函数仅对 constants 有效。如果你要检测一个函数是否存在，使用 function_exists() 。


```
<?php
$name = 'JANKZ';
$value = 'this is jankz';
if(defined($name)){
	echo '常量被定义'；
	define($name,$value);
	echo constant($name);
}else{
	echo constant($name);
}
```

###get_defined_constants() 获取所有已经定义的常量

```
<?php
print_r(get_defined_constants());
```



##魔术常量

__LINE__
__FILE__  
```
<?php

echo __LINE__;//得到当前文件行号
echo __FILE__;//饿到文件当前绝对路径
echo __FUNCTION__;//返回函数的名称
```

__FUNCTION__
__CLASS__
__METHOD__
__DIR__ //返回文件所在目录


```
__LINE__	文件中的当前行号。
__FILE__	文件的完整路径和文件名。如果用在被包含文件中，则返回被包含的文件名。自 PHP 4.0.2 起， __FILE__ 总是包含一个绝对路径（如果是符号连接，则是解析后的绝对路径），而在此之前的版本有时会包含一个相对路径。
__DIR__	文件所在的目录。如果用在被包括文件中，则返回被包括的文件所在的目录。它等价于 dirname(__FILE__)。除非是根目录，否则目录中名不包括末尾的斜杠。（PHP 5.3.0中新增） =
__FUNCTION__	函数名称（PHP 4.3.0 新加）。自 PHP 5 起本常量返回该函数被定义时的名字（区分大小写）。在 PHP 4 中该值总是小写字母的。
__CLASS__	类的名称（PHP 4.3.0 新加）。自 PHP 5 起本常量返回该类被定义时的名字（区分大小写）。在 PHP 4 中该值总是小写字母的。类名包括其被声明的作用区域（例如 Foo\Bar）。注意自 PHP 5.4 起 __CLASS__ 对 trait 也起作用。当用在 trait 方法中时，__CLASS__ 是调用 trait 方法的类的名字。
__TRAIT__	Trait 的名字（PHP 5.4.0 新加）。自 PHP 5.4 起此常量返回 trait 被定义时的名字（区分大小写）。Trait 名包括其被声明的作用区域（例如 Foo\Bar）。
__METHOD__	类的方法名（PHP 5.0.0 新加）。返回该方法被定义时的名字（区分大小写）。
__NAMESPACE__	当前命名空间的名称（区分大小写）。此常量是在编译时定义的（PHP 5.3.0 新增）。
```


