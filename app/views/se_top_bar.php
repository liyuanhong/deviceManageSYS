<link href="css/se_top_bar.css" rel="stylesheet" type="text/css"/>
<div id="top_bar">
	<label>炫一下设备管理系统</label>
	<label onclick="divLogin(event)" id="label_login" class="mlabel">登陆</label>
	<label onclick="divLogin(event)" id="label_register" class="mlabel">注册</label>
	<label onclick="divSwitch(event)" id="label_search" <?php if($ma_page==""){echo 'class="se_top_bar1"';}else{echo ' class="mlabel"';}?>>设备查询</label>
	<label onclick="divSwitch(event)" id="label_manage" <?php if($ma_page=="dev_manage"){echo 'class="se_top_bar1"';}else{echo ' class="mlabel"';}?>>设备管理</label>
</div>	