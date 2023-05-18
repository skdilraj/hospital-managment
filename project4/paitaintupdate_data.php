<?php
 
  $d_id=$_POST['id'];
  echo $name=$_POST['p_name'];
  echo $age=$_POST['age'];
  echo $ph=$_POST['ph'];
  echo $address=$_POST['address'];
  echo $disise=$_POST['disise'];
  echo $addate=$_POST['addate'];
  echo $rdate=$_POST['rdate'];
  echo $d_name=$_POST['d_name'];
  echo $r_name=$_POST['r_name'];
  
  $conn=mysqli_connect("localhost","root","","hospital") or die("not connect");
  $sql="UPDATE `paitient` SET `p_name`='{$name}',`ph_no`='{$ph}',`gender`='{}',`age`='{$age}',`address`='{$address}',`disease`='{$disise}',`dateadd`='{$addate}',`daterelease`='{$rdate}',`assdoctor`='{$d_name}',`room_sl_no`='{$r_name}' WHERE sl_no=$d_id";
  $result=mysqli_query($conn , $sql) or die("Query unsuccesfull");
  header("Location:http://localhost/project4/patientdetails.php");
 
  mysqli_close($conn);
?>