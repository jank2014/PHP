#Linux 查看进程和删除进程
1. 在 LINUX 命令平台输入 1-2 个字符后按 Tab 键会自动补全后面的部分(前提是要有这个东西，例如在装了 tomcat 的前提下, 输入 tomcat 的 to 按 tab)。
2. ps 命令用于查看当前正在运行的进程。
grep 是搜索
例如： ps -ef | grep java
表示查看所有进程里 CMD 是 java 的进程信息
ps -aux | grep java
-aux 显示所有状态
ps
3. kill 命令用于终止进程
例如： kill -9 [PID]
-9 表示强迫进程立即停止
通常用 ps 查看进程 PID ，用 kill 命令终止进程
网上关于这两块的内容
-----------------------------------------------------------------------------------
PS
-----------------------------------------------------------------------------------
1. ps 简介
ps 命令就是最根本相应情况下也是相当强大地进程查看命令.运用该命令可以确定有哪些进程正在运行和运行地状态、 进程 是否结束、进程有没有僵死、哪些进程占用了过多地资源等等.总之大部分信息均为可以通过执行该命令得到地.
2. ps 命令及其参数
ps 命令最经常使用地还是用于监控后台进程地工作情况,因为后台进程是不和屏幕键盘这些标准输入/输出设
备进行通信地,所以如果需要检测其情况,便可以运用 ps 命令了.
该命令语法格式如下：
ps [选项]
-e 显示所有进程,环境变量
-f 全格式
-h 不显示标题
-l 长格式
-w 宽输出
a
显示终端上地所有进程,包括其他用户地进程
r
只显示正在运行地进程
x
显示没有控制终端地进程
O[+|-] k1 [,[+|-] k2 [,…]] 根据 SHORT KEYS、k1、k2 中快捷键指定地多级排序顺序显示进程列表.
对于 ps 地不同格式都存在着默认地顺序指定.这些默认顺序可以被用户地指定所覆盖.在这里面“+”字符是可选地,“-” 字符是倒转指定键地方向.
pids 只列出进程标识符,之间运用逗号分隔.该进程列表必须在命令行参数地最后一个选项后面紧接着给出,中间不能插入 空格.比如：ps -f1,4,5.
以下介绍长命令行选项,这些选项都运用“--”开头：
--sort X[+|-] key [,[+|-] key [,…]] 从 SORT KEYS 段中选一个多字母键.“+”字符是可选地,因为默认地方向就是按 数字升序或者词典顺序.比如： ps -jax -sort=uid,-ppid,+pid.
--help 显示帮助信息.
--version 显示该命令地版本信息.
在前面地选项说明中提到了排序键,接下来对排序键作进一步说明.需要注意地是排序中运用地值是 ps 运用地内部值,并非 仅用于某些输出格式地伪值.排序键列表见表 4-3.
表 4-3 排序键列表
c
cmd
可执行地简单名称
C
cmdline
完整命令行
f
flags
长模式标志
g
pgrp
进程地组 ID
G
tpgid
控制 tty 进程组 ID
j
cutime
累计用户时间
J
cstime
累计系统时间
k
utime
用户时间
K
stime
系统时间
m
min_flt
次要页错

