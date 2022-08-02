<?php
require("login.php");
if(isset($_POST["submit"])){
$employer=$_POST['employer'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$location=$_POST['location'];
$jobposition=$_POST['jobposition'];
$jobcategory=$_POST['jobcategory'];
$qry1="INSERT INTO employer(employername,email,tel,location,jobposition,jobcategory)
                    value('$employer','$email','$tel','$location','$jobposition','$jobcategory')";
 $insert1=mysqli_query($conn,$qry1);
 if(!$insert1){
     echo "insertion failed ";
 }
 else{
     echo "THANK YOU,YOUR REQUEST WILL BE ANSWERED WITH PLEASURE.";
 }
}                   
?>
