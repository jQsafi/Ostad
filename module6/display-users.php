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
    
    <table class="table table-bordered">
  <thead>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Profile Picture</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $file = fopen("users.csv", "r");
    while (($data = fgetcsv($file)) !== false) {
      echo "<tr>";
      echo "<td>{$data[0]}</td>";
      echo "<td>{$data[1]}</td>";
      echo "<td><img src=\"{$data[2]}\" height=\"100\"></td>";
      echo "</tr>";
    }
?>
  </tbody>
    </table>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto">
  <a href="index.php" class="btn btn-primary" type="button">Back to home</a>
  
</div>
    </div>
  </div>
</body>
</html>