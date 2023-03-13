<!DOCTYPE html>
<html>
<head>
  <title>Module 6 Assignment</title>
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
    <h1>Module 6 Assignment</h1>
    <form action="submit-form.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="nameInput">Name:</label>
        <input type="text" name="name" class="form-control" id="nameInput" placeholder="Enter name">
      </div>
      <div class="form-group">
        <label for="emailInput">Email:</label>
        <input type="email"  name="email" class="form-control" id="emailInput" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="passwordInput">Password:</label>
        <input type="password"   name="password" class="form-control" id="passwordInput" placeholder="Enter password">
      </div>
      <div class="form-group">
        <label for="pictureInput">Profile Picture:</label>
        <input type="file"   name="profile-pic" class="form-control-file" id="pictureInput">
      </div>
      <button type="submit" class="btn btn-primary">Save</button>
      <a href="display-users.php" class="btn btn-info" type="button">Display Data</a>
    </form>
  </div>
  </div>

  <!-- Include Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
