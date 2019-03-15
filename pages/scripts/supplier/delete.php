<?php
require_once("../../includes/db.php");
session_start();
$employee_id = $_SESSION['employee_id'];
if(isset($_POST['deleteBtn'])){
    $supplier_id = $_POST['supplier_id'];
    $query = "UPDATE supplier SET deleted = 1, deleted_at=now(), deleted_by = $employee_id WHERE supplier_id = $supplier_id";
    
    mysqli_query($connection, $query);
    echo "Deleted Successfully!";
}
?>