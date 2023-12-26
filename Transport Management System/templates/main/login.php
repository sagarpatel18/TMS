<?php
session_start();
include("../db.php");
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <title>Login - Transport Management System</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&display=swap" rel="stylesheet">
        <link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../../assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
        <link href="../../assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
        <link href="../../assets/plugins/pace/pace.css" rel="stylesheet">

      
        <!-- Theme Styles -->
        <link href="../../assets/css/main.min.css" rel="stylesheet">
        <link href="../../assets/css/custom.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="login-page">

<?php

if(isset($_POST["btn"]))
{
    
    $mail=$_POST['mail'];
    $pass=$_POST['pass'];


    

    $admin = "select * from admin where admin_mail = '$mail' and admin_pass = '$pass'";
    $cus = "select * from customer where cus_mail = '$mail' and cus_pass = '$pass'";
    $ag = "select * from agency where agency_mail = '$mail' and agency_pass = '$pass'";
    
    $adminresult=$conn->query($admin);
    $cusresult=$conn->query($cus);
    $agresult=$conn->query($ag);

    $admincnt=mysqli_num_rows($adminresult);
    $cuscnt=mysqli_num_rows($cusresult);
    $agcnt=mysqli_num_rows($agresult);



    if($admincnt==1)
    {
        echo "admin";
        $admin_f = $adminresult->fetch_assoc();
        $_SESSION["id"] = $admin_f["admin_id"];
        $_SESSION["mail"] = $admin_f["admin_mail"];
        $_SESSION["data"] = '0';
        echo "<script>window.location='../admin/index.php';</script>";
    }
    else
    {
        if ($cuscnt==1)
        {
            echo "cus";
            $cus_f = $cusresult->fetch_assoc();
            $_SESSION["id"] = $cus_f["cus_id"];
            $_SESSION["mail"] = $cus_f["cus_mail"];
            $_SESSION["data"] = '1';
            echo "<script>window.location='../customer/index.php';</script>";
        }
        else
        {
            if ($agcnt==1)
            {
                echo "ag";
                $ag_f = $agresult->fetch_assoc();
                $_SESSION["id"] = $ag_f["agency_id"];
                $_SESSION["mail"] = $ag_f["agency_mail"];
                $_SESSION["data"] = '2';
                echo "<script>window.location='../agency/index.php';</script>";
            }
            else
            {
                echo "No data Found.";
            }
        }
    }
}
?>

        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-12 col-lg-4">
                    <div class="card login-box-container">
                        <div class="card-body">
                            <div class="authent-logo">
                                <a href="#">Transport Management System</a>
                            </div>
                            <div class="authent-text">
                                <!-- <p>Welcome to Neo</p> -->
                                <!-- <p>Please Sign-in to your account.</p> -->
                            </div>

                            <form method="post">
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="mail" required>
                                        <label for="floatingInput">Email address</label>
                                      </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pass" required>
                                        <label for="floatingPassword">Password</label>
                                      </div>
                                </div>
                                <div class="mb-3 form-check">
                                  <input type="checkbox" class="form-check-input" id="exampleCheck1" checked>
                                  <label class="form-check-label" for="exampleCheck1">I agree the <a href="">Terms and Conditions</a></label>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-info m-b-xs" name="btn">Sign In</button>
                                </div>
                            </form>
                              <div class="authent-reg">
                                  <p>Not registered? <a href="register.php">Create an account</a></p>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         
        
        <!-- Javascripts -->
        <script src="../../assets/plugins/jquery/jquery-3.4.1.min.js"></script>
        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/feather-icons"></script>
        <script src="../../assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
        <script src="../../assets/plugins/pace/pace.min.js"></script>
        <script src="../../assets/js/main.min.js"></script>
    </body>
</html>