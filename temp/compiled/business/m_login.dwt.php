<!doctype html>
<html lang="zh-CN">
<head>
<meta name="Generator" content="haohaipt X_7.2" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<title>商家管理平台</title>
<link href="templates/css/mobile.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container">	
	<div class="logintop">
		<h1 class="loginlogo" style="background-image:url('<?php echo $this->_var['business_login_logo']; ?>');" title="商家管理平台">商家管理平台</h1>
	</div>
	<script>
		function check_info()
		{
			if(document.form1.user_name.value=='')
			{
				alert('请输入用户名');
				return false;	
			}
			if(document.form1.password.value=='')
			{
				alert('请输入密码');
				return false;	
			}
			return true;
			
		}
	
	</script>
	<div class="loginbox">
    <form action="index.php"  method="post" name="form1" onsubmit="return check_info();">
		<ul class="logincon">
			<li class="title">商户管理中心登录</li>
			<li>
				<i class="username"></i>
				<div><input type="text" title="用户名" name="user_name" value="" class="inputname" onfocus="this.className='inputname act'" onblur="this.className='inputname'"></div>
			</li>
			<li>
				<i class="password"></i>
				<div><input type="password" title="密码" name="password" value="" class="inputpwd" onfocus="this.className='inputpwd act'" onblur="this.className='inputpwd'"></div>
			</li>
			<li>
             <input type="hidden" name="act" value="act_login_sub" />
             <input type="hidden" name="op" value="login" />
			<div><input type="submit" title="登录" value="登 录" class="loginbtn" /></div>
			</li>
		</ul>
        </form>
	</div>
	
	
</div>
</body>
</html>