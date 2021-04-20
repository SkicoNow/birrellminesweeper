<?php // Emacs settings: -*- mode: Fundamental; tab-width: 4; -*-

////////////////////////////////////////////////////////////////////////////
//                                                                        //
// Minesweeper, implemented in JavaScript                                 //
//                                                                        //
// Copyright 1998-2007, Andrew D. Birrell                                 //
//                                                                        //
// PHP for "expert" page                                                  //
//                                                                        //
////////////////////////////////////////////////////////////////////////////

$cols = 30;
$rows = 16;
$mines = 99;

header("Content-Type: text/html; charset=UTF-8");

?>
<!DOCTYPE HTML>
<HTML manifest="manifest.php">
<HEAD>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
<META NAME="Description" CONTENT="The classic Minesweeper game (expert
level), running entirely in your web browser. Works when you are offline. No
ads.">
<meta name="viewport" content="width=715">
<SCRIPT TYPE="text/javascript" SRC="minesweeper.js"></SCRIPT>
<LINK HREF="minesweeper.css" REL=stylesheet>
<TITLE>Minesweeper in Javascript</TITLE>
</HEAD>
<BODY onload="init(<?php echo "$cols, " . ($cols*$rows) . ", $mines" ?>)">
<DIV CLASS=main>
<DIV CLASS=title>
<IMG SRC="../titles/minesweeper.png" ALT="Minesweeper">
</DIV>
<?php require("minesweeper.php") ?>
<?php require("mlinks-php.txt") ?>
</DIV>
</BODY>
</HTML>