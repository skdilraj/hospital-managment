<?php
 
 $d_id=$_POST['id'];
  echo $name=$_POST['d_name'];
  echo $degree=$_POST['degree'];
  echo $ph=$_POST['phone_number'];
  echo $time=$_POST['time'];
  echo $sp=$_POST['sp'];
  
  $conn=mysqli_connect("localhost","root","","hospital") or die("not connect");
  $sql="UPDATE `doctor` SET `doctor_name`='{$name}',`d_degree`='{$degree}',`d_ph_no`='{$ph}',`speciallist`='{$sp}',`time`='{$time}' WHERE `sl_no`='{$d_id}'";
  $result=mysqli_query($conn , $sql) or die("Query unsuccesfull");
  header("Location:http://localhost/project4/doctordetailse.php");
 
  mysqli_close($conn);
?>