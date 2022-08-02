<?php
require("login.php");
if(isset($_POST["submit"])){
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$age=$_POST['dob'];
$gender=$_POST['gender'];
$tel=$_POST['tel'];
$city=$_POST['city'];
$pass=$_POST['password'];
$comfirm=$_POST['confirm'];
$email=$_POST['email'];

$qry="INSERT INTO signup(firstname,lastname,dateofbirth,gender,tel,city,pass,comfirm, email)
                    value('$firstname','$lastname','$age','$gender','$tel','$city','$pass','$comfirm', '$email')";
$insert=mysqli_query($conn,$qry);
if(!$insert){
    echo "action failed ";
}
else{
    header("location: login.html");
}
}
?>