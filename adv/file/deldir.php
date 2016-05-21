<?php
//目录删除 以及删除目录下面的文件
function deldir($dir){
  if (!is_dir($dir)) {
    die( "{$dir}:不存在");
  }
  $dh = opendir($dir);
  while ($file = readdir($dh)) {
    if ($file!="." && $file!="..") {
      $fullpath = $dir.'/'.$file;
      if(!is_dir($fullpath)){
        unlink($fullpath);
      }else {
        deldir($fullpath);
      }
    }
  }
  closedir($dh);
  if (!rmdir($dir)) {
    return false;
  }
}
deldir('./data2');
