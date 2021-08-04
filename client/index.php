<?php
include("main.php");
// error_reporting(0);
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $comment=$_POST['comments'];
    $query="INSERT INTO contactinfo (names, email, comment) VALUES ('$name', '$email','$comment')";

    if (mysqli_query($conn, $query)) {
    }
    else {
    echo "Error: "  . mysqli_error($conn);
    }
}
?>


                
<?php

if(isset($_POST['search']))
{
    $city1=$_POST['myCity1'];
    $city2=$_POST['myCity2'];

    if ($city1 != $city2) {
        $query2 = "INSERT INTO search (`too`, `fromm`) VALUES ('$city1', '$city2')";
        // "INSERT INTO search( too, fromm) VALUES ('$city1' , '$city2')";
    
        if(mysqli_query($conn, $query2)) 
        {
            header('location: table.php');
    
        }
    } 
    else {
        echo "<script type='text/javascript'>alert('PLEASE ENTER DIFFERENT CITIES');</script>";

    }
}
?>

<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- css link -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

    <!-- js link -->
    <script src="index.js"></script>

    <!-- fonts link  -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">

    <!-- fonts Awesome link  -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <title>AIRLINE RESERVATION SYSTEM!</title>

</head>

<body id="myPage">

    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#"><i class="fas fa-plane"></i></a>
        <a class="navbar-brand" href="#myPage">DearTickets.com</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" href="#booking">BOOKING</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#packages">PACKAGES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">CONTACT</a>
                </li>
                <li class="nav-item">
                    <a id="loggedin" class="nav-link" href="signin.php">LOGIN</a>
                </li>
            </ul> 
        </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/plane.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/plane2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/plane3.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>




    <div id="booking" class="container-fluid py-3 bg-dark">
        <h1 class="availableFlights">SEARCH FOR YOUR FLIGHT</h1>
        <form class="initialForm" method="post">
            <div class="row">
                <div class="initialForm col-sm-12 col-md-6 col-lg-6">
                    <h3 id="to">TO:</h3>
                    <div class="input-group">
                        <input type="text" class="form-control" name="myCity1" id="myCity1" list="cities" size="10"
                            placeholder="Enter Departure City" required>
                    </div>
                </div>
                <div class="initialForm col-sm-12 col-md-6 col-lg-6">
                    <h3 id="from">FROM:</h3>
                    <div class="input-group">
                        <input type="text" id="myCity2" name="myCity2" list="cities" class="form-control" size="10"
                            placeholder="Enter Arrival City" required>
                    </div>
                </div>

            </div>
            <datalist id="cities">
                <option value="Karachi"></option>
                <option value="Lahore"></option>
                <option value="Islamabad"></option>
                <option value="Quetta"></option>
                <option value="Multan"></option>
                <option value="Hyderabad"></option>
                <option value="Peshawer"></option>
                <option value="Bahawalpur"></option>
                <option value="Sukkur"></option>
                <option value="Muree"></option>
            </datalist>
            <div class="button1 search">
                <button name="search" type="submit" class="btn" onclick="validcity" >Search</button>
            </div>


        </form>


    </div>





    </div>


    <div class="about" id="about">
        <div class="container-fluid">
            <h1 class="">ABOUT</h1>
            <br>
            <p class="aboutPara">
                The airline reservation website is a link between the customers i.e; travelers of tourists and principle suppliers such as tour airlines.<br>
                This website allows a customer to specify their travel requirement such as the city of departure, destination departure date return date and class of travel.<br>
                It contains information on schedules and fares and contains a database of reservations (or passenger name records) and of tickets issued (if applicable).
            </p>
        </div>
    </div>


    <div id="packages" class="packages container-fluid">
        <div class="text-center">
            <h2>PACKAGES</h2>
            <h4>Choose our latest packages</h4>
        </div>
        <div class="popup" id="popup-1">
            <div class="overlay"></div>
            <div class="content">
                <div class="close-btn" onclick="togglePopup()">×</div>
                <div class="details">
                    <div class="container-fluid deal">
                      <div class="row">
                        <div class="col-sm-5">
                          <h1 id="dealNo">DEAL 1:</h1>
                          <p>Get more for less when you purchase points to use for your next flght.</p>
                          <h5 id="adult"><i class="far fa-star"></i> 2 Adults (Age above 18 years).</h5>
                          <h5 id="child"><i class="far fa-star"></i> 1 child (Age below 10 years).</h5>
                          <h5 id="infant"><i class="far fa-star"></i></h5>
                          <p>Get &nbsp<b id="off" style="color: brown;">50% off</b> on the <b id="changes"> child </b> seat.</p>
                        </div>
                        <div class="col-sm-7 sideimg">
                          <img src="img/plane.jpg" alt="" srcset="">
                        </div>
                      </div>
                    </div>
                  </div>
            </div>

        </div>
        <div class="carousel" data-flickity='{ "groupCells": true, "wrapAround" : true}'>

            <div class="item carousel-cell">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h1>Deal 1</h1>
                    </div>
                    <div class="panel-body">
                        <img src="img/p1.jfif" alt="" srcset="">
                    </div>
                    <div class="panel-footer">
                        <!-- <h3>$19</h3>
                        <h4>per month</h4> -->
                        <button class="btn btn-lg" onclick="togglePopup(1)">Check Details</button>
                    </div>
                </div>
            </div>

            <div class="item carousel-cell">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h1>Deal 2</h1>
                    </div>
                    <div class="panel-body">
                        <img src="img/p1.jfif" alt="" srcset="">
                    </div>
                    <div class="panel-footer">
                        <!-- <h3>$29</h3>
                        <h4>per month</h4> -->
                        <button class="btn btn-lg" value="2" onclick="togglePopup(2)">Check Details</button>
                    </div>
                </div>
            </div>

            <div class="item carousel-cell">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h1>Deal 3</h1>
                    </div>
                    <div class="panel-body">
                        <img src="img/p1.jfif" alt="" srcset="">
                    </div>
                    <div class="panel-footer">
                        <!-- <h3>$29</h3>
                        <h4>per month</h4> -->
                        <button class="btn btn-lg" onclick="togglePopup(3)">Check Details</button>
                    </div>
                </div>
            </div>

            <div class="item carousel-cell">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h1>Deal 4</h1>
                    </div>
                    <div class="panel-body">
                        <img src="img/p1.jfif" alt="" srcset="">
                    </div>
                    <div class="panel-footer">
                        <!-- <h3>$29</h3>
                        <h4>per month</h4> -->
                        <button class="btn btn-lg" onclick="togglePopup(4)">Check Details</button>
                    </div>
                </div>
            </div>

            <div id="deal-5" class="item carousel-cell">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h1>Deal 5</h1>
                    </div>
                    <div class="panel-body">
                        <img src="img/p1.jfif" alt="" srcset="">
                    </div>
                    <div class="panel-footer">
                        <!-- <h3>$29</h3>
                        <h4>per month</h4> -->
                        <button class="btn btn-lg" onclick="togglePopup(5)">Check Details</button>
                    </div>
                </div>
            </div>

            <div id="deal-6" class="item carousel-cell">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h1>Deal 6</h1>
                    </div>
                    <div class="panel-body">
                        <img src="img/p1.jfif" alt="" srcset="">
                    </div>
                    <div class="panel-footer">
                        <!-- <h3>$29</h3>
                        <h4>per month</h4> -->
                        <button class="btn btn-lg" onclick="togglePopup(6)">Check Details</button>
                    </div>
                </div>
            </div>

        </div>

        
                


    </div>


    <div id="contact" class="contact container-fluid">
        <h1 class="text-center">CONTACT </h1>
        <div class="row">
            <div class="col-sm-5 services">
                <h2>Our Services</h2>
                <p>Contact us and we'll get back to you within 24 hours.</p>
                <a>
                    <p><i class="fas fa-map-marker-alt"></i> NEDUET, KARACHI</p>
                </a>
                <a>
                    <p><i class="fas fa-mobile-alt"></i> +92 3363448425</p>
                </a>
                <a>
                    <p><i class="fab fa-facebook-f"></i> Dear Tickets Official</p>
                </a>
                <a>
                    <p><i class="fab fa-instagram"></i> Dear_Tickets_Official</p>
                </a>
                <a>
                    <p><i class="fab fa-twitter"></i> Dear_Tickets_Official</p>
                </a>

            </div>
            <div class="col-sm-7 slideanim">
                <h2>FeedBack</h2>
                <form action="" method="post">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="email" name="email" placeholder="Email" type="email"
                                required>
                        </div>
                    </div>
                    <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"
                        required></textarea><br>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <button class="btn btn-default pull-right" name="submit" type="submit">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.066386031152!2d67.11264271500418!3d24.929808284021334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb338b8d4494c91%3A0xf864ed97b4a8ec0e!2sNED%20University%20of%20Engineering%20and%20Technology!5e0!3m2!1sen!2s!4v1627838457050!5m2!1sen!2s" 
            width="1350" 
            margin-bottom="0px"
            height="450" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy">
        </iframe>
    </div>

    <footer class="container-fluid footer text-center">
        <a href="#myPage" title="To Top">
            <i class="fas fa-angle-up arrow"></i>
        </a>
        <p>This Website Is Made By
            <br>
            <a href="">saadjewani888@gmail.com</a>
            <br>
            <a href="">noorsidra594@gmail.com</a>
        </p>

    </footer>



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