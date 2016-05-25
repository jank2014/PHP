<?php
/*
get_html_translation_table — 返回使用 htmlspecialchars() 和 htmlentities() 后的转换表

说明

array get_html_translation_table ([ int $table = HTML_SPECIALCHARS [, int $flags = ENT_COMPAT | ENT_HTML401 [, string $encoding = 'UTF-8' ]]] )
get_html_translation_table() 将返回 htmlspecialchars() 和 htmlentities() 处理后的转换表。

Note:

特殊字符可以使用多种转换方式。 例如： " 可以被转换成 &quot;, &#34; 或者 &#x22. get_html_translation_table() 返回其中最常用的。

table
有两个新的常量 ( HTML_ENTITIES , HTML_SPECIALCHARS ) 允许你指定你想要的表。

flags
A bitmask of one or more of the following flags, which specify which quotes the table will contain as well as which document type the table is for. The default is ENT_COMPAT | ENT_HTML401.

Available flags constants
Constant Name	Description
ENT_COMPAT	Table will contain entities for double-quotes, but not for single-quotes.
ENT_QUOTES	Table will contain entities for both double and single quotes.
ENT_NOQUOTES	Table will neither contain entities for single quotes nor for double quotes.
ENT_HTML401	Table for HTML 4.01.
ENT_XML1	Table for XML 1.
ENT_XHTML	Table for XHTML.
ENT_HTML5	Table for HTML 5.
*/

var_dump(get_html_translation_table());
/*

  ["""]=>
  string(6) "&quot;"
  ["&"]=>
  string(5) "&amp;"
  ["<"]=>
  string(4) "&lt;"
  [">"]=>
  string(4) "&gt;"
}
 */
var_dump(get_html_translation_table(  HTML_ENTITIES,ENT_QUOTES  |  ENT_HTML5));
var_dump(get_html_translation_table(  HTML_ENTITIES,ENT_NOQUOTES));
