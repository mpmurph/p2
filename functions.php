<?php

function lineCount($txtfile) {
	
	$fileBeingRead = fopen("/Applications/MAMP/htdocs/p2/wordlists/$txtfile", "r");
	$lineNumber = 0;

	while(fgets($fileBeingRead)) {
		$lineNumber++;
	}

	return $lineNumber;

	fclose($fileBeingRead);
}