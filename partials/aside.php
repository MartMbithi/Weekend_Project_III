<div class="sidenav" id="sidenav-main">
    <!-- Sidenav header -->
    <div class="sidenav-header d-flex align-items-center">
        <h3 class="navbar-brand text-light" href="dashboard">
            Cereal & Production Board MIS
        </h3>
        <div class="ml-auto">
            <!-- Sidenav toggler -->
            <div class="sidenav-toggler sidenav-toggler-dark d-md-none" data-action="sidenav-unpin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line bg-white"></i>
                    <i class="sidenav-toggler-line bg-white"></i>
                    <i class="sidenav-toggler-line bg-white"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- User mini profile -->
    <div class="sidenav-user d-flex flex-column align-items-center justify-content-between text-center">
        <!-- Avatar -->
        <div>
            <a href="#" class="avatar rounded-circle avatar-xl">
                <img alt="Image placeholder" src="assets/img/users/no-profile.png" class="">
            </a>
            <div class="mt-4">
                <h5 class="mb-0 text-white"><?php echo $_SESSION['user_name']; ?></h5>
                <span class="d-block text-sm text-white opacity-8 mb-3"><?php echo $_SESSION['user_number']; ?></span>
            </div>
        </div>
        <!-- User info -->
        <!-- Actions -->
        <div class="w-100 mt-4 actions d-flex justify-content-between">
            <!--  <a href="profile" class="action-item action-item-lg text-white pl-0">
                <i class="far fa-user"></i>
            </a>
            <a href="notifications" class="action-item action-item-lg text-white pr-0">
                <i class="far fa-comment-alt"></i>
            </a>
            <a href="invoices" class="action-item action-item-lg text-white pr-0">
                <i class="far fa-receipt"></i>
            </a> -->
        </div>
    </div>
    <!-- Application nav -->
    <?php if ($_SESSION['user_access_level'] == 'admin') { ?>
        <div class="nav-application clearfix">
            <!-- Staff Side Menu -->
            <a href="dashboard" class="btn btn-square text-sm">
                <span class="btn-inner--icon d-block"><i class="far fa-home fa-2x"></i></span>
                <span class="btn-inner--icon d-block pt-2">Home</span>
            </a>
            <a href="categories" class="btn btn-square text-sm">
                <span class="btn-inner--icon d-block"><i class="far fa-project-diagram fa-2x"></i></span>
                <span class="btn-inner--icon d-block pt-2">Categories</span>
            </a>
            <a href="products" class="btn btn-square text-sm">
                <span class="btn-inner--icon d-block"><i class="far fa-tasks fa-2x"></i></span>
                <span class="btn-inner--icon d-block pt-2">Products</span>
            </a>
            <a href="farmers" class="btn btn-square text-sm">
                <span class="btn-inner--icon d-block"><i class="far fa-users-cog fa-2x"></i></span>
                <span class="btn-inner--icon d-block pt-2">Farmers</span>
            </a>

            <a href="staffs" class="btn btn-square text-sm">
                <span class="btn-inner--icon d-block"><i class="far fa-users fa-2x"></i></span>
                <span class="btn-inner--icon d-block pt-2">Staffs</span>
            </a>
            <a href="invoices" class="btn btn-square text-sm">
                <span class="btn-inner--icon d-block"><i class="far fa-receipt fa-2x"></i></span>
                <span class="btn-inner--icon d-block pt-2">Invoices</span>
            </a>
            <a href="payments" class="btn btn-square text-sm">
                <span class="btn-inner--icon d-block"><i class="far fa-hand-holding-usd fa-2x"></i></span>
                <span class="btn-inner--icon d-block pt-2">Payments</span>
            </a>

            <a href="reports" class="btn btn-square text-sm">
                <span class="btn-inner--icon d-block"><i class="far fa-file fa-2x"></i></span>
                <span class="btn-inner--icon d-block pt-2">Reports</span>
            </a>
        </div>
    <?php } else { ?>
        <div class="nav-application clearfix">
            <!-- Staff Side Menu -->
            <a href="user_home" class="btn btn-square text-sm">
                <span class="btn-inner--icon d-block"><i class="far fa-home fa-2x"></i></span>
                <span class="btn-inner--icon d-block pt-2">Home</span>
            </a>

            <a href="user_products" class="btn btn-square text-sm">
                <span class="btn-inner--icon d-block"><i class="far fa-tasks fa-2x"></i></span>
                <span class="btn-inner--icon d-block pt-2">Products</span>
            </a>
            <a href="user_invoices" class="btn btn-square text-sm">
                <span class="btn-inner--icon d-block"><i class="far fa-receipt fa-2x"></i></span>
                <span class="btn-inner--icon d-block pt-2">Invoices</span>
            </a>
            <a href="user_payments" class="btn btn-square text-sm">
                <span class="btn-inner--icon d-block"><i class="far fa-hand-holding-usd fa-2x"></i></span>
                <span class="btn-inner--icon d-block pt-2">Payments</span>
            </a>

            <a href="user_reports" class="btn btn-square text-sm">
                <span class="btn-inner--icon d-block"><i class="far fa-file fa-2x"></i></span>
                <span class="btn-inner--icon d-block pt-2">Reports</span>
            </a>
        </div>
    <?php } ?>
</div>