<?php
header("Content-Type: text/html; charset=utf8");
if ($_SERVER['REQUEST_METHOD'] == "POST") { //能接收POST方式传递的数据
    $username = isset($_POST['username']) ? $_POST['username'] : "";
    $password = isset($_POST['password']) ? $_POST['password'] : "";
    $remeber = isset($_POST['remeber']) ? $_POST['remeber'] : "";
    
    //到数据验证
    //1.创建连接数据库的连接对象
    $connect = @mysqli_connect('localhost', 'root', '123456', 'blog');
    if (!$connect) {
        exit('<h3>连接数据库失败</h3>');
    }
    // //2.得到用户名和密码,去数据库查询,如果查询到这个用户存在，反之不存在用户名或者密码错误。
    // mysqli_query(){}
    $query = mysqli_query($connect, "select * from member where username='$username' and password ='$password' ");
    if ($row = mysqli_fetch_assoc($query)) {
        if ($row['username'] == $username && $row['password'] == $password) {
            echo 'ok';
            //验证通过，把$name放到cookie中,用于记住我功能；同时也把$name放到session中，用于index.php页面中显示当前登录用户
            if ($remeber == 'yes') {
                // setcookie('myname', $username);
                session_start();
                $_SESSION['myname'] = $username;
            } else
                echo "php_用户名或密码有误";
        }
    }
    mysqli_free_result($query); //释放结果集
    mysqli_close($connect); //关闭数据库
}
// 15211779161
