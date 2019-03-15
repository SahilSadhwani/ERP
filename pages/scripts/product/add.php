<!--

/*if(isset($_POST["add_product"])){
    $product_name = $_POST["product_name"];
    $rate_of_sale = $_POST["rate_of_sale"];
    $category_id = $_POST["category_id"];
    $suppliers = $_POST["supplier_id"];
    
echo $product_name;
echo "<br>";
echo $rate_of_sale;
echo "<br>";
echo $category_id;
echo "<br>";
    
foreach($suppliers as $supplier_id){
    echo $supplier_id;
}
}*/
-->


<!--///////////////////////Sample code to upload image to server////////////////////////-->
<?php
//session_start();
//require_once("../../includes/functions.php");
//$employee_id = $_SESSION['employee_id'];
//$image_name = $_FILES['product_image']['name'];
//$image_size = $_FILES['product_image']['size'];
//$temp_name = $_FILES['product_image']['tmp_name'];
//$file_type = $_FILES['product_image']['type'];
//
//$file_extension = strtolower(end(explode(".",$image_name)));
//echo "Image Name : ".$image_name;
//echo "<br> Image Size : $image_size";
//echo "<br> Temp name : $temp_name";
//echo "<br> File Type : $file_type";
//echo "<br> File Extension : $file_extension";
//
//$valid_extensions = array("jpeg", "jpg", "png");
//
//if(in_array($file_extension, $valid_extensions) == false){
//    $error_msg[] = "Image is not valid! Please choose a JPEG or PNG file!";
//}
//if($image_size>2097152){
//    $error_msg[] = "Image size is too huge! Please select image within 2MB size!";
//}
//if(empty($error_msg)){
//    move_uploaded_file($temp_name,"../../../assets/products/images/".$image_name);
//    echo "File Successsfully Uploaded";
//}else{
//    print_r($error_msg);
//}
?>




<!--//////////////////////////////////////////////////////-->


<?php
session_start();
require_once("../../includes/db.php");
require_once("../../includes/functions.php");
$employee_id = $_SESSION['employee_id'];

if(isset($_POST['add_product'])){
    //checking whether the file was uploaded or not!
    if(isset($_FILES['product_image'])){
        //yes the file was uploaded so we are initializing all the required variables
        $image_name = $_FILES['product_image']['name'];
        $image_size = $_FILES['product_image']['size'];
        $temp_name = $_FILES['product_image']['tmp_name'];
        $file_type = $_FILES['product_image']['type'];
        
        $file_extension = strtolower(end(explode(".",$image_name)));
    }
    
    $product_name = $_POST['product_name'];
    $rate_of_sale = $_POST['rate_of_sale'];
    $additional_specification = $_POST['additional_specification'];
    $category_id = $_POST['category_id'];
    $eoq = $_POST['eoq'];
    $suppliers = $_POST['supplier_id'];
    
    $tablename = "product";
    $columns = "product_name, eoq, additional_specification, category_id, image_extension, created_by";
    $values = "'$product_name', $eoq ,'$additional_specification', $category_id, '$file_extension', $employee_id";
    
    $result = insert($tablename, $columns, $values);
    //product has been added
    
    //getting the last product_id which was automatically created by the DBMS!
    $product_id = mysqli_insert_id($connection);
    
    $tablename = "product_sale_rate";
    $columns = "product_id, rate_of_sale, wef, created_by";
    $values = "$product_id, $rate_of_sale, now(), $employee_id";
    $result = insert($tablename, $columns, $values);
    
    $tablename = "product_supplier";
    $columns = "product_id, supplier_id";
    foreach($suppliers as $supplier_id){
        $values = "$product_id, $supplier_id";
        $result = insert($tablename, $columns, $values);
    }
    
    /*
     Code to Upload the file!!!!
    */
    if(isset($_FILES['product_image'])){
        move_uploaded_file($temp_name,"../../../assets/products/images/".$product_id.".".$file_extension);   
    }
    echo "ADDED";
    
//    $_SESSION['status'] = PRODUCT_ADD_SUCCESS;
//    $url = "http://".BASE_SERVER."/erp/pages/add-product.php";
//    redirect($url);

}
?>






<!--SELECT p.product_name, p.eoq, p.additional_specification, c.category_name, s.supplier_name FROM product p, category c, supplier s, product_supplier ps , product_sale_rate psr WHERE p.category_id in (SELECT c.category_id FROM category WHERE p.category_id = c.category_id AND c.category_id in (SELECT p.category_id FROM product WHERE p.product_id in (SELECT ps.product_id FROM product_supplier WHERE p.product_id = ps.product_id AND ps.supplier_id in (SELECT s.supplier_id FROM supplier WHERE ps.supplier_id = s.supplier_id AND s.supplier_id in (SELECT ps.supplier_id FROM product_supplier WHERE ps.product_id in (SELECT psr.product_id FROM product_sale_rate WHERE ps.product_id = psr.product_id ))))))-->


<!--
select product.product_id, product.product_name,product_sale_rate.rate_of_sale,product.eoq,product.additional_specification,GROUP_CONCAT(DISTINCT supplier.supplier_name,'') as supplier_name,category.category_name,product.deleted from product,supplier,category,product_supplier,product_sale_rate where product_supplier.supplier_id=supplier.supplier_id and product.category_id = category.category_id and product.product_id=product_supplier.product_id and product.deleted=0 and product.product_id=product_sale_rate.product_id GROUP BY product.product_id HAVING product.deleted = 0
-->

<!--
concrete subclass
markable interfaces
-->


