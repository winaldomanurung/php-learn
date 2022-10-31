<?php

// STRING
$firstname = 'Will';
$lastname = 'Smith';

// kita bisa gunakan single quote (di dalamnya kita gabisa use variable) or double quote (di dalamnya kita bisa use variable)
$name  = "{$firstname} Smith";

echo $firstname . "<br>";
echo $lastname . "<br>";
echo $name . "<br>";

// akses string index
echo $name[1] . "<br />";
echo $name[-2] . "<br />";
$name[1] = 'I';
echo $name . "<br />";

$name[15] = 'I';
echo $name . "<br />";

// selain ' ' dan " " , kita juga bisa represent string dengan Heredoc dan Nowdoc.
// heredoc treats string like they are in double quote
// nowdoc treats string like they are in single quote

// HEREDOC 
$text = <<<TEXT
Line 1 $firstname
Line 2 $lastname
Line 3 $name
TEXT;

echo $text; 
//Line 1 Will Line 2 Smith Line 3 Will Smith
echo nl2br($text) . "<br>"; 
//Line 1 Will
//Line 2 Smith
//Line 3 Will Smith

// NOWDOC 
$text = <<<'TEXT'
Line 1 $firstname
Line 2 $lastname
Line 3 $name
TEXT;
echo $text; 
//Line 1 $firstname Line 2 $lastname Line 3 $name
echo nl2br($text) . "<br>"; 
//Line 1 $firstname
//Line 2 $lastname
//Line 3 $name