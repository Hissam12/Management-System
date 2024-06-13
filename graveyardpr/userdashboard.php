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
    // $psw = $_SESSION["passw"];
    // $suname = $_SESSION["suname"];
    // echo "Welcome to your dashboard, $username!<br> your email is ,$email!<br> your passwrd is ,$psw!";

    $sql = "SELECT * FROM `registeration`.`user` WHERE `email` LIKE '$email';";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc(($result));
    $userName = $row['username'];
    $id=$row['sid'];
    $pass=$row['password'];
    $date=$row['date'];

} else {
    echo "Session variable not set.";
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
    <style>
        @keyframes swing {
            0% {
                transform: rotate(0deg);
            }

            10% {
                transform: rotate(10deg);
            }

            30% {
                transform: rotate(0deg);
            }

            40% {
                transform: rotate(-10deg);
            }

            50% {
                transform: rotate(0deg);
            }

            60% {
                transform: rotate(5deg);
            }

            70% {
                transform: rotate(0deg);
            }

            80% {
                transform: rotate(-5deg);
            }

            100% {
                transform: rotate(0deg);
            }
        }

        @keyframes sonar {
            0% {
                transform: scale(0.9);
                opacity: 1;
            }

            100% {
                transform: scale(2);
                opacity: 0;
            }
        }

        body {
            font-size: 0.9rem;
        }

        .page-wrapper .sidebar-wrapper,
        .sidebar-wrapper .sidebar-brand>a,
        .sidebar-wrapper .sidebar-dropdown>a:after,
        .sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a:before,
        .sidebar-wrapper ul li a i,
        .page-wrapper .page-content,
        .sidebar-wrapper .sidebar-search input.search-menu,
        .sidebar-wrapper .sidebar-search .input-group-text,
        .sidebar-wrapper .sidebar-menu ul li a,
        #show-sidebar,
        #close-sidebar {
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }

        /*----------------page-wrapper----------------*/

        .page-wrapper {
            height: 100vh;
        }

        .page-wrapper .theme {
            width: 40px;
            height: 40px;
            display: inline-block;
            border-radius: 4px;
            margin: 2px;
        }

        .page-wrapper .theme.chiller-theme {
            background: #1e2229;
        }

        /*----------------toggeled sidebar----------------*/

        .page-wrapper.toggled .sidebar-wrapper {
            left: 0px;
        }

        @media screen and (min-width: 768px) {
            .page-wrapper.toggled .page-content {
                padding-left: 300px;
            }
        }

        /*----------------show sidebar button----------------*/
        #show-sidebar {
            position: fixed;
            left: 0;
            top: 10px;
            border-radius: 0 4px 4px 0px;
            width: 35px;
            transition-delay: 0.3s;
        }

        .page-wrapper.toggled #show-sidebar {
            left: -40px;
        }

        /*----------------sidebar-wrapper----------------*/

        .sidebar-wrapper {
            width: 260px;
            height: 100%;
            max-height: 100%;
            position: fixed;
            top: 0;
            left: -300px;
            z-index: 999;
        }

        .sidebar-wrapper ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .sidebar-wrapper a {
            text-decoration: none;
        }

        /*----------------sidebar-content----------------*/

        .sidebar-content {
            max-height: calc(100% - 30px);
            height: calc(100% - 30px);
            overflow-y: auto;
            position: relative;
        }

        .sidebar-content.desktop {
            overflow-y: hidden;
        }

        /*--------------------sidebar-brand----------------------*/

        .sidebar-wrapper .sidebar-brand {
            padding: 10px 20px;
            display: flex;
            align-items: center;
        }

        .sidebar-wrapper .sidebar-brand>a {
            text-transform: uppercase;
            font-weight: bold;
            flex-grow: 1;
        }

        .sidebar-wrapper .sidebar-brand #close-sidebar {
            cursor: pointer;
            font-size: 20px;
        }

        /*--------------------sidebar-header----------------------*/

        .sidebar-wrapper .sidebar-header {
            padding: 20px;
            overflow: hidden;
        }

        .sidebar-wrapper .sidebar-header .user-pic {
            float: left;
            width: 60px;
            padding: 2px;
            border-radius: 12px;
            margin-right: 15px;
            overflow: hidden;
        }

        .sidebar-wrapper .sidebar-header .user-pic img {
            object-fit: cover;
            height: 100%;
            width: 100%;
        }

        .sidebar-wrapper .sidebar-header .user-info {
            float: left;
        }

        .sidebar-wrapper .sidebar-header .user-info>span {
            display: block;
        }

        .sidebar-wrapper .sidebar-header .user-info .user-role {
            font-size: 12px;
        }

        .sidebar-wrapper .sidebar-header .user-info .user-status {
            font-size: 11px;
            margin-top: 4px;
        }

        .sidebar-wrapper .sidebar-header .user-info .user-status i {
            font-size: 8px;
            margin-right: 4px;
            color: #5cb85c;
        }


        /*----------------------sidebar-menu-------------------------*/

        .sidebar-wrapper .sidebar-menu {
            padding-bottom: 10px;
        }

        .sidebar-wrapper .sidebar-menu .header-menu span {
            font-weight: bold;
            font-size: 14px;
            padding: 15px 20px 5px 20px;
            display: inline-block;
        }

        .sidebar-wrapper .sidebar-menu ul li a {
            display: inline-block;
            width: 100%;
            text-decoration: none;
            position: relative;
            padding: 8px 30px 8px 20px;
        }

        .sidebar-wrapper .sidebar-menu ul li a i {
            margin-right: 10px;
            font-size: 12px;
            width: 30px;
            height: 30px;
            line-height: 30px;
            text-align: center;
            border-radius: 4px;
        }

        .sidebar-wrapper .sidebar-menu ul li a:hover>i::before {
            display: inline-block;
            animation: swing ease-in-out 0.5s 1 alternate;
        }

        .sidebar-wrapper .sidebar-menu .sidebar-dropdown>a:after {
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            content: "\f105";
            font-style: normal;
            display: inline-block;
            font-style: normal;
            font-variant: normal;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-align: center;
            background: 0 0;
            position: absolute;
            right: 15px;
            top: 14px;
        }

        .sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu ul {
            padding: 5px 0;
        }

        .sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li {
            padding-left: 25px;
            font-size: 13px;
        }

        .sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a:before {
            content: "\f111";
            font-family: "Font Awesome 5 Free";
            font-weight: 400;
            font-style: normal;
            display: inline-block;
            text-align: center;
            text-decoration: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            margin-right: 10px;
            font-size: 8px;
        }

        .sidebar-wrapper .sidebar-menu ul li a span.label,
        .sidebar-wrapper .sidebar-menu ul li a span.badge {
            float: right;
            margin-top: 8px;
            margin-left: 5px;
        }

        .sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a .badge,
        .sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a .label {
            float: right;
            margin-top: 0px;
        }

        .sidebar-wrapper .sidebar-menu .sidebar-submenu {
            display: none;
        }

        .sidebar-wrapper .sidebar-menu .sidebar-dropdown.active>a:after {
            transform: rotate(90deg);
            right: 17px;
        }



        ::-webkit-scrollbar {
            width: 5px;
            height: 7px;
        }

        ::-webkit-scrollbar-button {
            width: 0px;
            height: 0px;
        }

        ::-webkit-scrollbar-thumb {
            background: #525965;
            border: 0px none #ffffff;
            border-radius: 0px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #525965;
        }

        ::-webkit-scrollbar-thumb:active {
            background: #525965;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
            border: 0px none #ffffff;
            border-radius: 50px;
        }

        ::-webkit-scrollbar-track:hover {
            background: transparent;
        }

        ::-webkit-scrollbar-track:active {
            background: transparent;
        }

        ::-webkit-scrollbar-corner {
            background: transparent;
        }


        /*-----------------------------chiller-theme-------------------------------------------------*/

        .chiller-theme .sidebar-wrapper {
            background: #3a3f48;
        }

        .chiller-theme .sidebar-wrapper .sidebar-header,
        .chiller-theme .sidebar-wrapper .sidebar-search,
        .chiller-theme .sidebar-wrapper .sidebar-menu {
            border-top: 1px solid #3a3f48;
        }

        .chiller-theme .sidebar-wrapper .sidebar-search input.search-menu,
        .chiller-theme .sidebar-wrapper .sidebar-search .input-group-text {
            border-color: transparent;
            box-shadow: none;
        }

        .chiller-theme .sidebar-wrapper .sidebar-header .user-info .user-role,
        .chiller-theme .sidebar-wrapper .sidebar-header .user-info .user-status,
        .chiller-theme .sidebar-wrapper .sidebar-search input.search-menu,
        .chiller-theme .sidebar-wrapper .sidebar-search .input-group-text,
        .chiller-theme .sidebar-wrapper .sidebar-brand>a,
        .chiller-theme .sidebar-wrapper .sidebar-menu ul li a,
        .chiller-theme .sidebar-footer>a {
            color: #818896;
        }

        .chiller-theme .sidebar-wrapper .sidebar-menu ul li:hover>a,
        .chiller-theme .sidebar-wrapper .sidebar-menu .sidebar-dropdown.active>a,
        .chiller-theme .sidebar-wrapper .sidebar-header .user-info,
        .chiller-theme .sidebar-wrapper .sidebar-brand>a:hover,
        .chiller-theme .sidebar-footer>a:hover i {
            color: #e9ebef;
        }

        .page-wrapper.chiller-theme.toggled #close-sidebar {
            color: #fbf6f6;
        }

        .page-wrapper.chiller-theme.toggled #close-sidebar:hover {
            color: #ffffff;
        }

         

        .chiller-theme .sidebar-wrapper .sidebar-menu ul li a i,
        .chiller-theme .sidebar-wrapper .sidebar-menu .sidebar-dropdown div,
        .chiller-theme .sidebar-wrapper .sidebar-search input.search-menu,
        .chiller-theme .sidebar-wrapper .sidebar-search .input-group-text {
            background: #3a3f48;
        }

        .chiller-theme .sidebar-wrapper .sidebar-menu .header-menu span {
            color: #e9eef3;
        }

        .chiller-theme .sidebar-footer {
            background: #3a3f48;
            box-shadow: 0px -1px 5px #282c33;
            border-top: 1px solid #464a52;
        }

        .chiller-theme .sidebar-footer>a:first-child {
            border-left: none;
        }

        .chiller-theme .sidebar-footer>a:last-child {
            border-right: none;
        }
    </style>

    <title>Hello, world!</title>
