<?php
	if( $_REQUEST["phone"] )
	{
  		$phone = $_REQUEST['phone'];
	}
	if( $_REQUEST["full_name"] )
	{
  		$full_name = $_REQUEST['full_name'];
	}
	if( $_REQUEST["parent_name"] )
	{
  		$parent_name = $_REQUEST['parent_name'];
	}
	if( $_REQUEST["address"] )
	{
  		$address = $_REQUEST['address'];
	}
	if( $_REQUEST["city"] )
	{
  		$city = $_REQUEST['city'];
	}
	if( $_REQUEST["pincode"] )
	{
  		$pincode = $_REQUEST['pincode'];
	}
	if( $_REQUEST["classnum"] )
	{
  		$classnum = $_REQUEST['classnum'];
	}
	if( $_REQUEST["school"] )
	{
  		$school = $_REQUEST['school'];
	}

	echo ("our data ".$phone." ".$full_name." ".$parent_name." ".$address." ".$city." ".$pincode." ".$classnum." ".$school);


?>