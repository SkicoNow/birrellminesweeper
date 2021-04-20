<?php // Emacs settings: -*- mode: Fundamental; tab-width: 4; -*-

////////////////////////////////////////////////////////////////////////////
//                                                                        //
// Minesweeper, implemented in JavaScript                                 //
//                                                                        //
// Copyright 1998-2007, Andrew D. Birrell                                 //
//                                                                        //
// PHP for main page                                                      //
//                                                                        //
////////////////////////////////////////////////////////////////////////////

$cols = 8;
$rows = 8;
$mines = 10;

header("Content-Type: text/html; charset=UTF-8");

?>
<!DOCTYPE HTML>
<HTML manifest="manifest.php">
<HEAD>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
<META NAME="Description" CONTENT="The classic Minesweeper game, with
three difficulty levels, running entirely in your web browser. Works
when you are offline. No ads.">
<meta name="viewport" content="width=440">
<SCRIPT TYPE="text/javascript" SRC="minesweeper.js"></SCRIPT>
<LINK HREF="minesweeper.css" REL=stylesheet>
<style type="text/css">
#sqTable {
	float: right;
	margin-left: 1em;
}
</style>
<TITLE>Minesweeper in Javascript</TITLE>
</HEAD>
<BODY onload="init(<?php echo "$cols, " . ($cols*$rows) . ", $mines" ?>)">
<DIV CLASS="main limited">
<?php require("minesweeper.php") ?>
<DIV CLASS=title>
<IMG SRC="../titles/minesweeper.png" ALT="Minesweeper">
</DIV>
Clear the mines!
Expose squares one at a time by clicking on them.
If the square you click on is vacant, you'll get to see how many of its
neighbors have mines in them (0 through 8);
but if the square has a mine in it, all the mines will explode.
<P>
Shift-click (or right-click) on a square to flag it as a suspected mine.
Do it again to mark it as questionable, and again to clear the mark.
When you've exposed all the vacant squares, you win.
If a mine explodes, you lose.
Click on the face to start a new game.
<P>
The left-hand counter shows the number of mines less the number of squares
that you've flagged (correctly or not).
<P>
The version on this page is 8 by 8 with 10 mines.
See also the <A HREF="intermediate.php">intermediate</A>
(16 by 16 with 40 mines) and <A HREF="expert.php">expert</A>
(30 by 16 with 99 mines) versions.
<!-- There's also an <A HREF="java.html">older version</A>,
which was written in Java. -->
</P>
This program is written in Javascript, by
<A HREF="../me/">Andrew Birrell</A>.
You are welcome to read its <A HREF="source.php">source code</A>.
Use at your own risk!
<HR CLASS=decoration>
<?php require("../parts/goHome-php.txt") ?>
&nbsp;
</DIV>
</BODY>
</HTML>