<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<!--

确实能够让前后端分离，但是运行的效率不高，但是开发效率高了
但是同时造成了程序的运行效率下降，多执行了5步
1.加载原内容
2.正则替换原内容
3.写入compile里面
4.分配变量
5.载入进来

编译文件刚开始是不存在的，但是只要我们程序运行，编译文件就会生成
如果编译文件不存在，就生成编译文件，如果存在，直接运行

只有第一次访问的时候，会编译一下

php能获得文件的创建时间和修改时间吗？

能继续提高程序的运行效率吗？
模板引擎的解析-》自己写的模板引擎

html文件-》不解析的，直接返回客户端
php文件->  （php模块）解析成html-》客户端

-->
这是一个测试页面

<?php foreach ( $data as $v){ ?>
<ul>
    <li><?php echo $v["name"] ?></li>
    <li><?php echo $v["age"] ?></li>
    <li><?php echo $v["sex"] ?></li>
</ul>
<?php } ?>

</body>
</html>