#!/bin/sh

count=0
for i in $@
do

	echo "Arg$count $i";
	((count++));
done

echo "==========================="

# Do things according to the argument passed

case "$1" in
	sshd)
		echo "sshd opts";
		#check 2nd options for what to do
		case "$2" in
			stop)
				service sshd stop
				
			;;
			restart)
				echo "sshd restart";
				service sshd restart
				
			;;
			*)
				echo "unrecognized command for sshd";
			;;
		esac
	;;
	fedora)
		echo "fedora optss";
		
	;;
	*)
		echo "jpt entered";
	;;
esac


#mkdir /home/bishnu/dir_from_php
