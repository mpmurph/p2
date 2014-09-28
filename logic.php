<?php

require("variables.php");
require("functions.php");

$passPhrase = "";
$phraseArray = array();

//create a for loop that will select a random word from the user selected lists 
//the loop will run through the same number of times as the number of words the 
//user requested in their pass phrase

for ($i=1; $i<=$count; $i++) {

	$wordList = $wordLists[array_rand($wordLists)]; //randomly choose a word list from those the user selected

	$line = rand(1, lineCount($wordList)); //count the lines in that list and randomly select a line number

	$openWordList = fopen("wordlists/$wordList", "r");
	$j = 0;

	while (!feof($openWordList) and ($j <$line)) {
		$passWord = rtrim(fgets($openWordList));
		$j++;
	}

	fclose($openWordList);

	array_push($phraseArray, $passWord);

}

//concatenate pass-phrase into a string

for ($k = 0; $k<$count; $k++) {
	$passPhrase = $passPhrase.array_pop($phraseArray);

//this 'if' statement means that on the last pass through, the concatenating symbols won't be appended at the end of the phrase
	if ($k<$count-1) {
	$passPhrase = $passPhrase."**";
	}
}

?>