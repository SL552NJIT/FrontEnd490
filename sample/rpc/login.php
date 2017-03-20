<?php

if (!isset($_POST))
{
	$msg = "NO POST MESSAGE SET<p>";
	echo  json_encode($msg);
}
$request = $_POST;
$response = "unsupported request tpe";
switch ($request["type"]
{
	case "login":
		$response = "we can do that";
	break;
}
echo json_encode($response);
?>

