<?php

require_once('lb_init.php');
require_once('lb_regist.php');

if(empty($_REQUEST["m"])) {
	
	reg1_form("");
	
} else {

	reg1_end();
	
}

?>