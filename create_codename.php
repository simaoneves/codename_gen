<?php
require_once 'names.php';
require_once 'functions.php';

$prefix = $names[$_POST['prefix']];
$postfix = $names[$_POST['postfix']];
$letter = getLetter(rand(0, 4));

$finalPrefix = getName($prefix, $letter);
$finalPostfix = getName($postfix, $letter);

$finalName = array(
	'firstName' => $finalPrefix,
	'lastName' => $finalPostfix
);

header('Content-Type: application/json');
echo json_encode($finalName);