<?php

function h($s) {
	return htmlspecialchars($s);
}

function es($s) {
	return mysql_real_escape_string($s);
}

function login() {
	
	global $Smarty;

	$Smarty -> display('login.html');
	
}

function chk_email() {
	
	$flg 	= true;
	$err	= "";
	
	if(empty($_REQUEST["userMail"])) {
		$flg	= false;
		$err	= "<li>メールアドレスが未入力です</li>";
	} else if(!preg_match("/^[\w\d\-\.\/]+@[\w\d\-\/]+\.+[\w\d\-\/]/",$_REQUEST["userMail"])) {
		$flg	= false;
		$err	= "<li>メールアドレスの形式が正しくありません</li>";
	}
	
	return array($flg,$err);
	
}



?>