//查询设备和设备管理界面切换
var ipAddr = "10.10.70.51"

function divSwitch(e){
	e = e || window.event;
	if(e.target.id == "label_search"){
		window.location.href="http://" + ipAddr + "/deviceManageSYS/app/views/"
	}else if(e.target.id == "label_manage")
	{
		var strcookie=document.cookie.split(";")[0].split("=")[1];
		var req = "?ma_page=dev_manage&ma_page_to=ma_page_to_dev&ma_page_man=ma_page_man_all&info=" + strcookie;
		window.location.href="http://" + ipAddr + "/deviceManageSYS/app/views/ma_manage.php" + req;
	}
}

//弹出登陆界面或注册页面
function divLogin(e){
	e = e||window.event;
	if (e.target.id == "label_login"){
		window.location.href="http://" + ipAddr + "/deviceManageSYS/app/views/lo_login.php"
	}else if(e.target.id == "label_register"){
		window.location.href="http://" + ipAddr + "/deviceManageSYS/app/views/lo_register.php"		
	}
}

//关闭登陆界面
function closeLogin(e){
	window.location.href="http://" + ipAddr + "/deviceManageSYS/app/views/"
}

//关闭注册界面
function closeRegister(e){
	window.location.href="http://" + ipAddr + "/deviceManageSYS/app/views/"
}

//添加一个设备
function addDevice(e){
	e = e||window.event;
	var device_name = $("#device_name").val();
	var device_mode = $("#device_mode").val();
	var pixel = $("#pixel").val();
	var ram = $("#ram").val();
	var cpu_hz = $("#cpu_hz").val();
	var screen_size = $("#screen_size").val();
	var color = $("#color").val();
	var for_camara = $("#for_camara").val();
	var back_camara = $("#back_camara").val();
	var sim_number = $("#sim_number").val();
	var sdcard = $("#sdcard").val();
	var platform = $("#platform").val();
	var sys_version = $("#sys_version").val();

	if(device_name == "" || device_mode == ""){
		alert("【设备名】和【型号】不能为空！")
	}else{
		$.get("http://" + ipAddr + "/deviceManageSYS/app/modules/DeviceManageExe.php", {itface:"addDev",device_name:device_name,device_mode:device_mode,pixel:pixel,ram:ram,cpu_hz:cpu_hz,screen_size:screen_size,color:color,for_camara:for_camara,back_camara:back_camara,sim_number:sim_number,sdcard:sdcard,platform:platform,sys_version},
		function(data){
			alert(data);
		});
	}
}

//修改设备信息
function modifyDevice(e){
	id = $("#dev_id").text();
	id = id.substr(6);

	var device_name = $("#device_name").val();
	var device_mode = $("#device_mode").val();
	var pixel = $("#pixel").val();
	var ram = $("#ram").val();
	var cpu_hz = $("#cpu_hz").val();
	var screen_size = $("#screen_size").val();
	var color = $("#color").val();
	var for_camara = $("#for_camara").val();
	var back_camara = $("#back_camara").val();
	var sim_number = $("#sim_number").val();
	var sdcard = $("#sdcard").val();
	var platform = $("#platform").val();
	var sys_version = $("#sys_version").val();

	if(device_name == "" || device_mode == ""){
		alert("【设备名】和【型号】不能为空！")
	}else{
		$.get("http://" + ipAddr + "/deviceManageSYS/app/modules/DeviceManageExe.php", {itface:"modifyDev",id:id,device_name:device_name,device_mode:device_mode,pixel:pixel,ram:ram,cpu_hz:cpu_hz,screen_size:screen_size,color:color,for_camara:for_camara,back_camara:back_camara,sim_number:sim_number,sdcard:sdcard,platform:platform,sys_version},
		function(data){
			alert(data);
			var strcookie=document.cookie.split(";")[0].split("=")[1];
			var req = "&ma_page=dev_manage&ma_page_to=ma_page_to_add&info=" + strcookie;
			window.location.href="http://" + ipAddr + "/deviceManageSYS/app/views/ma_manage.php?id=" + id + req;
		});
	}
	
}

//清空设备信息
function clearInfo(e){
	$("#device_name").val("");
	$("#device_mode").val("");
	$("#pixel").val("");
	$("#ram").val("");
	$("#cpu_hz").val("");
	$("#screen_size").val("");
	$("#color").val("");
	$("#for_camara").val("");
	$("#back_camara").val("");
	$("#sim_number").val("");
	$("#sdcard").val("");
	$("#platform").val("");
}

