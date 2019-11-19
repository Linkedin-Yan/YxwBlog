<?php
//注册程序脚本
    header("Content-Type: text/html; charset=utf8");
    //顾名思义，empty() 判断一个变量是否为“空”，isset() 判断一个变量是否已经设置。
    if(!isset($_POST['submit'])){
        exit("错误执行");
    }//判断是否有submit操作

    $username=$_POST['username'];//post获取表单里的name
    $password=$_POST['password'];//post获取表单里的password

    include('connect.php');//链接数据库
    $q="insert into user(id,username,password) values (null,'$name','$password')";//向数据库插入表单传来的值的sql
    $reslut=mysql_query($q,$con);//执行sql
    
    if (!$reslut){
        die('Error: ' . mysql_error());//如果sql执行失败输出错误
    }else{
        echo "注册成功";//成功输出注册成功
    }

    

    mysql_close($con);//关闭数据库
   
    
?>