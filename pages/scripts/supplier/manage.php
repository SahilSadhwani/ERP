<?php
require_once("../../includes/db.php");

$columns = array("supplier_name", "supplier_address", "supplier_contact", "supplier_email", "gst_no");
$query = "SELECT * FROM supplier WHERE deleted=0";

if(isset($_POST["search"]["value"])){
    $query .= " AND (supplier_name like '%".$_POST["search"]["value"]."%' OR supplier_contact like '%". $_POST['search']['value']."%' OR supplier_email like '%". $_POST['search']['value']."%' OR gst_no like '%". $_POST['search']['value']."%')";
}
if(isset($_POST["order"])){
    $query .= " ORDER BY ".$columns[$_POST['order']['0']['column']]." ".$_POST['order']['0']['dir'];
}else{
    $query .= " ORDER BY ".$columns[0]." ASC";
}

$query1 = "";

if($_POST["length"]!=-1){
    $query1 = ' LIMIT '. $_POST['start'] . ', '.$_POST['length'];  
}

$number_filtered_row = mysqli_num_rows(mysqli_query($connection, $query));

$result = mysqli_query($connection, $query . $query1);

//echo $result;
$data = array();
while($row = mysqli_fetch_assoc($result)){
    $sub_array = array();
    
    $sub_array[] = $row["supplier_name"];
    $sub_array[] = $row["supplier_address"];
    $sub_array[] = $row["supplier_contact"];
    $sub_array[] = $row["supplier_email"];
    $sub_array[] = $row["gst_no"];
    $sub_array[] = "<button class='edit fa fa-pencil btn blue' id='".$row['supplier_id']."' data-toggle='modal' ></button>";
    $sub_array[] = "<button class='delete fa fa-trash btn red' id='".$row['supplier_id']."' data-toggle='modal' data-target='#deleteModal'></button>";
    // I MAY HAVE TO ADD SOME MORE COLUMNS!!!
    
    $data[] = $sub_array;
}

function get_all_data($connection){
    $query = "SELECT * FROM supplier";
    return(mysqli_num_rows(mysqli_query($connection, $query)));
}

$output = array(
    "draw" => intval($_POST['draw']),
    "recordsTotal" => get_all_data($connection),
    "recordsFiltered" => $number_filtered_row,
    "data" => $data,
);

echo json_encode($output);

?>