//设置默认信息
function defaultInfo(e){
	$("#device_name").val("");
	$("#device_mode").val("");
	$("#pixel").val("1024*768");
	$("#ram").val("2");
	$("#cpu_hz").val("");
	$("#screen_size").val("4.5");
	$("#color").val("白色");
	$("#for_camara").val("200");
	$("#back_camara").val("800");
	$("#sim_number").val("");
	$("#sdcard").val("");
	$("#platform").val("android");
}

//设备管理界面切换
function manDevSwitch(e){
	e = e || window.event;
	if(e.target.id == "div_add_but"){
		var strcookie=document.cookie.split(";")[0].split("=")[1];
		var req = "?ma_page=dev_manage&ma_page_to=ma_page_to_add&info=" + strcookie;
		window.location.href="http://" + ipAddr + "/deviceManageSYS/app/views/ma_manage.php" + req;
	}else if(e.target.id == "div_manage_but"){
		var strcookie=document.cookie.split(";")[0].split("=")[1];
		var req = "?ma_page=dev_manage&ma_page_to=ma_page_to_dev&ma_page_man=ma_page_man_all&info=" + strcookie;
		window.location.href="http://" + ipAddr + "/deviceManageSYS/app/views/ma_manage.php" + req;
	}else if (e.target.id == "user_manage_but"){
		var strcookie=document.cookie.split(";")[0].split("=")[1];
		var req = "?ma_page=dev_manage&ma_page_to=ma_page_to_user&info=" + strcookie;
		window.location.href="http://" + ipAddr + "/deviceManageSYS/app/views/ma_manage.php" + req;
	}else if (e.target.id == "other_manage_but"){
		var strcookie=document.cookie.split(";")[0].split("=")[1];
		var req = "?ma_page=dev_manage&ma_page_to=ma_page_to_other&info=" + strcookie;
		window.location.href="http://" + ipAddr + "/deviceManageSYS/app/views/ma_manage.php" + req;
	}

}

//设备管理界面按钮的事件
function searchDevice(e){
	e = e || window.event;
	if(e.target.id == "ctrl_div2_all"){
		var strcookie=document.cookie.split(";")[0].split("=")[1];
		var req = "?ma_page=dev_manage&ma_page_to=ma_page_to_dev&ma_page_man=ma_page_man_all&info=" + strcookie;
		window.location.href="http://" + ipAddr + "/deviceManageSYS/app/views/ma_manage.php" + req;
	}else if(e.target.id == "ctrl_div2_borrowing"){
		var strcookie=document.cookie.split(";")[0].split("=")[1];
		var req = "?ma_page=dev_manage&ma_page_to=ma_page_to_dev&ma_page_man=ma_page_man_borrowing&info=" + strcookie;
		window.location.href="http://" + ipAddr + "/deviceManageSYS/app/views/ma_manage.php" + req;
	}else if(e.target.id == "ctrl_div2_noborrow"){
		var strcookie=document.cookie.split(";")[0].split("=")[1];
		var req = "?ma_page=dev_manage&ma_page_to=ma_page_to_dev&ma_page_man=ma_page_man_noborrowing&info=" + strcookie;
		window.location.href="http://" + ipAddr + "/deviceManageSYS/app/views/ma_manage.php" + req;
	}else if(e.target.id == "ctrl_div2_applying"){
		var strcookie=document.cookie.split(";")[0].split("=")[1];
		var req = "?ma_page=dev_manage&ma_page_to=ma_page_to_dev&ma_page_man=ma_page_man_applying&info=" + strcookie;
		window.location.href="http://" + ipAddr + "/deviceManageSYS/app/views/ma_manage.php" + req;
	}else if(e.target.id == "ctrl_div2_android"){
		var strcookie=document.cookie.split(";")[0].split("=")[1];
		var req = "?ma_page=dev_manage&ma_page_to=ma_page_to_dev&ma_page_man=ma_page_man_android&info=" + strcookie;
		window.location.href="http://" + ipAddr + "/deviceManageSYS/app/views/ma_manage.php" + req;
	}else if(e.target.id == "ctrl_div2_ios"){
		var strcookie=document.cookie.split(";")[0].split("=")[1];
		var req = "?ma_page=dev_manage&ma_page_to=ma_page_to_dev&ma_page_man=ma_page_man_ios&info=" + strcookie;
		window.location.href="http://" + ipAddr + "/deviceManageSYS/app/views/ma_manage.php" + req;
	}
}

