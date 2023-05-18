<head>
<style>
  /* Form container */
  .admission-form-container {
    max-width: 500px;
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

<bodY>
 <div class="admission-form-container">
    <div class="form-title">
        <h2>patient addmit</h2>
    </div>   
<form class="post-form" action="savepatient_details.php" method="post"  >
    <div class="form-group">
        <label>patient name</label>
        <input type="text" name="p_name"  placeholder="p_name">
      </div>
     <div class="form-group">
        <label>phone number</label>
        <input type="text" name="phone_number"  placeholder="ph number">
      </div>
   
      <div class="form-group">
        <label>Age:</label>
        <input type="text" name="age"  placeholder="age">
    </div>
    <div class="form-group">
        <label>Gender:</label>
        <select class="form-group">
            <option>male</option>
            <option>female</option>
            <option>other</option>
        </select>
    </div>
    <div class="form-group">
        <label>Address:</label>
        <input type="text" name="address"  placeholder="address">
    </div>
    <div class="form-group">
        <label>Desise:</label>
        <input type="text" name="desise"  placeholder="desise">
    </div>
    <div class="form-group">
        <label>Doctor name:</label>
        <select name="doctor">
            <option value="" selected disabled>Select Doctor</option>
            <?php
               $conn=mysqli_connect("localhost","root","","hospital") or die("not connect");
               $sql="SELECT *FROM  doctor ";
               $result=mysqli_query($conn , $sql) or die("Query unsuccesfull");
               while($row= mysqli_fetch_assoc($result))
               {
               
            ?>
                <option value="<?php echo $row['sl_no'] ?>"><?php echo $row['doctor_name'] ?></option>
            <?php } ?>
        </select>
    </div>
<div class="from-group">
    <label>addmited date:</label>
    <input type="date" name="add_date" placeholder="name">
</div>
<div class="from-group">
    <label>release date:</label>
    <input type="date" name="release_date" placeholder="name">
</div>
<div class="from-group">
    <label>allocated room:</label>
    <select name="room">
            <option value="" selected disabled>room no</option>
            <?php
               $conn=mysqli_connect("localhost","root","","hospital") or die("not connect");
               $sql="SELECT *FROM  room ";
               $result=mysqli_query($conn , $sql) or die("Query unsuccesfull");
               while($row= mysqli_fetch_assoc($result))
               {
               
            ?>
                <option value="<?php echo $row['sl_no'] ?>"><?php echo $row['room_no'] ?></option>
            <?php } ?>
        </select>
</div>
<div class="submit-button">
<input class="submit" type="submit" value="Save">
</div>
</div>
</body>
