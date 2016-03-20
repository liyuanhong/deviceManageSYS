<link href="css/ma_top_bar3.css" rel="stylesheet" type="text/css"/>
<div id="ctrl_div2">
  <button id="ctrl_div2_all" onclick="searchDevice(event)" <?php if($ma_page_man=="ma_page_man_all"){echo 'class="ma_page_man"';} ?>>所有设备</button>
  <button id="ctrl_div2_borrowing" onclick="searchDevice(event)" <?php if($ma_page_man=="ma_page_man_borrowing"){echo 'class="ma_page_man"';} ?>>借出设备</button>
  <button id="ctrl_div2_noborrow" onclick="searchDevice(event)" <?php if($ma_page_man=="ma_page_man_noborrowing"){echo 'class="ma_page_man"';} ?>>剩余设备</button>
  <button id="ctrl_div2_applying" onclick="searchDevice(event)" <?php if($ma_page_man=="ma_page_man_applying"){echo 'class="ma_page_man"';} ?>>申请中</button>
  <button id="ctrl_div2_android" onclick="searchDevice(event)" <?php if($ma_page_man=="ma_page_man_android"){echo 'class="ma_page_man"';} ?>>Android</button>
  <button id="ctrl_div2_ios" onclick="searchDevice(event)" <?php if($ma_page_man=="ma_page_man_ios"){echo 'class="ma_page_man"';} ?>>ios</button>
</div>