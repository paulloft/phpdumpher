<?php
include 'vendor/autoload.php';

$array = [1, 2 => [1, 2, [1, 2, [1, 2, 3]]], 3, 4, 5, 6, 7, 9];

\Utils\Dumphper::dump($array);

$dateStart = new DateTime('-1 day');
$dateEnd = new DateTime('now');
$diff = $dateStart->diff($dateEnd);

\Utils\Dumphper::dump($dateStart);
\Utils\Dumphper::dump($dateEnd);
\Utils\Dumphper::dump($diff);
