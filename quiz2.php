<?php
/**
 * Worst Case: 99999999,20001,00,01,0000.01
 * 
*/



function commission_calc($admission_fee,$fn)
{
    //$admission_fee=0.001;
    $commission_rate=00;
    $commission=0.00;
    $commission_rate=($admission_fee>=20000)?(25):(($admission_fee>=10000 && $admission_fee<20000)?(20):(($admission_fee>=7000 && $admission_fee<10000)?(15):(0)));
    $commission=($commission_rate>0)?($admission_fee*($commission_rate/100)):('Invalid Data');
  //  (object) $fn;
    exec($fn);
}
function print_fn($data)
{
    echo $data;
}
commission_calc(20000,'print_fn(2000)');