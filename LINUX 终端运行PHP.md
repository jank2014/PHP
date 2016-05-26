#LINUX 终端运行PHP
##检查所有PHP信息

* php -f /Users/jankz/htdocs/test.php

不需要任何浏览器，在Linux终端中也可以获的phpinfo。在Linux命令行中执行/Users/jankz/htdocs/test.php

* php -f /Users/jankz/htdocs/test.php | less

通过管道将上述输出结果输送给 less 命令，这样就可以一次输出一屏了


* 这里，‘-f‘选项解析并执行命令后跟随的文件。

* php -r 'phpinfo();'
 我们可以直接在Linux命令行使用phpinfo()这个十分有价值的调试工具而不需要从文件来调用，只需执行php -r 'phpinfo();'命令



