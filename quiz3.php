<?php

function number_check($number)
{
	if($number%2==0)	//even
    {
 		return 'Even';   	
    }
    else				//odd
    {
    	return 'Odd';
    }
}
echo 'Number is '.number_check(20);
echo "<br>";

$total=0;	//for storing total sum
$first_number_of_seris=1;//first number
$last_number_of_seris=100;//last number
$seris_radius=1;//radius
for($element=$first_number_of_seris;$element<=$last_number_of_seris;$element+=$seris_radius)	//loop 1 to $last_number_of_seris
{
	$total+=$element;
}
echo $total;