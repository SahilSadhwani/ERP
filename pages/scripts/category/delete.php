<?php
require_once("../../includes/db.php");
session_start();
$employee_id = $_SESSION['employee_id'];
if(isset($_POST['deleteBtn'])){
    $category_id = $_POST['category_id'];
    $query = "UPDATE category SET deleted = 1, deleted_at=now(), deleted_by = $employee_id WHERE category_id = $category_id";
    
    mysqli_query($connection, $query);
    echo "Deleted Successfully!";
}
?>