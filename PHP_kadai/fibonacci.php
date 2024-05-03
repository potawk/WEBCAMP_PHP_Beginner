<?php
$a = 0;
$b = 1;
echo "{$a} \n";
echo "{$b} \n";
for($i = 1; $i <= 20; ++$i) {
	$c = $a + $b;
	$a = $b;
	$b = $c;
	echo "{$c} \n";
}