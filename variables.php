<?php

//default the variable that stores the number of words the user wants in their pass-phrase to zero
$count = 0;

if (array_key_exists ("count", $_GET)) {
	$count = $_GET["count"]; //the desired number of words in the pass-phrase
}

if (array_key_exists ("number", $_GET)) {
	$wantNumber = $_GET["number"]; //Boolean value as to whether the user wants a number appended to the pass-phrase
}

if (array_key_exists ("symbol", $_GET)) {
	$wantSymbol = $_GET["symbol"]; //Boolean value as to whether the user wants a symbol appended to the pass-phrase
}

if (array_key_exists ("james", $_GET)) {
	$wantJames = $_GET["james"]; //Boolean value as to whether the user wants to use the King James word list
	$wordLists[] = "biblewords.txt"; //create an array of the word lists the user wants to use
}

if (array_key_exists ("shakespeare", $_GET)) {
	$wantShakespeare = $_GET["shakespeare"]; //Boolean value as to whether the user wants to use the Shakespeare word list
	$wordLists[] = "shakespearewords.txt";
}

if (array_key_exists ("nonsense", $_GET)) {
	$wantNonsense = $_GET["nonsense"]; //Boolean value as to whether the user wants to use the nonsense word list
	$wordLists[] = "nonsensewords.txt";
}

if (array_key_exists ("rude", $_GET)) {
	$wantRude = $_GET["rude"]; //Boolean value as to whether the user wants to use the "rude" word list
	$wordLists[] = "notreallyrudewords.txt";
}

//count the number of wordlists that the user selected
if (array_key_exists ("shakespeare", $_GET) 
	|| array_key_exists ("nonsense", $_GET) 
	|| array_key_exists ("rude", $_GET) 
	|| array_key_exists ("rude", $_GET)) {
$numberOfLists = count($wordLists);
}

//create an array of special characters


//choose a 