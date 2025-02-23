<?php
include 'database.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Fetch user data
    $sql = "SELECT * FROM users WHERE userName = ? And password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username , $password);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0){
        $stmt->bind_result($ID ,$userName,$pass,$Email,$DepID);
        $stmt->fetch();
    }
    else{
        echo "incorrect user name or password";
    }

    echo"<br>";
echo $userName . "<br>";
echo $Email;
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
    <h1><?php echo $Email; ?></h1>
    <h1><?php echo $userName; ?></h1>


</body>
</html>