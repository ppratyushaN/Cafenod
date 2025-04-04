<?php
$email=$_POST['Email'];
$first name=$_POST['First name'];
$last name=$_POST['Last name'];
$ph.no.=$_POST['Ph.No.'];
$location=$_POST['Location'];
$no. of guests=$_POST['No. of guests'];
$time=$_POST['Time'];
$notes=$_POST['notes'];

   //Database Connection
   $conn= new mysqli('localhost','root','','cafenod');
   if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
   }else{
     $stmt=$conn->prepare("insert into resistration(Email,First name,Last name,Ph.No.,Location,No. of guests,Time,notes)
     values(?,?,?,?,?,?,?,?)");
     $stmt->bind_param("sssissss",$Email,$First name,$Last name,$Ph.No.,$Location,$No. of guests,$Time,$notes);
     $stmt->execute();
     echo "resistration successfully completed......";
     $stmt->close();
     $conn->close();
   }
?>