<?php
if($_POST)
{
    $login_data=$_POST['login'];
    $valid_form=true;
    $message=array();
    foreach($login_data as $data)
    {
        if(!strlen($data))
        {
            $valid_form=false;
            $message[]='You must fill all the fields';
            break;
        }
    }
    if($valid_form)
    {
        if (!filter_var($login_data['email'], FILTER_VALIDATE_EMAIL)) 
        {
            $valid_form=false;
            $message[]='Please enter a valid email address.';
            // এখানে ইমেইল আইডির ফরম্যাট চেক করা হচ্ছে।
        }
    }
    if($valid_form)
    {
        session_start();
        $regi_data=$_SESSION['regi_data'];
        if($login_data['email']==$regi_data['email'] and $login_data['password']==$regi_data['password'])
        {
            $valid_form=true;
            $message[]="Login Success full";
        }
        else
        {
            $valid_form=false;
            $message[]="Email ID and Password missmatch";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Module 8 Assignment</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
  <div class="row">
  <div class="col-3"></div>
  <div class="col-6">
    <?php
    $class='alert-danger';
    if($valid_form)
    {
        $class='alert-success';
    }
    foreach($message as $m)
    {
    ?>
        <div class="alert <?=$class?>" role="alert">
            <?=$m?>
        </div>
    <?php
    }
    ?>
    <a href="login.php" class="btn btn-info" type="button">Login</a>
    <a href="index.php" class="btn btn-success" type="button">Register</a>
  </div>
  </div>

  <!-- Include Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>