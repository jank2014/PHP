<?php
// +----------------------------------------------------------------------
// | JankzMaker [ Just Do It And Think It ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016 http://www.jankz.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: jankz <jankz@jankz.com> <http://www.jankz.com>
// +----------------------------------------------------------------------
$arr = [10,2,31,5,4,60,9];
print_r($arr);
$len = count($arr);
for ($i=0; $i < $len; $i++) {
	for ($j=$len-1; $j >=$i ; $j--) {
		if($arr[$j] < $arr[$j-1]){
			list($arr[$j],$arr[$j-1]) = array($arr[$j-1],$arr[$j]);
		}
	}
}
print_r($arr);

 ?>