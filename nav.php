<?php
// $showAlert=false;
// $showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
            include '_dbconnect.php';
            $email1=$_POST["email1"];
            $feed=$_POST["feed"];
            
            $existSql = "SELECT * FROM `feedback` WHERE email1= '$email1'";
            $result=mysqli_query($conn, $existSql);
            $numExistRows=mysqli_num_rows($result);
            if($numExistRows>0)
            {
                $showError="Username Already Exists";
            }
            else
            {
                $sql= "INSERT INTO `feedback` (`email1`, `feed`) VALUES ('$email1', '$feed')";
                $result=mysqli_query($conn,$sql);
                if($result){
                  $showAlert=true;
              }
            }
}
?>



<?php
     echo '<div  class="container-fluid">
     <img src="image.png" class="img-responsive" alt="Gautam" width="100%" height="750">
     <div class="top-left">
     <a class="logo" href="https://www.youtube.com/c/Gautamyadav"><img style="height:50px;width:50px;" src="logo.JPG" alt="logo">cricketTrainy</a>
     </div>
     <div class="top-right">
     <nav class="navbar navbar-expand-lg" id="nv">
    <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mx-5 navbar-light" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/makeTeam/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="training.html">Trainings</a>
        </li>
        <!-- Button trigger modal -->
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact us </a>
        </li>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Feedback
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Feedback Form</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="\cricketTrainy\" method="post">
            <div class="mb-3 mx-3">
              <label for="email1" class="form-label">Enter Your Email</label>
              <input type="email" class="form-control" id="email1" name="email1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 mx-3">
              <label for="feed" class="form-label">Enter Here Your Feedback</label>
              <input type="text" class="form-control" name="feed" id="feed">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">send</button>
            </div>
            </form>
          </div>
        </div>
      </div>
      </ul>
  </div>
</nav>
     </div>
     <div class="centered">
     <ul class="cont">
    <li class="con">WELCOME TO YOUR ACADEMY</li>
    <li class="con1">MAKE YOURSELF FOR YOUR COUNTRY</li>
    <a href="training.html"><li><button type="button" id="bt1" class="btn btn-light">Get Started</button></li></a>
   </ul>
   </div>';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Feedback</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
 <!-- echo '<img src="gautam.jpg" class="img-responsive" alt="Gautam"  width="100%" height="700">'; -->
 <!-- <li class="nav-item">
          <a class="nav-link" href="\cricketTrainy\form1.php">Feedback </a>
        </li> -->