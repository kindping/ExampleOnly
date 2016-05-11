<?php
$OneCut = '1/6';
$TwoCut = '1/5';
$OneLessTwoLength = 50;

$result = calcLineLength($OneCut, $TwoCut, $OneLessTwoLength);
print_r($result);

function calcLineLength($OneCut, $TwoCut, $OneLessTwoLength) {
	$one = explode('/', $OneCut);
	$two = explode('/', $TwoCut);
	$denominator = $one[1] * $two[1];
	$numerator   = abs(($denominator / $one[1] * $one[0]) - ($denominator / $two[1] * $two[0]));
	$total       = $OneLessTwoLength * $denominator / $numerator;
	$last        = $total - ($total * $one[0] / $one[1]) - ($total * $two[0] / $two[1]);
	return [
		'total' => $total,
		'last'  => $last
	];
}
?>