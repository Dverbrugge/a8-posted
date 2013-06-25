<?php

$adverb=$_POST["adv"];
$adjective=$_POST["adj"];
$noun=$_POST["noun"];
$verb=$_POST["verb"];
$pronoun=$_POST["pronoun"];

$to="don@mvdesigngroupinc.com";
$subject="Madlib example";

$message="Please fill out this form to find Mary's lamb?";



$headers = "From:don@mvdesigngroupinc.com" . "\r\n" .
 "Reply-To:don@mvdesigngroupinc.com" . "\r\n" .
 "X-Mailer:PHP/" . phpversion();

mail($to, $subject, $message, $headers);
mail("don@mvdesigngroupinc.com", "My subject", $message);

$variable_1 = "Mary had a little " . $noun . " " . $pronoun; 
$variable_2 = " fleece was " . $adjective . " as snow ";
$variable_3 = " and everywhere that Mary went the "  . $noun;
$variable_4 = " was" . $noun  "the " . $noun . " was " . $adverb . " to " . $verb;

$combined = $variable_1  .  $variable_2  .  $variable_3  .  $variable_4 ;
echo $combined; 



$message=wordwrap($message, 70, "\r\n");



?>