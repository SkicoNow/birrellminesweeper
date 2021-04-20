<?php // Emacs settings: -*- mode: Fundamental; tab-width: 4; -*-

////////////////////////////////////////////////////////////////////////////
//                                                                        //
// Minesweeper, implemented in JavaScript                                 //
//                                                                        //
// Copyright 1998-2007, Andrew D. Birrell                                 //
//                                                                        //
// PHP for intermediate page                                              //
//                                                                        //
////////////////////////////////////////////////////////////////////////////

$cols = 16;
$rows = 16;
$mines = 40;

header("Content-Type: text/html; charset=UTF-8");

?>
<!DOCTYPE HTML>
<HTML manifest="manifest.php">
<HEAD>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
<META NAME="Description" CONTENT="The classic Minesweeper game (intermediate
level), running entirely in your web browser. Works when you are offline. No
ads.">
<meta name="viewport" content="width=393">
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