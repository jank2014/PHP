<?php
//文件夹操作

/*遍历*/

$dir = './data';
if(is_dir($dir)){
  if($dh = opendir($dir)){//打开目录句柄
      while (($file = readdir($dh)) != false) {
        if($file == '.' ||  $file == '..'){
          continue;
        }
        echo $file.PHP_EOL;
        echo filetype($dir.$file).PHP_EOL;
      }
  }
  closedir($dh);
}
//遍历目录文件的函数
function scanAll($dir){
    if(is_dir($dir)){
      echo 'Dir:'.$dir.PHP_EOL;
      $child = scandir($dir);//
      foreach ($child  as $c) {
        if($c !== '.' && $c !== ".."){
          scanAll($dir.'/'.$c);
        }
      }
    }
    if(is_file($dir)){
      echo 'File:'.$dir.PHP_EOL;
    }
}
scanAll($dir);
