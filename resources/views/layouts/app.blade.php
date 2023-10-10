<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @if (!request()->segment(1))
            Logistics System
        @else
            @yield('page-title') - {{ config('app.name', 'Logistics System') }}
        @endif
    </title>

    {{-- <title>@yield('page-title', 'Home') - {{ config('app.name', 'Logistics System') }}</title> --}}

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url('assets/images/favicon.png') }}" />

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.bunny.net">
     <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}

     
     <!-- Font Awesome icons -->
     <link rel="stylesheet" href="dist/icons/font-awesome/css/font-awesome.min.css" type="text/css">
     
     <!-- Bootstrap icons -->
     <link rel="stylesheet" href="{{ url('dist/icons/bootstrap-icons-1.4.0/bootstrap-icons.min.css') }}" type="text/css">
     <!-- Bootstrap Docs -->
     <link rel="stylesheet" href="{{ url('dist/css/bootstrap-docs.css') }}" type="text/css">
     
     <!-- Latest compiled and minified CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    @yield('css')

    <!-- Main style file -->
    <link rel="stylesheet" href="{{ url('dist/css/app.min.css') }}" type="text/css">

    <style>
        #sidebar .nav {
            border: 2px solid red;
        }
    </style>

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
</head>

<body class="dark2">
    <!-- preloader -->
    {{-- <div class="preloader">
        <img src="{{ url('assets/images/logo.svg') }}" alt="logo">
        <div class="preloader-icon"></div>
    </div> --}}
    <!-- ./ preloader -->

    <!-- sidebars -->

    <!-- notifications sidebar -->
    <div class="sidebar" id="notifications">
        <div class="sidebar-header d-block align-items-end">
            <div class="align-items-center d-flex justify-content-between py-4">
                Notifications
                <button data-sidebar-close>
                    <i class="bi bi-arrow-right"></i>
                </button>
            </div>
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active nav-link-notify" data-bs-toggle="tab" href="#activities">Activities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
                </li>
            </ul>
        </div>
        <div class="sidebar-content">
            <div class="tab-content">
                <div class="tab-pane active" id="activities">
                    <div class="tab-pane-body">
                        <ul class="list-group list-group-flush">
                            <li class="px-0 list-group-item">
                                <a href="#" class="d-flex">
                                    <div class="flex-shrink-0">
                                        <figure class="avatar avatar-info me-3">
                                            <span class="avatar-text rounded-circle">
                                                <i class="bi bi-person"></i>
                                            </span>
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 fw-bold d-flex justify-content-between">
                                            You joined a group
                                        </p>
                                        <span class="text-muted small">
                                            <i class="bi bi-clock me-1"></i> Today
                                        </span>
                                    </div>
                                </a>
                            </li>
                            <li class="px-0 list-group-item">
                                <a href="#" class="d-flex">
                                    <div class="flex-shrink-0">
                                        <figure class="avatar avatar-warning me-3">
                                            <span class="avatar-text rounded-circle">
                                                <i class="bi bi-hdd"></i>
                                            </span>
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 fw-bold d-flex justify-content-between">
                                            Storage is running low!
                                        </p>
                                        <span class="text-muted small">
                                            <i class="bi bi-clock me-1"></i> Today
                                        </span>
                                    </div>
                                </a>
                            </li>
                            <li class="px-0 list-group-item">
                                <a href="#" class="d-flex">
                                    <div class="flex-shrink-0">
                                        <figure class="avatar avatar-secondary me-3">
                                            <span class="avatar-text rounded-circle">
                                                <i class="bi bi-file-text"></i>
                                            </span>
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 d-flex justify-content-between">
                                            1 person sent a file
                                        </p>
                                        <span class="text-muted small">
                                            <i class="bi bi-clock me-1"></i> Yesterday
                                        </span>
                                    </div>
                                </a>
                            </li>
                            <li class="px-0 list-group-item">
                                <a href="#" class="d-flex">
                                    <div class="flex-shrink-0">
                                        <figure class="avatar avatar-success me-3">
                                            <span class="avatar-text rounded-circle">
                                                <i class="bi bi-download"></i>
                                            </span>
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 d-flex justify-content-between">
                                            Reports ready to download
                                        </p>
                                        <span class="text-muted small">
                                            <i class="bi bi-clock me-1"></i> Yesterday
                                        </span>
                                    </div>
                                </a>
                            </li>
                            <li class="px-0 list-group-item">
                                <a href="#" class="d-flex">
                                    <div class="flex-shrink-0">
                                        <figure class="avatar avatar-info me-3">
                                            <span class="avatar-text rounded-circle">
                                                <i class="bi bi-lock"></i>
                                            </span>
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 d-flex justify-content-between">
                                            2 steps verification
                                        </p>
                                        <span class="text-muted small">
                                            <i class="bi bi-clock me-1"></i> 20 min ago
                                        </span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane-footer">
                        <a href="#" class="btn btn-success">
                            <i class="bi bi-check2 me-2"></i> Make All Read
                        </a>
                        <a href="#" class="btn btn-danger ms-2">
                            <i class="bi bi-trash me-2"></i> Delete all
                        </a>
                    </div>
                </div>
                <div class="tab-pane" id="notes">
                    <div class="tab-pane-body">
                        <ul class="list-group list-group-flush">
                            <li class="px-0 list-group-item">
                                <p class="mb-0 fw-bold text-success d-flex justify-content-between">
                                    This month's report will be prepared.
                                </p>
                                <span class="text-muted small">
                                    <i class="bi bi-clock me-1"></i> Today
                                </span>
                                <div class="mt-2">
                                    <a href="#">Edit</a>
                                    <a href="#" class="text-danger ms-2">Delete</a>
                                </div>
                            </li>
                            <li class="px-0 list-group-item">
                                <p class="mb-0 fw-bold text-success d-flex justify-content-between">
                                    An email will be sent to the customer.
                                </p>
                                <span class="text-muted small">
                                    <i class="bi bi-clock me-1"></i> Today
                                </span>
                                <div class="mt-2">
                                    <a href="#">Edit</a>
                                    <a href="#" class="text-danger ms-2">Delete</a>
                                </div>
                            </li>
                            <li class="px-0 list-group-item">
                                <p class="mb-0 d-flex justify-content-between">
                                    The meeting will be held.
                                </p>
                                <span class="text-muted small">
                                    <i class="bi bi-clock me-1"></i> Yesterday
                                </span>
                                <div class="mt-2">
                                    <a href="#">Edit</a>
                                    <a href="#" class="text-danger ms-2">Delete</a>
                                </div>
                            </li>
                            <li class="px-0 list-group-item">
                                <p class="mb-0 fw-bold text-success d-flex justify-content-between">
                                    Conversation with users.
                                </p>
                                <span class="text-muted small">
                                    <i class="bi bi-clock me-1"></i> Yesterday
                                </span>
                                <div class="mt-2">
                                    <a href="#">Edit</a>
                                    <a href="#" class="text-danger ms-2">Delete</a>
                                </div>
                            </li>
                            <li class="px-0 list-group-item">
                                <p class="mb-0 fw-bold text-warning d-flex justify-content-between">
                                    Payment refund will be made to the customer.
                                </p>
                                <span class="text-muted small">
                                    <i class="bi bi-clock me-1"></i> 20 min ago
                                </span>
                                <div class="mt-2">
                                    <a href="#">Edit</a>
                                    <a href="#" class="text-danger ms-2">Delete</a>
                                </div>
                            </li>
                            <li class="px-0 list-group-item">
                                <p class="mb-0 d-flex justify-content-between">
                                    Payment form will be activated.
                                </p>
                                <span class="text-muted small">
                                    <i class="bi bi-clock me-1"></i> 20 min ago
                                </span>
                                <div class="mt-2">
                                    <a href="#">Edit</a>
                                    <a href="#" class="text-danger ms-2">Delete</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane-footer">
                        <a href="#" class="btn btn-primary btn-block">
                            <i class="bi bi-plus me-2"></i> Add Notes
                        </a>
                    </div>
                </div>
                <div class="tab-pane" id="alerts">
                    <div class="tab-pane-body">
                        <ul class="list-group list-group-flush">
                            <li class="px-0 list-group-item d-flex">
                                <div class="flex-shrink-0">
                                    <figure class="avatar avatar-warning me-3">
                                        <span class="avatar-text rounded-circle">
                                            <i class="bi bi-lock"></i>
                                        </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 fw-bold d-flex justify-content-between">
                                        Signed in with a different device.
                                    </p>
                                    <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Yesterday
                                    </span>
                                </div>
                            </li>
                            <li class="px-0 list-group-item d-flex">
                                <div class="flex-shrink-0">
                                    <figure class="avatar avatar-warning me-3">
                                        <span class="avatar-text fw-bold rounded-circle">
                                            <i class="bi bi-file-text"></i>
                                        </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 fw-bold d-flex justify-content-between">
                                        Your billing information is not active.
                                    </p>
                                    <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Yesterday
                                    </span>
                                </div>
                            </li>
                            <li class="px-0 list-group-item d-flex">
                                <div class="flex-shrink-0">
                                    <figure class="avatar avatar-warning me-3">
                                        <span class="avatar-text rounded-circle">
                                            <i class="bi bi-person"></i>
                                        </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 d-flex justify-content-between">
                                        Your subscription has expired.
                                    </p>
                                    <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Today
                                    </span>
                                </div>
                            </li>
                            <li class="px-0 list-group-item d-flex">
                                <div class="flex-shrink-0">
                                    <figure class="avatar avatar-warning me-3">
                                        <span class="avatar-text rounded-circle">
                                            <i class="bi bi-hdd"></i>
                                        </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 d-flex justify-content-between">
                                        Your storage space is running low
                                    </p>
                                    <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Today
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane-footer">
                        <a href="#" class="btn btn-success">
                            <i class="bi bi-check2 me-2"></i> Make All Read
                        </a>
                        <a href="#" class="btn btn-danger ms-2">
                            <i class="bi bi-trash me-2"></i> Delete all
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ./ notifications sidebar -->

    <!-- settings sidebar -->
    <div class="sidebar" id="settings">
        <div class="sidebar-header">
            <div>
                <i class="bi bi-gear me-2"></i>
                Settings
            </div>
            <button data-sidebar-close>
                <i class="bi bi-arrow-right"></i>
            </button>
        </div>
        <div class="sidebar-content">
            <ul class="list-group list-group-flush">
                <li class="list-group-item px-0 border-0">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1"
                            checked>
                        <label class="form-check-label" for="flexCheckDefault1">
                            Remember next visits
                        </label>
                    </div>
                </li>
                <li class="list-group-item px-0 border-0">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2"
                            checked>
                        <label class="form-check-label" for="flexCheckDefault2">
                            Enable report generation.
                        </label>
                    </div>
                </li>
                <li class="list-group-item px-0 border-0">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3"
                            checked>
                        <label class="form-check-label" for="flexCheckDefault3">
                            Allow notifications.
                        </label>
                    </div>
                </li>
                <li class="list-group-item px-0 border-0">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                        <label class="form-check-label" for="flexCheckDefault4">
                            Hide user requests
                        </label>
                    </div>
                </li>
                <li class="list-group-item px-0 border-0">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5"
                            checked>
                        <label class="form-check-label" for="flexCheckDefault5">
                            Speed up demands
                        </label>
                    </div>
                </li>
                <li class="list-group-item px-0 border-0">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Hide menus
                        </label>
                    </div>
                </li>
            </ul>
        </div>
        <div class="sidebar-action">
            <a href="#" class="btn btn-primary">All Settings</a>
        </div>
    </div>
    <!-- ./ settings sidebar -->

    <!-- search sidebar -->
    <div class="sidebar" id="search">
        <div class="sidebar-header">
            Search
            <button data-sidebar-close>
                <i class="bi bi-arrow-right"></i>
            </button>
        </div>
        <div class="sidebar-content">
            <form class="mb-4">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search"
                        aria-describedby="button-search-addon">
                    <button class="btn btn-outline-light" type="button" id="button-search-addon">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </form>
            <h6 class="mb-3">Last searched</h6>
            <div class="mb-4">
                <div class="d-flex align-items-center mb-3">
                    <a href="#" class="avatar avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-search"></i>
                        </span>
                    </a>
                    <a href="#" class="flex-fill">Reports for 2021</a>
                    <a href="#" class="btn text-danger btn-sm" data-bs-toggle="tooltip" title="Remove">
                        <i class="bi bi-x"></i>
                    </a>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <a href="#" class="avatar avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-search"></i>
                        </span>
                    </a>
                    <a href="#" class="flex-fill">Current users</a>
                    <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                        <i class="bi bi-x"></i>
                    </a>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <a href="#" class="avatar avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-search"></i>
                        </span>
                    </a>
                    <a href="#" class="flex-fill">Meeting notes</a>
                    <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                        <i class="bi bi-x"></i>
                    </a>
                </div>
            </div>
            <h6 class="mb-3">Recently viewed</h6>
            <div class="mb-4">
                <div class="d-flex align-items-center mb-3">
                    <a href="#" class="avatar avatar-secondary avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-check-circle"></i>
                        </span>
                    </a>
                    <a href="#" class="flex-fill">Todo list</a>
                    <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                        <i class="bi bi-x"></i>
                    </a>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <a href="#" class="avatar avatar-warning avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-wallet2"></i>
                        </span>
                    </a>
                    <a href="#" class="flex-fill">Pricing table</a>
                    <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                        <i class="bi bi-x"></i>
                    </a>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <a href="#" class="avatar avatar-info avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-gear"></i>
                        </span>
                    </a>
                    <a href="#" class="flex-fill">Settings</a>
                    <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                        <i class="bi bi-x"></i>
                    </a>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <a href="#" class="avatar avatar-success avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-person-circle"></i>
                        </span>
                    </a>
                    <a href="#" class="flex-fill">Users</a>
                    <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                        <i class="bi bi-x"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="sidebar-action">
            <a href="#" class="btn btn-danger">All Clear</a>
        </div>
    </div>
    <!-- ./ search sidebar -->

    <!-- ./ sidebars -->

    <!-- menu -->
    <div class="menu">
        <div class="menu-header">
            <a href="{{ url('/') }}" class="menu-header-logo">
                <img src="{{ url('assets/images/logo.svg') }}" alt="logo">
            </a>
            <a href="{{ url('/') }}" class="btn btn-sm menu-close-btn">
                <i class="bi bi-x"></i>
            </a>
        </div>
        <div class="menu-body">
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center" data-bs-toggle="dropdown">
                    <div class="avatar me-3">
                        <img src="{{ url('assets/images/user/man_avatar3.jpg') }}" class="rounded-circle"
                            alt="image">
                    </div>
                    <div>
                        <div class="fw-bold">{{ auth()->user()->name }}</div>
                        <small class="text-muted text-capitalize">{{ auth()->user()->roles->pluck('name')->first() }}</small>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a href="#" class="dropdown-item d-flex align-items-center">
                        <i class="bi bi-person dropdown-item-icon"></i> Profile
                    </a>
                    <a href="#" class="dropdown-item d-flex align-items-center">
                        <i class="bi bi-envelope dropdown-item-icon"></i> Inbox
                    </a>
                    <a href="#" class="dropdown-item d-flex align-items-center"
                        data-sidebar-target="#settings">
                        <i class="bi bi-gear dropdown-item-icon"></i> Settings
                    </a>
                    <a href="{{ route('login') }}" class="dropdown-item d-flex align-items-center text-danger"
                        target="_blank">
                        <i class="bi bi-box-arrow-right dropdown-item-icon"></i> Logout
                    </a>
                </div>
            </div>
            <ul>
                <li>
                    <a @if (!request()->segment(1) || request()->is('admin/dashboard')) class="active" @endif href="{{ route('admin.dashboard') }}">
                        <span class="nav-link-icon">
                            <i class="bi bi-house"></i>
                        </span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-search"></i>
                        </span>
                        <span>Find Truck</span>
                    </a>
                    {{-- <ul>
                    <li>
                        <a @if (request()->is('orders')) class="active" @endif href="{{ route('orders') }}">List</a>
                    </li>
                    <li>
                        <a @if (request()->is('order-detail')) class="active" @endif href="{{ route('order-detail') }}">Detail</a>
                    </li>
                </ul> --}}
                </li>
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-compass"></i>
                        </span>
                        <span>Track Load</span>
                    </a>
                    {{-- <ul>
                    <li>
                        <a @if (request()->is('product-list')) class="active" @endif href="{{ route('product-list') }}">List
                            View</a>
                    </li>
                    <li>
                        <a @if (request()->is('product-grid')) class="active" @endif href="{{ route('product-grid') }}">Grid
                            View</a>
                    </li>
                    <li>
                        <a @if (request()->is('product-detail')) class="active"
                        @endif href="{{ route('product-detail') }}">Product Detail</a>
                    </li>
                    <li>
                        <a @if (request()->is('shopping-cart')) class="active"
                        @endif href="{{ route('shopping-cart') }}">Shopping
                            Cart</a>
                    </li>
                    <li>
                        <a @if (request()->is('checkout')) class="active"
                        @endif href="{{ route('checkout') }}">Checkout</a>
                    </li>
                </ul> --}}
                </li>
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-minecart-loaded"></i>
                        </span>
                        <span>Load</span>
                    </a>
                    {{-- <ul>
                    <li>
                        <a @if (request()->is('buyer-dashboard')) class="active"
                        @endif href="{{ route('buyer-dashboard') }}">Dashboard</a>
                    </li>
                    <li>
                        <a @if (request()->is('buyer-orders')) class="active"
                        @endif href="{{ route('buyer-orders') }}">Orders</a>
                    </li>
                    <li>
                        <a @if (request()->is('buyer-addresses')) class="active"
                        @endif href="{{ route('buyer-addresses') }}">Addresses</a>
                    </li>
                    <li>
                        <a @if (request()->is('buyer-wishlist')) class="active"
                        @endif href="{{ route('buyer-wishlist') }}">Wishlist</a>
                    </li>
                </ul> --}}
                </li>
                <li>
                    {{-- <a @if (request()->is('customers')) class="active" @endif href="{{ route('customers') }}"> --}}
                    <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-person"></i>
                    </span>
                    <span>Drivers</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-phone"></i>
                        </span>
                        <span>Group SMS</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-chat-left"></i>
                        </span>
                        <span>SMS</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-chat"></i>
                        </span>
                        <span>Message</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- ./  menu -->

    <!-- layout-wrapper -->
    <div class="layout-wrapper">

        <!-- header -->
        @include('components.header-basic')
        <!-- ./ header -->

        <!-- content -->
        <div class="content @yield('contentClassName')">
            @yield('content')
        </div>
        <!-- ./ content -->

        <!-- content-footer -->
        <footer class="content-footer">
            <div>© {{ date('Y') }} Logistics Systems</div>
            {{-- <div>
            <nav class="nav gap-4">
                <a href="https://themeforest.net/licenses/standard" class="nav-link">Licenses</a>
                <a href="#" class="nav-link">Change Log</a>
                <a href="#" class="nav-link">Get Help</a>
            </nav>
        </div> --}}
        </footer>
        <!-- ./ content-footer -->

    </div>
    <!-- ./ layout-wrapper -->


    <!-- Latest compiled JavaScript -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Bundle scripts -->
    <script src="{{ url('libs/bundle.js') }}"></script>

    @yield('script')
    <!-- Main Javascript file -->
    <script src="{{ url('dist/js/app.min.js') }}"></script>
</body>

</html>
