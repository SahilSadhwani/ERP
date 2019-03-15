<?php
session_start();
require_once("../../includes/db.php");
require_once("../../includes/functions.php");
$employee_id = $_SESSION['employee_id'];

if(isset($_POST['add_customer'])){
    $customer_name = $_POST['customer_name'];
    $customer_address = $_POST['customer_address'];
    $customer_email = $_POST['customer_email'];
    $customer_contact = $_POST['customer_contact'];
    $gst_no = $_POST['gst_no'];
    
    
    
    $query = "SELECT * FROM customer WHERE customer_contact = $customer_contact AND deleted = 0";
    $result = mysqli_query($connection, $query);
    checkQueryResult($result);
//    $query_gst = "SELECT * FROM gst WHERE hsn_code = $hsn_code";
//    $result_gst = mysqli_query($connection, $query_gst);
//    checkQueryResult($result_gst);
    
//    echo $query;
    if(mysqli_num_rows($result)==0 /*&& mysqli_num_rows($result_gst)==0*/ ){
        $query = "INSERT INTO customer(customer_name, customer_address, customer_email, customer_contact, gst_no, created_by) VALUES('$customer_name', '$customer_address', '$customer_email', '$customer_contact', '$gst_no', $employee_id)";
        
        $add_customer_query_result = mysqli_query($connection, $query);
        
        checkQueryResult($add_customer_query_result);
        
//        $query = "INSERT INTO gst(hsn_code, gst_rate, wef, created_by) VALUES($hsn_code, $gst_rate, now(), $employee_id)";
        
//        $add_gst_query_result = mysqli_query($connection, $query);
        
//        checkQueryResult($add_gst_query_result);
       
        
    }
//    else if(mysqli_num_rows($result)==0 && mysqli_num_rows($result_gst)>0){
//        $row = mysqli_fetch_assoc($result_gst);
//        if($row['gst_rate']!=$gst_rate){
//            header("Location: http://".BASE_SERVER."/erp/pages/add-category.php?q=error&status=gst");
//            exit;    
//        }   
//        else{
//            $query = "INSERT INTO category(category_name, hsn_code, created_by) VALUES('$category_name', $hsn_code, $employee_id)";
//            
//            $add_category_query_result = mysqli_query($connection, $query);
//            
//            checkQueryResult($add_category_query_result);
//        }
//    }
    else{
        header("Location: http://".BASE_SERVER."/erp/pages/add-customer.php?q=error&status=customer");
        exit;
    }
    
    
    header("Location: http://".BASE_SERVER."/erp/pages/add-customer.php?q=success");
    exit;
}
?>