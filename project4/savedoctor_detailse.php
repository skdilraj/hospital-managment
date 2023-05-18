<?php
 
 
  echo $name=$_POST['d_name'];
  echo $degree=$_POST['degree'];
  echo $ph=$_POST['phone_number'];
  echo $time=$_POST['time'];
  echo $sp=$_POST['sp'];
  
  $conn=mysqli_connect("localhost","root","","hospital") or die("not connect");
  $sql="INSERT INTO `doctor`(`doctor_name`, `d_degree`, `d_ph_no`, `speciallist`, `time`) VALUES ('{$name}','{$degree}','{$ph}','{$sp}','{$time}')";
  $result=mysqli_query($conn , $sql) or die("Query unsuccesfull");
  header("Location:http://localhost/project4/doctordetailse.php");
 
  mysqli_close($conn);
?>