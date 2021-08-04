<?php
include("main.php");
// error_reporting(0);
if(!empty($_POST['login']))
{
    $username=$_POST['uname'];
    $password=$_POST['pass'];
    $query= "select * from signup where username= '$username' && password = '$password'";
    $result = mysqli_query($conn, $query);
    if($result){
        $count = mysqli_num_rows($result);
        if($count>0){
            header('location: index.php');

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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>

    <!-- CSS file -->
    <!-- <link rel="stylesheet" href="style.css"> -->


    <!-- js link -->
    <script src="index.js"></script>

    <!-- Font Awesome 5 CDN link to add social icons in html5 registration form -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

</head>
<style>
    * {
        overflow: hidden !important;

    }

    .page {
        margin: 0px;
        padding: 0px;
        font-family: sans-serif;
        box-sizing: border-box;
        background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTK0M-eD4X7-3KOJyCeFF1-24OgmOIUB9mxIw&usqp=CAU);
        background-size: cover;
        background-attachment: fixed;
        height: 635px !important;



    }

    .cont1 {
        display: flex;
        align-content: center;
        justify-content: center;
    }

    .formWraper {
        display: flex;
        width: 55%;
        height: 500px;
        background-color: rgb(6, 63, 65);
        margin-top: 80px;
        border-radius: 10px;
        box-shadow: 0px 0px 20px black;
    }

    /* code for left sectin of form */
    .formDiv {
        width: 50%;
        padding: 8%;
        background-color: lavender;
        text-align: center;
        border-radius: 10px 0px 0px 10px;
    }

    .formDiv h2 {
        color: green;
        margin-top: -5px;
    }

    /* code for right sectin of the registration form */
    .welcomeDiv {
        width: 50%;
        padding: 10px;
        background-image: url(data:image/jpeg;base64,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);
        background-size: cover;
        text-align: center;
        color: white;
    }

    .welcomeDiv h2 {
        margin-top: 180px;
        color: rgb(0, 29, 34);
    }


    /* ---- code for Font Awsome social icons */
    .socialBtn {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
    }

    .icon {
        width: 30px;
        height: 30px;
        border-radius: 15px;
        background-color: lavender;
        margin: 5px;
        line-height: 30px;
        box-shadow: 0px 0px 10px black;

    }



    .text {
        font-size: small;
        color: rgb(1, 32, 37);

    }

    .orDiv {
        width: 10%;
        margin: 0 auto;
        background-color: lavender;
        position: relative;
        top: -16px;
        justify-content: center;
    }

    /* code for form input fields */
    .formGroup {
        width: 100%;
        position: relative;
    }

    .formGroup input {
        width: 90%;
        padding: 10px;
        margin-bottom: 10px;
        border-style: none;
        padding-left: 30px !important;
    }


    /* Code for Icones inside html form input */

    .formGroup i {
        position: absolute;
        left: 1px;
        top: 1px;
        color: grey;
        font-size: smaller;
        margin: 10px !important;

    }


    input::placeholder {
        position: relative;
        left: 20px;
    }

    input:focus {
        border-color: red;
    }

    .checkBox {
        width: 100%;
        margin-top: 2px;
    }

    .btn {
        width: 70%;
        padding: 15px;
        background-color: rgb(26, 68, 78);
        margin-top: 15px;
        color: lavender;
        border-radius: 20px;
        border-style: none;
    }

    .btn2 {
        width: 70%;
        padding: 15px;
        background-color: transparent;
        margin-top: 15px;
        color: rgb(2, 43, 53);
        border-radius: 20px;
        border-style: none;
        border: 2px solid rgb(15, 53, 54);
    }

    /* CSS mouse hover efects */
    .btn:hover,
    .btn2:hover,
    .icon:hover {
        background-color: rgb(86, 156, 202);
        color: whitesmoke;
    }

    @media screen and (max-width: 768px) {

        .formDiv {
            width: 80%;
            border-radius: 10px 10 px 10 px 10px;
        }

        .welcomeDiv {
            display: none;
        }
    }
</style>

<body class="page">
    <div>
        <div class="container cont1">
            <dive class="formWraper">

                <!-- Left section of responsive registration form -->

                <div class="formDiv">
                    <h2>Login Account</h2>
                    <p class="text"> Sign In with Social Media</p>

                    <!-- Font Awesome Icons -->
                    <div class="socialBtn">
                        <div class="facebook icon"><i class="fab fa-facebook-f"></i></div>
                        <div class="twitter icon"><i class="fab fa-twitter"></i></div>
                        <div class="instagram icon"><i class="fab fa-instagram"></i></i></div>
                    </div>

                    <!--Horizontal Line-->
                    <hr>
                    <div class="orDiv">Or</div>

                    <p class="text">Sign In with Email Address</p>

                    <form action="" method="post" autocomplete="off">
                        <div class="formGroup">
                            <i class="far fa-user"></i>
                            <input type="text" name="uname" placeholder="Enter your username" required>
                        </div>

                        <div class="formGroup">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="pass" id="password" placeholder="Password" required>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="checkbox" id="checkbox" required>
                            <span class="text">I Agree with Term & Conditions.</span>
                        </div>
                        <button class="btn btn-default" name="login" value="login" type="submit">SIGN IN</button>
                        <p class="text">Already have an account? <a href="signup.php">REGESTER NOW!</a></p>
                </div>
                </form>

                <!-- Right section of responsive registration form -->
                <div class="welcomeDiv">
                    <h2><b>Welcome Back!</b></h2>
                    <p class="text"><b>Get in touch with us for our news letter and more updates.</b></p>
                    <button class="btn" type="submit" value="" onclick=" signuppage()"><b>REGESTER
                            NOW!</b></button>

                </div>

        </div>
    </div>

</body>
</html>