<?php
session_start();
$server = 'localhost';
$username = 'root';
$db_password = '';

// Connect to the database
$conn = mysqli_connect($server, $username, $db_password);
if (isset($_SESSION['uname'])) {
    // $username = $_SESSION['uname'];
    $email = $_SESSION["semail"];
    $phone=$_SESSION["phoneforpricegbooking"];
    // $psw = $_SESSION["passw"];
    // $suname = $_SESSION["suname"];
    // echo "Welcome to your dashboard, $username!<br> your email is ,$email!<br> your passwrd is ,$psw!";

    $sql = "SELECT * FROM `order`.`bookgrave` WHERE `Phonenumber` LIKE '$phone';";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc(($result));
    $pricegravebook = $row['price'];


} else {
    echo "Session variable not set.";
}




?>
<!DOCTYPE html>
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
    <title>Document</title>
    <style>

    </style>
</head>

<body>
    <section style="background-color: #eee;">
        <div class="container py-4">
            <div class="card">
                <div class="card-body">
                    <div class="row d-flex justify-content-center pb-5">
                        <div class="col-md-7 col-xl-5 mb-4 mb-md-0">
                            <div class="py-4 d-flex flex-row">
                                <h5><span class="far fa-check-square pe-2"></span><b>ELIGIBLE</b> |</h5>
                                <span class="ps-2">Pay</span>
                            </div>
                            <h4 class="text-success">$85.00</h4>



                            <div class="pt-2">
                                <div class="d-flex pb-2">
                                    <div>
                                        <p>
                                            <b>Patient Balance <span class="text-success">$13.24</span></b>
                                        </p>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="carddetail.html"> <button class="btn btn-outline-primary">
                                                <p class="textwhite">
                                                    <i class="fas fa-plus-circle  pe-1"></i>Add payment card
                                                </p>
                                            </button></a>


                                    </div>
                                </div>
                                <p>
                                    This is an estimate for the portion of your order (not covered by
                                    insurance) due today . once insurance finalizes their review refunds
                                    and/or balances will reconcile automatically.
                                </p>
                                <form class="pb-3">
                                    <div class="d-flex flex-row pb-3">
                                        <div class="d-flex align-items-center pe-2">
                                            <input class="form-check-input" type="radio" name="radioNoLabel"
                                                id="radioNoLabel1" value="" aria-label="..." checked />
                                        </div>
                                        <div class="rounded border d-flex w-100 p-3 align-items-center">
                                            <p class="mb-0">
                                                <i class="fab fa-cc-visa fa-lg text-primary pe-2"></i>Visa Debit
                                                Card
                                            </p>
                                            <div class="ms-auto">************3456</div>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row">
                                        <div class="d-flex align-items-center pe-2">
                                            <input class="form-check-input" type="radio" name="radioNoLabel"
                                                id="radioNoLabel2" value="" aria-label="..." />
                                        </div>
                                        <div class="rounded border d-flex w-100 p-3 align-items-center">
                                            <p class="mb-0">
                                                <i class="fab fa-cc-mastercard fa-lg text-dark pe-2"></i>Mastercard
                                                Office
                                            </p>
                                            <div class="ms-auto">************1038</div>
                                        </div>
                                    </div>
                                </form>
                                <button class="btn btn-outline-primary btn-lg">Proceed to payment</button>

                            </div>
                        </div>

                        <div class="col-md-5 col-xl-4 offset-xl-1">
                            <div class="py-4 d-flex justify-content-end">
                                <h6><a href="#!">Cancel and return to website</a></h6>
                            </div>
                            <div class="rounded d-flex flex-column p-2" style="background-color: #f8f9fa;">
                                <div class="p-2 me-3">
                                    <h4>Order Recap</h4>
                                </div>
                                <div class="p-2 d-flex">
                                    <div class="col-8">grave booking order fee</div>
                                    <div class="ms-auto">$<?php echo $pricegravebook; ?>
                                    </div>
                                </div>
                                <div class="p-2 d-flex">
                                    <div class="col-8">Amount toward deductible</div>
                                    <div class="ms-auto">$0.00</div>
                                </div>
                                <div class="p-2 d-flex">
                                    <div class="col-8">Coinsurance( 0% )</div>
                                    <div class="ms-auto">+ $0.00</div>
                                </div>
                                <div class="p-2 d-flex">
                                    <div class="col-8">Copayment</div>
                                    <div class="ms-auto">+ $40.00</div>
                                </div>
                                <div class="border-top px-2 mx-2"></div>
                                <div class="p-2 d-flex pt-3">
                                    <div class="col-8">Total Deductible, Coinsurance, and Copay</div>
                                    <div class="ms-auto">$40.00</div>
                                </div>
                                <div class="p-2 d-flex">
                                    <div class="col-8">
                                        Maximum out-of-pocket on Insurance Policy (not reached)
                                    </div>
                                    <div class="ms-auto">$6500.00</div>
                                </div>
                                <div class="border-top px-2 mx-2"></div>
                                <div class="p-2 d-flex pt-3">
                                    <div class="col-8">Insurance Responsibility</div>
                                    <div class="ms-auto"><b>$71.76</b></div>
                                </div>
                                <div class="p-2 d-flex">
                                    <div class="col-8">
                                        Patient Balance <span class="fa fa-question-circle text-dark"></span>
                                    </div>
                                    <div class="ms-auto"><b>$71.76</b></div>
                                </div>
                                <div class="border-top px-2 mx-2"></div>
                                <div class="p-2 d-flex pt-3">
                                    <div class="col-8"><b>Total</b></div>
                                    <div class="ms-auto"><b class="text-success">$85.00</b></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>