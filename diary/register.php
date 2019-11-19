<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>My blog 我的注册页面</title>
<link rel="stylesheet" href="../css/login_01.css" />
<style>
	.submit{cursor:pointer;width:300px;height:44px;margin-top:25px;padding:0;  background: rgba(6, 127, 228, 0.71);-moz-border-radius:6px;-webkit-border-radius:6px;border-radius:6px;border:0;-moz-box-shadow:0 15px 30px 0 rgba(255,255,255,.25) inset,0 2px 7px 0 rgba(0,0,0,.2);font-family:"Microsoft YaHei",Helvetica,Arial,sans-serif;font-size:14px;font-weight:700;color:#fff;text-shadow:0 1px 2px rgba(0,0,0,.1);-o-transition:all .2s;-moz-transition:all .2s;-webkit-transition:all .2s;-ms-transition:all .2s}
</style>
</head>
<body>
<div class="register-container">
	<h1>Welcome to you!</h1>
	
	<div class="connect">
		<p>欢迎注册</p>
	</div>
	<form action="register_cl.php" method="post" id="registerForm">
		<div>
			<!-- autocomplete="on" 规定表单是否显示历史输入记录-->
			<input type="text" name="username" class="username" placeholder="您的用户名" autocomplete="on"/>
		</div>
		<div>
			<input type="password" name="password" class="password" placeholder="输入密码" oncontextmenu="return false" onpaste="return false" />
		</div>
		<div>
			<input type="password" name="confirm_password" class="confirm_password" placeholder="再次输入密码" oncontextmenu="return false" onpaste="return false" />
		</div>
		<div>
			<input type="text" name="phone_number" class="phone_number" placeholder="输入手机号码" autocomplete="off" id="number"/>
		</div>
		<div>
			<input type="email" name="email" class="email" placeholder="输入邮箱地址" oncontextmenu="return false" onpaste="return false" />
		</div>
		<!-- onclick="window.location.href='test.html?id=1'" -->
		<!-- 表示通过点击事件跳转到指定页面 -->
		<!-- onclick="window.location.href='register.php?id=1'" -->
		<!-- <button id="submit" type="submit" onclick="window.location.href='register.php?id=1'">注 册</button> -->
		<input type="button" class="submit" value="注册">
	</form>
	<a href="login.php">
		<button type="button" class="register-tis">已经有账号？</button>
	</a>

</div>



</body>
</html>
<script src="../js/jquery-1.7.2.min.js"></script>
<script src="../js/common.js"></script>
<!--背景图片自动更换-->
<script src="../js/supersized.3.2.7.min.js"></script>
<script src="../js/supersized-init.js"></script>
<!--表单验证-->
<script src="../js/jquery.validate.min.js?var1.14.0"></script>
<script>
	
</script>

