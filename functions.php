<?php

function lineCount($txtfile) {
	
	$fileBeingRead = fopen("wordlists/$txtfile", "r");
	$lineNumber = 0;

	while(fgets($fileBeingRead)) {
		$lineNumber++;
	}

	return $lineNumber;

	fclose($fileBeingRead);
}