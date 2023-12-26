<?php
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
        <title>Register - Transport Management System</title>

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

if(isset($_POST["btn_sub"]))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $num=$_POST['num'];
    $mail=$_POST['mail'];
    $pass=$_POST['pass'];
    $repass=$_POST['repass'];
    $date = date("Y-m-d");
    $time = date("h:i:sa");

    if ($pass == $repass)
    {
        $admin = "select * from admin where admin_mail = '$mail'";
        $cus = "select * from customer where cus_mail = '$mail'";
        $ag = "select * from agency where agency_mail = '$mail'";
        
        // echo $admin;
        // echo $cus;
        // echo $ag;

        
        $adminresult=$conn->query($admin);
        $cusresult=$conn->query($cus);
        $agresult=$conn->query($ag);
        
        // echo $adminresult;
        // echo $cusresult;
        // echo $agresult;


        $admincnt=mysqli_num_rows($adminresult);
        $cuscnt=mysqli_num_rows($cusresult);
        $agcnt=mysqli_num_rows($agresult);

        // echo $admincnt;
        // echo $cuscnt;
        // echo $agcnt;



        if($admincnt==1 || $cuscnt==1 || $agcnt==1)
        {
            echo "data is already there"; 
        }
        else
        {
            // echo "new data";
            $qry="INSERT INTO customer (cus_fname,cus_lname,cus_number,cus_mail,cus_pass,cus_reg_date,cus_reg_time) VALUES ('$fname','$lname','$num','$mail','$pass','$date','$time');";
            $fire=$conn->query($qry);
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
                                <a href="">Transport Management System</a>
                            </div>
                            <div class="authent-text">
                                <!-- <p>Welcome to Neo</p> -->
                                <!-- <p>Enter your details to create your account</p> -->
                            </div>

                            <form method="post">
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="Fullname" name="fname">
                                        <label for="floatingInput">Firstname</label>
                                      </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="Lastsname" name="lname">
                                        <label for="floatingInput">Lastname</label>
                                      </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="floatingInput1" placeholder="name@example.com" name="mail">
                                        <label for="floatingInput">Email address</label>
                                      </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingInput1" placeholder="10 Digit Phone Number" name="num">
                                        <label for="floatingInput">Number</label>
                                      </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pass">
                                        <label for="floatingPassword">Password</label>
                                      </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="floatingPassword1" placeholder="Confirm Password" name="repass">
                                        <label for="floatingPassword">Confirm Password</label>
                                      </div>
                                </div>
                                <div class="mb-3 form-check">
                                  <input type="checkbox" class="form-check-input" id="exampleCheck1" checked>
                                  <label class="form-check-label" for="exampleCheck1">I agree the <a href="">Terms and Conditions</a></label>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary m-b-xs" name="btn_sub">Register</button>
                                </div>
                            
                            </form>
                            
                              <div class="authent-login">
                                  <p>Already have an account? <a href="login.php">Sign in</a></p>
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