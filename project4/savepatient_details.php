<?php
 
   $patient_name=$_POST['p_name'];
   $patient_address=$_POST['address'];
   $ph_no=$_POST['phone_number'];
   $gender=$_POST['gender'];
   $age=$_POST['age'];
  $age=$_POST['age'];
  $deseas=$_POST['desise'];
  $doctor=$_POST['doctor'];
  $addate=$_POST['add_date']; 
  $rdate=$_POST['release_date'];
  $room=$_POST['room'];
  
 
  $conn=mysqli_connect("localhost","root","","hospital") or die("not connect");
$sql="INSERT INTO `paitient`(`p_name`, `ph_no`, `gender`, `age`, `address`, `disease`, `dateadd`, `daterelease`, `assdoctor`, `room_sl_no`) VALUES ('{$patient_name}','{$ph_no}','{$gender}','{$age}','{$patient_address}','{$deseas}','{$addate}','{$rdate}','{$doctor}','{$room}') ";
  $result=mysqli_query($conn , $sql) or die("Query unsuccesfull");
  header("Location:http://localhost/project4/patientdetails.php");
 
  mysqli_close($conn);
?>