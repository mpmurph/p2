<div id="wrapper">	

	<header>
		<h1>King James Shakespeare's<br>Seemingly Rude and Nonsensical<br>Password Generator</h1>
	</header>


	<p>Welcome! This site is designed to generate an <a href="http://xkcd.com/936/">xkcd style</a> pass-phrase with 
		up to seven words. In contrast to widely used alpha-numeric-special-character passwords, the author of the 
		xkcd site postulates that it may be more secure and easier for us to use pass-phrases or combinations of 
		more easily remember-able words (see the below xkcd comic). This site will generate a single random word 
		if you choose but, the longer your pass-phrase, the more secure it will be.


		<p><span id="result">Your password:</p>
		<p><span id="actualresult"><?=$passPhrase?></span></span></p>

	<form action="index.php" method="GET">

		<h4>Pass-phrase parameters:</h4>

		<label name="count">Number of words (no more than 7):</label>
		<input type="text" id="count" name="count" />

		<br>

		<label name="number">Include a random number (1-99) at the end:</label>
		<input type="checkbox" id="number" name="number" />

		<br>

		<label name="symbol">Include a special symbol:</label>
		<input type="checkbox" id="symbol" name="symbol" />

		<br>

		<label name="alphaonly">Exclude possessives (i.e. words with apostrophes) and hyphenated words:</label>
		<input type="checkbox" id="alphaonly" name="alphaonly" />

		<br>

		<h4>Choose your word lists (minimum of 1):</h4>

		<label name="james">King James Bible:</label>
		<input type="checkbox" id="james" name="james" />

		<br>

		<label name="shakespeare">Shakespeare's Plays:</label>
		<input type="checkbox" id="shakespeare" name="shakespeare" />

		<br>

		<label name="nonsense">Nonsense Words:</label>
		<input type="checkbox" id="nonsense" name="nonsense" />

		<br>

		<label name="rude">Words That Sound Rude (<a href="http://mentalfloss.com/article/58036/50-words-sound-rude-actually-arent">but aren't</a>):</label>
		<input type="checkbox" id="rude" name="rude" />

		<br>
		<br>

		<input type="submit" name="submit" value="submit"/>

	</form>

	<br>
	<br>

	<a href="http://xkcd.com/936/">
	<img src="images/xkcd-comic-strip.png" alt="xkcd password comic strip">
	</a>

</div>