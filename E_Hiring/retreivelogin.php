<?php
require("login.php");
if(isset($_POST['submit'])){
$email=$_POST['email'];
// $pass=$_POST['password'];
// $confirm=$_POST['confirm'];
$query = "SELECT * FROM user WHERE email=$email ";
$result =mysqli_query($conn,$query);
if($result){
   
    echo "Not logged in";
  
}
else{
    echo"logged in";
}
}
?>