<?php
/*
explode — 使用一个字符串分割另一个字符串

说明

array explode ( string $delimiter , string $string [, int $limit ] )
此函数返回由字符串组成的数组，每个元素都是 string 的一个子串，它们被字符串 delimiter 作为边界点分割出来。

*/

$str = "this is mankong a good man";
$arr = explode(" ", $str);

print_r($arr);

$str = "mankong";
$arr = explode("", $str);

/*
如果设置了 limit 参数并且是正数，则返回的数组包含最多 limit 个元素，而最后那个元素将包含 string 的剩余部分。

如果 limit 参数是负数，则返回除了最后的 -limit 个元素外的所有元素。

如果 limit 是 0，则会被当做 1。
 */
$str = "mankong|jankz|yeap|Emily|Kinney";
$arr1 = explode('|', $str, 2);


print_r($arr1);
/*
Array
(
    [0] => mankong
    [1] => jankz|yeap|Emily|Kinney
)
 */


print_r(explode('|', $str, 3));//如果设置了 limit 参数并且是正数，则返回的数组包含最多 limit 个元素，而最后那个元素将包含 string 的剩余部分。

/*
Array
(
    [0] => mankong
    [1] => jankz
    [2] => yeap|Emily|Kinney
)
 */


print_r(explode('|', $str, 0));//如果 limit 是 0，则会被当做 1。
print_r(explode('|', $str, 1));//如果 limit 是 0，则会被当做 1。

/*
Array
(
    [0] => mankong|jankz|yeap|Emily|Kinney
)
Array
(
    [0] => mankong|jankz|yeap|Emily|Kinney
)
 */


$arr2 = explode('|', $str, -1);
print_r($arr2);//如果 limit 参数是负数，则返回除了最后的 -limit 个元素外的所有元素。
/*
Array
(
    [0] => mankong
    [1] => jankz
    [2] => yeap
    [3] => Emily

)
 */
