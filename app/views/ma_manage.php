<!DOCTYPE HTML>
<html>
  <head>
  	<title>设备管理系统</title>
  </head>
  <body>
  	<link href="css/ma_manage.css" rel="stylesheet" type="text/css"/>
	<script type="text/javascript" src="js/jquery-2.1.4.js"></script>
    <script type="text/javascript" src="js/index.js"></script> 
	<!--
	    判断是否登录，没有登陆则重定向到外面    
	-->
	<?php  
		require '../modules/UserManage.php';
		$obj = new UserManage;
		$result = $obj->islogin(); 
		$role = $obj->getRole(); 
		if($result == "yes" && $role != 2){
	
		}else{
			echo "<script language='javascript'>";
			echo "jumpToIndex();";
			echo "</script>";
		}
	?>
	<!--
	    获取url参数      
	-->
	<?php 
	$ma_page = $_GET['ma_page']; 
	$ma_page_to = $_GET['ma_page_to']; 
	$ma_page_man = $_GET['ma_page_man']; 
	?>
  	<div id="main">	  
	  <?php 
	  include "se_top_bar.php";	  
	  if($ma_page == "dev_manage"){
		  include "ma_top_bar2.php";
		  if($ma_page_to == "ma_page_to_dev"){
			  include "ma_top_bar3.php";
			  if($ma_page_man == "ma_page_man_all"){
				  include "ma_show_all_dev.php";
			  }else if($ma_page_man == "ma_page_man_borrowing"){
				  include "ma_show_borrowing_dev.php";
			  }else if($ma_page_man == "ma_page_man_android"){
				  include "ma_show_android_dev.php";
			  }else if($ma_page_man == "ma_page_man_ios"){
				  include "ma_show_ios_dev.php";
			  }else if($ma_page_man == "ma_page_man_noborrowing"){
				  include "ma_show_noborrowing_dev.php";
			  }else if($ma_page_man == "ma_page_man_applying"){
				  include "ma_show_applying_dev.php";
			  }
		  }else if($ma_page_to == "ma_page_to_add"){
			  include "ma_add_dev.php";	
		  }else if($ma_page_to == "ma_page_to_user"){
			  include "ma_manage_user.php";
		  }else if($ma_page_to == "ma_page_to_other"){

		  }	
	  }
	  ?>
	  
	</div>
  </body>
</html>
