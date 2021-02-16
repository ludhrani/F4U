<?php

$servername='localhost';
$username='root';
$password='';
$dbname = "f4u";
$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}



if(isset($_POST['submit']))
{  
  $email = $_POST['Email'];
  $name = $_POST['Name'];
  $issue = $_POST['Issue'];
  $message = $_POST['Message'];

  $sql = "insert into contact (Email,Name,Issue,Message)  values ('$email','$name','$issue','$message')";

  $run = mysqli_query($conn, $sql) or die(mysqli_error());

   if ($run) {
    echo "<script>alert('We will connect to you as soon as possible.Thankyou for your response!')</script>";
    // echo "Error: " . mysqli_error($conn);
   } 
   else {
    echo "Error: " . $sql . "
  " . mysqli_error($conn);
   }

mysqli_close($conn);
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style type="text/css">
        body{
          background-color: grey;

        }

        .navbar-collapse{
            margin-left: 720px;
            font-size: 17px;
        }

        .navbar-collapse:hover{
            color: white;
        }
        
        .submit:hover {
          background-color: black;
                }
            /* Footer */

  section {
    padding: 60px 0;
}

section .section-title {
    text-align: center;
    color: #007b5e;
    margin-bottom: 50px;
    text-transform: uppercase;
}
#footer {
    background: #007b5e !important;
}
#footer h5{
  padding-left: 10px;
    border-left: 3px solid #eeeeee;
    padding-bottom: 6px;
    margin-bottom: 20px;
    color:#ffffff;
}
#footer a {
    color: #ffffff;
    text-decoration: none !important;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}
#footer ul.social li{
  padding: 3px 0;
}
#footer ul.social li a i {
    margin-right: 5px;
  font-size:25px;
  -webkit-transition: .5s all ease;
  -moz-transition: .5s all ease;
  transition: .5s all ease;
}
#footer ul.social li:hover a i {
  font-size:30px;
  margin-top:-10px;
}
#footer ul.social li a,
#footer ul.quick-links li a{
  color:#ffffff;
}
#footer ul.social li a:hover{
  color:#eeeeee;
}
#footer ul.quick-links li{
  padding: 3px 0;
  -webkit-transition: .5s all ease;
  -moz-transition: .5s all ease;
  transition: .5s all ease;
}
#footer ul.quick-links li:hover{
  padding: 3px 0;
  margin-left:5px;
  font-weight:700;
}
#footer ul.quick-links li a i{
  margin-right: 5px;
}
#footer ul.quick-links li:hover a i {
    font-weight: 700;
}

@media (max-width:767px){
  #footer h5 {
    padding-left: 0;
    border-left: transparent;
    padding-bottom: 0px;
    margin-bottom: 10px;
}
}
    </style>

<title>Contact Us</title>
  </head>
  <body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <a class="navbar-brand" style="font-size: 30px;color: white;" href="index.php">Freedom4U</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item" style="font-size: 20px; margin-right: 10px; margin-top: -2px">
        <a class="nav-link" href="index.php">Home </a>
      </li>
      <div class="dropdown" >
  <a class="nav-item nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black; font-size: 18px; text-decoration: none;">
    Project
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="project.php">Project 1</a>
    <a class="dropdown-item" href="project1.php">Project 2 </a>
  </div>
</div>
      <li class="nav-item">
        <a class="nav-link" href="disaster.php">Disaster Response </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.php">About Us </a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="contactus.php">Contact Us <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
       <a href="donate.php"> <button type="button" class="btn btn-outline-warning">Donate</button></a>
      </li>
    </ul>
  </div>
</nav>
    </div>


<div class="container-fluid">
  <img src="https://akm-img-a-in.tosshub.com/indiatoday/images/story/201909/contact-details-3381225_1280.jpeg?524JGkJvIBQ1imnKfpn2djsEHFX06JK7&size=770:433" class="img-responsives" style="width: 100%; background-size: cover; height: 500px" alt="Responsive image">
  <div class="carousel-caption">
    <p style="margin-top: -250px; margin-right: 730px ;font-size: 50px; font-family: cursive;">CONTACT US</p>
  </div>

<br><br><br>
<div class="jumbotron jumbotron-fluid" style="height: 400px; background-color: grey">
  <div class="container">
    <img class="rounded-circle" style="width: 150px; height: 150px;" src="https://4.imimg.com/data4/RF/BD/MY-979637/address-verification-service-500x500.png">

    <img class="rounded-circle" style="width: 150px; margin-left: 160px; height: 150px;" src="https://cdn4.iconfinder.com/data/icons/social-media-2097/94/phone-512.png">

    <img class="rounded-circle" style="width: 150px; margin-left: 160px;  height: 150px;" src="https://icons-for-free.com/iconfiles/png/512/email+envelope+inbox+mail+message+send+icon-1320085879987098147.png">

    <img class="rounded-circle" style="width: 150px; margin-left: 160px; height: 150px;" src="https://img.icons8.com/plasticine/2x/domain.png">
    <br><br>

    <h6 style=" float: left; font-size: 18px; color: white"><b style="margin-left: 30px; font-size: 20px; color: white">ADDRESS</b> <br><br> 801, EXCEL RESIDENCY, <br> AIROLI, NAVI MUMBAI,<br> MAHARASHTRA</h6>

    <h4 style="margin-left: 110px; float: left; color: white"><b style="margin-left: 60px; font-size: 20px; color: white">PHONE</b> <br><br> +91 9322592902</h4>

    <h4 style="margin-left: 200px; float: left; color: white"><b style="margin-left: -10px; font-size: 20px; color: white">EMAIL</b> <br><br> <a style="font-size: 25px; margin-left: -100px;"> 4ufreedom@gmail.com</a></h4>

    <h4 style="margin-left: 80px;float: left; color: white"><b style="margin-left: 20px; font-size: 20px; color: white">WEBSITE</b> <br><br> <a href="http://www.freedomforyou.org/" style="color: white">Freedom4U</a></h4>

  </div>
</div>

<div class="jumbotron jumbotron-fluid" style="background-color: #ddd1e3; border-radius: 15px;">
  <div style="width: 50%; margin-left: 20px">
  <form action="contactus.php" method="POST">
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email"name="Email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Full Name</label>
    <input type="name" name="Name" class="form-control" id="exampleFormControlInput1" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Issues</label>
    <input type="issue" name="Issue" class="form-control" id="exampleFormControlInput1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Message</label>
    <textarea class="form-control" name="Message" id="exampleFormControlTextarea1" rows="2"></textarea>
  </div>
  <button class="btn btn-primary submit" name="submit" style="font-size: 25px; border-radius: 15px; margin-left: 10px">SUBMIT</button>

  <img style="margin-left: 800px; width: 80%; margin-top: -450px; height: 400px; " src="https://montgomeryplanning.org/wp-content/uploads/2019/05/connect_banner_1600x600.png">
</form>
</div>

</div>



<!-- footer -->
<section id="footer" style="margin-top: 150px">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
          <ul class="list-unstyled list-inline social text-center">
            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-envelope"></i></a></li>
          </ul>
        </div>
        <hr>
      </div>  
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
          <p><u><a href="#">Freedom For You Foundation</a></u> is a Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]</p>
          <p class="h6">© All right Reversed.</p>
        </div>
        <hr>
      </div>  
    </div>
  </section>


 <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>