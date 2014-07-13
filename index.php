<?php

require_once('lb_init.php');

login();

if(empty($_REQUEST["m"])) {
	
	$Smarty -> display('mem_top.html');
	exit;

} else {

	switch($_REQUEST["m"]) {
		
		case "contact_form":
			contact_form("");
			break;

		case "contact_conf":
			contact_conf();
			break;

		case "contact_end":
			contact_end();
			break;
		
	}

}

?>