<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/product.css') }}" />
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <!-- Inter Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/user/css/product.css') }}" />
  <link rel="stylesheet" href="{{asset('assets/frontend/css/plugin.min.css')}}">

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


  <title>Danikom Trading</title>
</head>

<body>

    @include('frontend.partials.navbar')

    @yield('content')

    @include('frontend.partials.footer')

  <!-- JS -->
  <script src="{{ asset('assets/frontend/js/main.js') }}" defer></script>
  <script src="https://kit.fontawesome.com/7b3b6f7f8f.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>


  <!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

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