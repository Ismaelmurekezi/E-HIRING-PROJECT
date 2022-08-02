<?php
  $server = "localhost";
  $user ="root";
  $pass = "";
  $dbname = "e_hiring"; 

$conn=mysqli_connect($server,$user,$pass,$dbname);
if($conn){
    // echo"byakunze";

}

else{
    echo"byanze".mysqli_error($conn);
}

?>