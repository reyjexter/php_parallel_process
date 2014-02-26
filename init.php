<?php 

$system_load = sys_getloadavg();
$load_last_one_minute = $system_load[0];

echo "server load: $load_last_one_minute\n";

if($load_last_one_minute > 80) {
	echo "server is too busy...\n";
	return;
}

?>