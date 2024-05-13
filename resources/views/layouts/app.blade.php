<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link rel="shortcut icon" href="{{asset('assets/backend/img/icons/icon-48x48.png')}}"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>Admin</title>
    @include('layouts.header_files')
</head>
<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
<div class="wrapper">
    @include('layouts.sidebar')
    <div class="main">

        @include('layouts.header_menu')
        @yield('content')
        <footer class="footer">
            <div class="container-fluid">
                <div class="row text-muted">
                    <div class="col-6 text-start">
                        <p class="mb-0">
                            <a href="#" target="_blank" class="text-muted"><strong>All Right Reserved</strong></a> &copy;
                        </p>
                    </div>

                </div>
            </div>
        </footer>
    </div>
</div>
@include('layouts.footer_files')
</body>
</html>
