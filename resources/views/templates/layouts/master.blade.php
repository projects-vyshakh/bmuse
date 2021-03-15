<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from codedthemes.com/demos/admin-templates/gradient-able/bootstrap/default/index.html by HTTrack Website Copier/3.x [XR&CO'2017], Wed, 10 Feb 2021 22:11:42 GMT -->
<head>
    @include('templates.header.includes.title')

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    @include('templates.header.includes.meta')
    <!-- Favicon icon -->
    @include('templates.header.includes.favicon')

    <!-- vendor css -->
    @include('templates.assets.styles')

</head>
<body class="">
<!-- [ Pre-loader ] start -->
@include('templates.content.preloader')
<!-- [ Pre-loader ] End -->
@auth
    @include('templates.navigation.sidebar')
@endauth
<!-- [ Header ] start -->
<header class="navbar pcoded-header navbar-expand-lg navbar-light headerpos-fixed header-blue">
    @include('templates.content.preloader')

    <div class="m-header">
        @include('templates.header.includes.mobile-menu')
        @include('templates.header.includes.logo')
        @include('templates.header.includes.mobile-toggler')
    </div>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">

            @include('templates.header.includes.authentication')

            @auth
                @include('templates.header.includes.user-profile')
            @endauth
        </ul>
    </div>
</header>
<!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            @if ($pageTitle)
                 <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">
                                        {{$pageTitle}}
                                    </h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                    <li class="breadcrumb-item">
                                        {{$breadcrumbs}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <!-- [ breadcrumb ] end -->

            <!-- [ Main Content ] start -->
            @yield('content')
            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- [ Main Content ] end -->

@include('templates.assets.scripts')

</body>
</html>
