<?php
header('content-type:text/html;charset=utf-8');
$username = 'jankz';
$sex = '女';
$age = 26; 



if ($username == 'jankz') {
	if ($sex =='男') {
		if ($age<18) {
			echo 'Hello jankz 童鞋';
		}else {
			echo 'Hello jankz 先生';
		}
	}else {
		if ($age<30) {
			echo 'Hello jankz 小姐';
		}else {
			echo 'Hello jankz 女士';
		}
	}
}else {
	echo 'this is a test';
}