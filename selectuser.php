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
    <style>
      .btn{
           padding: 10px 25px;
           margin: 15px 13px;
           border: 2px solid white;
           border-radius: 8px;
           background: blue;
           color: white;
       }
       .btn:hover{
        background-color:#616C6F;
        color: white;
      }
    </style>
</head>
<body>

<?php
    include 'connectivity.php';
    $sql = "SELECT * FROM user";
    $result = mysqli_query($con,$sql);
?>

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

<div class="container-fluid main--body">
            <div class="row">
                <div class="col">
                    <div class="table-responsive-lg">
                    <table class="table table-hover table-lg">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td><a href="transfer_money.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn btn-outline-light">Transact</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>

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