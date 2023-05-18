<head>
<style>
    /* CSS styles */
    .admission-form-container {
    max-width: 500px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f4f4f4;
    border-radius: 5px;
  }
    #header {
            background-color: #427bd1;
            color: rgb(37, 20, 70);
            padding: 20px;
            text-align: center;
        }
        .topnav {
            overflow: hidden;
            background-image:linear-gradient(black,rgba(21, 21, 224, 0.729)) ;
          }
          
          /* Navbar links */
          .topnav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
          }
          
          /* Links - change color on hover */
          .topnav a:hover {
            background-color: #ddd;
            color: rgb(43, 23, 190);
          }
          
            /* Box styling for <a> tags */
                .box-link {
                    display: inline-block;
                    padding: 10px 20px;
                    background-color: #f4f4f4;
                    color: #333;
                    text-decoration: none;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    transition: background-color 0.3s ease;
                    margin-right: 10px;
                  }
                
                  /* Hover effect for <a> tags */
                  .box-link:hover {
                    background-color: #ddd;
                  }
                  .form-group {
    margin-bottom: 15px;
  }
  
  .form-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
  }
  
  .form-group input[type="text"],
  .form-group input[type="email"],
  .form-group select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }
  
  /* Submit button */
  .submit-button {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-align: center;
  }
  
  /* Submit button hover effect */
  .submit-button:hover {
    background-color: #45a049;
  } 
  </style>
  </head>
<div id="main">

  <div class="admission-form-container">
  <div class="form-title">
    <h1>update record</h1>
  </div>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
      <div class="form-group">
        <label>doctor id:</label>
        <input type="text" name="id"  placeholder="doctor id">
        <br>
        </div>
        <div class="submit-button">
        <input class="submit" type="submit" name="show" value="Show">
        </div>
    </form>
    
    <?php
     if(isset($_POST['show'])){
    $conn=mysqli_connect("localhost","root","","hospital") or die("not connect");
    $d_id=$_POST["id"];
    $sql="SELECT *FROM  doctor WHERE sl_no={$d_id}";
    $result=mysqli_query($conn , $sql) or die("Query unsuccesfull");
    
    while($row= mysqli_fetch_assoc($result))
    {
    ?>

    <form class="post-form" action="doctorupdate_data.php" method="post">
      <div class="form-group">
        <label>Doctor name:</label>
        <input type="hidden" name="id"  value="<?php echo $row['sl_no']; ?>">
        <input type="text" name="d_name" value="<?php echo $row['doctor_name']; ?>">
        <br>
        <br>
        </div>
        <div class="form-group">
        <label >Spelization:</label>
        <input type="text" name="sp" value="<?php echo $row['speciallist']; ?>">
        <br>
        <br>
       </div>
       <div class="form-group">
        <label>phone number</label>
        <input type="text" name="ph"  value="<?php echo $row['d_ph_no']; ?>">
        <br>  
        <br>
       </div>
       <div class="form-group">
        <label >degree:</label>
        <input type="text" name="degree" value="<?php echo $row['d_degree']; ?>">
        <br>
        <br>
       </div>
       <div class="form-group">
        <label >Time</label>
        <input type="text" name="address" value="<?php echo $row['time']; ?>">
        <br>
        <br>
       </div>
       <div class="submit-button">
       <input class="submit" type="submit" value="Save">
      </div>
      </div>
      
    </form>  
   
       <?php
            }
          }
    
       ?>
      