</head>

<body>
    <div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper ">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="#" class="text-white">Dashboard</a>
                    <div id="close-sidebar">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="sidebar-header">
                    <div class="user-pic">
                        <img class="img-responsive img-rounded" alt="User picture">
                    </div>
                    <div class="user-info">
                        <span class="user-name text-bolder">
                      <?php echo $userName ?>
                        </span>


                    </div>
                </div>

                <div class="sidebar-menu">
                    <ul>

                  
                    <li class="sidebar-dropdown">
                            <a href="#">
                              <i class="fa fa-shopping-cart"></i>
                              <span>place order</span>
                             
                            </a>
                            <div class="sidebar-submenu">
                              <ul>
                                <li>
                                  <a href="BookGraves.php">Book grave order
                
                                  </a>
                                </li>
                                 
                                <li>
                                  <a href="maintainanceform.php">maintainance order booking</a>
                                </li>
                                <li>
                                    <a href="decoration.php">decoration order booking
                  
                                    </a>
                                  </li>
                              </ul>
                            </div>
                          </li>
                         
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-shopping-cart"></i>
                                <span>Records</span>

                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#">Add

                                        </a>
                                    </li>
                                    <li>
                                        <a href="deleterecord.php">delete</a>
                                    </li>
                                    <li>
                                        <a href="updaterecord.php">update</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="">
                            <a href="map.html">
                                <i class="fa fa-map"></i>
                                <span>graveyard map</span>
                            </a>

                        </li>


                         
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->

        </nav>
        <!-- sidebar-wrapper  -->
        <main class="page-content">
            <div class="container-fluid">
                <h2 class="text-center"></h2>
            </div>
        </main>
        <!-- page-content" -->
    </div>
    <!-- page-wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script>jQuery(function ($) {

            $(".sidebar-dropdown > a").click(function () {
                $(".sidebar-submenu").slideUp(200);
                if (
                    $(this)
                        .parent()
                        .hasClass("active")
                ) {
                    $(".sidebar-dropdown").removeClass("active");
                    $(this)
                        .parent()
                        .removeClass("active");
                } else {
                    $(".sidebar-dropdown").removeClass("active");
                    $(this)
                        .next(".sidebar-submenu")
                        .slideDown(200);
                    $(this)
                        .parent()
                        .addClass("active");
                }
            });

            $("#close-sidebar").click(function () {
                $(".page-wrapper").removeClass("toggled");
            });
            $("#show-sidebar").click(function () {
                $(".page-wrapper").addClass("toggled");
            });




        });</script>
    <style>
        form {
            position: absolute;
            top: 80%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>

    <form>

        <br />
        <img id="Image1"
            src="https://static.vecteezy.com/system/resources/previews/005/538/520/original/vintage-grave-hands-rise-halloween-logo-logo-symbol-icon-illustration-graphic-design-vector.jpg"
            width="250" height="200" class="img" />
        <br />
        <h1> Profile | User |Dashboard </h1>
        <br />
        <p1> User ID : </p1> &nbsp <input type="text" value="<?php echo $id ?>"  readonly />
        <br />
        <br />
        <br />
        <p1> User Name : </p1> &nbsp <input type="text" value="<?php echo $userName ?>" readonly />

        <br />
        <br />
        <br />

        <p1> Email: </p1> &nbsp &nbsp <input type="text" value="<?php echo $email ?>" readonly />

        <br />
        <br />
        <br />

        <p1> Password : </p1> &nbsp &nbsp <input type="text" value="<?php echo $pass ?>" readonly />
        <br />
        <br />
        <br />
        <p1> Date of creating account : </p1> &nbsp &nbsp <input type="text" value="<?php echo $date ?>" readonly />
        <br />
        <br />
        <br />
        <p1> Address : </p1> &nbsp <input type="text" value="not yet asked from user" readonly />
        <br />
        <br />
        <br />
        <p1> Phone Number : </p1> &nbsp <input type="text" value="not yet asked from user" readonly />
        <br />
        <br />
        <br />
        <!-- <p1>Email Address: </p1>&nbsp;<input type="text" value="<?php echo $_SESSION['semail']; ?>" readonly>

        <br /> -->
        <br />
        <br />

        <button type="button" class="backlbtn">

            <a href="http://localhost/pr/Home.html" class="btnback">back to Home</a>



        </button>
        <div>

        </div>
    </form>


</body>

</html>