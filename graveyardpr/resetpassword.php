<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $npass = $_POST['new_password'];

    // Check if email exists in database
    $server = 'localhost';
    $username = 'root';
    $db_password = '';
    
    $conn = mysqli_connect($server, $username, $db_password);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "SELECT `password` FROM `registeration`.`user` WHERE `email` LIKE '$email';";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // Generate new password and hash it

        
        // Update user's password
        $sql = "UPDATE `registeration`.`user` SET `password`='$npass' WHERE `email`='$email'";

        if ($conn->query($sql)) {
            header("Location: http://localhost/pr/usersignin.php");
            exit();
          } else {
            echo "<p align='left'><font color='blue' size='6pt'>ERROR</p>";
          }
    } else {
        echo "Email address not found";
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
    <title>Reset Password</title>
    <style>
        .my
        {
            @media only screen and (min-width:1024px)
            {
             margin-top: 100px;
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
            <div class="col-lg-6 col-md-6">
                <h1 class="heading mt-5 text-uppercase text-white text-center mb-4">Reset Password</h1>
                <form method="POST" action="resetpassword.php">


                    <div class="mb-3">

                        <div class="input-group mb-3   ">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope"></i></span>
                            <input type="email" class="form-control " id="email" name="email"  placeholder="Enter email"
                                aria-label="Username" aria-describedby="basic-addon1" required>

                                
                        </div>

                    </div>
                    <div class="mb-3">

                        <div class="input-group mb-3   ">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-lock"></i></span>
                            <input type="password" class="form-control " iid="new_password" name="new_password" placeholder="Enter new password"
                                aria-label="Username" aria-describedby="basic-addon1" required>

                                
                        </div>

                    </div>

                     
                    
                    <input type="submit" class="w-100 btn btn-danger" value="Reset Password" name="submit">
                </form>
            </div>
            <div class="col-lg-3 col-md-3"></div>
        </div>
    </div>
</body>

</html>

