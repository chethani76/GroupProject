<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black"
        data-image="<?php echo base_url('assets/dashboard/img/sidebar-5.jpg'); ?>">
        <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->

     
     

        <div class="logo  d-flex justify-content-center">
            <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/Vendor"> <img
                    src="<?php echo base_url('assets/dashboard/img/wedlio 600x300.jpg'); ?>" class="img-responsive"
                    style="width:110px" alt="Logo">
            </a>
        </div>

        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="nav-item active ">
                    <a class="nav-link" href="<?php echo base_url(); ?>index.php/Vendor">
                        <i class="material-icons">dashboard</i>
                        <p>Vendor Dashboard</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo base_url(); ?>index.php/Vendor/dashboard_vendor_details">
                        <i class="material-icons">account_circle</i>
                        <p>My Profile</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo base_url(); ?>index.php/Vendor/dashboard_vendor_packages">
                        <i class="material-icons">supervised_user_circle</i>
                        <p>Packages</p>
                    </a>
                </li>
               
                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo base_url(); ?>index.php/Vendor/dashboard_vendor_notification">
                        <i class="material-icons">notifications</i>
                        <p>Notifications</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo base_url(); ?>index.php">
                        <i class="material-icons">favorite</i>
                        <p>Wedlio Home Page</p>
                    </a>
                </li>
            </ul>


        </div>
    </div>
    <div class="main-panel">