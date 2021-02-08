<?php
session_start();
$server="localhost";
$username="id16098555_root";
$password="Vaishali@123";
$db="id16098555_customer";
$conn=mysqli_connect($server,$username,$password,$db);

if($conn)
{
    echo"";
}   
else{
 die("connection failed".mysqli_connect_error());
}
error_reporting(0);
$name1= $_POST['sender'];
$q="select balance from payment where name='$name1'";
$result=mysqli_query($conn,$q);
$row=mysqli_fetch_array($result);

$var=$row['balance'];
$from=$_POST['sender'];
$to=$_POST['receiver'];
$q1="select balance from payment where name='$to'";
$result1=mysqli_query($conn,$q1);
$row1=mysqli_fetch_array($result1);
$var1=$row1['balance'];
session_destroy();
if($var==NULL and $var1==NULL){
  $message="Entered Incomplete Data";
  echo"<script type='text/javascript'>alert('$message');
  </script>";
  include 'send.html';
  
}
else if($var>=$_POST["amount"])
{
  $sub=$var-$_POST["amount"];
  $q="update payment set balance='$sub' where name='$from' ";
  $result=mysqli_query($conn,$q);
  $sum=$var1+$_POST["amount"];
  $q="update payment set balance='$sum' where name='$to' ";
  $result=mysqli_query($conn,$q);
    $c=$_POST["amount"];
    $q="insert into history(sender,receiver,amount)
           values('$from','$to',$c)";
    $result=mysqli_query($conn,$q);
    $message=" ✅ Succefully transfered!";
  echo"<script type='text/javascript'>alert('$message');
  </script>";
  include 'login.php';
}

else{

  $message="Insufficient Balance";
  echo"<script type='text/javascript'>alert('$message');
  </script>";
  include 'login.php';
}
  
  ?>

