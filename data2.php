<?php

function get_name($subject)
{
	$contents= [
		"sub1"=>"Data science",
                "sub2"=>"Data mining",
                "sub3"=>"Machine learning"
		
	];
	
	foreach($contents as $subject1=> $name)
	{
		if($subject1 == $subject)
		{
			return $name;
			break;
		}
	}
}

?>
