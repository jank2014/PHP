<?php
/*
htmlentities — Convert all applicable characters to HTML entities

说明

string htmlentities ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401 [, string $encoding = "UTF-8" [, bool $double_encode = true ]]] )
This function is identical to htmlspecialchars() in all ways, except with htmlentities() , all characters which have HTML character entity equivalents are translated into these entities.

If you want to decode instead (the reverse) you can use html_entity_decode() .
*/
$str  =  "A 'quote' is <b>bold</b>" ;

// Outputs: A 'quote' is &lt;b&gt;bold&lt;/b&gt;
echo  htmlentities ( $str ) . PHP_EOL;

// Outputs: A &#039;quote&#039; is &lt;b&gt;bold&lt;/b&gt;
echo  htmlentities ( $str ,  ENT_QUOTES ) . PHP_EOL;
