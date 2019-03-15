<div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                        <li class="sidebar-toggler-wrapper hide">
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <div class="sidebar-toggler"> </div>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                        </li>
                        <li class="sidebar-search-wrapper">
                            <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                            <form class="sidebar-search  " action="#" method="POST">
                                <a href="javascript:;" class="remove">
                                    <i class="icon-close"></i>
                                </a>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <a href="javascript:;" class="btn submit">
                                                <i class="icon-magnifier"></i>
                                        </a>
                                    </span>
                                </div>
                            </form>
                            <!-- END RESPONSIVE QUICK SEARCH FORM -->
                        </li>

                        <li class="nav-item start <?php echo ($page=='dashboard'? 'open active':'');?>">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Dashboard</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-file-text-o"></i>
                                <span class="title">Invoice</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="#" class="nav-link ">
                                        <span class="title">New Invoice</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="#" class="nav-link ">
                                        <span class="title">Manage Invoice</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-cubes"></i>
                                <span class="title">Product</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="#" class="nav-link ">
                                        <span class="title">Add Product</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="#" class="nav-link ">
                                        <span class="title">Manage Product</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  <?php echo ($page=='customer'? 'open active':'');?>  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-users"></i>
                                <span class="title">Customer</span>
                                <span class="arrow <?php echo ($page=='customer'? 'open':'');?>"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item <?php echo ($sub_page=='add'? 'open':'');?> ">
                                    <a href="#" class="nav-link ">
                                        <span class="title">Add Customer</span>
                                    </a>
                                </li>
                                <li class="nav-item <?php echo ($sub_page=='manage'? 'open':'');?> ">
                                    <a href="#" class="nav-link ">
                                        <span class="title">Manage Customer</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item <?php echo ($page=='category'? 'open active':'');?> ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-bulb"></i>
                                <span class="title">Category</span>
                                <span class="arrow <?php echo ($page=='category'? 'open':'');?>"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  <?php echo ($sub_page=='add'? 'open':'');?>">
                                    <a href="#" class="nav-link ">
                                        <span class="title">Add Category</span>
                                    </a>
                                </li>
                                <li class="nav-item <?php echo ($sub_page=='manage'? 'open':'');?> ">
                                    <a href="#" class="nav-link ">
                                        <span class="title">Manage Category</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item <?php echo ($page=='supplier'? 'open active':'');?> ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-briefcase"></i>
                                <span class="title">Supplier</span>
                                <span class="arrow <?php echo ($page=='category'? 'open':'');?>"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item <?php echo ($sub_page=='add'? 'open':'');?> ">
                                    <a href="#" class="nav-link nav-toggle">
                                        <span class="title">Add Supplier</span>
                                    </a>
                                </li>
                                <li class="nav-item <?php echo ($sub_page=='manage'? 'open':'');?> ">
                                    <a href="#" class="nav-link nav-toggle">
                                        <span class="title">Manage Supplier</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="#" class="nav-link nav-toggle">
                                        <span class="title">Supplier Sales Details</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="title">Purchase</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="#" class="nav-link ">
                                        <span class="title">Add Purchase</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="#" class="nav-link ">
                                        <span class="title">Manage Purchase</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-balance-scale"></i>
                                <span class="title">Stock</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="#" class="nav-link ">
                                        <span class="title">Stock Report</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="#" class="nav-link ">
                                        <span class="title">Stock Report (Supplier Wise)</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="#" class="nav-link ">
                                        <span class="title">Stock Report (Product Wise)</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-bar-chart"></i>
                                <span class="title">Reports</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="#" class="nav-link ">
                                        <span class="title">Today's Report</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="#" class="nav-link ">
                                        <span class="title">Sales Report</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="#" class="nav-link ">
                                        <span class="title">Purchase Report</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="#" class="nav-link ">
                                        <span class="title">P/L Report</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>