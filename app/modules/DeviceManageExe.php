<?php
require 'DeviceManage.php';

$itface = $_GET['itface'];
$obj = new DeviceManage;
if($itface == "addDevice"){
		$obj->addDevice();
	}else if($itface == "applyFor"){
		$obj->applyFor();
	}else if($itface == "cancleAplyFor"){
		$obj->cancleAplyFor();
	}else if($itface == "delDevice"){
		$obj->delDevice();
	}else if($itface == "modifyDevice"){
		$obj->modifyDevice();
	}else if($itface == "refuseBorrow"){
		$obj->refuseBorrow();
	}else if($itface == "verifyBack"){
		$obj->verifyBack();
	}else if($itface == "verifyBorrow"){
		$obj->verifyBorrow();
	}
?>