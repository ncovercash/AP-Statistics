<?php

$results = [];

echo "Round #  Number of Men\n";

for ($i=1; $i<=1000000; $i++) {
	$numberOfMenChosen = 1;

	$randomNumber = random_int(0, 99);

	while ($randomNumber > 6) {
		$randomNumber = random_int(0, 99);
		$numberOfMenChosen++;
	}

	$results[] = $numberOfMenChosen;

	echo $i.str_repeat(" ", 9-strlen($i)).$numberOfMenChosen."\n";
}

echo "Average number of men chosen in each round: ".number_format(array_sum($results)/1000000, 3)."\n";
