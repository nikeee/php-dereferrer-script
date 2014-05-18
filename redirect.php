<?php

	function striposarray($haystack, array $needles)
	{
		for($i = 0; $i < count($needles); ++$i)
		{
			$pos = stripos($haystack, $needles[$i]);
			if($pos > -1)
				return $pos;
		}
		return -1;
	}

	$protocols = [
		'http://',
		'https://'
	];
	$defaultProtocol = $protocols[0];


	if(striposarray($url, $protocols) == -1)
	{
		$url = $defaultProtocol . ltrim($url, '/');
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
		<p><?php echo $anchor; ?> &hellip;</p>
	</div>
	</body>
</html>
