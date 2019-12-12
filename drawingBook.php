<?php

$n=6; $p=2;

$totalLeftToRight= $n/2;
$leftToRight = $p/2;

$rightToLeft = (int) ($totalLeftToRight - $leftToRight);


echo min($rightToLeft,$leftToRight);

