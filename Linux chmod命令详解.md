#Linux chmod命令详解

chmod----改变一个或多个文件的存取模式(mode)

chmod [options] mode files

只能文件属主或特权用户才能使用该功能来改变文件存取模式。mode可以是数字形式或以who opcode permission形式表示。who是可选的，默认是a(所有用户)。只能选择一个opcode(操作码)。可指定多个mode，以逗号分开。

options：

-c，--changes
只输出被改变文件的信息

-f，--silent，--quiet
当chmod不能改变文件模式时，不通知文件的用户

--help
输出帮助信息。

-R，--recursive
可递归遍历子目录，把修改应到目录下所有文件和子目录

--reference=filename
参照filename的权限来设置权限

-v，--verbose
无论修改是否成功，输出每个文件的信息

--version
输出版本信息。

who

u
用户

g
组

o
其它

a
所有用户(默认)

opcode

+
增加权限

-
删除权限

=
重新分配权限

permission

r
读

w
写

x
执行

s
设置用户(或组)的ID号

t
设置粘着位(sticky bit)，防止文件或目录被非属主删除

u
用户的当前权限

g
组的当前权限

o
其他用户的当前权限

作为选择，我们多数用三位八进制数字的形式来表示权限，第一位指定属主的权限，第二位指定组权限，第三位指定其他用户的权限，每位通过4(读)、2(写)、1(执行)三种数值的和来确定权限。如6(4+2)代表有读写权，7(4+2+1)有读、写和执行的权限。

还可设置第四位，它位于三位权限序列的前面，第四位数字取值是4，2，1，代表意思如下：

4，执行时设置用户ID，用于授权给基于文件属主的进程，而不是给创建此进程的用户。

2，执行时设置用户组ID，用于授权给基于文件所在组的进程，而不是基于创建此进程的用户。

1，设置粘着位。

实例：

$ chmod u+x file                　　　   给file的属主增加执行权限
$ chmod 751 file                　　　   给file的属主分配读、写、执行(7)的权限，给file的所在组分配读、执行(5)的权限，给其他用户分配执行(1)的权限
$ chmod u=rwx,g=rx,o=x file      上例的另一种形式
$ chmod =r file                 　　　　为所有用户分配读权限
$ chmod 444 file              　　　　 同上例
$ chmod a-wx,a+r   file   　　 　   同上例
$ chmod -R u+r directory       　   递归地给directory目录下所有文件和子目录的属主分配读的权限
$ chmod 4755    

