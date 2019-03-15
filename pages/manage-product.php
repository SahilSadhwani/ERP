    <!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<?php
$page="product";
$sub_page="manage";
session_start();
require_once("includes/functions.php");
//require_once("includes/status-constants.php");
?>
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>Quick ERP | Manage Product</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="../assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="../assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    
    <link rel="stylesheet" href="../assets/global/plugins/bootstrap-toastr/toastr.min.css">
    <link href="../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <link rel="shortcut icon" href="favicon.png" /> </head>
<!-- END HEAD -->

<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
    <!-- BEGIN HEADER -->
    <?php
        require_once("includes/header.php");
    ?>
    <!-- END HEADER -->
    <!-- BEGIN HEADER & CONTENT DIVIDER -->
    <div class="clearfix"> </div>
    <!-- END HEADER & CONTENT DIVIDER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <!-- BEGIN SIDEBAR -->
         <?php
                require_once("includes/sidebar.php");
        ?>
        <!-- END SIDEBAR -->

        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <div class="page-content">
                <!-- BEGIN PAGE HEADER-->
                <!-- BEGIN PAGE BAR -->
                <div class="page-bar">
                    <ul class="page-breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span>Manage Product</span>
                        </li>
                    </ul>
                </div>
                <!-- END PAGE BAR -->
                <!-- BEGIN PAGE TITLE-->
                <h3 class="page-title"> Manage Product
                    <small>Manage your product</small>
                </h3>
                <!-- END PAGE TITLE-->
                <!-- END PAGE HEADER-->
                <!-- BEGIN ADD PRODUCT FORM-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet">
                            <a href="javascript:;" class="btn red">
                           <i class="fa fa-list"></i> Add Product</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light portlet-fit bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-settings font-red"></i>
                                        <span class="caption-subject font-red sbold uppercase">Products</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <div class="row">
                                            <div class="col-md-6 pull-right">
                                                <div class="btn-group pull-right">
                                                    <button class="btn green btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu pull-right">
                                                        <li>
                                                            <a href="javascript:;"> Print </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Save as PDF </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Export to Excel </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-striped table-hover table-bordered" id="product_list">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th> Product Name </th>
                                                <th> EOQ</th>
                                                <th> Rate Of Sale </th>
                                                <th> Additional Specification </th>
                                                <th> Supplier Name </th>
                                                <th> Category Name </th>
                                                <th> Edit </th>
                                                <th> Delete </th>
                                                
                                            </tr>
                                        </thead>

                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                            
                            
                            
                           <!--EDIT BUTTON MODAL-->
                            <div class="modal fade" tabindex="-1" role="dialog" id="editModal">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title">Edit Product!</h4>
                                        </div>

                                        <div class="modal-body">

                                            <div class="row">
                                                <form action="http://<?php echo BASE_SERVER;?>/erp/pages/scripts/product/edit.php" method="POST" class="edit-save-form">
                                                    <div class="form-body">
                                                      
                                                      <div class="alert alert-danger display-hide">
                                                        <button class="close" data-close="alert"></button>
                                                            <span>Enter proper product name,eoq, rate of sale,additional specification,supplier name, category name</span>
                                                        </div>
                                                      
                                                       <div class="form-group clearfix">

                                                            <div class="col-md-9">
                                                                <input type="hidden" id="edit_product_id" name="product_id" class="form-control" placeholder="Product ID" /> </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label class="control-label col-md-3">Product Name
                                                                <span class="required"> * </span>
                                                                </label>
                                                            <div class="col-md-9">
                                                                <input type="text" id="product_name" name="product_name" class="form-control" placeholder="Product Name" /> </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label class="control-label col-md-3">EOQ
                                                                <span class="required"> * </span>
                                                                </label>
                                                            <div class="col-md-9">
                                                                <input type="text" id="eoq" name="eoq" class="form-control" placeholder="eoq" /> </div>
                                                        </div>

                                                        <div class="form-group clearfix">
                                                            <label class="control-label col-md-3">Sale Rate
                                                                <span class="required"> * </span>
                                                                </label>
                                                            <div class="col-md-9">
                                                                <input type="text" id="rate_of_sale" name="rate_of_sale" class="form-control" placeholder="Sale Rate" /> </div>
                                                        </div>
                                                        
                                                        <div class="form-group clearfix">
                                                            <label class="control-label col-md-3">Additional Specifications
                                                                <span class="required"> * </span>
                                                                </label>
                                                            <div class="col-md-9">
                                                                <input type="text" id="additional_specification" name="additional_specification" class="form-control" placeholder="Additional Specifications" /> </div>
                                                        </div>
                                                        
                                                        <div class="form-group clearfix">
                                                            <label class="control-label col-md-3">Supplier Name
                                                                <span class="required"> * </span>
                                                                </label>
                                                            <div class="col-md-9">
                                                                <input type="text" id="supplier_name" name="supplier_name" class="form-control" placeholder="Supplier Name" /> </div>
                                                        </div>
                                                        
                                                        <div class="form-group clearfix">
                                                            <label class="control-label col-md-3">Category Name
                                                                <span class="required"> * </span>
                                                                </label>
                                                            <div class="col-md-9">
                                                                <input type="text" id="category_name" name="category_name" class="form-control" placeholder="Category Name" /> </div>
                                                        </div>
                                                        
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                            <button type="submit "id="edit_save" type="button" class="btn btn-primary" name="edit_product">Save changes</button>
                                                        </div>
