<?php

include("db.php");
include("init.php");

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