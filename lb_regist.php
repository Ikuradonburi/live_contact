<?php

function reg1_form($err) {
	
	global $Smarty;

	$text				= "";
	$userMail 	= "";
	
	if(empty($err)) {
		$text = "<p>メールアドレスを入力してください。</p>";
	} else {
		$text = '<p>入力エラーがあります。</p><ul>'.$err.'</ul>';
	}
	
	if(!empty($_REQUEST["userMail"])) {
		$userMail = h($_REQUEST["userMail"]);
	}

	$Smarty -> assign("text",$text);
	$Smarty -> assign("userMail",$userMail);
	$Smarty -> display('reg1_form.html');
	exit;
	
}



function reg1_end() {

	global $Smarty;
	
	//メルアド入力チェック
	list($flg,$err) = chk_email();
	
	//メルアド重複チェック
	if($flg) {
		$q = "select * from user where userMail = '".es($_REQUEST["userMail"])."'";
		if($r = mysql_query($q)) {
			if(mysql_num_rows($r)) {
				$flg 	= false;
				$err	= '<li>同じメールアドレスでの登録があります</li>';
			}
		} else {
			$flg 	= false;
			$err	= '<li>システムエラーが発生しました1</li>';
		}
	}
		
	//flgがflaseならフォームへ
	if(!$flg) {
		reg1_form($err);
	}

	//DBに保存
	$q = "INSERT INTO user SET userMail = '".es($_REQUEST["userMail"])."'";
	if(!mysql_query($q)) {
		die('データベース書き込みに失敗しました');
	}

	//userIdを抽出
	$r = mysql_query("SELECT LAST_INSERT_ID()");
	$userId = mysql_result($r,0,0);
	
	//メール送信
	mb_language("japanese");
	mb_internal_encoding("UTF-8");
	
	$to 			= $_REQUEST["userMail"];
	$subject	= '仮登録完了のお知らせ';
	$body		= '下記URLより本登録してください\n\nhttp://live_contact.com/regist2.php?userId='.$userId;
	$from		= mb_encode_mimeheader(mb_convert_encoding('管理事務局',"JIS","UTF-8")).'info@live-contact.com';
	mb_send_mail($to,$subject,$body,"From:".$from);

	$Smarty -> display('reg1_end.html');
	exit;

}



?>