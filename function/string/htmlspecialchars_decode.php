<?php
/*
htmlspecialchars_decode — 将特殊的 HTML 实体转换回普通字符

说明

string htmlspecialchars_decode ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401 ] )
此函数的作用和 htmlspecialchars() 刚好相反。它将特殊的HTML实体转换回普通字符。

被转换的实体有： &amp;， &quot; （没有设置 ENT_NOQUOTES 时）, &#039; （设置了 ENT_QUOTES 时）， &lt; 以及&gt;。
 */
 $str  =  "<p>this -&gt; &quot;</p>\n" ;

 echo  htmlspecialchars_decode ( $str );

 // 注意，这里的引号不会被转换
 echo  htmlspecialchars_decode ( $str ,  ENT_NOQUOTES );
