<link href="css/ma_add_dev.css" rel="stylesheet" type="text/css"/>
<div id="div_add_dev">
  <div id="info">
	<table border="0" id="info_table">
	  <tr>
		<th><label class="need_star">*</label><label>设备名：</label><input style="text" id="device_name" value="小米"></input></th>
		<th><label class="need_star">*</label><label>型号：</label><input style="text" id="device_mode" value="2S"></input></th>
		<th><label class="need_star"></label><label>分辨率：</label><input style="text"
		id="pixel" value="1024*768"></input></th>
	  </tr>
	  <tr>
		<th><label class="need_star"></label><label>内存：</label><input style="text" id="ram" value="2"></input></th>
		<th><label class="need_star"></label><label>cpu频率：</label><input style="text" id="cpu_hz" value="2"></input></th>
		<th><label class="need_star"></label><label>屏幕尺寸：</label><input style="text" id="screen_size" value="4.0"></input></th>
	  </tr>
	  <tr>
		<th><label class="need_star"></label><label>颜色：</label><input style="text"
		id="color" value="黑色"></input></th>
		<th><label class="need_star"></label><label>前置摄像：</label><input style="text" id="for_camara" value="200"></input></th>
		<th><label class="need_star"></label><label>后置摄像：</label><input style="text" id="back_camara" value="800"></input></th>
	  </tr>
	  <tr>
		<th><label class="need_star"></label><label>SIM卡：</label><input style="text" id="sim_number"></input></th>
		<th><label class="need_star"></label><label>SD卡：</label><input style="text" id="sdcard"></input></th>
		<th><label class="need_star"></label><label>平台：</label><select id="platform">
			<option value="android">android</option>
			<option value="ios">ios</option>
		</select></th>
	  </tr>
	  <tr>
		<th><label class="need_star"></label><label>系统版本：</label><input style="text" id="sys_version"></input></th>
	  </tr>
	</table>
	<button id="add_divice_button" onclick="addDevice(event)">添加</button>
	<button id="clear_button" onclick="clearInfo(event)">清空</button>
	<button id="default_button" onclick="defaultInfo(event)">默认</button>
  </div>
</div>