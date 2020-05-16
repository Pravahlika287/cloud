<?php
header("Content-Type:application/json");
require "data.php";

if(!empty($_GET['subject']) and !empty($_GET['name']))
{
	$subject=$_GET['subject'];
	$name=$_GET['name'];

	$r=get_name($subject,$name);
	
	if(empty($r))
	{
		response(200,"subject Not Found",NULL);
	}
	else
	{
		response(200,"subject Found",$r);
	}	
}
else
{
	response(400,"Invalid Request",NULL);
}

function response($status,$status_message,$data)
{
	header("HTTP/1.1 ".$status);
	
	$response['status']=$status;
	$response['status_message']=$status_message;
	$response['data is correct']=$data;
	
	$json_response=json_encode($response);
	echo $json_response;
}
?>
