<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shanti Jewelry @yield('pagename')</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/frontend/images/logo.svg') }}" type="image/x-icon">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets/user/css/bootstrap.min.css') }}">
    <!-- fontawesome css -->
    <link rel="stylesheet" href="{{ asset('assets/user/css/fontawesome.min.css') }}">
    <!-- flaticon css -->
    <link rel="stylesheet" href="{{ asset('assets/user/css/flaticon.css') }}">
    <!-- magnific popup css -->
    <link rel="stylesheet" href="{{ asset('assets/user/css/magnific-popup.css') }}">
    <!-- owl carousel css -->
    <link rel="stylesheet" href="{{ asset('assets/user/css/owl.carousel.min.css') }}">
    <!-- owl carousel theme css -->
    <link rel="stylesheet" href="{{ asset('assets/user/css/owl.theme.default.min.css') }}">
    <!-- slick css -->
    <link rel="stylesheet" href="{{ asset('assets/user/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/css/nice-select.css') }}">
    <!-- slicknav css -->
    <link rel="stylesheet" href="{{ asset('assets/user/css/toastr.min.css') }}">
    <!-- slicknav css -->
    <link rel="stylesheet" href="{{ asset('assets/user/css/slicknav.css') }}">
    <!-- datatables css -->
    <link rel="stylesheet" href="{{ asset('assets/user/css/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/css/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/summernote-bs4.css') }}">
    <!-- dashboard css -->
    <link rel="stylesheet" href="{{ asset('assets/user/css/dashboard.css') }}">
    <!-- product css -->
    <link rel="stylesheet" href="{{ asset('assets/user/css/product.css') }}">

    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/common-style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/oldstyle.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}" />
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('assets/user/css/responsive.css') }}">
    
        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/oldstyle.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/user/css/style.css') }}">
    
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/common-style.css') }}">
        <link rel="stylesheet" href="{{asset('assets/frontend/css/plugin.min.css')}}">

    <!-- dark version css -->
    {{-- <link rel="stylesheet" href="{{ asset('assets/frontend/css/dark.css') }}"> --}}

    @yield('styles')

    <!-- jquery js -->
    <script src="{{ asset('assets/user/js/jquery-3.3.1.min.js') }}"></script>
</head>

<body >
    <!--   header area start   -->
    <div class="header-area header-absolute @yield('no-breadcrumb')">
        <div class="container">
            @includeIf('user.partials.navbar')
        </div>
    </div>
    <!--   header area end   -->

    @yield('content')

        <div id="cartIconWrapper">
            <a class="d-block" id="cartIcon" href="{{ route('frontend.cart') }}">
                <div class="cart-length">
                    <i class="fas fa-cart-plus"></i>
                    <span class="length">{{cartLength()}} {{ __('ITEMS') }}</span>
                </div>
                <div class="cart-total">
                   {{cartTotal()}}
                </div>
            </a>
        </div>


    {{-- Loader --}}
    <div class="request-loader">
        <img src="{{ asset('assets/admin/images/loader.gif') }}" alt="">
    </div>
    {{-- Loader --}}

    <script src="{{ asset('assets/frontend/js/main.js') }}" defer></script>


    <!-- popper js -->
    <script src="{{ asset('assets/user/js/popper.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('assets/user/js/bootstrap.min.js') }}"></script>
    <!-- owl carousel js -->
    <script src="{{ asset('assets/user/js/owl.carousel.min.js') }}"></script>
    <!-- slicknav js -->
    <script src="{{ asset('assets/user/js/jquery.slicknav.min.js') }}"></script>
    <!-- slick js -->
    <script src="{{ asset('assets/user/js/slick.min.js') }}"></script>
    <!-- isotope js -->
    <script src="{{ asset('assets/user/js/isotope.pkgd.min.js') }}"></script>
    <!-- magnific popup js -->
    <script src="{{ asset('assets/user/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- nice select js -->
    <script src="{{ asset('assets/user/js/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('assets/user/js/toastr.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/lazyload.min.js') }}"></script>
    <!-- Summernote JS -->
    <script src="{{ asset('assets/admin/js/plugin/summernote/summernote-bs4.js') }}"></script>

    <!-- main js -->
    <script src="{{ asset('assets/user/js/main.js') }}"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    <script>
        var imgupload = "{{ route('user.summernote.upload') }}";
    </script>

    <!-- custom js -->
    <script src="{{ asset('assets/user/js/custom.js') }}"></script>

    @yield('scripts')

    @if (session()->has('success'))
        <script>
            toastr["success"]("{{ __(session()->get('success')) }}");
        </script>
    @endif

    @if (session()->has('error'))
        <script>
            toastr["error"]("{{ __(session('error')) }}");
        </script>
    @endif

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                responsive: true
            });
        });
    </script>
</body>

</html>
