<?php
session_start();
if (isset($_POST['update'])) {
$price = $_POST['price'];
$_SESSION["decorprice"]=$price;
  
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
    <title>Update decoration price price</title>

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
    <style>
        .my
        {
            @media only screen and (min-width:1024px)
            {
                margin-top:170px;
            }
        }
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
        <div class="row my">
            <div class="col-lg-3 col-md-3"></div>
            <div class="col-lg-6 col-md-6" >

                <h1 class="text-center text-white text-uppercase">Update decoration price</h1>
                <form method="POST" action="updatedecorprice.php">
                    <div class="form-group  mb-3">
                        <label for="price" class="text-white">decor price to :</label>
                        <input type="text" class="w-100" id="price" name="price" required>
                    </div>


                    <input type="submit" class="w-100 btn btn-danger" value="Update" name="update">
                </form>
            </div>
            <div class="col-lg-3 col-md-6"></div>
        </div>
    </div>
</body>

</html>
