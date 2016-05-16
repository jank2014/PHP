<?php
header('content-type:text/html;charset=utf-8');
/*
date($formate[,$time = time()])

date_default_timezone_get()//得到当前默认时区
date_default_timezone_set('PRC');//设置当前默认时区
PRC:中华人民共和国
Asia/Shanghai
Asia/Chongqing
Y:代表4位年
m:代表2位的月
d:代表2位的日

H:代表2为的小时
i:代表2位的分钟
s:代表2位的秒

w代表第几天

*通过修改PHP配置文件
php.ini中
date.timezone = Asia/Shanghai
保存重启服务器

*/
echo @date_default_timezone_get();

date_default_timezone_set('PRC');

echo @date_default_timezone_get();

echo date("Y-m-d H:i:s",time());


$day = date('w');
if($day==0){
	$day = '星期日';
}elseif ($day==1) {
	$day = '星期一';
}elseif ($day==2) {
	$day = '星期二';
}elseif ($day==3) {
	$day = '星期三';
}elseif ($day==4) {
	$day = '星期四';
}elseif ($day==5) {
	$day = '星期五';
}elseif ($day==6) {
	$day = '星期六';
}
$date_now = date('Y年m月d日').$day;
echo '<br>';
echo $date_now;
