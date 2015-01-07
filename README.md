# php_root_script
execute commands with root access on server from php file

index.php file has the php which `execv` the wrapper program `php_root`

program `php_root` executes the script given (as its 1st argumnet) and supplies arguments(all after 2nd argument) to that script.

php_shell.sh parse the argument supplied to do the necessary task on machine with root access
