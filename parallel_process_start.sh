#!/bin/bash

PROCESS_THREADS=${1-3}

echo "== Processing with $PROCESS_THREADS threads =="

for (( c=1; c<=$PROCESS_THREADS; c++ ))
do
	echo "Running process #$c"
	./parallel_process.sh > output.log &
done 