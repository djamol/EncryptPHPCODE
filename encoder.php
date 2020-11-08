<?php
require('class.phpencoder.php');
$PhpEncoder = new CPhpEncoder();

if (is_array($_FILES['php_script'])) {
	$PhpEncoder->encode();
}
?>