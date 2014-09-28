<?php


//this function counts the number of lines in a given file 
function lineCount($txtfile) {
	
	$fileBeingRead = fopen("wordlists/$txtfile", "r"); //open the given file
	$lineNumber = 0; //establish a counter

	while(fgets($fileBeingRead)) { //cycle through the file until it reaches the end
		$lineNumber++; //add to the counter for each line the pointer scans
	}

	fclose($fileBeingRead); //close the file
	return $lineNumber; //return the number of lines in the file

}