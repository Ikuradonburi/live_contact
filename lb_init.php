<?php

ini_set('display_errors',"On");

//ライブラリの読み込み
require_once('lb_config.php');
require_once('lb_db.php');
require_once('lb_common.php');
require_once('libs/Smarty.class.php');

//DB接続
db_connect();

//smartyインスタンス作成
$Smarty = new Smarty();

//セッション開始
session_start();

?>