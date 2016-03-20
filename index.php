<?php 
$url = '10.10.153.105';
$dir = '/var/www/html/deviceManageSYS';
$file=scandir($dir);
for($i = 0;$i < count($file);$i++){
	if($file[$i] == '.' || $file[$i] == '..'){
		
	}else{
		//echo $file[$i];
		echo '<a href="'.'/deviceManageSYS/'.$file[$i].'"><h5 style="display:inline;">'.$file[$i].'</h5></a>';
		echo '<br>';
	}
}
?>


