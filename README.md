php_parallel_process
====================

A set of php and linux bash script to process php code in parallel.

Best use case and features:

- Process images without exceeding your server resources. It will keep on spawning processes but will stop executing php script once server exceeds 80% server load.

- This code includes detecting of cpu cores for mac and linux. 


Usage:

1) Modify db.php if you have any database related task.

2) Modify process.php to add your custom code. Note, you will still need to custom application specific rules like blocking multiple records from being read at the same time.

3) To start parallel processing, run:

	./parallel_process_start.sh 5
	
where **5** is the number of process to start. The defaut value is 3

4) To stop processing, run
	
	./parallel_process_stop.sh
	 
or if this didn't stop all process, run this manually: 

	kill -9 $(ps aux | grep parallel_process | awk '{print $2}')


