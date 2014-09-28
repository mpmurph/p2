<?php

if (!array_key_exists ("submit", $_GET)) {
	$passPhrase = "will appear here";
}

else {

	reset($_GET);

	//If the user has not selected at least one word list, they are reminded to do so

	if (!array_key_exists ("james", $_GET) 
		AND !array_key_exists ("shakespeare", $_GET) 
		AND !array_key_exists ("rude", $_GET) 
		AND !array_key_exists ("nonsense", $_GET)) {
			$passPhrase = "Please select at least one word list!";
	}

	//If the user does not specify a number of words, they are reminded to do so

	if ($_GET["count"] <= 0 || $_GET["count"] > 7) {
			$passPhrase = "Please specify a number of words between 1-7!";
	}

}
