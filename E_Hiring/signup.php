<?php
require("login.php");
if(isset($_POST['submit'])){
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$birthdate=$_POST['birthdate'];
$gender=$_POST['gender'];
$tel=$_POST['tel'];
$city=$_POST['city'];
$pass=$_POST['password'];
$comfirm=$_POST['confirm'];
$qry="INSERT INTO signup(firstname,lastname,age,gender,tel,city,pass,comfirm)
                    value("$firstname","$lastname",$birthdate,"$gender",$tel,"$city","$pass","$comfirm")";

$insert=mysqli_query($conn,$qry);
if(!$insert){
    echo "action failed ";
}
else{
    echo "account already created";
}
}
?>