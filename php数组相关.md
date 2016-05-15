#php数组
一、创建数组
array(key => value)
1、创建索引数组
使用array()函数声明数组。PHP属于弱类型语言相对较灵活和方便，也可以直接是数组的元素值value，不需要键值key，索引是自动分配的（索引从 0 开始）。 
例：
array("1" => "百度","2" => "阿里","3" => "腾讯");
或者是不使用键值：
array("百度","阿里","腾讯");
当然也可以写成：
$arr[0] = "百度";
$arr[1] = "阿里";
$arr[2] = "腾讯";
2、创建关联数组
关联数组和索引数组类似，只是关联数组不能够像索引数组的键名那样只能够为数字，它可以是数值和字符串以及混合形式，判断一个数组是否为关联数组的依据是：数组中的键名是否存在一个不是数字的。不是就是关联。
array("李彦宏" => "百度","马云" => "阿里","马化腾" => "腾讯");
3、多维数组
array(array(),array()) 二维数组
获得数组的长度 - count() 函数
<?php
$arr = array("百度","阿里","腾讯");
echo count($arr);
?> //结果返回3（说明数组中有三个元素）

二、遍历数组
输出数组中元素的值。对于索引数组常用for、foreach；对于关联数组常用foreach。使用print_r()函数打印循环后的结果，也可以用var_dump()。
1、遍历索引数组
遍历并输出索引数组的所有值，可以使用for、 foreach(array_expression as value)、foreach(arrayexpressionaskey => $value) 循环，如下：
使用for循环
<?php
$arr = array("百度","阿里","腾讯");
$arrlen = count($arr);//获取数组的长度
for ($i=0; $i <$arrlen ; $i++) { 
  $data[] = $arr[$i]; 
}
echo "<pre>"; //换行显示
print_r($data);
打印结果显示如下：
Array
(
    [0] => 百度
    [1] => 阿里
    [2] => 腾讯
)
使用foreach循环
<?php
$arr = array("百度","阿里","腾讯");
foreach ($arr as $value) {
  $data[] = $value;
}
echo "<pre>"; //换行显示
print_r($data);//打印结果和上面一样
注意：data后面有一个数组符号[]，为什么呢？
2、遍历关联数组
遍历并输出关联数组的所有值，可以使用 foreach (array_expression as key=>value) 循环，如下：
<?php
$arr = array("李彦宏" => "百度","马云" => "阿里","马化腾" => "腾讯");
foreach ($arr as $key => $value) {
  $data[$key] = $value;
}
echo "<pre>"; //换行显示
print_r($data);
打印结果显示：
Array
(
  [李彦宏] => 百度
  [马云] => 阿里
  [马化腾] => 腾讯
)
注意到没？此时的data后是[$key]？而不是[] 
一个数关联数组一个是数字索引数组，
三、增加删除数组的元素
在数组元素的尾部增加 
array_push(array,value1,value2…) 函数向第一个参数的数组尾部添加一个或多个元素（入栈），然后返回新数组的长度。 
该函数等于多次调用 array[]=value。
<?php
$arr = array("百度","阿里","腾讯");
array_push($arr,"知乎","微博");
echo "<pre>"; //换行显示
print_r($arr);
//打印结果显示：
Array
(
  [0] => 百度
  [1] => 阿里
  [2] => 腾讯
  [3] => 知乎
  [4] => 微博
)

在数组元素的开始增加 
array_unshift(array,value1,value2,value3…) 函数用于向数组插入新元素。新数组的值将被插入到数组的开头。
<?php
$arr = array("百度","阿里","腾讯");
array_unshift($arr,"知乎","微博");
echo "<pre>"; //换行显示
print_r($arr);
//打印结果显示：
Array
(
  [0] => 知乎
  [1] => 微博
  [2] => 百度
  [3] => 阿里
  [4] => 腾讯
)

