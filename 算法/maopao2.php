<?php
// +----------------------------------------------------------------------
// | JankzMaker [ Just Do It And Think It ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016 http://www.jankz.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: jankz <jankz@jankz.com> <http://www.jankz.com>
// +----------------------------------------------------------------------
function maopao($arr){
$len = count($arr);
for ($i=0; $i <$len ; $i++) {
	$flag = false;//交换标记
	for ($j=$len-1; $j > $i ; $j--) {
		if($arr[$j] > $arr[$j-1]){
			list($arr[$j],$arr[$j-1]) = array($arr[$j-1],$arr[$j]);
			$flag = true;//表示发生了交换
		}
	}
	if(! $flag){
		return $arr;
	}
}

}
$arr1 = array(10,2,300,42,15,26,7,8,9);
print_r(maopao($arr1));

 ?>