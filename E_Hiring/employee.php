<?php
require('login.php');
if(isset($_POST['submit'])){
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$birthdate=$_POST['birthdate'];
$gender=$_POST['gender'];
$status=$_POST['status'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$jobposition=$_POST['jobposition'];
$jobcategory=$_POST['jobcategory'];
$qry2="INSERT INTO employee('firstname','lastname','birthdate','gender','tel','email','martial status','job position','job category')
value("$firstname","$lastname",$birthdate,"$gender","$tel","$email" ,"$status","$jobpositon","$jobcategory")";

$insert3=mysqli_query($conn,$qry2);
if(!$insert3){
    echo "Insertion failed";
}
else{
    echo"Well received!!!";
}
}
?>