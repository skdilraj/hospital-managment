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
<div class="admission-form-container">
        <div class="form-title">
                <h2>insert new doctor details</h2>
        </div>
<form class="post-form" action="savedoctor_detailse.php" method="post"  >
<div class="form-group">
        <label>Doctor name:</label>
        <input type="text" name="d_name"  placeholder="Dr. name">
        
       </div>
<div class="form-group">
        <label>phone number:</label>
        <input type="text" name="phone_number"  placeholder="ph number">
        
       </div>
<div class="form-group">
        <label>Degree:</label>
        <input type="text" name="degree"  placeholder="degree">
        
</div>
<div class="form-group">
        <label>on duty time:</label>
        <input type="time" name="time"  placeholder="time">
        
</div>
<div class="form-group">
        <label>specialist:</label>
        <input type="text" name="sp"  placeholder="spelijation">
        
 </div>
 <div class="submit-button">
 <input class="submit" type="submit" value="Save">
</div>
</div>