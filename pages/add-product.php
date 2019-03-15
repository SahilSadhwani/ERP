<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<?php
$page = "product";
$sub_page = "add";
session_start();
require_once("includes/functions.php");
?>
    <html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Quick ERP | Add Product</title>
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
        <!--BEGIN PAGE LEVEL PLUGINS-->
        <link rel="stylesheet" href="../assets/global/plugins/bootstrap-toastr/toastr.min.css">
        <link href="../assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css">
        <!--END PAG LEVEL PLUGINS-->
        <link rel="shortcut icon" href="favicon.png" /> </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <!--BEGIN HEADER-->
        <?php
            require_once("includes/header.php");
        ?>
            <!--END HEADER-->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <!-- BEGIN CONTAINER -->
            <div class="page-container">
                <!--SIDEBAR BEGIN-->
                <?php
                require_once("includes/sidebar.php");
            ?>
                    <!--SIDEBAR END-->

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
                                        <span>Add Product</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- END PAGE BAR -->
                            <!-- BEGIN PAGE TITLE-->
                            <h3 class="page-title"> Add Product
                                <small>Add new Product</small>
                            </h3>
                            <!-- END PAGE TITLE-->
                            <!-- END PAGE HEADER-->
                            <!-- BEGIN ADD PRODUCT FORM-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="portlet">
                                        <a href="http://<?php echo BASE_SERVER;?>/erp/pages/manage-customer.php" class="btn red">
                       <i class="fa fa-list"></i> Manage Product</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- BEGIN VALIDATION STATES-->
                                    <div class="portlet light portlet-fit portlet-form bordered">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="icon-settings font-dark"></i>
                                                <span class="caption-subject font-dark sbold uppercase">Add Product</span>
                                            </div>
                                        </div>
                                        <div class="portlet-body form">



                                            <!-- BEGIN FORM-->
<form action="scripts/product/add.php" id="add_product_form" class="form-horizontal" method="post" enctype="multipart/form-data">
    <div class="alert alert-danger display-hide">
        <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>

    <div class="form-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label col-md-4">Product Name
<span class="required"> * </span>
</label>
                    <div class="col-md-8">
                        <input type="text" name="product_name" class="form-control" placeholder="Product Name" /> </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-md-4 control-label">Sale Rate

</label>
                    <div class="col-md-8">
                        <input type="text" name="rate_of_sale" class="form-control" placeholder="Rate of Sale" />
                    </div>
                </div>
            </div>
            
            
        </div>
           <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label col-md-4">Category </label>
                    <div class="col-md-8">
                        <select name="category_id" id="category_id" class="form-control">
                            <option></option>
                            <?php
                                require_once("includes/functions.php");
                                $query = "SELECT * FROM category WHERE deleted = 0";
                                $result = mysqli_query($connection, $query);
                                checkQueryResult($result);
                                while($row = mysqli_fetch_assoc($result)){
                                    $category_id = $row['category_id'];
                                    $category_name = $row['category_name'];
                                    echo "<option value='$category_id'>$category_name</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-md-4 control-label">EOQ Level

</label>
                    <div class="col-md-8">
                        <input type="text" value = "0" name="eoq" class="form-control" placeholder="eoq" />
                    </div>
                </div>
            </div>
            
        </div>
          
           <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label col-md-2">Suppliers <span class="required"> * </span></label>
                    <div class="col-md-8">
                        <select name="supplier_id[]" id="supplier_id" class="form-control" multiple="multiple">
                            <option></option>
                            <?php
                                require_once("scripts/product/operations.php");
                              getAllSuppliersForSelect();
                            ?>    
                        </select> 
                   </div>
                </div>
            </div>

        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label col-md-2">Additional Description <span class="required"> * </span></label>
                    <div class="col-md-8">
                        <textarea name="additional_specification" id="additional_specification" rows="3" class="form-control"></textarea>
                   </div>
                </div>
            </div>

        </div>
        
        
        <div class="row">
            <div class="col-md-12">
                <div class="form-group last">
                    <label class="control-label col-md-2">Product Image</label>
                    <div class="col-md-10">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                            <div>
                                <span class="btn default btn-file">
                                    <span class="fileinput-new"> Select image </span>
                                    <span class="fileinput-exists"> Change </span>
                                    <input type="file" name="product_image" accept="image/*"> </span>
                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                            </div>
                        </div>
                        <div class="clearfix margin-top-10">
                            <span class="label label-danger">NOTE!</span> Image preview only works in IE10+, FF3.6+, Safari6.0+, Chrome6.0+ and Opera11.1+. In older browsers the filename is shown instead. </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="form-actions">
        <div class="row">
            <div class="col-md-offset-3 col-md-9">
                <button type="submit" class="btn green" name="add_product">Save</button>
            </div>
        </div>
    </div>
</form>
<!-- END FORM-->




                                        </div>
                                        <!-- END VALIDATION STATES-->
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <!-- END ADD CUSTOMER FORM-->
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
            <script src="../assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
            <script src="../assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
            <script src="../assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
            <script src="../assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
            <script src="../assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
            <script src="../assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
            <script src="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"></script>
            <!-- END PAGE LEVEL PLUGINS -->
            <!-- BEGIN THEME GLOBAL SCRIPTS -->
            <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
            <!-- END THEME GLOBAL SCRIPTS -->
            <!-- BEGIN PAGE LEVEL SCRIPTS -->
            <script src="../assets/pages/scripts/add-product.js" type="text/javascript"></script>
            <!-- END PAGE LEVEL SCRIPTS -->
            <!-- BEGIN THEME LAYOUT SCRIPTS -->
            <script src="../assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
            <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
            <!-- END THEME LAYOUT SCRIPTS -->
            <!--BEGIN CUSTOM SCRIPT LOADING-->
            <script src="../assets/pages/scripts/custom.js" type="text/javascript"></script>
            <!--END OF CUSTOM SCRIPT LOADING-->
            
    </body>

    </html>
