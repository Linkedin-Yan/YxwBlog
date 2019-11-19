<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>My blog 我的登录页面</title>
	<link rel="stylesheet" href="../css/login_01.css" />
	<style>
		.re { width: 90px; height: 20px; float: left; }

		#remeber span {}

		.remeber { width: 20px; height: 20px; margin-top: 10px; /* text-align: center; */ }

		span[name='msg'] { display: block; margin-top: 19px; float: left; }
	</style>
	<script src="../js/jquery-3.3.1.js"></script>
	<script>
		$(function() {
			$("#button").click(function() {
				$("span[name='msg']").text("");
				var password = $.trim($("#password").val());
				var username = $.trim($("#username").val());
				var remeber = $("#remeber").val();
				//判断name为4位以上的字符，pw为3位数字,采用正则表达式
				var regname = /.{2,}/g;
				var regpw = /\d{3}/g;
				//  test() 方法用于检测一个字符串是否匹配某个模式.
				//如果字符串中有匹配的值返回 true ，否则返回 false。
				if (!regname.test(username)) {
					$("span[name='msg']").text("用户名必须为2个字符以上");
				} else if (!regpw.test(password)) {
					$("span[name='msg']").text("密码至少包含3位数字");
				}
				//  AJAX 是一种与服务器交换数据的技术，可以在不重新载入整个页面的情况下更新网页的一部分。
				else {
					// console.log(username,password);
					//提交数据,可以采用1.form提交,2.ajax提交
					$.ajax({
						type: "post", //规定请求的类型（GET 或 POST）。
						url: "login_cl.php", //规定发送请求的 URL。默认是当前页面。
						//   ,"remeber":remeber 做记住密码的功能;
						data: {
							"username": username,
							"password": password,
							"remeber":remeber
						}, //规定要发送到服务器的数据。
						dataType: "text", //预期的服务器响应的数据类型。
						// success 当请求成功时运行的函数。
						success: function(data) { //data='ok'
							console.log(data);
							if ($.trim(data) == "ok") {
								window.location.href = 'myhome.html';
							} else {
								$("span[name='msg']").text("用户名或密码有误");
							}
						}
					});
				}
			});
		})
	</script>
</head>

<body>

	<div class="login-container">
		<h1>My blog</h1>

		<div class="connect">
			<p>登录我的博客</p>
		</div>

		<form id="loginForm">
			<div>
				<input type="text" name="username" id="username" class="username" placeholder="用户名" autocomplete="off" />
			</div>
			<div>
				<input type="password" name="password" id="password" class="password" placeholder="密码" oncontextmenu="return false" onpaste="return false" />
			</div>
			<div class="re">
				<input type="checkbox" name="remeber" class="remeber" value="yes" id="remeber"/>
				<span> 记住账号</span>
			</div>
			<span style="text-align: center;color:red;" name="msg"></span>
			<button id="button" type="button">登 陆</button>
		</form>

		<a href="register.php">
			<button type="button" class="register-tis">还有没有账号？</button>
		</a>

	</div>

	<script src="../js/jquery-1.7.2.min.js"></script>
	<script src="../js/common.js"></script>
	<!-- 背景图片自动更换 -->
	<script src="../js/supersized.3.2.7.min.js"></script>
	<script src="../js/supersized-init.js"></script>
	<!--表单验证-->
	<script src="../js/jquery.validate.min.js?var1.14.0"></script>

</body>

</html>