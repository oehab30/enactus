<?php

include 'database.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $department = $_POST['department'];

  // Insert user into database
  $sql = "INSERT INTO users (userName,password, Email,DepID) VALUES (?, ?, ?,?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ssss", $username, $password, $email,$department);

  if ($stmt->execute()) {
      echo "Registration successful! <a href='../enact/front.html'>Login Here</a>";
  } else {
      echo "Error: " . $stmt->error;
  }


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<h1> registerd complete </h1>
</body>
</html>

