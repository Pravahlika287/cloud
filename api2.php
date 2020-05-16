<?php
header("Content-Type:application/json");
require "data.php";

if(!empty($_GET['subject']))
{
	$subject=$_GET['subject'];
	$name=get_name($subject);
	
	if(empty($name))
	{
		response(200,"subject Not Found",NULL);
	}
	else
	{
		response(200,"subject Found",$name);
	}	
}
else
{
	response(400,"Invalid Request",NULL);
}

function response($status,$status_message,$data)
{
	header("HTTP/1.1".$status);
	
	$response['status']=$status;
	$response['status_message']=$status_message;
	$response['data']=$data;
	
	$json_response=json_encode($response);
	echo$json_response;
}

?>
