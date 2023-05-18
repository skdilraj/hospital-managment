<?php
 
// Create connection
$conn = mysqli_connect("localhost","root","","project1") or die("not connect");

// Prepare SQL query
$sql = "SELECT * FROM student";

// Execute SQL query
$result = mysqli_query($conn, $sql);

$password=$_POST['password'];
$uname=$_POST['username'];
if(isset($_post['login'])){
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    if($row['student_name']==$uname && $row['password']==$password){
   
    
    header("Location:http://localhost/project/a.html");
    
      
    }
    
  }
} 
header("Location:http://localhost/project/b.html");
}

// Close connection

?>