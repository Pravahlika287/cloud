<?php
header("Content-Type:application");
require"data.php";

if(!empty($_GET['subject']))
{
	$subject = $_GET['subject'];
	$name = get_name($subject);
	
	if(empty($name))
	{
		response(NULL);
	}
	else
	{
		response($name);
	}	
}
else
{
	response(NULL);
}

function response($data)
{
	header("HTTP/1.1");
	
	echo $data;
}

?>
