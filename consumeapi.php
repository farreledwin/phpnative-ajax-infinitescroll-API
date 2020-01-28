<?php

$url = "http://localhost:5000/api.php?employee_id=1";

$client = curl_init($url);
curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
$response = curl_exec($client);
	
$result = json_decode($response);

    echo "<table>";
	echo "<tr><td>Employee Name:</td><td>$result->employee_name</td></tr>";
	echo "<tr><td>Employee Position:</td><td>$result->employee_position</td></tr>";
    echo "</table>";
    
?>