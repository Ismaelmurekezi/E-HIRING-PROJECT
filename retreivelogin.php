<?php
require("login.php");
$email=$_POST['email'];
$pass=$_POST['password'];
session_start();
// $confirm=$_POST['confirm'];
$query = "SELECT * FROM signup WHERE email='$email' and pass='$pass'";
$result = mysqli_query($conn,$query);
if($result){
    // echo"logged in";
        if($row = mysqli_fetch_array($result)){
           echo 
                  "Welcome your info are:". 
                 "<b>Email:</b> ".$row['email']."<br/>".
                 "<b>Password</b> ".$row['pass']."<br/>";
                 $_SESSION['user']=$row['id'];
        }else{
            echo "Invalid passowrd or email.";
        }
    }
    else{
            echo"Not logged in".mysqli_error($conn);
        //    echo "Byanze ".mysqli_error($conn);
    }

// else{
//     echo"Not logged in".mysqli_error($conn) <br/>;
// }


?>