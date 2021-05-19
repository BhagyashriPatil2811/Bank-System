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
          <a class="nav-link" href="index.php">Services</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="contactus.php">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<section class="my-5">
  <div class="py-5">
            <h2 class="text-center">Add Customer</h2>
            <div class="w-50 m-auto">
            <form action="add_customer.php" method="post">
                <div class="form-group">
                  <label>id</label>
                  <input type="text" name="id" autocomplete="off" class="form-control">
                </div>

                <div class="form-group">
                  <label>name</label>
                  <input type="text" name="name" autocomplete="off" class="form-control">
                </div>

                <div class="form-group">
                  <label>email</label>
                  <input type="text" name="email" autocomplete="off" class="form-control">
                </div>

                <div class="form-group">
                  <label>balance </label>
                  <input type="text" name="balance" autocomplete="off" class="form-control">
                </div>
            

                <button type="submit" class="btn btn-success"> Submit</button>
            </form>
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
