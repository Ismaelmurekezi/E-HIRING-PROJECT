<?php
require('login.php');
if(isset($_POST['submit'])){
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$birthdate=$_POST['dateofbirth'];
$gender=$_POST['gender'];
$martialstatus=$_POST['martialstatus'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$jobposition=$_POST['jobposition'];
$jobcategory=$_POST['jobcategory'];
$qry2="INSERT INTO employee(firstname,lastname,dateofbirth,gender,martialstatus,tel,email,job_position,job_category)
values('$firstname','$lastname','$birthdate','$gender','$martialstatus','$tel','$email','$jobposition','$jobcategory')";
$insert3=mysqli_query($conn,$qry2);
if(!$insert3){
    echo "Insertion failed";
}
else{
    echo"THANK YOU FOR APPLYING.WE'LL RESPOND YOU AS SOON AS POSSIBLE";
}
}
?>