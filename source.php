<?php	// Emacs settings: -*- mode: Fundamental; tab-width: 4; -*-

function oneFile($name) {
	// Output an anchor tag for listing the given file
	?>
<a href="lister.php?file=<?php echo htmlentities(urlencode($name)) ?>"><?php
	echo htmlentities($name) ?></a><?php
}

?>
<!DOCTYPE HTML>
<html manifest="manifest.php">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=440">
<link href="minesweeper.css" rel=stylesheet>
<style type="text/css">
.smileys {
	margin: 1em;
	text-align: center;
	background-color: #cccccc;
}
.smileys img {
	padding: 0.25em;
	vertical-align: middle;
	width: 24px;
	height: 24px;
}
</style>
<title>Minesweeper source code</title>
</head>
<body>
<div class="main limited">
<div class=title>
Minesweeper Source Code
</div>
For educational purposes, you may read the source code of this program.
If you want to do anything other than read it, and execute it on this web
site, ask <a href="../me/">me</a> for permission.
<p>
The HTML comes in three top-level pages
(<?php oneFile("index.php") ?>,
<?php oneFile("intermediate.php") ?>, and
<?php oneFile("expert.php") ?>).
From the browser&rsquo;s view, each of these is static HTML,
but on the server they each used a script (<?php oneFile("minesweeper.php")
?>) to construct the playing area.
<p>
The game play is implemented entirely in your browser, by the client-side script (<?php oneFile("minesweeper.js") ?>).
<p>
The page layout is controlled by a style sheet
(<?php oneFile("minesweeper.css") ?>).
The graphics use some Unicode characters (&ldquo;&#x221E;&rdquo;,
&ldquo;&#x2600;&rdquo;, and &ldquo;&#x00D7;&rdquo;)
and the smiley images:
<div class=smileys>
<img src="bored.gif" alt=bored>&nbsp;
<img src="erasing.gif" alt=erasing>&nbsp;
<img src="happy.gif" alt=happy>&nbsp;
<img src="sad.gif" alt=sad>
</div>
There&rsquo;s also this page (<?php oneFile("source.php") ?>),
and some files related to my overall site design.
<hr class=decoration>
<?php require("mlinks-php.txt") ?>
</div>
</body>
</html>