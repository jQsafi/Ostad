<?php
$num = 5;
// Using if statement
if ($num > 0) 
{
    $result = 'positive';
}

if ($num < 0) 
{
    $result = 'negative';
    if( $num < -10) 
    {
        $result = 'value is below -10';
    }
}
else 
{
    $result = 'its zero';
}

echo PHP_EOL;

//solution 
//ternary nested operator 
print $num > 0 ? 'positive':($num < 0?($num<-10?'value is below -10':'negative':'its zero');
//print $num > 0 ? 'positive' : (( $num < 0 ? ( $num < -10 ? 'value is below -10' : 'negative' ) : 'its zero' ));