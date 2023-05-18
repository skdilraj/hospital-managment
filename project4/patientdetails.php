
<head>
    <title>student information</title>
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
$sql="SELECT *FROM paitient JOIN doctor on paitient.assdoctor = doctor.sl_no JOIN room on paitient.room_sl_no = room.sl_no";

$result=mysqli_query($conn , $sql) or die("Query unsuccesfull");

?>
<div id="output">
    <h1>patient information</h1>
<table class="style">
    <thead>
        <th>sl_no</th>
        <th>patient name</th>
        <th>age</th>
        <th>phone number</th>
        <th>adress</th>
        <th>assing doctor</th>
        <th>addmited date</th>
        <th>release date</th>
        <th>assing room</th>
    </thead>
   
    <?php
       while($row=mysqli_fetch_assoc($result)){
        
    ?>
    <tr>
        <td><?php echo $row["sl_no"]; ?></td>
        <td><?php echo $row["p_name"]; ?></td>
        <td><?php echo $row["age"];  ?></td>
        <td><?php echo $row["ph_no"];?></td>
        <td><?php echo $row["address"];?></td>
        <td><?php echo $row["doctor_name"]; ?></td>
        <td><?php echo $row["dateadd"]; ?></td>
        <td><?php echo $row["daterelease"];  ?></td>
        <td><?php echo $row["room_no"];?></td>
        
       
    </tr>
    <?php } ?>
    
</table>
</div>
</div>
</div>