<?php
 
 
  echo $name=$_POST['p_name'];
  echo $doctor=$_POST['doctor'];
  echo $ph=$_POST['ph'];
  echo $date=$_POST['date'];
  $age=$_POST['age'];
  $gender=$_POST['gender'];
  
  
  $conn=mysqli_connect("localhost","root","","hospital") or die("not connect");
  $sql="INSERT INTO `appointment`( `name`, `ph_no`, `gender`, `age`, `date`, `doctor_no`) VALUES ('{$name}','{$ph}','{$gender}','{$age}','{$date}','{$doctor}')";
  $result=mysqli_query($conn , $sql) or die("Query unsuccesfull");
  header("Location:http://localhost/project4/apointmentdetails.php");
 
  mysqli_close($conn);
?>