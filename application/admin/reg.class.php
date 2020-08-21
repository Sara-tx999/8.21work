<?php
if(!defined("MVC")){
    die("非法侵入");
};
class reg{
    function add(){
        $smarty=new Smarty();
        $smarty->setTemplateDir(TPL_PATH);
        $smarty->setCompileDir(COMPILE_PATH);
        $smarty->display("admin/reg.html");

    }
    function addUser(){
        $uname=$_POST["uname"];
        $pass=$_POST["pass"];
        $pass1=$_POST["pass1"];
        if($pass!==$pass1){
            die("密码不一致");
            return;
        }
        //连接数据库
        $db=new mysqli("localhost","root","root","wuif2006");
        if(mysqli_connect_error()){
            die("数据库连接错误");
        }

        $db->query("set names utf8");
        $result=$db->query("select uname from mvc_user where uname='{$uname}'");
        if($result->num_rows>0){
            echo "用户名存在";
            return;
        }

        $db->query("insert into mvc_user (uname,pass) VALUES ('$uname','$pass')");
        if($db->affected_rows>0){
            echo "注册成功";
        }
    }
    function checkName(){
        $uname=$_POST["uname"];
        $db=new mysqli("localhost","root","root","wuif2006");
        if(mysqli_connect_error()){
            die("数据库连接错误");
        }
        $db->query("set names utf8");
        $result=$db->query("select uname from mvc_user where uname='{$uname}'");

        if($result->num_rows==0){
            echo "true";
        }else{
            echo "false";
        }
    }
}