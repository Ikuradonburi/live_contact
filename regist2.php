<?php

require_once('lb_init.php');
require_once('lb_regist2.php');

$User = array();

//userIdが空
if(empty($_REQUEST["userId"])) {
	
	die("無効なアクセスです");
	
//userIdが無効
} else {
	
	$q = sprintf('SELECT * FROM user WHERE userId =%d',es($_REQUEST['userId']));

	if($r = mysql_query($q)) {
		//当該userIdが存在
		if(mysql_num_rows($r)) {
			$User = mysql_fetch_assoc($r);
			//本登録済み
			if($User["userFlg"] != 0) {
				die("すでに本登録されております");
			}
		} else {
			die("無効なアクセスです");
		}
	} else {
		die("システムエラーが発生しました。");
	}
}


if(empty($_REQUEST["m"])) {
	
	reg2_form("");
	
} else if($_REQUEST["m"] == "reg2_conf") {

	reg2_conf();
	
} else if($_REQUEST["m"] == "reg2_end") {

	reg2_end();
	
}

?>