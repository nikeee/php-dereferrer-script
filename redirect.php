<?php

	require_once 'config.php';

	if(striposarray($url, $protocols) == -1)
	{
		$url = $defaultProtocol . ltrim($url, '/');
	}

	$url = htmlspecialchars($url);

	if(!$htmlRedirect)
	{
		header("Location: $url");
		exit;
	}

	$anchor = '<a href="' . $url . '">' . $url .  '</a>';

?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="refresh" content="0; URL=<?php echo $url; ?>">
		<link rel="stylesheet" type="text/css" href="css.css">
		<title><?php echo $url; ?> &hellip;</title>
	</head>
	<body>
	<div align="center">
		<h1>LOLREDIREECT</h1>
		<p><?php echo $anchor; ?></p>
		<p>&hellip;</p>
	</div>
	</body>
</html>
