<?php
//if 1 不建议使用
if(false)
	echo 'this is if 1';
echo 'continue...'.'<br/>';

//if 2  建议使用{}
if(true){
	echo 'this is a test';
	echo '<br/>';
	echo 'welcome to see';
	echo '<br/>';
	
}

// if 3 
if (1 === true) {
	echo 'this is true';
	echo '<br/>';
}else{
	echo 'this is false';
	echo '<br/>';
	
}

//if 4
if (3>10) {
	echo 3;
	echo '<br/>';
	
}elseif (3>20) {
	echo 2;
	echo '<br/>';
	
}else {
	echo 'false';
	echo '<br/>';
	
}

$username = 'jan';
if ($username == 'jankz') {
	echo 'Hello Jankz';
}elseif ($username == 'king') {
	echo 'Hello king';
	
}elseif ($username == 'admin') {
	echo 'Hello Adimin';
}else {
	echo 'None';
	echo '<br/ >';
	
}
echo 'continue...';


















