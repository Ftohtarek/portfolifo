<?php
session_start();
if (!isset($_SESSION['key'])) {
    header('Location:../../login.php');
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FTOH | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../../plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="../../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../../index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <form action="../../back/systemController.php" method="POST">
                        <button class='btn btn-outline-info' name="logout">LogOut</button>
                    </form>
                </li>
            </ul>

            <!-- Right navbar links -->

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="../../../index.php" class="d-block">ftoh tarek</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        <!-- about Section  -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-bookmark"></i>
                                <p>
                                    About Pages
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../about/aboutData.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>About Data</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- skill section -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-bookmark ></i>-page"></i>
                                <p>
                                    Skill section
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../skill/skillAdd.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Skill Add</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../skill/skillData.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Skill Data</p>
                                    </a>
                                </li>
                            </ul>

                        </li>

                        <!-- education section -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-bookmark ></i>-page"></i>
                                <p>
                                    Education section
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../education/educationAdd.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Education Add</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../education/educationData.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Education Data</p>
                                    </a>
                                </li>
                            </ul>

                        </li>

                        <!-- experience section -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-bookmark ></i>-page"></i>
                                <p>
                                    Experience section
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../experience/experienceAdd.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Experience Add</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../experience/experienceData.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Experience Data</p>
                                    </a>
                                </li>
                            </ul>

                        </li>

                        <!-- service section -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-bookmark ></i>-page"></i>
                                <p>
                                    Service section
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../service/serviceAdd.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Service Add</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../service/serviceData.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Service Data</p>
                                    </a>
                                </li>
                            </ul>

                        </li>

                        <!-- category section -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-bookmark ></i>-page"></i>
                                <p>
                                    Category section
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../category/categoryAdd.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Category Add</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../category/categoryData.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Category Data</p>
                                    </a>
                                </li>
                            </ul>

                        </li>

                        <!-- product section -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-bookmark ></i>-page"></i>
                                <p>
                                    Product section
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../product/productAdd.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Product Add</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../product/productData.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Product Data</p>
                                    </a>
                                </li>
                            </ul>

                        </li>

                        <!-- user section -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-bookmark ></i>-page"></i>
                                <p>
                                    User section
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../user/userAdd.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>User Add</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../user/userData.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>User Data</p>
                                    </a>
                                </li>
                            </ul>

                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <div class="content-wrapper">