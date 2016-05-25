<?php
// 使用 RFC 2045 语义格式化 $data
$data = 'jankz201314';
echo base64_encode ( $data ).PHP_EOL;
$new_string  =  chunk_split ( base64_encode ( $data ));
echo $new_string;
