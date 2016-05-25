<?php
/*
The translations performed are:

'&' (ampersand) becomes '&amp;'
'"' (double quote) becomes '&quot;' when ENT_NOQUOTES is not set.
"'" (single quote) becomes '&#039;' (or &apos;) only when ENT_QUOTES is set.
'<' (less than) becomes '&lt;'
'>' (greater than) becomes '&gt;'

ENT_COMPAT	Will convert double-quotes and leave single-quotes alone.
ENT_QUOTES	Will convert both double and single quotes.
ENT_NOQUOTES	Will leave both double and single quotes unconverted.
ENT_IGNORE	Silently discard invalid code unit sequences instead of returning an empty string. Using this flag is discouraged as it » may have security implications.
ENT_SUBSTITUTE	Replace invalid code unit sequences with a Unicode Replacement Character U+FFFD (UTF-8) or &#FFFD; (otherwise) instead of returning an empty string.
ENT_DISALLOWED	Replace invalid code points for the given document type with a Unicode Replacement Character U+FFFD (UTF-8) or &#FFFD; (otherwise) instead of leaving them as is. This may be useful, for instance, to ensure the well-formedness of XML documents with embedded external content.
ENT_HTML401	Handle code as HTML 4.01.
ENT_XML1	Handle code as XML 1.
ENT_XHTML	Handle code as XHTML.
ENT_HTML5	Handle code as HTML 5.

 */

echo "<a href='test'>Test</a>".PHP_EOL;
 $new  =  htmlspecialchars ( "<a href='test'>Test</a>" ,  ENT_QUOTES );
 echo  $new .PHP_EOL;  // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;
