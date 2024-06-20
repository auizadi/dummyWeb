<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Lorem Ipsum</title>
        <link href="{{ asset('template') }}/css/adminstyle.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        @include('layout.v_topbar')
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                @include('layout.v_sidebar')
            </div>
            <div id="layoutSidenav_content">
                @yield('contentadmin')
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">© Copyright by</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="{{ asset('template') }}/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('template') }}/js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{ asset('template') }}/js/datatables.js"></script>
    </body>
</html>
