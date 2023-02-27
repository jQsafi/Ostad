<!DOCTYPE html>
<html>
<head>
    <!--
        miligram CSS লাইব্রেরী ব্যবহার করেছি মিনিমাম লুক এন্ড ফিলের জন্য
    -->
	<title>Assignment for Module-5</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>
<body style="padding: 50px;">
<div class="row">
<div class="column column-50 column-offset-25">

<div class="button button-outline column column-50 column-offset-25">Assignment for Module-5</div>
<form action="" method="post">
  <fieldset>
    <label for="nameField">Name</label>
    <input type="text" placeholder="Name" id="name" name="profile[name]">
    <label for="Email">Email</label>
    <input type="email" placeholder="Email" id="email" name="profile[email]">
    <input class="button-primary" type="submit" value="Send">
  </fieldset>
</form>
<!-- পি,এইচ,পি কোডের শুরু।  এই ক্লাসের জন্য আলাদা ফাইল করলে ভালো হত। কিন্তু এসাইনমেন্টের 
সুবিধার জন্য এখানেই ক্লাস ডিফাইন করলাম-->
<?php
class Person 
{
    private $name;
    private $email;

    public function setName($name) 
    {
        $this->name = $name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }
}

if(count($_POST))
{
    $profile=$_POST['profile'];
    $person=new Person();
    $person->setName($profile['name']);
    $person->setEmail($profile['email']);
    $name=$person->getName();
    $email=$person->getEmail();
    ?>
        <button class="button button-outline">Name: </button> 
        <button class="button button-black"><?=$name?></button><br>
        <button class="button button-outline">Email: </button> 
        <button class="button button-black"><?=$email?></button>
    <?php
}

?>
</div>
</div>
</body>
</html>