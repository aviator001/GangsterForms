<?php
	include "class/utils.class.php";
	$c=new utils;
	$c->connect($_COOKIE['db_server'],$_COOKIE['db_user'],$_COOKIE['db_password'],"terra");
	$t=$c->query("select * from rx_master where purpose like '%".$_GET[term]."%' LIMIT 20");
	for ($i=0;$i<count($t);$i++) {
		$str[] = array("label"=>$t[$i]['purpose'],"value"=>$t[$i]['brand_name']);
	}
	echo json_encode($str);
?>