在数组元素的尾部删除 
array_pop(array) 函数删除数组中的最后一个元素。
<?php
$arr = array("百度","阿里","腾讯");
array_pop($arr);
echo "<pre>"; //换行显示
print_r($arr);
打印结果显示：
Array
(
  [0] => 百度
  [1] => 阿里
)

在数组元素的开始删除 
array_shift(array) 函数删除数组中第一个元素 并可以返回被删除元素的值。
<?php
$arr = array("百度","阿里","腾讯");
array_shift($arr);
echo "<pre>"; //换行显示
print_r($arr);
打印结果显示：
Array
(
  [0] => 阿里
  [1] => 腾讯
)

移除数组中重复的值 
array_unique(array) 函数移除数组中的重复的值，并返回结果数组。
<?php
$arr = array("百度","阿里","腾讯","百度","微博");
$data = array_unique($arr);
echo "<pre>";
print_r($data);
打印结果显示：
Array
(
  [0] => 百度
  [1] => 阿里
  [2] => 腾讯
  [4] => 微博
)

四、定位数组元素
搜索数组中存在的值 
in_array(search,array,type)检查数组中是否存在指定的值。 
如果给定的值 search 存在于数组 array 中则返回 true。如果第三个参数设置为 true，函数只有在元素存在于数组中且数据类型与给定值相同时才返回 true。如果没有在数组中找到参数，函数返回 false。
<?php
$arr = array("百度","阿里","腾讯");
while (in_array("百度", $arr)) {
  echo "已经找到";
  break;
} //输出已经找到

在数组中根据条件取出一段值： array_slice(array,start,length,preserve) 
start 必需。数值。规定取出元素的开始位置。 0 = 第一个元素。 
如果该值设置为正数，则从前往后开始取。 
如果该值设置为负数，则从后向前取 start 绝对值。 -2 意味着从数组的倒数第二个元素开始。
length 可选。数值。规定被返回数组的长度。 
如果该值设置为整数，则返回该数量的元素。 
如果该值设置为负数，则函数将在举例数组末端这么远的地方终止取出。 
如果该值未设置，则返回从 start 参数设置的位置开始直到数组末端的所有元素。
<?php
$arr = array("百度","阿里","腾讯","知乎","微博");
$data = array_slice($arr,0,4);
echo "<pre>";
print_r($data);
打印结果显示：
Array
(
  [0] => 百度
  [1] => 阿里
  [2] => 腾讯
  [3] => 知乎
)

array_splice(array,start,length,array) 函数从数组中移除选定的元素，并用新元素取代它。该函数也将返回包含被移除元素的数组。
<?php
$arr1 = array("百度","阿里","腾讯");
$arr2 = array("知乎","微博");
array_splice($arr1,0,2,$arr2);
echo "<pre>";
print_r($arr1);
打印结果显示：
Array
(
  [0] => 知乎
  [1] => 微博
  [2] => 腾讯
)

五、数组合并、拆分、比较
array_merge()函数将数组合并到一起，返回一个联合的数组。所得到的数组以第一个输入数组参数开始，按后面数组参数出现的顺序依次追加。
<?php
$arr1 = array("百度","阿里","腾讯");
$arr2 = array("知乎","微博");
$data = array_merge($arr1,$arr2);
echo "<pre>";
print_r($data);
打印结果显示：
Array
(
  [0] => 百度
  [1] => 阿里
  [2] => 腾讯
  [3] => 知乎
  [4] => 微博
)

递归追加数组 
array_merge_recursive()函数与array_merge()相同，可以将两个或多个数组合并到一起，形成一个联合的数组。两者之间的区别在于，当某个输入数组中的某个键已经存在于结果数组中时该函数会采取不同的处理方法。array_merge()会覆盖前面存在的键/值对，将其替换为当前输入数组中的键/值对，而array_merge_recursive()将两个值合并在一起，形成一个新的数组并以原有的键作为数组名。其形式为：
$arr= array('one'=>'C', 'one'=>'B'); 
$arr1= array('three'=>'1', 'one'=>'2'); 
$arr2= array_merge_recursive($arr, $arr1); 
echo "<pre>";
print_r($arr2); 
打印结果显示：
Array
(
  [one] => Array
    (
      [0] => B
      [1] => 2
    )

  [three] => 1
)

