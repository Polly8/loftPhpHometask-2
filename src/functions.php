<?php

// task 1


$myHobbies = ['Пение', 'Бокс', 'Программирование', 'Паркур', 'Плавание под водой'];


function showHobbies($array, $param = false){


	if ($param === true) {

		return implode(', ', $array);

	}else {

		foreach($array as $hobby) {

			echo '<p>' . $hobby . '</p>';
		}
	}
}


$result = showHobbies($myHobbies, true);

showHobbies($myHobbies);

echo $result;
echo '</br>';





//task 2 - Есть вопросы по данному заданию


function calcNumbers(string $operation, ...$numbers){

	if ($operation == '+') {

		$result = 0;

		foreach ($numbers as $number) {

			$result += $number;
		}

		echo $result;

	}elseif ($operation == '-') {

		$result = $numbers[0];

		for ($i = 1; $i <= sizeof($numbers); $i++) {

			$result -= $numbers[$i];
		}

		echo $result;


	}elseif ($operation == '*') {

		$result = 1;

		foreach ($numbers as $number) {

			$result *= $number;
		}

		echo $result;

	}elseif ($operation == '/') {

		$result = $numbers[0];

		for ($x = 1; $x <= sizeof($numbers); $x++) {

			echo $result /= $numbers[$x];

		}

	}
}

calcNumbers('/', 8, 2);





//task 3


function buildTable($num1, $num2){

	if (is_int($num1) && is_int($num2)) {

		echo '<table cellspacing="10">';

		for ($y=1; $y <= $num1; $y++) {

			echo '<tr>';

			for ($x=1; $x <= $num2; $x++) {

				echo '<td align="center">' . $y*$x . '</td>';

			}

		}
	}else {

		echo 'Введите целые числа';

	}
}


buildTable(5,7);

echo '</br>';





//task 4


$today = date('d.m.y h:i');

$unixTime = date('d.m.y  h:i:s', time());

echo $today . '</br>';

echo $unixTime . '</br>';





//task 5   Не смогла разобраться как убрать ВСЕ "К" с помощью trim(), поэтому использовала do-while


$phrase1 = 'Карл у Клары украл Кораллы';

do {

	$phrase1 = str_replace('К', '', $phrase1);

} while (strpos($phrase1, 'K') !== false);


echo $phrase1 . '<br>';




$phrase2 = 'Две бутылки лимонада';

$result2 = str_replace('Две', 'Три', $phrase2);

echo $result2 . '<br>';






//task 6


$fp = fopen('test.txt', 'w');
fwrite($fp, 'Hello again!');
fclose($fp);

function readingFile($fileName) {

	fopen($fileName, 'r');
	echo readfile($fileName) . '<br>';

}

readingFile('test.txt');




?>