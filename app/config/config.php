<?php
class Config{
	//定义数据库的连接
	public $username="root";
	public $userpass="pass";
	public $dbhost="10.10.70.51";
	public $dbdatabase="deviceSYS";
}

function getMemberFromIP() {
        /**
		$json = file_get_contents("http://check.yixia.com/check/index.php?fn=fetchuserlist");
        $members = json_decode($json,true);
        $ip = $_SERVER['REMOTE_ADDR'];
        foreach ($members as $key => $val) {
                if ($val['ip'] == $ip) {
                        return $val['sname'];
                }
        }
        return '';
		*/
		return hello;
}

?>