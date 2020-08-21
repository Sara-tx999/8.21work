<?php
/*
 * 后台管理-》通用
 * 后台（广义）：指的就是一个应用的服务器部分的内容 apache mysql文件
 * 狭义：指的就是一个应用的管理中心
 *
 * */

if(!defined("MVC")){
    die("非法侵入");
};

class index{
    function int(){
        echo "前台页面";

//        $smarty=new Smarty();
//        $smarty->setTemplateDir(TPL_PATH);
//        $smarty->setCompileDir(COMPILE_PATH);
//        //php如何操作数据库
//
//        //1. 过程化的  废弃
//        //2. 对象的方式访问
//        //3. pdo的方式  数据迁移更简单一些
//
//        //2.1  连接数据库
//        $db = @new mysqli("localhost","root","root","wui2006");
//
//        //不希望用户看到数据库连接失败的具体的信息
//        if(mysqli_connect_error()){
//            die("连接数据库出错");
//        }
//
//        //2.2  对数据库进行查询
//        //通过什么样的编码去查询数据库--中文
//        $db->query("set names utf8");
//        //结果集是一个对象 ->方法 获取具体的数据
//        $result = $db->query("select * from demo");
//
//        //对数据库操作语言 添加 删除 修改
////        $db->query("insert into demo (name,age,sex) VALUES ('张三',12,'男')");
////
////        $db->query("update demo set name='柴柴' where name='张三'");
////
////        $db->query("delete from demo where name='柴柴'");
////
////        echo $db->affected_rows;
////
////        if($db->affected_rows>0){
////            echo "操作成功";
////        }
//
//        //2.3 如何将数据从结果里面取出来
////        fetch_assoc() 关联数据
////        fetch_array()  索引数组
////        fetch_all()  既有关联数据，也有索引数组
//        $data=array();
//        while ($row=$result->fetch_assoc()){
////            print_r($row);
//            $data[]=($row);
//        }
//        $smarty->assign("data",$data);
//        $smarty->display("index.html");
    }

    function del(){
        echo "删除";
    }
}