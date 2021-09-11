<!DOCTYPE html>
<html lang="en">
    
@php
   $account_data=Session::get(('account_data'));
@endphp

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>@yield('title')</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />   

    @stack('prepend-style')
        @include('includes.admin.style-alternate')
        @include('includes.admin.style')
    @stack('addon-style')

</head>
<body class="fixed-left">
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

    <!-- Begin page -->
    <div id="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        @include('includes.admin.sidebar')
        <!-- Left Sidebar End -->
        
        <!-- Start right Content here -->
        <div class="content-page">
           <!-- Start content -->
           <div class="content">
               <!-- Top Bar Start -->
               @include('includes.admin.topbar')
               <!-- Top Bar End -->
               <!-- Page content Wrapper -->
               @yield('content')
            </div>
            @include('includes.admin.footer')
       </div>
    </div>


@stack('prepend-script')
    @include('includes.admin.script-alternate')
    @include('includes.admin.script')
@stack('addon-script')

</body>
</html>