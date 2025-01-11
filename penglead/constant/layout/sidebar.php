 <?php 
 require_once('./constant/connect.php');

 ?>

 
        <div class="left-sidebar">
            
            <div class="scroll-sidebar">
                
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <li> <a href="dashboard.php" aria-expanded="false"><i class="fa fa-tachometer"></i>Dashboard</a>
                        </li> 
                 
                         <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-industry"></i><span class="hide-menu">Business Type</span></a>
                            <ul aria-expanded="false" class="collapse">
                           
                                <li><a href="add-brand.php">Add Business Type</a></li>
                           
                                <li><a href="brand.php">Manage Business Type</a></li>
                                 <li><a href="importbrand.php">Import Business Type</a></li>
                            </ul>
                        </li>
                    <?php }?>
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Lead</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="add-lead.php">Add Lead</a></li>
                                <li><a href="lead.php">Manage Lead</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-list"></i><span class="hide-menu">Lead Status</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="new-lead.php">New </a></li>
                                <li><a href="working-lead.php">Working</a></li>
                                <li><a href="contact-lead.php">Contacted</a></li>
                                <li><a href="qualified-lead.php">Qualified</a></li>
                                <li><a href="failed-lead.php">Failed</a></li>
                                <li><a href="closed-lead.php">Closed</a></li>
                            </ul>
                        </li>
                        <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-list"></i><span class="hide-menu">Categories</span></a>
                            <ul aria-expanded="false" class="collapse">
                           
                                <li><a href="add-category.php">Add Category</a></li>
                           
                                <li><a href="categories.php">Manage Categories</a></li>
                            </ul>
                        </li>
                    <?php }?>
                    <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-cog"></i><span class="hide-menu">Services</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="add-product.php">Add Services</a></li>
                                <li><a href="product.php">Manage Services</a></li>
                            </ul>
                        </li>
                    <?php }?>
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-file"></i><span class="hide-menu">Invoices</span></a>
                            <ul aria-expanded="false" class="collapse">
                           
                                <li><a href="add-order.php">Add Invoice</a></li>
                           
                                <li><a href="Order.php">Manage Invoices</a></li>
                            </ul>
                        </li>
                         
                        <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                        <li><a href="about.php" href="#" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">About Author</span></a></li>
                        



                  

<li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-flag"></i><span class="hide-menu">Reports</span></a>
                            <ul aria-expanded="false" class="collapse">
                           
                                <!-- <li><a href="report.php">Order Report</a></li> -->
                           <li><a href="sales_report.php">Lead Report</a></li>
                                <li><a href="productreport.php">Product Report</a></li>
                                <li><a href="expreport.php">Expired Product Report</a></li>
                            </ul>
                        </li>

                         <!--   <li style="background-color: yellow;"><a href="https://www.youtube.com/watch?v=6E6JPsLOABQ" target="_blank" aria-expanded="false"><i class="fa fa-download"></i><span class="hide-menu"><b>Check Pro Version<b></span></a></li>

                              <li><a href="https://mayurikom.myinstamojo.com/product/3570010/lead-management-software-source-code-project/" target="_blank" aria-expanded="false"><span class="hide-menu"><b>Copyright free Version<b></span></a></li>-->

                  <?php }?>


    
                    </ul>   
                </nav>
                
            </div>
            
        </div>
        