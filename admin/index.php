<?php
include("main.php");
// error_reporting(0);
if(!empty($_POST['login']))
{
    $username=$_POST['uname'];
    $password=$_POST['pass'];
    $query= "select * from adminsignup where uname= '$username' && pass = '$password'";
    $result = mysqli_query($conn, $query);
    if($result){
        $count = mysqli_num_rows($result);
        if($count>0){
            header('location:dashboard.php');
            
        }
        else{
            echo "<script type='text/javascript'>alert('enter correct username or password');</script>";
        }
    }   
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
        crossorigin="anonymous"></script>
</head>

<body id="log" style="background-color:lightgrey;">
    <div id="layoutAuthentication">
    <h2 class="text-center pt-5 mb-0" style="color:teal; font-weight:bold;" >DEAR TICKETS.COM</h2>

        <div id="layoutAuthentication_content">
            <main>
                <div class="container py-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-2">
                                <div class="card-header">
                                    <h2 class="text-center font-weight-bold my-4">ADMIN LOGIN</h2>
                                </div>
                                <div class="card-body">
                                    <form method="post" autocomplete="off">
                                        <div class="form-floating mb-3">
                                            <input name="uname" class="form-control" id="inputEmail" type="text"
                                                placeholder="Enter username" />
                                            <label for="inputEmail">Username</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input name="pass" class="form-control" id="inputPassword" type="password"
                                                placeholder="Password" />
                                            <label for="inputPassword">Password</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button name="login" type="submit" value="login"
                                                class="btn btn-success">Login</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Design By SAAD ASHRAF & SIDRA NOOR &reg;</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>