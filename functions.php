<?php

function getName($whichArray, $letter) {
	$name = $whichArray[$letter];
	return $name[rand(0,count($name) - 1)];
}

function getNumCombinations($prefix, $postfix) {
	global $prefix;
	$num1 = 0;
	$num2 = 0;
	foreach ($prefix as $letter) {
		foreach ($letter as $combo) {
			$num1++;
		}
	}
	foreach ($postfix as $letter) {
		foreach ($letter as $combo) {
			$num2++;
		}
	}
	return $num1 * $num2;
}

function getLetter($num) {
	$letter= '';
	switch($num) {
		case 0:
			$letter = 'a';
			break;
		case 1:
			$letter = 'b';
			break;
		case 2:
			$letter = 'c';
			break;
		case 3:
			$letter = 'd';
			break;
		case 4:
			$letter = 'e';
			break;
		case 5:
			$letter = 'f';
			break;
		case 6:
			$letter = 'g';
			break;
		case 7:
			$letter = 'h';
			break;
		case 8:
			$letter = 'i';
			break;
		case 9:
			$letter = 'j';
			break;
		case 10:
			$letter = 'k';
			break;
		case 11:
			$letter = 'l';
			break;
		case 12:
			$letter = 'm';
			break;
		case 13:
			$letter = 'n';
			break;
		case 14:
			$letter = 'o';
			break;
		case 15:
			$letter = 'p';
			break;
		case 16:
			$letter = 'q';
			break;
		case 17:
			$letter = 'r';
			break;
		case 18:
			$letter = 's';
			break;
		case 19:
			$letter = 't';
			break;
		case 20:
			$letter = 'u';
			break;
		case 21:
			$letter = 'v';
			break;
		case 22:
			$letter = 'w';
			break;
		case 23:
			$letter = 'x';
			break;
		case 24:
			$letter = 'y';
			break;
		case 25:
			$letter = 'z';
			break;
	}
	return $letter;
}

?>