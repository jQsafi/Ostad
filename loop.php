<?php
/*
// Pattern 1 (triangle)
for($i=1; $i<=5; $i++){
    for($j=1; $j<=$i*4+1; $j++){
        echo " $j ";
    }
    echo PHP_EOL;
}

for ( $i = 1; $i <= 5; $i++ ) {
    for ( $j = 1; $j <= $i; $j++ ) {
        echo " * ";
    }
    echo PHP_EOL;
}

// Pattern 2 (triangle with number)

for ( $i = 1; $i <= 5; $i++ ) {
    for ( $j = 1; $j <= $i; $j++ ) {
        echo " $i ";
    }
    echo "\n";
}
for ( $i = 1; $i <= 5; $i++ ) {
    for ( $j = 1; $j <= $i; $j++ ) {
        echo " $j ";
    }
    echo PHP_EOL;
}

// Pattern 4 (Reverse Triangle)


for ( $i = 10; $i >= 1; $i-- ) {
    for ( $j = 1; $j <= $i; $j++ ) {
        echo " * ";
    }
    echo PHP_EOL;
}


// Pattern 7 (Pyramid)

$rows = 10;
for ( $i = 1; $i <= $rows; $i++ ) 
{
    for ( $j = 1; $j <= $rows - $i; $j++ ) 
    {
        echo "  ";
    }
    for ( $j = $i; $j <= $i * 2 - 1; $j++ ) {
        //  echo  " ";
        echo "  * ";
    }
    echo "\n";
}
*/
// $n=5;
// for($i=1;$i<=$n;$i++)
// {
//     for ( $j = 1; $j <= $n - $i; $j++ ) 
//     {
//         echo $j;
//     }
//     for($j=1;$j<=$i;$j++)
//     {
//         echo " *";
//     }
//     echo PHP_EOL;
// }


// $numbers = array(1, 2, 3, 4, 5);
// $i = 0;
// do {
// echo $numbers[$i];
// $i++;
// } while ($i < count($numbers));

//$numbers = array(1, 2, 3, 4, 5);                       $sum = 0;                       foreach ($numbers as $number) {                       if ($number % 2 == 0) {                       continue;                       }                       $sum += $number;                       }                       echo $sum;

// function strFunc($str) 
// {  
//     if (strlen($str) == 0) 
//     {  return "";  } 
//     else 
//     {  
//         return strFunc(substr($str, 1)) . substr($str, 0, 1);  
//     }  
// }  
// echo strFunc('hello');

$foo = function ($x) { return $x * 2;  };  $bar = function ($x) use ($foo) {  return $foo($x) + 1;  };  echo $bar(5);