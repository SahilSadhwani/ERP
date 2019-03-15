<?php
//echo "hello";

require_once("../includes/db.php");
require_once("../includes/functions.php");
session_start();

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);
    
    $query = "SELECT * FROM employee WHERE employee_email = '$username'";
    
    $select_user_details = mysqli_query($connection, $query);
    
    $select_user_details = mysqli_query($connection, $query);
    
    checkQueryResult($select_user_details);
    //proceed if there is data returned otherwise would be errors!
    
    if(mysqli_num_rows($select_user_details)>1){
        
        die("How?");
        //later we would create a error wala page
        //and will print the error in user friendly manner
        //header();
    }
    //if m coming here that means i have exactly 0/1 row!
    
    //$db_password = "";
    
    if($row = mysqli_fetch_assoc($select_user_details)){
        //i have 1 row
        $db_password = $row['employee_password'];
        $employee_id = $row['employee_id'];
    }else{
        $db_password = "";
    }
    
    if(password_verify($password,$db_password)){
        $_SESSION['employee_id'] = $employee_id;
        header("Location: ../index.php");
    }else{
        die("kya baat hai??");
    }
}


?>