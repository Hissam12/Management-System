<?php
 if(isset($_POST['email']))
{


$email = $_POST['email'];
$user_password = $_POST['psw'];


$server = 'localhost';
$username = 'root';
$db_password = '';

// Connect to the database
$conn = mysqli_connect($server,$username,$db_password);

// Check if a user with the entered email address exists
$sql = "SELECT `password` FROM `registeration`.`staffadmin` WHERE `email` like '$email'";//aal tuples in $query
$result = $conn->query($sql);//connect query and mysql so all values will be in result $query will go in mysql

if ($result->num_rows  > 0) {//if any value in result result could be empty if no email matched in database
  // Retrieve the password for the user
  $user = mysqli_fetch_assoc($result);//used to fetch all attributes in $user
  $stored_password = $user['password']; // select attribute or column 'password'
  $user_password = $_POST['psw'];
  // Compare the entered password with the stored password
  if ($user_password == $stored_password) { // to verify password

    // The email and password combination is correct
    echo "Login successful";
    
    
    // Redirect the user to their dashboard page
    header("Location: adminpage.html");
 
    


    exit();
  } else {
    // The entered password is incorrect
    echo "Incorrect password";
  }
} else {
  // The entered email address is not registered
  echo "Email address not found";
}


//Close the database connection
mysqli_close($conn);
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

</head>

<style>
    body {
        background-image: url(https://coolbackgrounds.io/images/unsplash/anders-jilden-medium-5d01610e.jpg);
        background-size: cover;
        background-attachment: fixed;
        padding: 20px;
    }
    .my
    {
        @media only screen and (min-width:1024px)

        {
            margin-top:100px;
        }
    }
</style>


<body>
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12 col-md-12">
                <div class="row my">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <h1 class="mt-5 text-uppercase text-white text-center">
                           user Sign up
                        </h1>

                        <form action="staffsignin.php" method="post">




                            <div class="input-group mb-3">
                                
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope"></i></span>
                                <input type="email" placeholder="Enter Email" name="email" required class="form-control"  
                                    aria-label="Username" aria-describedby="basic-addon1">
                            </div>


                            <div class="input-group mb-3">
                                
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-lock"></i></span>
                                <input type="password" placeholder="Enter Password" name="psw" required class="form-control"  
                                    aria-label="Username" aria-describedby="basic-addon1">
                            </div>

                               
 



                                <div>
                                    <label>
                                        <input type="checkbox" checked="checked" name="remember"> Remember me
                                    </label>
                                </div>
                                <button type="submit" class="w-100 btn btn-primary" name="submit">Login </button>
                            

                            <div class="mt-3">
                                <button type="button"  class="btn btn-danger w-100 ">

                                    <a href="loginmain.html" class="btnback text-white text-decoration-none">cancel</a>



                                </button>
                            </div>
                                <span class="psw"> <a
                                        href="#" class="text-decoration-none text-white">Forgot password?</a></span>
                            </div>
                        </div>


                        </form>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>