<?php
//phpcaptcha
session_start();
// code for check server side validation
if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0){  
	echo "Wrong";
}else {
	echo "Success";
}
?>
