<?php
include(dirname(__FILE__).'/../../config/config.inc.php');

function MakeUrls($str)
{
	$find=array('`((?:https?|ftp)://\S+[[:alnum:]]/?)`si','`((?<!//)(www\.\S+[[:alnum:]]/?))`si');
	$replace=array('<a href="$1" target="_blank">$1</a>','<a href="http://$1"    target="_blank">$1</a>');
	return preg_replace($find,$replace,$str);
}

header('Content-Type: application/json');

if (isset($_POST['name'])) {
	$name = strip_tags($_POST['name']);
	$email = strip_tags($_POST['email']);
	$message = strip_tags($_POST['message']);
	$parent = strip_tags($_POST['parentId']);

	$message = MakeUrls($message);

	$con=mysqli_connect(_DB_SERVER_,_DB_USER_,_DB_PASSWD_,_DB_NAME_);
	// Check connection
	if (mysqli_connect_errno()) {
	  // echo "Failed to connect to MySQL: " . mysqli_connect_error();
		echo json_encode(array("status"=>"Fail"));
	}
    mysqli_set_charset($con, "utf8");
	$SQL = "INSERT INTO `"._DB_PREFIX_."commtemp` (name, email, message, parent)
	VALUES ('$name', '$email', '$message', '$parent')";

	mysqli_query($con, $SQL);
	mysqli_close($con);
	echo json_encode(array("status"=>"OK"));
	}
?>