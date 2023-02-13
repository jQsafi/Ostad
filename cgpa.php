<?php
function resultsCGPA ($input){
    $cgpa=($input >= 4.00)?($input." is A+"):(($input >= 3.75 && $input < 4.00)?($input." is A"):(($input >= 3.50 && $input < 3.75)?($input." is A-"):(($input >= 3.25 && $input < 3.50)?($input." is B+"):(($input >= 3.00 && $input < 3.25)?($input." is B"):(($input >= 2.75 && $input < 3.00)?($input." is B-"):(($input >= 2.50 && $input < 2.75)?($input." is C+"):(($input >= 2.25 && $input < 2.50)?($input." is C"):(($input >= 2.00 && $input < 2.25)?($input." is D"):(($input >= 1.00 && $input < 2.00)?($input." is F"):(($input >= 0.00 && $input < 1.00)?($input." is F"):("Invalid Input")))))))))));
    return $cgpa;
}

echo resultsCGPA(4.00);
