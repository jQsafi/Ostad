<?php
$n = 50;
$first = 0;
$second = 1;

echo "The first $n terms of the Fibonacci sequence are: \n";

for ($i = 0; $i < $n; $i++) 
{
    echo $first, " ";
    $third = $first + $second;
    $first = $second;
    $second = $third;
}