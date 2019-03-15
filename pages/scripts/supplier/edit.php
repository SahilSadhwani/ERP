<?php

require_once("../../includes/functions.php");
session_start();

if(isset($_POST['edit_supplier'])){
    $supplier_id = $_POST['supplier_id'];
    $supplier_name = $_POST['supplier_name'];
    $supplier_address = $_POST['supplier_address'];
    $supplier_contact = $_POST['supplier_contact'];
    $supplier_email = $_POST['supplier_email'];
    $gst_no = $_POST['gst_no'];
    
    $employee_id = $_SESSION['employee_id'];
    
    $query_check_1 ="SELECT supplier_contact FROM supplier WHERE supplier_contact = $supplier_contact AND deleted = 0";
    $result = mysqli_query($connection, $query_check_1);
    checkQueryResult($result); 
    
    
    if(mysqli_num_rows($result)==0){ 
        $query = "UPDATE supplier SET supplier_name = '$supplier_name', supplier_address = '$supplier_address', supplier_contact = '$supplier_contact', supplier_email = '$supplier_email', gst_no = '$gst_no', updated_by = $employee_id, updated_at = now() WHERE supplier_id = $supplier_id";

        $result = mysqli_query($connection, $query);
        checkQueryResult($result);
    }
    else{
        //header("Location: http://".BASE_SERVER."/erp/pages/manage-supplier.php?q=error&status=supplier");
        //exit;
        $_SESSION['status'] = SUPPLIER_EDIT_FAILURE;
        header("Location: http://".BASE_SERVER."/erp/pages/manage-supplier.php");
    exit();
    }
    
    //echo "Updated!";
    $_SESSION['status'] = SUPPLIER_EDIT_SUCCESS;
    header("Location: http://".BASE_SERVER."/erp/pages/manage-supplier.php");
    exit();
}
?>