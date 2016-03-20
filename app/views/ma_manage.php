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
	  include "ma_top_bar2.php";
	  include "ma_top_bar3.php";
	  if($ma_page == "dev_manage"){
		  if($ma_page_to = "ma_page_to_dev"){
			  if($ma_page_man == "ma_page_man_all"){
				  include "ma_show_all_dev.php";
			  }else if($ma_page_man == "ma_page_man_borrowing"){
				  include "ma_show_borrowing_dev.php";
			  }
		  }
			
		}else if($ma_page == "dev_add"){
			
		}else if($ma_page == "user_manage"){
			
		}
	  ?>
	  
	</div>
  </body>
</html>
