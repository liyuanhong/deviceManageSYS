<link href="css/ma_top_bar2.css" rel="stylesheet" type="text/css"/>
<div id="device_manage">
  <div id="ctrl_div1">
	<button  onclick="manDevSwitch(event)" id="div_manage_but" <?php if($ma_page_to=="ma_page_to_dev"){echo 'class="ma_page_to"';} ?>>管理手机</button>
	<button  onclick="manDevSwitch(event)" id="div_add_but" <?php if($ma_page_to=="ma_page_to_add"){echo 'class="ma_page_to"';} ?>>添加手机</button>
	<button  onclick="manDevSwitch(event)" id="user_manage_but" <?php if($ma_page_to=="ma_page_to_user"){echo 'class="ma_page_to"';} ?>>管理用户</button>
	<button  onclick="manDevSwitch(event)" id="other_manage_but" <?php if($ma_page_to=="ma_page_to_other"){echo 'class="ma_page_to"';} ?>>其他设备</button>
  </div>
</div>
