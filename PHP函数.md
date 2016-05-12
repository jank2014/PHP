#PHP函数
##字符串:
###strlen 
字符串长度
###mb_strlen 字符串长度
###strstr 检索字符串函数
查找 "Shanghai" 在 "I love Shanghai!" 中的第一次出现，并返回字符串的剩余部分：

```
<?php
echo strstr("I love Shanghai!","Shanghai");
?>
```
###substr 字符串分分割

###strrev 字符串翻转

###trim去除字符串首尾的空格或者其他字符.

###str_replace 对指定字符串中的部分字符串进行替换.

###str_repeat 重复一个字符串

###implode 将数组合成字符串

###explode 将字符串分割数组

###addslashes 转义字符串

###htmlspecialchars html实体转义

##数组:
###array 声明一个数组
###count 计算数组元素个数
###foreach 遍历数组
###list 遍历数组
###explode
###implode
###array_merge合并一个或者多个数组
###is_array 检查是否是数组
###in_array 检查元素是否属于数组
###print_r 打印数组
###sort 数组排序
###ksort 数组排序
###array_keys 返回数组中所有的键名
###array_values 返回数组中所有的值
###array_reverse 翻转返回数组
###array_push($arr,$value)

##preg
preg_filter — 执行一个正则表达式搜索和替换
preg_grep — 返回匹配模式的数组条目
preg_last_error — 返回最后一个PCRE正则执行产生的错误代码
preg_match_all — 执行一个全局正则表达式匹配
preg_match — 执行一个正则表达式匹配
preg_quote — 转义正则表达式字符
preg_replace_callback_array — Perform a regular expression search and replace using callbacks
preg_replace_callback — 执行一个正则表达式搜索并且使用一个回调进行替换
preg_replace — 执行一个正则表达式的搜索和替换
preg_split — 通过一个正则表达式分隔字符串


