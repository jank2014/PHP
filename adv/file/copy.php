<?php
function copyDir($sourceDir,$destDir)
{
$dir = opendir($sourceDir);//打开目录
if(!$dir)
{
  return false;
}
if(!is_dir($sourceDir))
{
  return false;//打开的如果不是目录 返回错误
}
if(!is_dir($destDir))
{
  if(!mkdir($destDir)){
    return false;
  }
}
while (($file = readdir($dir))!==false)
{
  if($file != "." && $file != ".."){
    if(is_dir($sourceDir.'/'.$file))
    {
      if(!copyDir($sourceDir.'/'.$file,$destDir.'/'.$file))
      {
            return false;
      }
    }else {
      if(!copy($sourceDir.'/'.$file,$destDir.'/'.$file))
      {
        return false;
      }
    }
  }
}
closedir($dir);
return true;
}
copyDir('./data','./data2');
