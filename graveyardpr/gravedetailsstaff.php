
<?php
 session_start();
if (isset($_POST['submit'])) {
  $username = $_POST['name'];
  $Age = $_POST['age'];
  $Time= $_POST['time'];
  $Phone= $_POST['phone'];
  $Address= $_POST['address'];
  $Religion= $_POST['religion'];
  $buriedloc= $_POST['buriedlocation'];

 echo "<p align='left'> <font color=blue  size='6pt'>user name is  $username <br> age is  $Age <br> Time is  $Time <br> phone is  $Phone <br> address is  $Address <br>  ";

  $server = 'localhost';
  $uname = 'root';
  $password = '';
  
  $conn = mysqli_connect($server, $uname, $password);

  if (!$conn) {
    die("Connection to this database failed" . mysqli_connect_error());
  }
  // echo "hello";
  $sql = "INSERT INTO `grave`.`gravedetails`(`Name`, `age`, `Phonenumber`, `Address`, `religion`, `Date`, `buriedlocation`) 
        VALUES ('$username','$Age', '$Phone','$Address','$Religion','$Time','$buriedloc' );";

if ($conn->query($sql)) {
    // redirect first
    header("Location:http://localhost/pr/adminpage.html");
    // then output message after redirecting
    echo "INSERTED";
} else {
    // output error message
    echo "<p align='left'><font color=blue size='6pt'>ERROR</p>";
}

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Regsiterinfo</title>
    <link rel="stylesheet" href="register.css">
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        body {
            background-image: url(lastrites.jpg);
            background-size: cover;
            background-attachment: fixed;
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="conainer-fluid mt-5">
        <div class="row mt-5">
            <div class="col-lg-12 col-md-12 col-sm-6 text-center">
                <div class="row">
                    <div class="col-lg-4 col-md-3"></div>
                    <div class="col-lg-4 col-md-6">
                        <h1>Deceased Info form</h1>
                        <form action="gravedetailsstaff.php" method="post">
                            <div class="input-group mt-3  mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                                <input type="text" name="name" class="form-control" placeholder="enter name" aria-label="Username"
                                    aria-describedby="basic-addon1">
                            </div>


                            <div class="input-group mb-3">
                                
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                                <input type="number" name="age" class="form-control" placeholder="enter age"
                                    aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                                <input type="time" name="time" class="form-control" name="" placeholder="enter time of death"
                                    aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                             
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-telephone"></i></span>
                                <input type="text" name="phone" class="form-control" placeholder="Enter your phone number"
                                    aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-house"></i></span>
                                <input type="text" name="address" class="form-control" placeholder="Enter your address"
                                    aria-label="Username" aria-describedby="basic-addon1">
                            </div>

                            
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-house"></i></span>
                                <input type="text" name="religion" class="form-control" placeholder="Enter your religion"
                                    aria-label="religion" aria-describedby="basic-addon1">
                            </div>
                        
                            <div class="input-group mb-3">
                                
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                                <input type="text" name="buriedlocation" class="form-control" placeholder="enter buried location"
                                    aria-label="buriedlocation" aria-describedby="basic-addon1">
                            </div>
                            <input type="submit" class="button btn-danger" name="submit" value="submit" />

</div>
                  
                    </form>

                    </div>
                    <div class="col-lg-4 col-md-3"></div>
                </div>
            </div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>