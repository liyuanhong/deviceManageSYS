<link href="css/ma_manage_user.css" rel="stylesheet" type="text/css"/>
<div id="div_manage_user">
  <table id="head_info" border="1">
  <tr>
	<th>id</th><th>登录名</th><th>用户名</th><th>密码</th><th>角色</th><th>session</th><th>删除</th><th>修改</th>
  </tr>
</table>
<?php 
  $info = $_GET["info"];
  //require '../config/config.php';
  //require '../modules/UserManage.php';
  $obj = new UserManage;
  $result = $obj->getAllUserInfo(); 
  $result2 = $obj->getInfoBySession($info);
  $jsonObj = json_decode($result);
  $jsonObj2 = json_decode($result2);
  if($jsonObj2->result[0]->role == 0){
		for($i=0;$i<count($jsonObj->result);$i++){
		  echo "<table id='head_info' border='1'><tr><th>";
		  echo $i + 1;	
		  echo "</th><th>";
		  echo $jsonObj->result[$i]->loginname;	
		  echo "</th><th>";
		  echo $jsonObj->result[$i]->username;
		  echo "</th><th>";
		  echo $jsonObj->result[$i]->password;		
		  echo "</th><th>";
		  echo $jsonObj->result[$i]->role;		
		  echo "</th><th>";
		  echo $jsonObj->result[$i]->session;	
		  echo "</th><th>";
		  echo "<button id='";
		  echo $jsonObj->result[$i]->id;
		  echo "'";
		  echo  " onclick='delAnUser(event)'>删除</button>";
		  echo "</th><th>";
		  echo "<button id='";
		  echo "modify".$jsonObj->result[$i]->id;
		  echo "'";
		  echo  " onclick='toModifyUserPage(event)'>修改</button>";
		  echo "</th></tr></table>";
		} 
  }else if($jsonObj2->result[0]->role == 1){
		for($i=0;$i<count($jsonObj->result);$i++){
			if($jsonObj->result[$i]->session == $info || $jsonObj->result[$i]->role == 2){
				  echo "<table id='head_info' border='1'><tr><th>";
				  echo $i + 1;	
				  echo "</th><th>";
				  echo $jsonObj->result[$i]->loginname;	
				  echo "</th><th>";
				  echo $jsonObj->result[$i]->username;
				  echo "</th><th>";
				  echo $jsonObj->result[$i]->password;		
				  echo "</th><th>";
				  echo $jsonObj->result[$i]->role;		
				  echo "</th><th>";
				  echo $jsonObj->result[$i]->session;	
				  echo "</th><th>";
				  echo "<button id='";
				  echo $jsonObj->result[$i]->id;
				  echo "'";
				  echo  " onclick='delAnUser(event)'>删除</button>";
				  echo "</th><th>";
				  echo "<button id='";
				  echo "modify".$jsonObj->result[$i]->id;
				  echo "'";
				  echo  " onclick='toModifyUserPage(event)'>修改</button>";
				  echo "</th></tr></table>";
			}
		} 
  }	  
  ?>
</div>