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
  .form-group input[type="number"],
  .form-group input[type="date"],
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
    padding: 12px;
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

<body>
<div class="admission-form-container">
 <div class="from-box-login">
        <div class="form-title">
            <h2 > doctor appointment </h2>
        </div>
 <form class="post-form" action="saveapointment.php" method="post"  >
    <div class="form-group">
        <label>Pateint name:</label>
        <input type="text" name="p_name"  placeholder="Name">
    </div>
    <div class="form-group">
        <label>Phone number:</label>
        <input type="text" name="ph"  placeholder="Phone number">
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
    <div class="form-group">
        <label>Date:</label>
        <input type="date" name="date" >
    </div>
    <div class="submit-button">
        <button type="submit" name="submit" class="button-loin-form">submit</button>
    </div>
 </form>
 </div>
</div>
</body>
