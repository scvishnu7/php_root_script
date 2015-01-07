Being based on

http://stackoverflow.com/questions/8532304/execute-root-commands-via-php

Make the script's file permission 

# chown root php_shell.sh
# chmod u=rwx,go=xr php_shell.sh


Make the wrapper program's file permission as

# gcc wrapper.c -o php_root
# chown root php_root
# chmod u=rwx,go=xr,+s php_root 



Then run the wrapper program from php using

exec('php_root');


