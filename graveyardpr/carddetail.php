<?php
 session_start();

if(isset($_POST['cardnumber']))
{
    $cardname = strval($_POST['cardholdersname']);
    $cardnumber = strval($_POST['cardnumber']);
    $cardexpire = strval($_POST['cardexp']);
    $cardcvv = strval($_POST['cvv']);
    
    // echo "<p align='left'> <font color=blue  size='6pt'>$cardname <br> $cardnumber<br>$cardexpire<br>$cardcvv";


$server = 'localhost';
$uname = 'root';
$password = '';

$conn = mysqli_connect($server, $uname, $password);

if (!$conn) {
  die("Connection to this database failed" . mysqli_connect_error());
}
// echo "hello";
$sql = "INSERT INTO `payment`.`addcreditcard` (`CardholdersName`, `CardNumber`, `Expire`, `Cvv`) 
        VALUES ('$cardname', '$cardnumber', '$cardexpire', '$cardcvv');";




if ($conn->query($sql)) {
  echo "INSERTED";
} else {
  echo "ERROR";
}
}


?>


<!doctype html>
<html lang="en">

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
    <link rel="stylesheet" href="plugins/css/index.css">
    <link rel="stylesheet" href="plugins/css/slider.css">
     


    <title>Hello, world!</title>
</head>

<body>
    <section class="p-4 p-md-5" style="background-color: rgb(245, 220, 241);">
  <div class="row d-flex justify-content-center">
    <div class="col-md-10 col-lg-8 col-xl-5">
      <div class="card rounded-3">
        <div class="card-body p-4">
          <div class="text-center mb-4">
            <h3>Settings</h3>
            <h6>Payment</h6>
          </div>
            <!-- <p class="fw-bold mb-4 pb-2">Saved cards:</p>

            <div class="d-flex flex-row align-items-center mb-4 pb-1">
              <img class="img-fluid" src="https://img.icons8.com/color/48/000000/mastercard-logo.png" />
              <div class="flex-fill mx-3">
                <div class="form-outline">
                  <input type="text" id="formControlLgXc" class="form-control form-control-lg"
                    value="**** **** **** 3193" name="credit_card"/>
                  <label class="form-label" for="formControlLgXc">Card Number</label>
                </div>
              </div>
              <button class="btn btn-outline-danger"><a href="#!" class="text-decoration-none">Remove card</a></button>
              
            </div>

            <div class="d-flex flex-row align-items-center mb-4 pb-1">
              <img class="img-fluid" src="https://img.icons8.com/color/48/000000/visa.png" />
              <div class="flex-fill mx-3">
                <div class="form-outline">
                  <input type="text" id="formControlLgXs" class="form-control form-control-lg"
                    value="**** **** **** 4296" />
                  <label class="form-label" for="formControlLgXs">Card Number</label>
                </div>
              </div>
              <button class="btn btn-outline-danger"><a href="#!" class="text-decoration-none">Remove card</a></button>
            </div> -->

            <p class="fw-bold mb-4">Add new card:</p>
            <form action="carddetail.php" method="post">
            <div class="form-outline mb-4">
              <input type="text" id="formControlLgXsd" class="form-control form-control-lg"
                value="Anna Doe" name='cardholdersname'/>
              <label class="form-label" for="formControlLgXsd">Cardholder's Name </label>
            </div>

            <div class="row mb-4">
              <div class="col-7">
                <div class="form-outline">
                  <input type="text" id="formControlLgXM" class="form-control form-control-lg"
                    value="1234 5678 1234 5678"name='cardnumber' />
                  <label class="form-label" for="formControlLgXM">Card Number</label>
                </div>
              </div>
              <div class="col-3">
                <div class="form-outline">
                  <input type="text" id="formControlLgExpk" class="form-control form-control-lg"
                    placeholder="MM/YYYY" name='cardexp'/>
                  <label class="form-label" for="formControlLgExpk">Expire</label>
                </div>
              </div>
              <div class="col-2">
                <div class="form-outline">
                  <input type="text" id="formControlLgcvv" class="form-control form-control-lg"
                    placeholder="Cvv" name='cvv'/>
                  <label class="form-label" for="formControlLgcvv">Cvv</label>
                </div>
              </div>
            </div>
         <a href="payment_details.html"><button class="btn btn-success btn-lg btn-block">Add card</button> </a>
            
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
     

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>


</body>

</html>