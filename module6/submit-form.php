<?php
// প্রত্যেকটা ফিল্ড দিতে হবে।
if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password']) || empty($_FILES['profile-pic'])) {
  die('Please fill out all fields.');
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$profilePic = $_FILES['profile-pic'];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  die('Please enter a valid email address.');
  // এখানে ইমেইল আইডির ফরম্যাট চেক করা হচ্ছে।
}

// ফাইলের নামের সাথে টাইমস্ট্যাম্প যোগ করা হচ্ছে
$timestamp = time();
$filename = 'uploads/' . $timestamp . '_' . $profilePic['name'];
if (!move_uploaded_file($profilePic['tmp_name'], $filename)) {
  die('Failed to save profile picture.');
}

// Save the user's name, email, and profile picture filename to a CSV file
$data = array($name, $email, $filename);
$fp = fopen('users.csv', 'a');
fputcsv($fp, $data);
fclose($fp);

// Start a new session and set a cookie with the user's name
session_start();
$_SESSION['name'] = $name;
setcookie('name', $name, time() + 3600);

// Redirect the user to the HTML page that displays the contents of the "users.csv" file
header('Location: display-users.php');
exit();
?>
