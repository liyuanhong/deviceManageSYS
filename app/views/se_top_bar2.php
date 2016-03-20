<link href="css/se_top_bar2.css" rel="stylesheet" type="text/css"/>
<div id="ctrl_div">
		<button id="ctrl_div_all" onclick="indexSearchDevice(event)" <?php if($se_page==""){echo 'class="se_top_bar2"';}?>>所有设备</button>
		<button id="ctrl_div_borrowing" onclick="indexSearchDevice(event)" <?php if($se_page=="borrowing"){echo 'class="se_top_bar2"';}?>>借出设备</button>
		<button id="ctrl_div_noborrow" onclick="indexSearchDevice(event)"<?php if($se_page=="noborrowing"){echo 'class="se_top_bar2"';}?>>剩余设备</button>
		<button id="ctrl_div2_android" onclick="indexSearchDevice(event)" <?php if($se_page=="android"){echo 'class="se_top_bar2"';}?>>Android</button>
		<button id="ctrl_div2_ios" onclick="indexSearchDevice(event)" <?php if($se_page=="ios"){echo 'class="se_top_bar2"';}?>>ios</button>
</div>