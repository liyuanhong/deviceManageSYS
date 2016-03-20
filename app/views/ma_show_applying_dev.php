<link href="css/ma_show_applying_dev.css" rel="stylesheet" type="text/css"/>
<div id="div_search_dev">
<div>
<table id="head_info" border="1">
  <tr>
	<th>id</th><th>设备名</th><th>型号</th><th>系统版本</th><th>分辨率</th><th>内存</th><th>屏幕尺寸</th><th>SIM卡</th><th>申请人</th><th>确认申请</th><th>否定申请</th>
  </tr>
</table>
  <?php 
	//require '../config/config.php';
	require '../modules/DeviceManage.php';
	$obj = new DeviceManage;
	$result = $obj->getApplyforDataShow(); 
	$jsonObj = json_decode($result);
	for($i=0;$i<count($jsonObj->result);$i++){
	echo "<table id='head_info' border='1'><tr><th>";
  echo $i + 1;	
  echo "</th><th>";
  echo $jsonObj->result[$i]->device_name;			
  echo "</th><th>";
  echo $jsonObj->result[$i]->device_mode;
  echo "</th><th>";
  echo $jsonObj->result[$i]->sys_version;
  echo "</th><th>";
  echo $jsonObj->result[$i]->pixel;
  echo "</th><th>";
  echo $jsonObj->result[$i]->ram;
  echo "</th><th>";
  echo $jsonObj->result[$i]->screen_size;
  echo "</th><th>";
  echo $jsonObj->result[$i]->sim_number;
  echo "</th><th>";
  echo $jsonObj->result[$i]->borrower;
  echo "</th><th>";
  echo "<button id='";
  echo $jsonObj->result[$i]->id;
  echo "'";
  echo  " onclick='verifyBorrow(event)'>确认申请</button>";
  echo "</th><th>";
  echo "<button id='";
  echo $jsonObj->result[$i]->id;
  echo "'";
  echo  " onclick='refuseBorrow(event)'>否定申请</button>";
  echo "</th></tr></table>";
  } ?>
</div>
</div>