 <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.html"><img src="assets/images/icon/logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                                <ul class="collapse">
                                   <li class="<?php echo $currentPage === 'Manage Properties' ? 'active' : '' ?>">
                                        <a href="add_properties.php">Manage Properties</a>
                                    </li>
                                    <li class="<?php echo $currentPage === 'Add Surveyor' ? 'active' : '' ?>"><a href="add_surveyor.php"></a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <div class="main-content">