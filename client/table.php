
<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- css link -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

    <!-- js link -->
    <script src="index.js"></script>

    <!-- fonts link  -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">

    <!-- fonts Awesome link  -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>BOOKING!</title> 
</head>

<style>
    h1{
        text-align: center;
        text-transform: capitalize;
        padding-top: 20px;

    }
    body {
        background-color: lightgrey;
        font-family: Arial, Verdana, sans-serif;
        color: teal;
    }
    table {
    width: 780px; 
	border-collapse: collapse; 
	margin:50px auto;
    background-color: rgba(0, 128, 128, 0.548);
    }
    td {
        padding: 20px 10px 15px 15px;
        color: black;
    }
    th {
    text-transform: uppercase;
    letter-spacing: 0.1em;
    font-size: 90%;
    border-top: 1px solid #999;
    text-align: left;
    padding: 20px 10px 15px 15px;
    background-color: #fff;
    }
    tr.even {
    background-color: #efefef;
    }
    tr:hover {
        background-color: #ffff;
        color: teal;    
    }
    .money {
    text-align: right;
    }
    table:hover{
    box-shadow: 1px 1px 7px -2px;
    cursor: pointer;
    }
    input{
        background-color: #ffff;
        color: teal;
    }
    input:hover{
    background-color: teal;
    color: #ffff;
    }
</style>

<body>
    <h1><u>Flights Responsive Table</u></h1>
    <table border="3">

            <tr>
                <th width="200">Departure City</th>
                <th width="200">Arrival City</th>
                <th width="100">Date</th>
                <th width="50">Time</th>
                <th width="100">Booking</th>
            </tr>
<?php
    

    include("main.php");
    // error_reporting(0);

    $query1 = "SELECT * FROM search ORDER BY id DESC LIMIT 1";
    $data1 = mysqli_query($conn, $query1);
    $result1 = mysqli_fetch_assoc($data1);
    $city1 = $result1['too'];
    $city2 = $result1['fromm'];



    $query = "SELECT * FROM search WHERE too='$city1'  AND  fromm='$city2'";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);

    $query2= "SELECT * FROM datentime";
    $data2 = mysqli_query($conn, $query2);
    // $total2 = mysqli_num_rows($data2);
    // $result2 = mysqli_fetch_assoc($data2);
    // $fdate = $result2['fdate'];
    // $ftime = $result2['ftime'];
    
    if($total != 0){
        while( $result= mysqli_fetch_assoc($data))
        {   
            while($result2 = mysqli_fetch_assoc($data2)){
                echo"
                <tr>
                    <td>".$result['too']."</td>
                    <td>".$result['fromm']."</td>
                    <td>".$result2['fdate']."</td>
                    <td>".$result2['ftime']."</td>";
                    echo "<td><a href='bookingform.php'><input class='btn btn-default' type='button' value='Book Now'></a></td>";
                    echo"</td>"; 
                    echo"</tr>";
            }
           

        }  
    }                         
?>
    </table>

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