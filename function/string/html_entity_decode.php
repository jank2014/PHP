<?php
/*
html_entity_decode — Convert all HTML entities to their applicable characters

说明

string html_entity_decode ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401 [, string $encoding = "UTF-8" ]] )
html_entity_decode() is the opposite of htmlentities() in that it converts all HTML entities in the string to their applicable characters.

More precisely, this function decodes all the entities (including all numeric entities) that a) are necessarily valid for the chosen document type — i.e.,
 for XML, this function does not decode named entities that might be defined in some DTD — and b) whose character or characters are in the coded character set associated
 with the chosen encoding and are permitted in the chosen document type. All other entities are left as is.
 */
 $orig  =  "I'll \"walk\" the <b>dog</b> now" ;

 $a  =  htmlentities ( $orig );

 $b  =  html_entity_decode ( $a );

 echo  $a .PHP_EOL;  // I'll &quot;walk&quot; the &lt;b&gt;dog&lt;/b&gt; now

 echo  $b .PHP_EOL;  // I'll "walk" the <b>dog</b> now
