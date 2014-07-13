<?php

function contact_form($err) {
	
	global $Smarty,$User,$Config;

	$text 				= "<p>下記の項目を入力してください。</p>";
	$contactPart 		= "";
	$contactPlace	= "";
	$contactTime		= "";
	$contactOption	= "";
	$contactYear 	= "";
	$contactMonth 	= "";
	$contactDate 	= "";
	
	//エラーがあれば

	//パート
	for($i=1,$j=count($Config["contactPart"]);$i<$j;$i++) {
		$s = "";
		if(!empty($_REQUEST["contactPart"]) and $_REQUEST["contactPart"] == $i) {
			$s = " checked";
		}
		$contactPart .= '<label><input type="radio" name="contactPart" value="'.$i.'"'.$s.'> '.$Config["contactPart"][$i].'</label> ';
	}

	//場所
	for($i=1,$j=count($Config["contactPlace"]);$i<$j;$i++) {
		$s = "";
		if(!empty($_REQUEST["contactPlace"]) and $_REQUEST["contactPlace"] == $i) {
			$s = " selected";
		}
		$contactPlace .= '<option value="'.$i.'"'.$s.'> '.$Config["contactPlace"][$i].'</option>';
	}

	//時間
	for($i=1,$j=count($Config["contactTime"]);$i<$j;$i++) {
		$s = "";
		if(!empty($_REQUEST["contactTime"]) and $_REQUEST["contactTime"] == $i) {
			$s = " checked";
		}
		$contactTime .= '<label><input type="radio" name="contactTime" value="'.$i.'"'.$s.'> '.$Config["contactTime"][$i].'</label> ';
	}

	for($i=date("Y",time()),$j=$i+1;$i<=$j;$i++) {
		$s = "";
		if(!empty($_REQUEST["contactYear"]) and $_REQUEST["contactYear"] == $i) {
			$s = " selected";
		}
		$contactYear .= '<option value="'.$i.'"'.$s.'> '.$i.'</option>';
	}

	for($i=1;$i<=12;$i++) {
		$s = "";
		if(!empty($_REQUEST["contactMonth"]) and $_REQUEST["contactMonth"] == $i) {
			$s = " selected";
		}
		$contactMonth .= '<option value="'.$i.'"'.$s.'> '.$i.'</option>';
	}

	for($i=1;$i<=31;$i++) {
		$s = "";
		if(!empty($_REQUEST["contactDate"]) and $_REQUEST["contactDate"] == $i) {
			$s = " selected";
		}
		$contactDate .= '<option value="'.$i.'"'.$s.'> '.$i.'</option>';
	}

	for($i=1;$i<=5;$i++) {
		$s = "";
		if(!empty($_REQUEST["contactOption"]) and $_REQUEST["contactOption"] == $i) {
			$s = " selected";
		}
		$contactOption .= '<option value="'.$i.'"'.$s.'> '.$i.'台</option>';
	}


	$Smarty -> assign("text",$text);
	$Smarty -> assign("userName",$User["userName"]);
	$Smarty -> assign("contactPart",$contactPart);
	$Smarty -> assign("contactPlace",$contactPlace);
	$Smarty -> assign("contactTime",$contactTime);
	$Smarty -> assign("contactOption",$contactOption);
	$Smarty -> assign("contactYear",$contactYear);
	$Smarty -> assign("contactMonth",$contactMonth);
	$Smarty -> assign("contactDate",$contactDate);
	$Smarty -> display('contact_form.html');
	$Smarty -> display('contact_form.html');
	exit;
	
}

?>