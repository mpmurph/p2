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

	//if the user wants only non-hyphenated and non-possessive words, make sure the selected word is free of those characters
	//if the word under consideration has a non-alphabetical character, step the counter back by one and find a new word
	//if the word under consideration is made up of only alphabetic characters, add it to the pass-phrase array
	if (array_key_exists ("alphaonly", $_GET)) {
		
		if (!preg_match("/^[A-z]*$/", $passWord) ) {
			$i--;
		}

		else {
		array_push($phraseArray, $passWord);
		}
	}

	//if the user doesn't care whether the words are hyphenated or possessive, add the selected word to the pass-phrase array
	else {
		array_push($phraseArray, $passWord);
	}

}

//concatenate pass-phrase into a string

for ($k = 0; $k<$count; $k++) {
	$passPhrase = $passPhrase.array_pop($phraseArray);

//this 'if' statement means that on the last pass through, the concatenating symbols won't be appended at the end of the phrase
	if ($k<$count-1) {
	$passPhrase = $passPhrase."**";
	}
}

//if the user wants a number appended at the end of the pass-phrase, append the one ($randomNumber) created in variables.php
if (array_key_exists ("number", $_GET)) {
	$passPhrase = $passPhrase.$randomNumber;
}

//if the user wants a symbol appended at the end of the pass-phrase, append a random one from the array created in variables.php
if (array_key_exists ("symbol", $_GET)) {
	$passPhrase = $passPhrase.$randomSymbol;
}

?>