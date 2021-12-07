<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    {{-- <title>{{ config('app.name') | login }}</title> --}}
    {{-- <link rel="icon" href="{{ url($setting->path_logo) }}" type="image/png"> --}}


    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/datatables.net-bs5/1.11.3/dataTables.bootstrap5.css"
        integrity="sha512-D3qAef/KpdvBBV25Qp2UAVGChAEKU9uYa9KpWdU8tBtXONhjq3b30xm8/UqFkJqbOlaoYj16dTTxWz2G2VlsvQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.11.3/datatables.min.css" />
    <link href="{{ url('/frontend/style/main.css') }}" rel="stylesheet" />

</head>

<body>
    @yield('login')

    <!-- Bootstrap core JavaScript -->
    <script src="{{ url('/frontend/vendor/jquery/jquery.slim.min.js') }}"></script>
    <script src="{{ url('/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- dataTables -->
    <!-- dataTables -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables.net-bs5/1.11.3/dataTables.bootstrap5.min.js"
        integrity="sha512-nfoMMJ2SPcUdaoGdaRVA1XZpBVyDGhKQ/DCedW2k93MTRphPVXgaDoYV1M/AJQLCiw/cl2Nbf9pbISGqIEQRmQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.11.3/datatables.min.js"></script>

    <!-- moment -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
        integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- validator -->
    <script src="{{ asset('js/validator.min.js') }}"></script>

    <script>
        $(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
            });
        });
        $('.form-login').validator();
    </script>


</body>

</html>
