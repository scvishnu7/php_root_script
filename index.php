<html>
<body>

<?php

echo "test<br/>";
print_r($_POST);
$script_file = "/var/www/html/sh/php_shell.sh";

if(isset($_POST['httpd_stop'])){
	echo "stoping httpd server";
	exec('/var/www/html/sh/php_root /var/www/html/sh/php_shell.sh httpd stop');
}else if(isset($_POST['httpd_restart'])){
	echo "restarting httpd server";
	exec('/var/www/html/sh/php_root /var/www/html/sh/php_shell.sh httpd restart');
}

?>			

<form action="#" method="POST">

<input type="submit" name="httpd_stop" value="Stop httpd"/>
<input type="submit" name="httpd_restart" value="Restart httpd"/>

</form>

</body>
</html>
