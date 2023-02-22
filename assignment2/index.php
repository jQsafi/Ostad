<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Random Password Generator</title>
</head>

<body>
    <div class="w3-container" style="padding: 70px;">
        <form action="" method="post" class="">
        <label>Length</label><input class="" type="number" value="8" min="6" name="length">
          <button class="w3-btn w3-blue">Search</button>
        </form>
    </div>
    <?php
        //this section is for showing result
        if(count($_POST))
        {
            $length=$_POST['length'];
            if(!$length or $length<6) $length=6;
            echo generatePassword($length);
        }
        function generatePassword($len)
        {
            $lower = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
            $upper = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
            $specials = array('!','"','#','$','%','&','\'','(',')','*','+',',','-','.','/',':',';','<','=','>','?','@','[','\\',']','^','_','`','{','|','}','~');
            $digits = array('0','1','2','3','4','5','6','7','8','9');
            $all = array($lower, $upper, $specials, $digits);

            $pwd = $lower[array_rand($lower, 1)];
            $pwd = $pwd . $upper[array_rand($upper, 1)];
            $pwd = $pwd . $specials[array_rand($specials, 1)];
            $pwd = $pwd . $digits[array_rand($digits, 1)];

            for($i = strlen($pwd); $i < max(6, $len); $i++)
            {
                $temp = $all[array_rand($all, 1)];
                $pwd = $pwd . $temp[array_rand($temp, 1)];
            }
            return str_shuffle($pwd);
        }
    ?>
</body>
</html>