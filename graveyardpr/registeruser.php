
<?php
 session_start();
if (isset($_POST['signup_submit'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $psw = $_POST['password'];
  // $hashed_password = password_hash($psw, PASSWORD_DEFAULT);
  echo "<p align='left'> <font color=blue  size='6pt'>Welcome $username <br> Your email address is $email ";
  $_SESSION["uname"] = $username;
  $_SESSION["email"] = $email;
  $_SESSION["passw"] = $psw;
  echo   $_SESSION["uname"];

  $server = 'localhost';
  $uname = 'root';
  $password = '';
  
  $conn = mysqli_connect($server, $uname, $password);

  if (!$conn) {
    die("Connection to this database failed" . mysqli_connect_error());
  }
  // echo "hello";
  $sql = "INSERT INTO `registeration`.`user`(`sid`, `username`, `email`, `password`, `date`) 
          VALUES (NULL,'$username','$email', '$psw', CURRENT_TIMESTAMP());";

  if ($conn->query($sql)) {
    echo "INSERTED";
  } else {
    echo "ERROR";
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
    <title>Login</title>
    <style>
        .bi-google {
            background: conic-gradient(from -45deg, #ea4335 110deg, #4285f4 90deg 180deg, #34a853 180deg 270deg, #fbbc05 270deg) 73% 55%/150% 150% no-repeat;
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            -webkit-text-fill-color: transparent;

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
        <div class="row">
            <div class="col-lg-3">

            </div>
            <div class="col-lg-6 col-md-12  mt-5 ">
                <div class="row  my-auto">
                    <div class="login mb-3">
                        <h2 class="text-white text-uppercase text-center">Welcome to graveyard managemant system user registration page
                            </h2>
                    </div>

                    <form action="registeruser.php" method="post">
                        <div class=" mb-3 mt-3">

                            <div class="input-group mb-3   ">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                                <input type="email" name="username" class="form-control" placeholder="Username" aria-label="Username"
                                    aria-describedby="basic-addon1">
                                    
                            </div>
                            <div class="mb-3">

                                <div class="input-group mb-3   ">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope"></i></span>
                                    <input type="password" class="form-control " name="email" placeholder="E-mail"
                                        aria-label="Username" aria-describedby="basic-addon1">

                                        
                                </div>

                            </div>
                            <div class="mb-3">

                                <div class="input-group mb-3   ">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-lock"></i></span>
                                    <input type="password" class="form-control " name="password" placeholder="Password"
                                        aria-label="Username" aria-describedby="basic-addon1">

                                        
                                </div>

                            </div>


                             


                             

                            <input type="submit" class="btn w-100 btn-danger" name="signup_submit" value="Sign me up" />
                        </div>


                </div>
                <div>
                    <a href="https://www.facebook.com/login.php/"> <button class="btn btn-primary  my-2 w-100 border border-primary text-center"> <span
                                class="text-white">
                                <i class="bi bi-facebook"></i> Sign in with facebook</span>
                        </button></a>

                </div>

                <a href="#"><button class="btn btn-primary  my-2 w-100 border border-primary text-center"> <span
                            class="text-white">
                            <i class="bi bi-google"></i> Sign in with google</span>
                    </button></a>

                <div>
                    </form>
                    <p><a href="https://accounts.google.com/v3/signin/identifier?dsh=S-318587521%3A1679155612899673&continue=https%3A%2F%2Fwww.google.com%3Fhl%3Den-US&ec=GAlA8wE&hl=en&flowName=GlifWebSignIn&flowEntry=AddSession"
                            class=" text-center text-dark mt-3 d-flex justify-content-center text-decoration-none"> Dont
                            have an account?Register </a></p>
                </div>

            </div>
        </div>
        <div class="col-lg-3">

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