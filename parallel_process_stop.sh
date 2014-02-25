#!/bin/sh

echo "\n== Stopping all parallel processes =="

ps aux | grep parallel_process

kill -9 $(ps aux | grep parallel_process | awk '{print $2}')

echo "\n"