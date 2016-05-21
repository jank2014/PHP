<?php
/*常用文件函数库*/
//basename($path [, $suffix]) 获取文件名 返回基本文件名 可以去掉后缀
$path = 'data/jankz.txt';
/**

echo basename($path);
echo PHP_EOL;//PHP换行符
echo basename($path,'.txt');//第二个参数可以去掉后缀
echo PHP_EOL;
echo dirname($path);//获得文件路径
echo PHP_EOL;
*
*/
/*pathinfo  pathinfo($path [, $options]) 获取文件信息*/

var_dump(pathinfo($path));

/**
 * [输出结果实例]
 array(4) {
  ["dirname"]=>
  string(4) "data"
  ["basename"]=>
  string(9) "jankz.txt"
  ["extension"]=>
  string(3) "txt"
  ["filename"]=>
  string(5) "jankz"
}
 */

echo filetype($path);//file

echo PHP_EOL;//

$fp = fopen('data/jankz.txt','r');
$fstat = fstat($fp);
fclose($fp);
print_r($fstat);
/**
 * Array
(
    [0] => 16777219
    [1] => 16238703
    [2] => 33188
    [3] => 1
    [4] => 501
    [5] => 20
    [6] => 0
    [7] => 0
    [8] => 1463768852
    [9] => 1463768842
    [10] => 1463768842
    [11] => 4096
    [12] => 0
    [dev] => 16777219
    [ino] => 16238703
    [mode] => 33188
    [nlink] => 1
    [uid] => 501
    [gid] => 20
    [rdev] => 0
    [size] => 0
    [atime] => 1463768852
    [mtime] => 1463768842
    [ctime] => 1463768842
    [blksize] => 4096
    [blocks] => 0
)
*/

/*disk_free_space($path) 获得文件磁盘可用空间大小*/
$df = disk_free_space($path);
echo $df;
echo PHP_EOL;
echo ($df/(1000*1000*1000)).'G';
echo PHP_EOL;
echo disk_total_space($path);//磁盘总空间
echo PHP_EOL;

filectime($path);//
fileatime($path);
filemtime($path);
// r
// r+
// w
// w+
// a
// x
// x+
//file
//file_get_contents($filename [, $flags, $context, $offset, $maxlen])
echo PHP_EOL.'操作文件'.PHP_EOL;
$handle = fopen($path, 'r');
if($handle){
  while (!feof($handle)) {
    echo ftell($handle).PHP_EOL;//输出指针位置
    $buffer = fgets($handle ,4096);
    echo $buffer;
    $i++;
    if ($i<3) {
      fseek($handle, 0);
    }
  }
  fclose($handle);
}

//ftell()
//fseek($fp, $offset [, $whence])

/*
不常用的参数
SEEK_SET
SEEK_CUR
SEEK_END
 */

//rewind()

//文件锁
//flock($fp, $operation [, &$wouldblock])
/*

 */

//文件写入
//fwrite($fp, $str [, $length])

/*
is_readable($filename);//判断是否可读
is_writable($filename);//判断是否可写
*/

$filename = 'data/1.txt';
if(is_readable($filename)){
  echo "可读";
}else{
  echo "不可读";
}
if(is_writable($filename)){
  echo "可写";
}else{
  echo "不可写";
}

/*chown改变文件所有者  chown($filename, $user)*/
$file = 'data/jankz.txt';


/*chmod 改变文件模式  chmod($filename, $mode) */

/*chgrp(filename, group) 改变文件组*/

/*目录函数库*/
/*is_dir() 判断是否是目录*/
echo PHP_EOL;
var_dump(is_dir($path));
/*mkdir 创建目录*/
// mkdir('data/test',0700);
/* opendir 打开文件夹 */
echo PHP_EOL;
if($handle = opendir('./data')){
  var_dump($handle);
  while (($file = readdir($handle)) != false) {
    echo $file.PHP_EOL;
  }
  closedir($handle);
}else{
  echo "no";
}
