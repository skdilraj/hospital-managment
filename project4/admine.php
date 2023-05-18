<head>
  <title>Login Page</title>
  <style>
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
  .input-box {
    margin-bottom: 15px;
  }
   .input-box label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
  }
  
  .input-box input[type="password"],
  .input-box input[type="email"],
  .form-group select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }
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

<?php
error_reporting(0);

@include 'config.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email =  $_POST['email'];
    $pass = $_POST['password'];


$select = "SELECT email,password FROM login1 WHERE email = '{$email}' AND password = '{$pass}' ";

$result = mysqli_query($conn,$select) or die("Query Failed.");

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        session_start();
        $_SESSION["email"] = $row['email'];
        $_SESSION["password"] = $row['password'];
    }

    header('location:user.html');
    
}else{
    //$error[] = 'Incorrect email or password';
    echo '<div class="alert alert-danger>Email and Password are not matched.</div>';
}
};
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="admission-form-container">
        <div class="from-box-login">
        <div class="form-title">
            <h2>Login</h2>
        </div>
            <form action="<?php $_SERVER['PHP_SELF']?>" method="post">

            <?php
            if(isset($error)){
            foreach($error as $error){
            echo '<span class="error-msg>'.$error.'</span>';
             };
            };
          ?>
                <div class="input-box">
                <label for="email">Email</label>
                    <input type="email" name="email"required >
                    
                </div>
                <div class="input-box">
                <label for="password">Password</label>
                    <input type="password" name="password" required >
                   
                </div>
                <div class="remember-forgot">
                    <label for="checkbox"><input type="checkbox">Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <div class="submit-button">
                <button type="submit" name="submit" class="button-loin-form">Login</button>
                </div>
                <div class="login-register">
                    <p>Don't have an account? <a href="register.php" class="register-link">Register</a></p>
                </div>
            </form>
        </div>
        </div>    
</body>
</html>