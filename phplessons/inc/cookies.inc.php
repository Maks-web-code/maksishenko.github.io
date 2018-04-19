<?php
if (isset($_POST['Delete'])) {
			setcookie ("name", $name, time ()-3600); 
			setcookie ("sname", $name, time ()-3600); 
			setcookie ("oname", $name, time ()-3600);
			}

			
if (isset ($_POST['Enter'])){
$name = strip_tags(trim($_POST['name']));
setcookie ("name", $name, time ()+3600);
	$sname = strip_tags(trim($_POST['sname']));
	setcookie ("sname", $sname, time ()+3600);
		$oname = strip_tags(trim($_POST['oname']));
		setcookie ("oname", $oname, time ()+3600);}
		
		if (isset($_COOKIE['name']) && isset($_COOKIE['sname']) && isset($_COOKIE['oname'])){
			$userName = $_COOKIE['name'];
			$userSname = $_COOKIE['sname'];
			$userOname = $_COOKIE['oname'];
		}
?>