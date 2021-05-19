<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Basic Banking System</title>

</head>
<body>

  

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TSF Bank</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="contactus.php">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>





<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/img1.jpg" alt="bank 1" width="1100" height="500">
      <div class="carousel-caption">
        <h3>TSF</h3>
        <p >Road to success banking</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/img1.jpg" alt="bank 2" width="1100" height="500">
     
    </div>
    <div class="carousel-item">
      <img src="img/img3.jpg" alt="bank 3" width="1100" height="500">
    
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>



<section class="my-5">

<div class="py-5">
            <h2 class="text-center">About Us</h2>
</div>
<div class="container-fluid">
        <div class="row">

      <div class="col-lg-6 col-md-6 col-12"> 
        <img src="img/img4.jpg" class="img-fluid aboutimg">
      </div>

      <div class="col-lg-6 col-md-6 col-12"> 
         <h2 class="display-4">TSF Bank</h2>

         <p class="py-4">
        The Spark Foundation (TSF) a Fortune 500 company, is an Indian Multinational, Public Sector Banking and Financial services statutory body 
         headquartered in Mumbai. The rich heritage and legacy of over 200 years, accredits TSF as the most trusted Bank by Indians through
         generations.
         </p> 
         <a href="about.php" class="btn btn-success"> know more</a>
      </div>
</div>
</div>
</section>



<section class="my-5">
  <div class="py-5">
            <h2 class="text-center">Our Services</h2>
  </div>
      <div class="container-fluid">
      <div class="row">


      <div class="col-lg-4 col-md-4 col-12">
        <div class="card" >
          <img class="card-img-top" src="img/img12.jpeg" alt="bank image">
            <div class="card-body">
             
                   <a href="customer_info.php" class="btn btn-primary">Customers info</a>
              </div>
          </div>
      </div>


      <div class="col-lg-4 col-md-4 col-13">
        <div class="card" >
          <img class="card-img-top" src="img/img13.jpeg" alt="bank image">
            <div class="card-body">
             
                   <a href="selectuser.php" class="btn btn-primary">Transfer Money</a>
              </div>
          </div>
      </div>

      

      <div class="col-lg-4 col-md-4 col-14">
        <div class="card" >
          <img class="card-img-top" src="img/img14.jpeg" alt="bank image">
            <div class="card-body">
              
                   <a href="Transaction_history.php" class="btn btn-primary">Transaction History</a>
              </div>
          </div>
      </div>

  </div>
</div>
</section>









<footer>
        <p class="p-3 bg-dark text-white text-center">@The Spark Foundation bank
        <br><a href="contactus.php">contact us</a>
        <br><a href="about.php">about</a></p>
  </footer>
      









<script src="https://ajax.googleapis.com/ajax/libs/jquery/4.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>