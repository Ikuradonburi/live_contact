<?php

function db_connect() {
		
	mysql_connect('localhost', 'root', '') or die(mysql_error());
	mysql_select_db('live_contact');
	mysql_query('SET NAMES UTF8');

}

?>