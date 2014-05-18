<?php

	$htmlRedirect = false;

	// supported protocols for auto-prefixing
	$protocols = [
		'http://',
		'https://'
	];
	$defaultProtocol = $protocols[0]; // "site.tld" will be prefixed with this one. E.g. "http://site.tld"



	// Don't know where to place this and I don't want a extra file for this.
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

