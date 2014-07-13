<?php

function reg2_form($err) {
	
	global $Smarty,$User;

	$text				= "";
	$userId		 	= $User["userId"];
	$userMail 	= $User["userMail"];
	$userName	= "";
	$userPw		= "";

	if(!empty($_REQUEST["userName"])) {
		$userName = h($_REQUEST["userName"]);
	}
	if(!empty($_REQUEST["userPw"])) {
		$userPw = h($_REQUEST["userPw"]);
	}
	
	if(empty($err)) {
		$text = "<p>下記のフォームに入力してください。</p>";
	} else {
		$text = '<p>入力エラーがあります。</p><ul>'.$err.'</ul>';
	}
	
	$Smarty -> assign("text",$text);
	$Smarty -> assign("userId",h($userId));
	$Smarty -> assign("userMail",h($userMail));
	$Smarty -> assign("userName",$userName);
	$Smarty -> assign("userPw",$userPw);
	
	$Smarty -> display('reg2_form.html');
	exit;
	
}


function reg2_conf() {
	
	global $Smarty,$User;

	$userId		 	= $User["userId"];
	$userMail 	= $User["userMail"];
	$userName	= $_REQUEST["userName"];
	$userPw		= $_REQUEST["userPw"];
		
	$err	= "";
	
	if(empty($_REQUEST["userName"])) {
		$err = '<li>お名前を入力してください</li>';
	} else if(mb_strlen($_REQUEST["userName"]) > 20) {
		$err = '<li>お名前は20文字以内で入力してください</li>';
	}

	if(empty($_REQUEST["userPw"])) {
		$err .= '<li>パスワードを入力してください</li>';
	} else if(preg_match("/[\W\D]/",$_REQUEST["userPw"])) {
		$err .= '<li>パスワードは半角英数文字のみで入力してください</li>';
	} else if(mb_strlen($_REQUEST["userPw"]) < 6 or mb_strlen($_REQUEST["userPw"]) > 16) {
		$err .= '<li>パスワードは6文字〜16文字以内で入力してください</li>';
	}

	if(!empty($err)) {
		reg2_form($err);
	}

	$Smarty -> assign("userId",h($userId));
	$Smarty -> assign("userMail",h($userMail));
	$Smarty -> assign("userName",h($userName));
	$Smarty -> assign("userPw",h($userPw));
	$Smarty -> display('reg2_conf.html');
	exit;

}


function reg2_end() {

	global $Smarty,$User;

	if(!empty($_REQUEST["back"])) {
		reg2_form("");
	}

	$userId		 	= $User["userId"];
	$userMail 	= $User["userMail"];
	$userName	= "";
	$userPw		= "";
	
	//DBに保存
	$q = sprintf("update user SET userFlg=1,userName='%s',userPw='%s' where userId = %d",
						es($_REQUEST["userName"]),
						es($_REQUEST["userPw"]),
						$userId
	);
		
	if(!mysql_query($q)) {
		die('データベース書き込みに失敗しました');
	}

	$Smarty -> display('reg2_end.html');
	exit;

}



?>