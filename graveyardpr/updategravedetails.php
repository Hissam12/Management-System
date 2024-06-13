<?php
if (isset($_POST['update'])) {
$name = $_POST['name'];
$age = $_POST['age'];
$date = $_POST['date'];
$phone_number = $_POST['phone'];
$address = $_POST['address'];
$religion = $_POST['religion'];
  
  $server = 'localhost';
  $uname = 'root';
  $password = '';
  
  $conn = mysqli_connect($server, $uname, $password);

  if (!$conn) {
    die("Connection to this database failed" . mysqli_connect_error());
  }
  
  $sql = "UPDATE `grave`.`gravedetails` SET `Name`='$name', `Age`='$age', `Date`='$date',`Phonenumber`='$phone_number', `Address`='$address', `Religion`='$religion' WHERE  `Phonenumber`='$phone_number'";

  if ($conn->query($sql)) {
    header("Location: http://localhost/pr/adminpage.html");
    exit();
  } else {
    echo "<p align='left'><font color='blue' size='6pt'>ERROR</p>";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Record</title>
    <link rel="stylesheet" href="updaterecord.css">
    <style>
body {
            background-image: url(https://coolbackgrounds.io/images/unsplash/anders-jilden-medium-5d01610e.jpg);
            background-size: cover;
            background-attachment: fixed;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Update Record</h1>
        <form method="POST" action="updategravedetails.php">
            <div class="form-group" >
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="text" id="age" name="age" required>
            </div>
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="text" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone number:</label>
                <input type="text" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="religion">Religion:</label>
                <input type="text" id="religion" name="religion" required>
            </div>
            <input type="submit" style="background-color: red;width: 100%;" value="Update" name="update">
        </form>
    </div>
</body>
</html>

