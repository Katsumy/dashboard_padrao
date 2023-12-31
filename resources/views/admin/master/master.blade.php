<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dahsboard padrão, utilizando laravel 10">
    <meta name="author" content="Eduardo Bieco">
    <title>Dashboard - @yield('title')</title>

    <!-- TODO Ajustar a url dos arquivos CSS e JS -->
    <link href="{{url(asset('admin/vendor/fontawesome-free/css/all.min.css'))}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{url(asset('admin/css/sb-admin-2.min.css'))}}" rel="stylesheet">
    @yield('css')
</head>
<body id="page-top">
    <div id="wrapper">

        @include('admin.master._sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('admin.master._menu')

                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>

            @include('admin.master._footer')
        </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{url(asset('admin/vendor/jquery/jquery.min.js'))}}"></script>
    <script src="{{url(asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js'))}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{url(asset('admin/vendor/jquery-easing/jquery.easing.min.js'))}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{url(asset('admin/js/sb-admin-2.min.js'))}}"></script>
    @yield('javascript')
</body>
</html>