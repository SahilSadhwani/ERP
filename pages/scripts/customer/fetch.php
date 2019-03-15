<?php

require_once("../../includes/db.php");

if(isset($_POST['customer_id'])){
    $customer_id = $_POST['customer_id'];
    $query = "SELECT customer_id, customer_name, customer_address, customer_email, customer_contact, gst_no FROM customer WHERE customer_id = $customer_id";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    echo json_encode($row);
}
    
?>