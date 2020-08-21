<?php
if(!defined("MVC")){
    die("非法侵入");
};

class index{
    function int(){
        $smarty=new Smarty();
        $smarty->setTemplateDir(TPL_PATH);
        $smarty->setCompileDir(COMPILE_PATH);
        $smarty->display("admin/login.html");
    }
    function login(){
        $uname=$_POST["uname"];
        $pass=$_POST["pass"];

        if(strlen($uname)<5||empty($pass)){
            echo "用户名或密码不符合规范";
            return;
        }
        $db=new mysqli("localhost","root","root","wuif2006");
        if(mysqli_connect_error()){
            die("数据库连接错误");
        }
        $db->query("set names utf8");

        $result=$db->query("select * from mvc_user where uname='{$uname}' and pass='{$pass}'");
//        var_dump($result);
        if($result->num_rows<1){
            echo "没有相应的账号，请重新登录";
        }else{
            header("location:/mvc/index.php/admin/index/first");
        }
    }
    function first(){
        echo "后台首页";
    }
}