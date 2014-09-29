<div id="wrapper">	

	<header>

		<img src="images/james-shakespeare-header.jpg" alt="King James Shakespeare's Seemingly Rude and Nonsensical Password Generator">
		<br>

	</header>


	<p>Welcome! This site is designed to generate an <a href="http://xkcd.com/936/">xkcd style</a> pass-phrase with 
		up to seven words. In contrast to widely used alpha-numeric-special-character passwords, the author of the 
		xkcd site postulates that it may be more secure and easier for us to use pass-phrases or combinations of 
		more easily remember-able words. The below xkcd comic explains the theory succinctly. You may choose to
		generate a single random word but, the longer your pass-phrase, the more secure it will be.

		<p><span id="result">Your password:</p>

		<div id="resultbox">
			<p><span id="actualresult"><?=$passPhrase?></span></span></p>
		</div>


	<form action="index.php" method="GET">

		<h4>Pass-phrase parameters:</h4>

		<label name="count">Number of words (no more than 7):</label>
		<input type="text" id="count" name="count" <?php if (array_key_exists ("count", $_GET)) { echo "value=\"$_GET[count]\"";}?> />

		<br>

		<label name="number">Include a random number (1-99) at the end:</label>
		<input type="checkbox" id="number" name="number" <?php if (array_key_exists ("number", $_GET)) { echo "checked";}?> />

		<br>

		<label name="symbol">Include a special symbol:</label>
		<input type="checkbox" id="symbol" name="symbol" <?php if (array_key_exists ("symbol", $_GET)) { echo "checked";}?> />

		<br>

		<label name="alphaonly">Exclude possessives (i.e. words with apostrophes) and hyphenated words:</label>
		<input type="checkbox" id="alphaonly" name="alphaonly" <?php if (array_key_exists ("alphaonly", $_GET)) { echo "checked";}?> />

		<br>

		<h4>Choose your word lists (minimum of 1):</h4>

		<label name="james">King James Bible:</label>
		<input type="checkbox" id="james" name="james" <?php if (array_key_exists ("james", $_GET)) { echo "checked";}?> />

		<br>

		<label name="shakespeare">Shakespeare's Plays:</label>
		<input type="checkbox" id="shakespeare" name="shakespeare" <?php if (array_key_exists ("shakespeare", $_GET)) { echo "checked";}?> />

		<br>

		<label name="nonsense">Nonsense Words:</label>
		<input type="checkbox" id="nonsense" name="nonsense" <?php if (array_key_exists ("nonsense", $_GET)) { echo "checked";}?> />

		<br>

		<label name="rude">Words That Sound Rude (<a href="http://mentalfloss.com/article/58036/50-words-sound-rude-actually-arent">but aren't</a>):</label>
		<input type="checkbox" id="rude" name="rude" <?php if (array_key_exists ("rude", $_GET)) { echo "checked";}?> />

		<br>
		<br>

		<input type="submit" class="btn btn-success btn-lg" name="submit" value="SUBMIT"/>

	</form>

	<br>
	<br>

	<a href="http://xkcd.com/936/">
	<img src="images/xkcd-comic-strip.png" id="xkcdimg" alt="xkcd password comic strip">
	</a>

</div>