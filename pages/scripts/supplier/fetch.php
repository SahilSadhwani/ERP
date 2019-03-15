<?php

require_once("../../includes/db.php");

if(isset($_POST['supplier_id'])){
    $supplier_id = $_POST['supplier_id'];
    $query = "SELECT supplier_id, supplier_name, supplier_address, supplier_contact, supplier_email, gst_no FROM supplier WHERE supplier_id = $supplier_id";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    echo json_encode($row);
}
    
?>