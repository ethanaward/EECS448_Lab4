<?php

$answer1 = $_POST["Question1"];
$answer2 = $_POST["Question2"];
$answer3 = $_POST["Question3"];
$answer4 = $_POST["Question4"];
$answer5 = $_POST["Question5"];

$score = 0;
$right = 0;

$correct3 = htmlspecialchars('$_POST');
$correct4 = htmlspecialchars('<?php');

if($answer4 == "1") {
	$answer4 = htmlspecialchars('<?php');
}

else if($answer4 == "2") {
	$answer4 = htmlspecialchars('<php?');
}

else if($answer4 == "3") {
	$answer4 = htmlspecialchars('<?start');
}

else if($answer4 == "4") {
	$answer4 = htmlspecialchars('<begin?');
}

echo "<p>Question 1: What do variable names in PHP start with?</p>";
echo "Your first answer was: " . $answer1 . "<br>";
echo "The correct answer was: $<br>";

echo "<p>Question 2: What does PHP stand for?</p>";
echo "Your second answer was: " . $answer2 . "<br>";
echo "The correct answer was: Hypertext Preprocessor<br>";

echo "<p>Question 3: What is the global array in PHP called?</p>";
echo "Your third answer was: " . $answer3 . "<br>";
echo "The correct answer was: " .$correct3;

echo "<p>Question 4: What do PHP scripts start with?</p>";
echo "Your fourth answer was: " . $answer4 . "<br>";
echo "The correct answer was: " . $correct4;

echo "<p>Question 5: What is the php function for printing something?</p>";
echo "Your fifth answer was: " . $answer5 . "<br>";
echo "The correct answer was: echo";

if($answer1 == "$") {
	$score += 20;
	$right += 1;
}

if($answer2 == "Hypertext Preprocessor") {
	$score += 20;
	$right += 1;
}

if($answer3 == $correct3) {
	$score += 20;
	$right += 1;
}

if($answer4 == $correct4) {
	$score += 20;
	$right += 1;
}

if($answer5 == "echo") {
	$score += 20;
	$right += 1;
}


echo "<br><br>You got " . $right . " questions correct.";
echo "<br>Your score was: " . $score;


?>
