<?php

function get_name($subject)
{
        /* Database INFO */
	$servername = "localhost";
	$username = "kurapatl1";
	$password = "ij997b";
	$dbname = "kurapatl1_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name FROM data1 WHERE subject = '$subject'";
$result = $conn->query($sql);

if ($result->num_rows >0) {
// output data of each row
while($row = $result->fetch_assoc()) {
$name = $row["name"];
}
} else {
$name = null;
}

$conn->close();

return $name;
}

?>
