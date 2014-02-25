<?php

include("db.php");

$system_load = sys_getloadavg();
$load_last_one_minute = $system_load[0];

echo "server load: $load_last_one_minute\n";

if($load_last_one_minute > 80) {
	echo "server is too busy...\n";
	return;
}

// your custom process here
$sql = "SELECT COUNT(*) as count FROM sample_table";
$result = mysql_fetch_assoc(mysql_query($sql));
$count = $result['count'];

// insert record here
$new_name = "New name " . ($count + 1);
$sql = "INSERT INTO sample_table (`name`) VALUES ('". $new_name ."')";
echo $sql . "\n";
mysql_query($sql);


?>