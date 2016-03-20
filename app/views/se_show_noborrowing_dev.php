<link href="css/se_show_noborrowing_dev.css" rel="stylesheet" type="text/css"/>
<div id="show">
<div id="show_devices">
<div>
	<table id="head_info" border="1">
	  <tr>
		<th>id</th><th>设备名</th><th>型号</th><th>系统版本</th><th>分辨率</th><th>内存</th><th>屏幕尺寸</th><th>SIM卡</th><th>申请设备</th><th>申请人</th>
	  </tr>
	</table>
	  <?php 
		require '../config/config.php';
		require '../modules/DeviceManage.php';
		$obj = new DeviceManage;
		$result = $obj->getNoApplyforDataShow();
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
	  if($jsonObj->result[$i]->status == 0 || $jsonObj->result[$i]->status == 1){
		  echo "<button id='";
		  echo $jsonObj->result[$i]->id;
		  echo "'";
		  if($jsonObj->result[$i]->status == 0){
			echo " onclick='applyForDev(event)'>申请设备</button>";
		  }else if($jsonObj->result[$i]->status == 1){
			echo " onclick='cancleApplyForDev(event)'>取消申请</button>";
		  }
	  }
	  echo "</th><th>";
	  if($jsonObj->result[$i]->status == 0){
			echo "<input style='text' class='input_name' id='input" . $jsonObj->result[$i]->id. "' value='".getMemberFromIP()."'/>";
			//echo "<input style='text' class='input_name' id='input"
			//echo $jsonObj->result[$i]->id ;
			//echo "'></input>";
	  }else{
			echo $jsonObj->result[$i]->borrower;
	  }
	  //echo $jsonObj->result[$i]->borrower;
	  echo "</th></tr></table>";
	  } ?>
  </div>
</div>	
</div>