<!---->
                                                    </div>
                                                </form>
                                            </div>


                                        </div>

                                    </div>

                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!--END OF EDIT BUTTON MODAL-->
    
                            
                            
                            
                            
                            
                            <!--DELETE BUTTON MODAL-->
                            <div class="modal" tabindex="-1" role="dialog" id="deleteModal">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
<!--                                    <h5 class="modal-title">Modal title</h5>-->
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title">Delete??</h4>
                                  </div>
                                  
                                  <div class="modal-body">
                                    <p>Are you sure, you want to delete this entry?</p>
                                  </div>
                                  <div class="modal-footer">
                                   <form action="http://localhost/erp/pages/scripts/product/delete.php" method="POST">
                                      <input type="hidden" id="recordID" name="product_id">
                                       <button type="submit" class="btn red" name="deleteBtn">Yes</button>
                                        <button type="button" class="btn blue" data-dismiss="modal">No</button>
                                   </form>
                                    
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!--END OF DELETE BUTTON MODAL-->
                            
                        </div>
                    </div>
                <div class="clearfix"></div>
                <!-- END ADD CATEGORY FORM-->
            </div>
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
    <div class="page-footer">
        <div class="page-footer-inner"> 2018 &copy; by Students of Study Link.
        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
    </div>
    <!-- END FOOTER -->
    <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
    <!-- BEGIN CORE PLUGINS -->
    <script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="../assets/global/plugins/bootstrap-toastr/toastr.min.js"></script>
    
    <script src="../assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
    
    
    <script src="../assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>

    <script src="../assets/global/scripts/datatable.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="../assets/pages/scripts/manage-product.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <script src="../assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
    <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
    <!-- END THEME LAYOUT SCRIPTS -->
    <!--BEGIN CUSTOM SCRIPT LOADING-->
    <script src="../assets/pages/scripts/custom.js" type="text/javascript"></script>
    <script src="../assets/pages/scripts/edit-product.js"></script>
    <!--END OF CUSTOM SCRIPT LOADING-->
    
    <?php
//    if(isset($_SESSION['status']) &&
//        $_SESSION['status'] == CATEGORY_EDIT_SUCCESS){
        ?>
<!--
    <script>
        toastr["success"]("You Successfully edited!", "Category Edit")

        toastr.options = {
          "closeButton": true,
          "debug": false,
          "newestOnTop": true,
          "progressBar": true,
          "positionClass": "toast-top-right",
          "preventDuplicates": false,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }
    </script>
-->
        <?php
//            unset($_SESSION['status']);
//    }
        ?>
</body>

</html>