合并两个数组 
array_combine()函数会生成一个新数组，这个数组由一组提交的键和对应的值组成，其形式为：
$arr= array('A', 'B'); 
$arr1= array('1', '2'); 
$arr2= array_combine($arr, $arr1);
echo "<pre>";
print_r($arr2); 
打印结果显示：
Array
(
  [A] => 1
  [B] => 2
)

求数组的交集 
array_intersect()函数返回一个保留了键的数组，这个数组只由第一个数组中出现的且在其他每个输入数组中都出现的值组成。其形式如下：
$arr= array('A', 'B', 'C', 'D'); 
$arr1= array('A', 'B', 'E'); 
$arr2= array('A', 'F', 'D'); 
$arr3= array_intersect($arr, $arr1, $arr2); 
echo "<pre>";
print_r($arr3); 
打印结果显示：
Array
(
  [0] => A
)

注意：只有在两个元素有相同的数据类型时，array_intersect()才会认为它们相等。
求关联数组的交集 
array_intersect_assoc()与array_intersect()基本相同，只不过它在比较中还考虑了数组的键。因此，只有在第一个数组中出现，且在所有其他输入数组中也出现的键/值对才被返回到结果数组中。其形式如下：
$arr= array('a'=>'A', 'b'=>'B', 'c'=>'C', 'd'=>'D'); 
$arr1= array('a'=>'A', 'c'=>'B', 'E'); 
$arr2= array('a'=>'A', 'b'=>'F', 'd'=>'B'); 
$arr3= array_intersect_assoc($arr, $arr1, $arr2); 
echo "<pre>";
print_r($arr3); 
打印结果显示：
Array
(
  [a] => A
)

求关联数组的差集 
函数array_diff_assoc()与array_diff()基本相同，只是它在比较时还考虑了数组的键，因此，只在第一个数组中出现而不在其他输入数组中出现的键/值对才会被返回到结果数组中。其形式如下：
$arr= array('a'=>'A', 'b'=>'B', 'c'=>'C', 'd'=>'D'); 
$arr1= array('a'=>'A', 'b'=>'B', 'e'=>'E'); 
$arr3= array_diff_assoc($arr, $arr1); 
echo "<pre>";
print_r($arr3); 
打印结果显示：
Array
(
  [c] => C
  [d] => D
)

其他有用的数组函数 
返回一组随机的键 array_rand()函数将返回数组中的一个或多个键。其形式为：
$arr= array('a'=>'A', 'b'=>'B', 'c'=>'C', 'd'=>'D'); 
$arr1= array_rand($arr, 2); 
echo "<pre>";
print_r($arr1);
打印结果显示：
 Array
(
  [0] => c
  [1] => d
) //每次刷新显示的结果都不一样

对数组中的值求和 
array_sum()函数将数组内的所有值加在一起，返回最终的和，其形式如下：
$arr= array('A', 32, 12, 'B'); 
$count= array_sum($arr); 
echo "<pre>";
print_r($count); 
打印结果显示：
44
如果数组中包含其他数据类型(例如字符串)，这些值将被忽略。
划分数组 
array_chunk()函数将数组分解为一个多维数组，这个多维数组由多个包含size个元素的数组所组成。其形式如下：
$arr= array('A', 'B', 'C', 'D'); 
$arr1= array_chunk($arr, 2); 
echo "<pre>";
print_r($arr1); 
打印结果显示：
Array
(
  [0] => Array
    (
      [0] => A
      [1] => B
    )

  [1] => Array
    (
      [0] => C
      [1] => D
    )

)


