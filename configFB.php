<?php

require_once('Facebook/autoload.php');

$FBObject = new \Facebook\Facebook([
	'app_id' => '962284267908696',
	'app_secret' => '9214c12ecdc71c3c1b8ae865e09395ce',
	'default_graph_version' => 'v2.10'
]);

$handler = $FBObject -> getRedirectLoginHelper();
?>