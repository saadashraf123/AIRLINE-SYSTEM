<?php
include("main.php");
// error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
        crossorigin="anonymous"></script>
</head>
<script>

    function myfun() {
        var a = document.getElementById("inputPassword").value;
        var b = document.getElementById("inputPasswordConfirm").value;


        if (a == "") {
            document.getElementById("messages").innerHTML = "** Please Fill Password";
            return false;
        }

        else if (a.length < 5) {
            document.getElementById("messages").innerHTML = "** Password length must be greater then 5 characters**";
            return false;
        }

        else if (a.length > 25) {
            document.getElementById("messages").innerHTML = "** Password length must be smaller then 25 characters**";
            return false;
        }
        else if (a != b) {
            document.getElementById("messages").innerHTML = "** Passwords are not same**";
            return false;
        }
        else {
            window.location.href = 'index.php';


        }
    }

</script>

<body style="background-color:lightgrey;">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Create Account</h3>
                                </div>
                                <div class="card-body">
                                    <form method="POST" onsubmit="return myfun()" autocomplete="off">
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputFirstName" name="fname"
                                                        type="text" placeholder="Enter your first name" required>
                                                    <label for="inputFirstName">First name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control" id="inputLastName" name="uname"
                                                        type="text" placeholder="Enter your last name" required>
                                                    <label for="inputLastName">User name</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" name="email" type="email"
                                                placeholder="name@example.com" required>
                                            <label for="inputEmail">Email address</label>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputPassword" name="pass"
                                                        type="password" placeholder="Create a password" required>
                                                    <label for="inputPassword">Password</label>
                                                    <span style="color: red;" id="messages"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputPasswordConfirm" name="cpass"
                                                        type="password" placeholder="Confirm password" required>
                                                    <label for="inputPasswordConfirm">Confirm Password</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <button name="submit" type="submit" value="submit" class="d-grid btn btn-success btn-block"
                                                    >Create Account</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="index.php">Have an account? Go to login</a></div>
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



    <?php

if(isset($_POST['submit']))
{

    $fname=$_POST['fname'];
    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $confirmpassword=$_POST['cpass'];

    $query="INSERT INTO `adminsignup` (`fname`, `uname`, `email`, `pass`, `cpass`) VALUES ('$fname', '$uname', '$email', '$password','$confirmpassword')";
// $query="INSERT INTO adminsignup (fname, lname, email, pass , cpass) VALUES ('$fname', '$lname', '$email', '$password','$confirmpassword')";

if (mysqli_query($conn, $query)) {

}
else {
  echo "Error: "  . mysqli_error($conn);
}

}

// mysqli_close($conn);

?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>