<!DOCTYPE html>
<html>
<head>
	<title>Test PHP captcha</title>
</head>
<body>
<form action="check.php" method="POST">
	<img src="captcha.php?rand=<?php echo rand();?>">
	<input type="text" style="display:inline;width:11%" name="captcha_code" placeholder="验证码"/>
</form>
</body>
</html>