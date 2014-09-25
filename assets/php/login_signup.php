<?php 
	if ($_REQUEST["mode"])
	{
		$mode = $_REQUEST["mode"];
	}
	if( $_REQUEST["number"] )
	{
  		$number = $_REQUEST['number'];
	}
	if( $_REQUEST["number"] )
	{
  		$password = md5($_REQUEST['password']);
	}
	
	require_once('connect.php');
	if ($mode == "signup")
	{
		mysql_query("INSERT INTO `login`(`phone`, `password`) VALUES ('$number','$password')");
	}
	if ($mode == "login")
	{
		$queryPassword = mysql_result(mysql_query("SELECT `password` FROM `login` WHERE `phone` = '$number'"),0);
		if (strcmp ( $password , $queryPassword ) == 0)
		{
			echo ("successful login");
			//now redirect to new page
			//header('Location: ../html/address.html'); 
		}
		else
		{
			echo ("invalid login");
		}
	}
	require_once('disconnect.php');
?>