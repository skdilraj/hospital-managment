<head>
    <title>appointment information</title>
    <style>
         .style {
        position:center;
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        font-family: sans-serif;
        min-width: 1000px;
        box-shadow: 0 0 20px rgba(0,0,0,0.15);
        text-align: left;
        float: center;
    }
    .style thead tr {
        background-color: #009817;
        color: #ffffff;
        text-align: left;
    }
    .style th,
    .style td {
        padding: 12px 15px;
        position: relative;
    }
    </style>
    
</head>
<div >
    
<?php
$conn=mysqli_connect("localhost","root","","hospital") or die("not connect");
$sql="SELECT *FROM appointment JOIN doctor on appointment.doctor_no = doctor.sl_no ";
$result=mysqli_query($conn , $sql) or die("Query unsuccesfull");

?>
<div id="output">
    <h1>appointment information</h1>
<table class="style">
    <thead>
        <th>sl_no</th>
        <th>patient name</th>
        <th>phone number</th>
        <th>gender</th>
        <th>age</th>
        <th>Doctor name</th>
        <th>Date</th>
    </thead>
   
    <?php
       while($row=mysqli_fetch_assoc($result)){
        
    ?>
    <tr>
        <td><?php echo $row["sl_no"]; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["ph_no"];?></td>
        <td><?php echo $row["gender"];?></td>
        <td><?php echo $row["age"]; ?></td>
        <td><?php echo $row["doctor_name"]; ?></td>
        <td><?php echo $row["date"]; ?></td>
      
        
       
    </tr>
    <?php } ?>
    
</table>
</div>
</div>
</div>