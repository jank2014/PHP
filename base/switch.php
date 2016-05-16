<?php
//case 嵌套 break 数字  跳出层数
// switch 嵌套 case value:
$a = 1;
$b = 'b';

switch($a){
	case 1:
	echo "this value is 1 <br/>";
	switch ($b){
		case 'b':
		echo "ajax-b";
		break 2;
		case 'c':
		echo "ajax-c";
		break 2;
		case 'd':
		echo "ajax-d";
		break 2;
	}
	case 2:
	echo "this is a test";
	break;
}