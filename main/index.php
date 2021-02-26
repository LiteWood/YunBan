<?php
	$username=$_GET['user'];
	$end = parse_ini_file("../file/time.ini");// The Time
	$time1=strtotime(date("Y-m-d"));
	$time2=strtotime($end[$username]);
	if($username=='')
		echo 'User Not Found';
	else
	{
		if($time1-$time2<0)//如果被ban
		{
			$reasonini = parse_ini_file("../file/reason.ini");
			$reason = $reasonini[$username];
			echo $reason;
		}
		else
			echo '0';
	}
?>
	