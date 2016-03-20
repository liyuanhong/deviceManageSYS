<?php
require 'UserManage.php';

$itface = $_GET['itface'];

$obj = new userManage;
if($itface == "addUser"){
		$obj->addUser();
	}else if($itface == "delAnUser"){
		$obj->delAnUser();
	}else if($itface == "modifyUserInfo"){
		$obj->modifyUserInfo();
	}else if($itface == "login"){
		$obj->login();
	}
?>