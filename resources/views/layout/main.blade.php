<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }} | Kasir App</title>

    <!-- Bootstrap -->
    <link href="/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="/assets/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet" />
    {{-- Sweeetalert2 css --}}
    <link rel="stylesheet" href="/assets/vendors/sweetalert2/dist/sweetalert2.min.css">
    {{-- Datatables --}}
    <link href="/assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="/assets/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">

            {{-- Sidebar --}}
            @include('layout.sidebar')
            {{-- EndSIdebar --}}

            <!-- top navigation -->
            @include('layout.header')
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>{{ $title }}</h3>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                {{-- Page content --}}
                @yield('content')
                {{-- /page content --}}

            </div>
            <!-- /page content -->

            {{-- Falsh Massage --}}
            <div class="flash-success" data-success="{{ session('success') }}"></div>

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>

    <!-- jQuery -->
    <script src="/assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="/assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="/assets/vendors/nprogress/nprogress.js"></script>
    <!-- jQuery custom content scroller -->
    <script src="/assets/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    {{-- Datatables --}}
    <script src="/assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="/assets/build/js/custom.min.js"></script>
    {{-- Sweetalert2 JS --}}
    <script src="/assets/vendors/sweetalert2/dist/sweetalert2.min.js"></script>

    <script>
        $(document).ready(function() {

            $('.custom-file-input').on('change', function() {
                let fileName = $(this).val().split('\\').pop();
                $(this).next('.custom-file-label').addClass("selected").html(fileName);


                const image = document.querySelector('#image')
                const imagePreview = document.querySelector('.image-preview')
                imagePreview.style.display = 'block'

                const oFReader = new FileReader()
                oFReader.readAsDataURL(image.files[0])

                oFReader.onload = function(oFREvent) {
                    imagePreview.src = oFREvent.target.result
                }
            })

            const success = $('.flash-success').data('success');
            if (success) {
                Swal.fire({
                    title: 'success',
                    text: success,
                    icon: 'success'
                })
            }
        })
    </script>

    {{-- <script>
        $(document).ready(function() {

            const success = $('.flash-success').data('success');
            const error = $('.flash-error').data('error');
            const warning = $('.flash-warning').data('warning');

            let Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });

            if (success) {

                Swal.fire({
                    title: 'success',
                    text: 'Data berhasil di masukan',
                    icon: 'success'

                })
            }



        })
    </script> --}}
</body>

</html>
