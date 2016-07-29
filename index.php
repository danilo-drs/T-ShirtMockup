<?php
function __autoload($class_name) {
	$name = $class_name;
	preg_match ( "/root/", $class_name, $matches );
	if (count ( $matches )) {
		$name = preg_replace ( "/(.*root\\\\)(.*)/i", "$2", $class_name, 1 );
	}
	$name = '..//'.$name . '.php';
	$name = str_replace('\\', DIRECTORY_SEPARATOR , $name);
	include $name;
}
?>
