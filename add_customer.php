<?php
  $con=mysqli_connect('localhost','Bhagyashri','28112000');
  if($con){
      echo "";
      }else{
          echo "no connection";
      }
      


mysqli_select_db($con,'banking_system');

$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$balance=$_POST['balance'];

$query = "insert into user (id,name,email,balance) 
values ('$id','$name','$email','$balance') ";



mysqli_query($con, $query);

header('location:customer_info.php');



?>