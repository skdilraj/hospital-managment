<head>
  <style>
      .admission-form-container {
    max-width: 700px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f4f4f4;
    border-radius: 5px;
  }
  /* Form title */
  .form-title {
    text-align: center;
    font-size: 24px;
    margin-bottom: 20px;
  }
  
  /* Form input fields */
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
   <div class="admission-form-container">
  <div class="form-title">
    <h1>update record</h1>
  </div>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
      <div class="form-group">
        <label>Admission id:</label>
        <input type="text" name="id"  placeholder="admission id">
        <br>
        </div>
        <div class="submit-button">
        <input class="submit" type="submit" name="show" value="Show">
        </div>
    </form>
    
    <?php
     if(isset($_POST['show'])){
    $conn=mysqli_connect("localhost","root","","hospital") or die("not connect");
    $p_id=$_POST["id"];
    $sql="SELECT *FROM  paitient WHERE sl_no={$p_id}";
    $result=mysqli_query($conn , $sql) or die("Query unsuccesfull");
    
    while($row= mysqli_fetch_assoc($result))
    {
    ?>

    <form class="post-form" action="paitaintupdate_data.php" method="post">
      <div class="form-group">
        <label>paitiant name:</label>
        <input type="hidden" name="id"  value="<?php echo $row['sl_no']; ?>">
        <input type="text" name="p_name" value="<?php echo $row['p_name']; ?>">
        <br>
        <br>
        </div>
        <div class="form-group">
        <label >Age:</label>
        <input type="text" name="age" value="<?php echo $row['age']; ?>">
        <br>
        <br>
       </div>
       <div class="form-group">
        <label>phone number</label>
        <input type="text" name="ph"  value="<?php echo $row['ph_no']; ?>">
        <br>  
        <br>
       </div>
       <div class="form-group">
        <label>Adress</label>
        <input type="text" name="address"  value="<?php echo $row['address']; ?>">
        <br>  
        <br>
       </div>
       <div class="form-group">
        <label>Desease:</label>
        <input type="text" name="disise"  value="<?php echo $row['disease']; ?>">
        <br>  
        <br>
       </div>
       <div class="form-group">
        <label >Admited Date:</label>
        <input type="text" name="addate" value="<?php echo $row['dateadd']; ?>">
        <br>
        <br>
       </div>
       <div class="form-group">
        <label >Release Date:</label>
        <input type="text" name="rdate" value="<?php echo $row['daterelease']; ?>">
        <br>
        <br>
       </div>

       <div class="form-group">
        <label >Doctor:</label>
        <select name="d_name">
            
            <?php
               $conn=mysqli_connect("localhost","root","","hospital") or die("not connect");
               $sql="SELECT *FROM  doctor ";
               $result=mysqli_query($conn , $sql) or die("Query unsuccesfull");
               while($row1= mysqli_fetch_assoc($result))
               {
               
            ?>
                <option value="<?php echo $row1['sl_no'] ?>"><?php echo $row1['doctor_name'] ?></option>
            <?php } ?>
        </select>
        <br>
        <br>
       </div>

       <div class="form-group">
        <label >room no:</label>
        <select name="r_name">
          
            <?php
               $conn=mysqli_connect("localhost","root","","hospital") or die("not connect");
               $sql="SELECT *FROM  room ";
               $result=mysqli_query($conn , $sql) or die("Query unsuccesfull");
               while($row1= mysqli_fetch_assoc($result))
               {
               
            ?>
               
                <option value="<?php echo $row1['sl_no'] ?>"><?php echo $row1['room_no'] ?></option>
            <?php } ?>
        </select>
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