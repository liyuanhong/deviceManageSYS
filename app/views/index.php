<!DOCTYPE HTML>
<html>
  <head>
  	<title>设备管理系统</title>
  </head>
  <body>
  <link href="css/index.css" rel="stylesheet" type="text/css"/>
	<script type="text/javascript" src="js/jquery-2.1.4.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
	<!--
	    获取url参数      
	-->
	<?php 
	$se_page = $_GET['se_page'];
	?>
  	<div id="main">	  
	  <?php 
		include "se_top_bar.php";
		include "se_top_bar2.php";
		if($se_page == ""){
			include "se_show_all_dev.php";
		}else if($se_page == "android"){
			include "se_show_android_dev.php";
		}else if($se_page == "ios"){
			include "se_show_ios_dev.php";
		}else if($se_page == "borrowing"){
			include "se_show_borrowing_dev.php";
		}else if($se_page == "noborrowing"){
			include "se_show_noborrowing_dev.php";
		}		
		?>

		
	</div>

  </body>
</html>
