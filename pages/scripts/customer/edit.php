<?php

require_once("../../includes/functions.php");
session_start();

if(isset($_POST['edit_customer'])){
    $customer_id = $_POST['customer_id'];
    $customer_name = $_POST['customer_name'];
    $customer_address = $_POST['customer_address'];
    $customer_contact = $_POST['customer_contact'];
    
    $gst_no = $_POST['gst_no'];
    
    $employee_id = $_SESSION['employee_id'];
    
    $query_check_1 ="SELECT customer_contact FROM customer WHERE customer_contact = $customer_contact AND deleted = 0 AND customer_id <> $customer_id";
    $result = mysqli_query($connection, $query_check_1);
    checkQueryResult($result);
    
    if(isset($_POST['gst_no']))
    {
    $query_check_2 ="SELECT gst_no FROM customer WHERE gst_no = '$gst_no' AND deleted = 0 AND customer_id <> $customer_id ";
    $result2 = mysqli_query($connection, $query_check_2);
    checkQueryResult($result2);
    }
    
    
    if((mysqli_num_rows($result)==0) && (mysqli_num_rows($result2)==0)) { 
        $query = "UPDATE customer SET customer_name = '$customer_name', customer_address = '$customer_address', customer_contact = '$customer_contact', gst_no = '$gst_no', updated_by = $employee_id, updated_at = now() WHERE customer_id = $customer_id";

        $result = mysqli_query($connection, $query);
        checkQueryResult($result);
    }else if((mysqli_num_rows($result)==0)){
         $query = "UPDATE customer SET customer_name = '$customer_name', customer_address = '$customer_address', customer_contact = '$customer_contact', gst_no = '$gst_no', updated_by = $employee_id, updated_at = now() WHERE customer_id = $customer_id";

        $result = mysqli_query($connection, $query);
        checkQueryResult($result);
        
    }
    else{
        //header("Location: http://".BASE_SERVER."/erp/pages/manage-customer.php?q=error&status=customer");
        //exit;
        $_SESSION['status'] = CUSTOMER_EDIT_FAILURE;
        header("Location: http://".BASE_SERVER."/erp/pages/manage-customer.php");
    exit();
    }
    
    //echo "Updated!";
    $_SESSION['status'] = CUSTOMER_EDIT_SUCCESS;
    header("Location: http://".BASE_SERVER."/erp/pages/manage-customer.php");
    exit();
}
?>