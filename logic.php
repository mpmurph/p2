<?php

require("variables.php");
require("functions.php");

//execute this logic only if the user has selected a word list (or word lists)
if (isset($wordLists)) {

	//create a for loop that will select a random word from the user selected lists 
	//the loop will run through the same number of times as the number of words the 
	//user requested in their pass phrase

	for ($i=1; $i<=$count; $i++) {

		$wordList = $wordLists[array_rand($wordLists)]; //randomly choose a word list from those the user selected

		$line = rand(1, lineCount($wordList)); //count the lines in that list and randomly select a line number

		$openWordList = fopen("wordlists/$wordList", "r"); //open the randomly selected word list and assign it to a variable
		$j = 0; //establish a counter

		while (!feof($openWordList) and ($j <$line)) { //cycle through the open word list until you come to the randomly selected line
			$passWord = rtrim(fgets($openWordList)); //store the word at that line to the $passWord variable and make sure it doesn't have any trailing spaces
			$j++; //increment the counter
		}

		fclose($openWordList); //close the word list

		//if the user wants only non-hyphenated and non-possessive words, make sure the selected word ($passWord) is free of those characters
		if (array_key_exists ("alphaonly", $_GET)) {
			
			//if the word under consideration has a non-alphabetical character, step the counter back by one and find a new word
			if (!preg_match("/^[A-z]*$/", $passWord) ) {
				$i--;
			}

			//if the word under consideration is made up of only alphabetic characters, add it to the pass-phrase array
			else {
			array_push($phraseArray, $passWord);
			}
		}

		//if the user doesn't care whether the words are hyphenated or possessive, add the selected word to the pass-phrase array
		else {
			array_push($phraseArray, $passWord);
		}

	}

	//concatenate the pass-phrase array into a string
	for ($k = 0; $k<$count; $k++) {
		$passPhrase = $passPhrase.array_pop($phraseArray);

		//use the given concatenation characters/spaces on all except the last word in the pass-phrase
		if ($k<$count-1) {
		$passPhrase = $passPhrase."  ";
		}
	}

	//if the user wants a number appended at the end of the pass-phrase, append the one ($randomNumber) created in variables.php
	if (array_key_exists ("number", $_GET)) {
		$passPhrase = $passPhrase.$randomNumber;
	}

	//if the user wants a symbol appended at the end of the pass-phrase, append the one ($randomSymbol) created in variables.php
	if (array_key_exists ("symbol", $_GET)) {
		$passPhrase = $passPhrase.$randomSymbol;
	}
}
