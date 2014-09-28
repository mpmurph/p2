<?php

//if no data has been submitted as yet, default the message to indicate where the password will appear
if (!array_key_exists ("submit", $_GET)) {
	$passPhrase = "will appear here";
}

else {

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
