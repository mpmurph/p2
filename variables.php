<?php

$count = 0; //default the variable that stores the number of words the user wants in their pass-phrase to zero
$phraseArray = array(); //create an array to store each word for the pass-phrase as it's generated
$passPhrase = ""; //create the $passPhrase variable as an empty string, ready to receive the words stored to the $phraseArray

if (array_key_exists ("count", $_GET)) {
	$count = $_GET["count"]; //the desired number of words in the pass-phrase
}

if (array_key_exists ("number", $_GET)) {
	$randomNumber = rand(1, 99); //generate a random number to append at the end of the pass-phrase
}

if (array_key_exists ("symbol", $_GET)) {
	$symbols = array("$", "%", "!", "!", "*", "#", "@", "+", "?"); //create an array of symbols to randomly draw from
	$randomSymbol = $symbols[rand(0, count($symbols)-1)]; //select a random symbol from that array
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