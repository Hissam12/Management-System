<?php
if (isset($_POST['delete'])) {
  $phone_number = $_POST['phone'];
  
  $server = 'localhost';
  $uname = 'root';
  $password = '';
  
  $conn = mysqli_connect($server, $uname, $password);

  if (!$conn) {
    die("Connection to this database failed" . mysqli_connect_error());
  }
  
  $sql = "DELETE FROM `order`.`bookgrave` WHERE `Phonenumber`='$phone_number';";

  if ($conn->query($sql)) {
    header("Location: http://localhost/pr/userdashboard.php");
    exit();
  } else {
    echo "<p align='left'><font color='blue' size='6pt'>ERROR</p>";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css"
        integrity="sha384-eoTu3+HydHRBIjnCVwsFyCpUDZHZSFKEJD0mc3ZqSBSb6YhZzRHeiomAUWCstIWo" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <title>Delete Record</title>
    <link rel="stylesheet" href="deleterecord.css">
    <style>
        
    </style>
</head>
<body style="background-color: rgba(170, 170, 189, 0.563);">
    <div class="row">
        <div class="col-lg-1 col-md-2"></div>
        <div class="col-lg-10 col-md-8">
           <h1 class="mt-5 text-uppercase">Delete Record</h1>
    <form method="POST" action="deleterecord.php">
        <label for="phone" class="text-dark">Enter phone number to delete record:</label>
        <input type="text" id="phone" name="phone" required>
        <br><br>
        <input type="submit" value="Delete" name='delete'>
    </form>
</div>
<div class="col-lg-1 col-md-2"></div>
</div>
</body>
</html>