function indexSearchDevice(e){
	e = e || window.event;
	if(e.target.id == "ctrl_div_all"){
		window.location.href="http://" + ipAddr + "/deviceManageSYS/app/views/index.php"
	}else if(e.target.id == "ctrl_div_borrowing"){
		window.location.href="http://" + ipAddr + "/deviceManageSYS/app/views/index.php?se_page=borrowing"
	}else if(e.target.id == "ctrl_div_noborrow"){
		window.location.href="http://" + ipAddr + "/deviceManageSYS/app/views/index.php?se_page=noborrowing"
	}else if(e.target.id == "ctrl_div2_android"){
		window.location.href="http://" + ipAddr + "/deviceManageSYS/app/views/index.php?se_page=android"
	}else if(e.target.id == "ctrl_div2_ios"){
		window.location.href="http://" + ipAddr + "/deviceManageSYS/app/views/index.php?se_page=ios"
	}
}

//申请设备
function applyForDev(e){
	e = e || window.event;
	id = e.target.id;
	textid = "#input" + id.replace(/\s+/g, "");
	borrower = $(textid).val();	
	var url = location.href;
	if(borrower != ""){
		$.get("http://" + ipAddr + "/deviceManageSYS/app/modules/DeviceManageExe.php", {itface:"applyFor",id:id,borrower:borrower},
		function(data){
			window.location.href=url;
		});		
	}else{
		alert("必须填写申请者的名字！");
	}
}

//取消申请
function cancleApplyForDev(e){
	e = e || window.event;
	id = e.target.id;
	id = id.replace(/\s+/g, "");
	var url = location.href;
	$.get("http://" + ipAddr + "/deviceManageSYS/app/modules/DeviceManageExe.php", {itface:"cancleAplyFor",id:id},
	function(data){
		window.location.href=url;
	});
}

//删除一个设备
function delDevice(e){
	e = e || window.event;
	con=confirm("确定删除该设备么?");
	if(con == true){
		id = e.target.id;
		url = location.href;
		id = id.replace(/\s+/g, "");
		$.get("http://" + ipAddr + "/deviceManageSYS/app/modules/DeviceManageExe.php", {itface:"delDevice",id:id},
			function(data){
			window.location.href=url;
		});
	}else{
	
	}
}

//确认申请设备
function verifyBorrow(e){
	e = e || window.event;
	id = e.target.id;
	var url = location.href;
	id = id.replace(/\s+/g, "");
	$.get("http://" + ipAddr + "/deviceManageSYS/app/modules/DeviceManageExe.php", {itface:"verifyBorrow",id:id},
		function(data){
		window.location.href=url;
	});
}

//拒绝申请设备
function refuseBorrow(e){
	e = e || window.event;
	id = e.target.id;
	url = location.href;
	id = id.replace(/\s+/g, "");
	$.get("http://" + ipAddr + "/deviceManageSYS/app/modules/DeviceManageExe.php", {itface:"refuseBorrow",id:id},
		function(data){
		window.location.href=url;
	});
}

//确认归还
function verifyBack(e){
	e = e || window.event;
	id = e.target.id;
	url = location.href;
	id = id.replace(/\s+/g, "");
	$.get("http://" + ipAddr + "/deviceManageSYS/app/modules/DeviceManageExe.php", {itface:"verifyBack",id:id},
		function(data){
		window.location.href=url;
	});
}

//确认归还
function verifyBack2(e){
	e = e || window.event;
	id = e.target.id;
	id = id.substr(6);
	url = location.href;
	id = id.replace(/\s+/g, "");
	$.get("http://" + ipAddr + "/deviceManageSYS/app/modules/DeviceManageExe.php", {itface:"verifyBack",id:id},
		function(data){
		window.location.href=url;
	});
}

//跳转到设备修改页面
function toModifyDevPage(e){
	e = e || window.event;
	id = e.target.id;
	id = id.substr(6);
	var strcookie=document.cookie.split(";")[0].split("=")[1];
	var req = "&info=" + strcookie;
	window.location.href="http://" + ipAddr + "/deviceManageSYS/app/views/ma_modify_dev_info.php?id=" + id + req;
}

