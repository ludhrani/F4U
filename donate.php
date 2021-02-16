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
  $name = $_POST['Name'];
  $email = $_POST['Email'];
  $cause = $_POST['Cause'];
  $amount = $_POST['Amount'];

  $sql = "insert into donate (Name, Email, Cause, Amount)  values ('$name','$email','$cause','$amount')";

  $run = mysqli_query($conn, $sql) or die(mysqli_error());

   if ($run) {
    echo "<script>alert('Your Response has been Recorded.Thank You for your support!')</script>";
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

        .trans .sp {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.trans .sp:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.trans:hover .sp {
  padding-right: 25px;
}

.trans:hover .sp:after {
  opacity: 1;
  right: 0;
}


    </style>

<title>Donate</title>
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
        <a class="nav-link" href="contactus.php">Contact Us </a>
      </li>
      <li class="nav-item">
       <a href="donate.php"> <button type="button" class="btn btn-warning ">Donate</button></a>
      </li>
    </ul>
  </div>
</nav>
    </div>


<br>
<br>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.drishtiias.com/images/uploads/1601034945_image%200.jpg" class="d-block w-100 " style="max-height: 500px;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://www.ready.gov/sites/default/files/2019-09/voluntary%20organizations.jpg" class="d-block w-100" style="max-height: 500px;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://i.guim.co.uk/img/static/sys-images/Guardian/Pix/commercial/2014/11/19/1416398430572/Young-girls-of-Afghan-ref-012.jpg?width=1200&height=630&quality=85&auto=format&fit=crop&overlay-align=bottom%2Cleft&overlay-width=100p&overlay-base64=L2ltZy9zdGF0aWMvb3ZlcmxheXMvdGctZGVmYXVsdC5wbmc&enable=upscale&s=cec96abf5e28e0b1ec5e12f8dbdcefcb" style="max-height: 500px;" class="d-block w-100 " alt="...">
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
<br>
<br>

<div class="jumbotron jumbotron-fluid" style="width: 700px; height: 400px; margin-left: 50px; background-color: grey; float: left;">
  <div class="container">
    <h3 style=" font-size: 30px; font-family: cursive;">WE ARE HERE TO HELP EVERYONE IN NEED!!</h3>
    <blockquote style="margin-top: 50px; text-align: center; font-family: sans-serif; color: white; font-size: 22px;">You can celebrate your special days & ocassions with us & undoubtedly we would love to entertain you !
   In case you feel like showering some of the blessings on kids in any form, just to let you know we accept donations in cash and in kind!<br>
 Your few efforts can help us bring smiles on a ton of people and your love and support will be overwelming !</blockquote>
  </div>
  <img src="https://cdn1.sportngin.com/attachments/news_article/3313/2659/donate_large.png" style="width: 400px; margin-top: 30px; margin-left: 150px;"></img>
</div>
<div class="jumbotron jumbotron-fluid" style="border-radius: 30px; width: 500px; height: 500px; margin-right: 120px; float: right; background-color: #ECF0F1;">
  <div class="container">
    <h3 style="text-align: center; font-family: cursive; text-decoration:underline;">YOU CAN DONATE HERE!!</h3>
    <br><br>
    <form action="donate.php" method="POST">
  <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label" style="font-family: cursive; font-size: 22px;">Name</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" id="name" name="Name">
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label" style="font-family: cursive; font-size: 22px;">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="staticEmail" name="Email">
    </div>
    <br><br>
    <div class="form-group row">
    <label for="cause" class="col-sm-2 col-form-label"  style="margin-left: 15px; margin-top: 10px; font-size: 22px; font-family: cursive;">Cause</label>
    <div class="col-sm-8" style="margin-left: 30px;">
      <input type="text" class="form-control" id="cause" name="Cause" style="margin-top: 10px;">
    </div>
  </div>
  <div class="form-group row">
    <label for="amount" class="col-sm-2 col-form-label" style="margin-left: 15px; font-size: 22px; font-family: cursive;">Amount</label>
    <div class="col-sm-8" style="margin-left: 30px;">
      <input type="amount" class="form-control" id="amount" name="Amount">
    </div>
  </div>
</form>
<br><br><br><br>
<button type="submit" name="submit" id="target" class="btn btn-primary button trans" style=" border-radius:20px; margin-left: 170px;font-size: 25px;"><span class="sp">Donate Now</span></button>
  </div>
</div>
<br>


<!-- <button type="button" class="btn btn-success" style="">Become A Volunteer</button> -->



   <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <!--   <script type="text/javascript">
      $( "#target" ).click(function() {
  alert( "Your Response has been Recorded!" );
});
    </script> -->

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
