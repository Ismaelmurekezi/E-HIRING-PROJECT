<?php
session_start();
if(isset($_SESSION['user'])){
    session_destroy();
    echo "User signout successfully";
}
?>