//跳转到用户信息修改页面
function toModifyUserPage(e){
	e = e || window.event;
	id = e.target.id;
	id = id.substr(6);
	var strcookie=document.cookie.split(";")[0].split("=")[1];
	var req = "&info=" + strcookie;
	window.location.href="http://" + ipAddr + "/deviceManageSYS/app/views/ma_modify_user_info.php?id=" + id + req;
}

//删除一个用户
function delAnUser(e){
	con=confirm("确定删除该用户么?");
	if(con == true){
		e = e || window.event;
		id = e.target.id;
		var strcookie=document.cookie.split(";")[0].split("=")[1];
		var req = "&info=" + strcookie;
		url = location.href;
		$.get("http://" + ipAddr + "/deviceManageSYS/app/modules/UserManageExe.php", {itface:"delAnUser",id:id},
			function(data){
			window.location.href=url;
		});
	}else{
	
	}
	
}

//修改用户信息
function modifyUserInfo(e){
	var id = $("#user_id").text();
	var theRole = $("#the_role").text();
	var loginname = $("#loginname").val();
	var username = $("#username").val();
	var password = $("#password").val();
	var role = $("#role").val();
	var session = $("#session").val();

	url = location.href;

	if(loginname == "" || username == "" || password == ""){
		alert("红色星号为必填项！")
	}else{
		if(theRole == 1 && role == 0){
			alert("对不起，权限不够！");
		}else{
			$.get("http://" + ipAddr + "/deviceManageSYS/app/modules/UserManageExe.php", {itface:"modifyUserInfo",id:id,loginname:loginname,username:username,
			password:password,role:role,session:session},
			function(data){
				alert(data);
				window.location.href=url;
			});
		}	
	}
}

function modifyDevPageBack(e){
	history.back(-1);
}

//注册
function register(e){
	e = e || window.event;
	var loginname = $("#loginname").val();
	var username = $("#username").val();
	var password = $("#password").val();
	var repassword = $("#repassword").val();

	if(loginname == ""){
		alert("登录名不能为空！");
	}else if(username == ""){
		alert("用户名不能为空！");
	}else if(password == ""){
		alert("密码不能为空！");
	}else{
		if(password == repassword){
			$.get("http://" + ipAddr + "/deviceManageSYS/app/modules/UserManageExe.php",{itface:"register",loginname:loginname,username:username,password:password},
				function(data){
				alert("注册成功。\n请联系管理员，修改权限后即可登录！");
				window.location.href="http://" + ipAddr + "/deviceManageSYS/app/views"
			});
		}else{
			alert("两次输入的密码不一致！");
		}
	}
}

//登录
function login(e){
	e = e || window.event;
	var loginname = $("#login").val();
	var password = $("#password").val();

	if(login == ""){
		alert("登录名不能为空！");
	}else if(password == ""){
		alert("密码不能为空！");
	}else{
		$.get("http://" + ipAddr + "/deviceManageSYS/app/modules/UserManageExe.php",{itface:"login",loginname:loginname,password:password},
			function(data){
			if(data != "fail"){
				document.cookie="info="+data;
				var strcookie=document.cookie.split(";")[0].split("=")[1];
				var req = "?ma_page=dev_manage&ma_page_to=ma_page_to_dev&ma_page_man=ma_page_man_all&info=" + strcookie;
				window.location.href="http://" + ipAddr + "/deviceManageSYS/app/views/ma_manage.php" + req;
			}else{
				alert("用户名或密码错误！");
			}				
		});
	}
}

function jumpToIndex(){
	window.location.href="http://" + ipAddr + "/deviceManageSYS/app/views/";
}


function toModify(e){
	e = e || window.event;
	id = e.target.id;
	textid = "#input" + id.substring(6);
	id1 = id.substring(6);
	borrower = $(textid).val();	
	var url = location.href;
	if($(textid).attr("disabled")=="disabled"){
		$(textid).removeAttr("disabled");
		$(id).text("确认");
	}else{
		alert("签借用户修改成功！");
		if(borrower != ""){
			$.get("http://" + ipAddr + "/deviceManageSYS/app/modules/DeviceManageExe.php", {itface:"verifyBorrow2",id:id1,borrower:borrower},
			function(data){
			window.location.href=url;
		});		
		}else{
			alert("必须填写申请者的名字！");
		}
	}
	
}