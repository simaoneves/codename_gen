<?php
require_once 'names.php';
require_once 'functions.php';

// Get the options
$prefix = $names[$_POST['prefix']];
$postfix = $names[$_POST['postfix']];
$sameLetter = $_POST['sameLetter'];

// Calculate how many letters are available and get a random letter
$numLettersAvailable = count($prefix) - 1;
$letter = getLetter(rand(0, $numLettersAvailable));

// Get first name
$finalPrefix = getName($prefix, $letter);
// If its not suposed to be the sameLetter, get new letter
$letter = $sameLetter ? $letter : getLetter(rand(0, $numLettersAvailable));
// Get second name
$finalPostfix = getName($postfix, $letter);

$numCombinations = getNumCombinations($prefix, $postfix);

// Build final json
$finalName = array(
	'firstName' => $finalPrefix,
	'lastName' => $finalPostfix
);

header('Content-Type: application/json');
echo json_encode($finalName);