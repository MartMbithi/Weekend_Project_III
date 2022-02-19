<?php if ($_SESSION['user_access_level'] == 'admin') { ?>
    <nav class="navbar navbar-main navbar-expand-lg navbar-dark nav_bg navbar-border" id="navbar-main">
        <div class="container-fluid">
            <!-- Brand + Toggler (for mobile devices) -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- User's navbar -->
            <div class="navbar-user d-lg-none ml-auto">
                <ul class="navbar-nav flex-row align-items-center">
                    <li class="nav-item">
                        <a href="#" class="nav-link nav-link-icon sidenav-toggler" data-action="sidenav-pin" data-target="#sidenav-main"><i class="far fa-bars"></i></a>
                    </li>

                    <li class="nav-item dropdown dropdown-animate">
                        <a class="nav-link pr-lg-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="avatar avatar-sm rounded-circle">
                                <img alt="Image placeholder" src="assets/img/users/no-profile.png">
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right dropdown-menu-arrow">
                            <h6 class="dropdown-header px-0">Hi, <?php echo $_SESSION['user_name']; ?></h6>
                            <a href="profile" class="dropdown-item">
                                <i class="far fa-user"></i>
                                <span>My profile</span>
                            </a>
                            <a href="logout" class="dropdown-item">
                                <i class="far fa-sign-out-alt"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Navbar nav -->
            <div class="collapse navbar-collapse navbar-collapse-fade" id="navbar-main-collapse">

                <ul class="navbar-nav ml-lg-auto align-items-center d-none d-lg-flex">
                    <li class="nav-item dropdown dropdown-animate">
                        <a class="nav-link pr-lg-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="media media-pill align-items-center">
                                <span class="avatar rounded-circle">
                                    <img alt="Image placeholder" src="assets/img/users/no-profile.png">
                                </span>
                                <div class="ml-2 d-none d-lg-block">
                                    <span class="mb-0 text-sm  font-weight-bold"><?php echo $_SESSION['user_name']; ?></span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right dropdown-menu-arrow">
                            <a href="profile" class="dropdown-item">
                                <i class="far fa-user"></i>
                                <span>My profile</span>
                            </a>
                            <a href="logout" class="dropdown-item">
                                <i class="far fa-sign-out-alt"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<?php } else { ?>
    <nav class="navbar navbar-main navbar-expand-lg navbar-dark nav_bg navbar-border" id="navbar-main">
        <div class="container-fluid">
            <!-- Brand + Toggler (for mobile devices) -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- User's navbar -->
            <div class="navbar-user d-lg-none ml-auto">
                <ul class="navbar-nav flex-row align-items-center">
                    <li class="nav-item">
                        <a href="#" class="nav-link nav-link-icon sidenav-toggler" data-action="sidenav-pin" data-target="#sidenav-main"><i class="far fa-bars"></i></a>
                    </li>

                    <li class="nav-item dropdown dropdown-animate">
                        <a class="nav-link pr-lg-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="avatar avatar-sm rounded-circle">
                                <img alt="Image placeholder" src="assets/img/users/no-profile.png">
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right dropdown-menu-arrow">
                            <h6 class="dropdown-header px-0">Hi, <?php echo $_SESSION['user_name']; ?></h6>
                            <a href="user_profile" class="dropdown-item">
                                <i class="far fa-user"></i>
                                <span>My profile</span>
                            </a>
                            <a href="logout" class="dropdown-item">
                                <i class="far fa-sign-out-alt"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Navbar nav -->
            <div class="collapse navbar-collapse navbar-collapse-fade" id="navbar-main-collapse">

                <ul class="navbar-nav ml-lg-auto align-items-center d-none d-lg-flex">
                    <li class="nav-item dropdown dropdown-animate">
                        <a class="nav-link pr-lg-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="media media-pill align-items-center">
                                <span class="avatar rounded-circle">
                                    <img alt="Image placeholder" src="assets/img/users/no-profile.png">
                                </span>
                                <div class="ml-2 d-none d-lg-block">
                                    <span class="mb-0 text-sm  font-weight-bold"><?php echo $_SESSION['user_name']; ?></span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right dropdown-menu-arrow">
                            <a href="user_profile" class="dropdown-item">
                                <i class="far fa-user"></i>
                                <span>My profile</span>
                            </a>
                            <a href="logout" class="dropdown-item">
                                <i class="far fa-sign-out-alt"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<?php } ?>