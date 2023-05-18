
<head>
    <title>Hospital Management</title>
    <style>
        /* CSS styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        #header {
            background-color: #427bd1;
            color: rgb(37, 20, 70);
            padding: 20px;
            text-align: center;
        }
    
        #container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        #banner {
            background-image: url('pic.jpg');
            background-size: cover;
            height: 300px;
        }
        
        #banner h1 {
            color: blue;
            font-size: 36px;
            text-align: center;
            padding-top: 100px;
            text-shadow: 2px 2px #000;
        }
        
        #content {
            margin-top: 20px;
        }
        
        .section {
            margin-bottom: 40px;
        }
        
        .section h2 {
            color: #a30c0c;
            font-size: 24px;
            margin-bottom: 20px;
        }
        
        .section p {
            color: #0b4461;
            line-height: 1.5;
        }
        
        .list-container {
            display: flex;
            flex-wrap: wrap;
        }
        
        .list-item {
            width: 33%;
            padding: 10px;
        }
        
        .list-item h3 {
            color: #4a13cb;
            font-size: 18px;
            margin-top: 0;
        }
        
        .list-item p {
            color: #07512a;
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
    </style>
</head>
<body>

    <div id="header">
        <h1>Hospital Management</h1>
    </div>
     <div class="topnav">
            <a href="indese.php"><h3>Home</h3></a> 
            <a href="doctordetailse.php"><h3>doctor list</h3></a> 
            <a href="admine.php"><h3>admine page</h3></a> 
           
     </div>    
    <div id="container">
        <div id="banner">
            <h1>Welcome to our Hospital</h1>
        </div>
        <div id="content">
            <div class="section">
                <h2>About Us</h2>
                <p>
               <strong>About Our Hospital</strong><br>
                 Welcome to ABC Hospital, where your health and well-being are our top priorities. We are dedicated to providing exceptional healthcare services to our patients and ensuring their comfort and satisfaction throughout their medical journey.<br>
               <br>
              At ABC Hospital, we bring together a team of highly skilled doctors, nurses, and healthcare professionals who are committed to delivering personalized care and treatment. Our state-of-the-art facilities are equipped with advanced medical technology, enabling us to provide accurate diagnoses and effective treatments.<br>
                <br>
                We offer a comprehensive range of medical services across various specialties, including cardiology, oncology, orthopedics, neurology, and more. Our multidisciplinary approach ensures that our patients receive holistic and integrated care to promote their overall well-being.<br>
               <br>
              Our hospital's core values include compassion, integrity, and innovation. We prioritize patient safety and strive to create a warm and welcoming environment where our patients feel supported and respected. We believe in open communication, involving patients in their healthcare decisions, and providing them with the information and resources they need for a speedy recovery.<br>
                <br>
               Thank you for choosing ABC Hospital. We look forward to serving you and being your trusted healthcare partner.<br>
               <br>
             <em>"Your Health, Our Priority"</em>
              </p>
            </div>
            <div class="section">
                <h2>Doctor List</h2>
                <?php
                 $conn=mysqli_connect("localhost","root","","hospital") or die("not connect");
                 $sql="SELECT *FROM doctor";

                 $result=mysqli_query($conn , $sql) or die("Query unsuccesfull");

                ?>
                <div class="list-container">
                <?php
                  while($row=mysqli_fetch_assoc($result)){
        
                ?>
                    <div class="list-item">
                        <h3><?php echo $row['doctor_name']; ?></h3>
                        <p>Specialty:<?php echo $row['speciallist']; ?></p>
                    </div>
                <?php } ?>
                   
                </div>
            </div>
            
            <div class="section">
                <h2>Details</h2>
                <p> <strong>XYZ Hospital</strong><br>
                 Address: 123 Main Street, City, State<br>
                 Phone: (123) 456-7890<br>
                 Email: info@xyzhospital.com<br>
              
                <br>
                XYZ Hospital is a renowned healthcare institution committed to providing exceptional medical services to patients. Our state-of-the-art facilities, experienced medical professionals, and patient-centric approach make us a trusted choice for healthcare needs. We offer a wide range of specialties and advanced treatments, ensuring comprehensive care for our patients. With a focus on cutting-edge technology and evidence-based practices, we strive to deliver the highest quality medical care in a compassionate and supportive environment.
              </p>
            </div>
        </div>
    </div>
</div>                


