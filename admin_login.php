<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "Advait@0305";
$dbname = "elex_bank";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $sql = "SELECT * FROM bank_login WHERE username='$username' AND password='$password'";
  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
    $_SESSION["username"] = $username;
    header("Location: currency_chest_dashboard.php");
  } else {
    $error = "Invalid username or password.";
  }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <style>
    form {
      border: 3px solid #f1f1f1;
      margin: 50px auto;
      padding: 20px;
      width: 50%;
    }
    input[type=text], input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }
    button {
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }
    button:hover {
      opacity: 0.8;
    }
    .error {
      color: red;
    }
  </style>
</head>
<body>
  <form class="" method="post" action="#">
    <h1>Admin Login to view summary of <br>Elex Currency chestboard</h1>
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <span class="error"><?php echo $error; ?></span>
    <button type="submit">Login</button>
  </form>
</body>
</html>
