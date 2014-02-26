<?php 

$system_load = sys_getloadavg();
$load_last_one_minute = $system_load[0];
$os = PHP_OS;
$cpu_cores = 1;

// get the cpu cores per platform
//
if($os === 'Darwin') {
	// this is a mac
	$cpu_cores = exec("sysctl hw.ncpu | awk '{print $2}'");
}
else {
	// linux
	$cpu_cores = exec("grep -c processor /proc/cpuinfo");
}

$server_load_percentage = round(($load_last_one_minute / $cpu_cores) * 100, 2);
echo "server load ($cpu_cores cores): $server_load_percentage %\n";


if($server_load_percentage > 80) {
	echo "server is too busy...\n";
	return;
}

?>