<?php
session_start();
if (isset($_POST['update'])) {
$price = $_POST['price'];
 $_SESSION["oprice"]=$price;
  
  $server = 'localhost';
  $uname = 'root';
  $password = '';
  
  $conn = mysqli_connect($server, $uname, $password);

  if (!$conn) {
    die("Connection to this database failed" . mysqli_connect_error());
  }
  
//   $sql = "UPDATE `order`.`bookgrave` SET `price`='$price'";

//   if ($conn->query($sql)) {
//     header("Location: http://localhost/pr/userdashboard.php");
//     exit();
//   } else {
//     echo "<p align='left'><font color='blue' size='6pt'>ERROR</p>";
//   }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update price</title>
    <link rel="stylesheet" href="updaterecord.css">
</head>
<body>
    <div class="container">
        <h1>Update price</h1>
        <form method="POST" action="updateprice.php">
            <div class="form-group">
                <label for="price">order price to :</label>
                <input type="text" id="price" name="price" required>
            </div>
   
       
            <input type="submit" value="Update" name="update">
        </form>
    </div>
</body>
</html>
