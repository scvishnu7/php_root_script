<html>
<body>

<?php

echo "test<br/>";
print_r($_POST);
$script_file = "/var/www/html/sh/php_shell.sh";

if(isset($_POST['sshd_stop'])){
	echo "stoping sshd server";
	exec('/var/www/html/sh/php_root /var/www/html/sh/php_shell.sh sshd stop');
}else if(isset($_POST['sshd_restart'])){
	echo "restarting sshd server";
	exec('/var/www/html/sh/php_root /var/www/html/sh/php_shell.sh sshd restart');
}

?>			

<form action="#" method="POST">

<input type="submit" name="sshd_stop" value="Stop sshd"/>
<input type="submit" name="sshd_restart" value="Restart sshd"/>

</form>

</body>
</html>
