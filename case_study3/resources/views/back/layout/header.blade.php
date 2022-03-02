<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | Admin</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{asset('back/plugins/fontawesome-free/css/all')}}.min.css">
    <link rel="stylesheet" href="{{asset('back/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <link rel="stylesheet" href="{{asset('back/dist/css/adminlte.min')}}.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__wobble" src="{{asset('back/dist/img/AdminLTELo')}}go.png" alt="AdminLTELogo" height="60" width="60">
    </div>
    <nav class="main-header navbar navbar-expand navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{'admin'}}" class="nav-link">Home</a>
            </li>
        </ul>

    </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="{{('admin')}}" class="brand-link">
            <img src="{{asset('back/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Administrator</span>
        </a>

        <div class="sidebar">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="info">
                    <a href="#" class="d-block">Welcome Administrator!</a>
                </div>
            </div>
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
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{'admin'}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>PRODUCT MANAGE</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{'category'}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>CATEGORY MANAGE</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{('order')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>ORDER MANAGE</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{('user')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>USER MANAGE</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">@yield('page')</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Info boxes -->
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <a href="{{('admin')}}" class="info-box-icon bg-info elevation-1"><i class="fa-brands fa-product-hunt"></i></a>
                            <div class="info-box-content">
                                <a style="color:white;" href="{{('admin')}}" class="info-box-text">Product Manage</a>
                                <span class="info-box-number">
                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <a href="{{('category')}}" class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></a>
                            <div class="info-box-content">
                                <a style="color:white;" href="{{('category')}}" class="info-box-text">Category Manage</a>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix hidden-md-up"></div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <a href="{{('order')}}" class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></a>
                            <div class="info-box-content">
                                <a style="color:white;" href="{{('order')}}" class="info-box-text">Order Manage</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <a href="{{('user')}}" class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></a>
                            <div class="info-box-content">
                                <a style="color:white;" href="{{('user')}}" class="info-box-text">User Manage</a>
                            </div>
                        </div>
                    </div>
                </div>
