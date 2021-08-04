<?php
include("main.php");
// error_reporting(0);


$query = "SELECT * FROM search ORDER BY id DESC LIMIT 2";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
$to = $result['too'];
$from = $result['fromm'];




if(isset($_POST['submit']))
{

   
    $ddate=$_POST['ddate'];
    $pairline=$_POST['pairline'];
    $pseating=$_POST['pseating'];
    $adult=$_POST['adult'];
    $child=$_POST['child'];
    $infant=$_POST['infant'];
    $fare=$_POST['fare'];
    $rdate=$_POST['rdate'];
    $message=$_POST['message'];
    $fname=$_POST['fname'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];






$query="INSERT INTO bookinginfo (fromm, too, ddate, pairline, pseating, adult , child, infant, fare, rdate, message, fname, phone, email) VALUES ('$from', '$to', '$ddate','$pairline', '$pseating', '$adult','$child', '$infant', '$fare', '$rdate','$message', '$fname', '$phone','$email')";

if (mysqli_query($conn, $query)) {
}
else {
  echo "Error: "  . mysqli_error($conn);
}

}

mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airline Booking Form</title>
    <link rel="stylesheet" href="form.css">
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container"><!--container-->

        <form class="form-group" method="post" autocomplete="off"><!--form-->
            <h1 class="text-center">Airline Booking Form</h1>

            <div id="form"><!--form-->
                <h3 class="text-white">Booking Details</h3>

            <div id="input"><!--input-->

            <table border="2" id="input-group">
                        
            <?php

            include("main.php");
            error_reporting(0);

            
            


            if($total != 0){
                while($result = mysqli_fetch_assoc($data))
                {
                    echo"
                    <tr>
                        <td name='too1'>TO :  " .$result['too']."</td>
                        <td name='from1'>FROM : ".$result['fromm']."</td>
                    </tr>";
                }
            }
            else{
                echo "no records found !!";
            };
            ?>
            </table>



                <!-- <input type="text" name="from" id="input-group" placeholder="From" required > -->
                <!-- <input type="text" name="to" id="input-group" placeholder="To" required> -->


                <input type="date" name="ddate" id="input-group" placeholder="Departure Date" min="2021-08-06" max="2021-09-06" required>
                <!-- <input type="text" name="dtime" id="input-group" placeholder="Departure Time"> -->
                <select  id="input-group" name="pairline" style="background: black;" required>
                    <option value="">Preffered Airline</option>
                    <option value="IndoGo">IndoGo</option>
                    <option value="PakAirline">PakAirline</option>
                    <option value="SpaceJet">SpaceJet</option>
                </select>
                <select  id="input-group" name="pseating" style="background: black;" required>
                    <option value="">Preffered Seating</option>
                    <option value="economy class">Economy Class</option>
                    <option value="business class">Business Class</option>
                    <option value="first class">First Class</option>
                </select>
                </div><!--input-->

                <div id="input2"><!--input2-->
                    <input type="number" id="input-group" name="adult" placeholder="Adult" required>
                    <input type="number" id="input-group" name="child" placeholder="Children(2-11years)" required>
                    <input type="number" id="input-group" name="infant" placeholder="infant(under 2years)" required>
                </div><!--input2-->

                <div id="input3"><!--input3-->
                    <span id="input-group" class="text-primary">Select Your Fare</span> 
                    <input type="radio" id="input-group" value="One Way" name="fare" required >
                    <label class="text-white" for="input-group">One Way</label>
                    <input type="radio" id="input-group" value="Round Trip" name="fare" required>
                    <label class="text-white" for="input-group">Round Trip</label>
                </div><!--input3-->

                <div id="input4"><!--input4-->
                    <input type="date" id="input-group" name="rdate" placeholder="Return Date" min="2021-08-06" required>
                    <!-- <input type="text" id="input-group" placeholder="Return time"> -->
                    <input type="text" id="input-group1" name="message" placeholder="Any Message">
                </div><!--input4-->

                <div id="input5"><!--input5-->
                    <h3 class="text-white">Personal Details</h3>
                </div><!--input5-->

                <div id="input6"><!--input6-->
                    <input type="text" id="input-group" name="fname" placeholder="Full Name" required>
                    <input type="tel" id="input-group" name="phone" placeholder="Phone Number" required>
                    <input type="email" id="input-group1" name="email" placeholder="Email" required>
                </div><!--input6-->
                <button type="submit" name="submit" class="btn btn-warning text-white">Submit Form</button>
                <button type="reset" class="btn btn-primary">Clear Form</button>
            </div><!--form-->

        </form><!--form-->

    </div><!--container-->
</body>
</html>