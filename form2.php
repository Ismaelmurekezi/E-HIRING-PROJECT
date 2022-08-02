<?php
require("./login.php");
session_start();
$user=array();
if(!isset($_SESSION["user"])){
    header("location: login.html");
   
 }else{
    $userId=$_SESSION["user"];
    $query = "SELECT * FROM signup WHERE id='$userId'";
    $result = mysqli_query($conn,$query);
    $user = mysqli_fetch_array($result);
    if(!$user)
    echo "Sorry we are not in the right direction";
    else{
        echo $user["firstname"];
    }
 }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>E-hiring form</title>
        <style>
            *{
                margin: 0px;
                padding:0px ;
            }
.form{
    font-size: 25px;
   margin: 100px;
   padding:50px;
    
    box-shadow: -2px -2px 20px 1px;
}
.tt{
   width:500px; 
   padding:20px;
   border: none;
   border-bottom: 2px solid grey;
   border-left: 2px solid grey;
}
.tt1{
    width: 200px;
}
.form button a{
    text-decoration: none;
    font-size: 20px;
}
.form button{
    width: 100px;
    height: 30px;
}

        </style>
    </head>
    <body>
        <form action="employer.php" class="form"  method="POST">
            <h1>FILL EMPLOYER FORM</h1> <br>
            <label for="">Employer name(company):</label><br>
            <input type="text"name="employer"class="tt"value="<?php echo $user['firstname']." ".$user['lastname']; ?>"><br>
            <label for="">Email:</label><br>
            <input type="text"name="email"class="tt"value="<?php echo $user['email']; ?>"> <br>
            <label for="">Tel:</label> <br>
            <input type="number"name="tel"class="tt"value="<?php echo $user['tel']; ?>"> <br>
            <label for="">Location:</label> <br>
            <input type="text"name="location"class="tt"> <br>
        <label for="">Job position:</label> <br>
            <input type="text"name="jobposition"class="tt"value=""> <br>
            <label for="">Job categories:</label> <br>
            <select name="jobcategory" id=""placeholder=""class="tt1">
                <option value=""checked>Monthly job</option>
                <option value="">Pertime job</option>
                <option value="">Tender job</option>
            </select> <br>
            <label for="">Required document(CV etc) :</label>
            <input type="file"name=""> <br>
            <button type="submit" name="submit"> Submit</button>
        </form>
    </body>
</html>