<?php
include("main.php");
// error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form  </title>--->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Font Awesome 5 CDN link to add social icons in html5 registration form -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
  background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWbCR_YgOr33PSpAqel_5Vk1y_x4CVCw4OR2ydMbs5U1m2H9AFB3IkaICrcSNRB52V9NE&usqp=CAU);
  background-size:cover;
  background-attachment:fixed;

}

.cont2{
  max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.cont2 .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.cont2 .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 5px;
  width: 190px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 40px;
   margin: 50px 
 }
 .text{
    font-size:small;
    color: rgb(1, 32, 37);
    text-align: center;
}
form .button input{
   height: 100%;
   width: 100%;
   border-radius: 1px;
   border: none;
   color: rgb(255, 255, 255);
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #39b3c9, #106f8b);
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #021e31, #03595c);
  }
 @media(max-width: 584px){
 .cont2{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    /* overflow-y: scroll; */
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .cont2 .content .category{
    flex-direction: column;
  }
}

</style>
<body>
    <div class="container cont2">
        <div class="title">REGISTERATION</div>
        <div class="content">
        <form id="formup" action="#" autocomplete="on" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" name="fname" placeholder="Enter your name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Username</span>
                        <input type="text" name="uname" placeholder="Enter your username" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="text" name="number" placeholder="Enter your number" required>
                    </div>
                    <div class="input-box">
                      <span id="mesg">Password</span>          
                      <input type="password" id="passwords" placeholder="Enter your password" value="">
                      <span id="messages"></span>
                    </div>
                    <div class="input-box">
                      <span id="messagess">Confirm Password</span>
                      <input type="password" id="passwordss" placeholder="Confirm your password" value="">
                    </div>
                  </div>
                    <span id="hello"></span>

                </div>
                <div class="gender-details">
                  <h5 class="gender-title">Gender</h5>

                    <input type="radio" name="gender" id="dot-1"  value="male" required>
                    <label for="dot-1">Male</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <input type="radio" name="gender" id="dot-2" value="female" required>
                    <label for="dot-2">Female</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <input type="radio" name="gender" id="dot-3" value="not to say" required>
                    <label for="dot-3">Prefer not to say</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </div>

                <div>
                  <button class="btn btn-default" type="submit" onclick="myfun()">REGISTERED</button>
                  <br><br>
                  <p class="text1">Already have an account?  <a href="signin.php">SIGN IN</a></p>
                </div>

            </form>
        </div>
    </div>

    
<?php

if(isset($_POST['submit']))
{

    $fname=$_POST['fname'];
    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $phone=$_POST['number'];
    $genders=$_POST['gender'];
    $password=$_POST['pass'];
    $confirmpassword=$_POST['cpass'];




$query="INSERT INTO signup (fullname, username, email, phonenumber, gender, password , confirmpassword) VALUES ('$fname', '$uname', '$email','$phone', '$genders', '$password','$confirmpassword')";

if (mysqli_query($conn, $query)) {
}
else {
  echo "Error: "  . mysqli_error($conn);
}

}

mysqli_close($conn);

?>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>