<?php

function h($s) {
	return htmlspecialchars($s);
}

function es($s) {
	return mysql_real_escape_string($s);
}

function login() {

	global $Smarty,$User;

	$flg 	= false;
	$err	= "入力されたメールアドレスとパスワードを入力してください。";

	if(!empty($_SESSION["user"])) {

		$flg 		= true;
		$User 	= $_SESSION["user"];

	} else if(!empty($_REQUEST["userMail"]) and !empty($_REQUEST["userPw"])) {

		$q = sprintf("select * from user where userMail='%s' and userPw='%s'",
							es($_REQUEST["userMail"]),
							es($_REQUEST["userPw"])
		);

		if($r = mysql_query($q)) {
			if(mysql_num_rows($r)) {
				$flg 	= true;
				$_SESSION["user"] = $User = mysql_fetch_assoc($r);
			} else {
				$err	= 'メールアドレスとパスワードの組み合わせが存在しません';
			}
		} else {
			die('システムエラーが発生しました');
		}
	}

	if(!$flg) {

		$userMail = "";
		if(!empty($_REQUEST["userMail"])) {
			$userMail = h($_REQUEST["userMail"]);
		}

		$Smarty -> assign("err",$err);
		$Smarty -> assign("userMail",$userMail);
		$Smarty -> display('login.html');
		exit;
	}

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