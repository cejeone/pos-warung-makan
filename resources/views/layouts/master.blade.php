<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Data aos-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <!-- Bootstrap 5 css-->
    <link href="{{ url('/frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- FA5-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- BS icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <!-- Datatables-->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/datatables.net-bs5/1.11.3/dataTables.bootstrap5.css"
        integrity="sha512-D3qAef/KpdvBBV25Qp2UAVGChAEKU9uYa9KpWdU8tBtXONhjq3b30xm8/UqFkJqbOlaoYj16dTTxWz2G2VlsvQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/datatables.net-dt/1.11.3/css/jquery.dataTables.min.css"
        integrity="sha512-aoesU2c4FLCrlFDZ1umMjGn1Gqwtg+AfVAvHlDx1W2qZxV29UXBomF3L7PefqfnqnC1Q7VsxO5tSopPx7k8SiA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- main css-->
    <link href="{{ url('/frontend/style/main.css') }}" rel="stylesheet" />

    @stack('css')
</head>

<body>
    @includeIf('layouts.sidebar')

    <main class="d-none d-sm-block main-wrapper">
        <div class="container">
            <section class="content-header">
                <h4 class="judul">
                    <p>@yield('title')</p>
                </h4>
                <ol class="breadcrumb mt-4 mb-4">
                    @section('breadcrumb')
                        <li><a href="{{ url('/') }}"><i class="fas fa-home"></i>Beranda</a></li>
                    @show
                </ol>
            </section>

            <section>
                @yield('content')
            </section>
        </div>
    </main>

    <!-- Bootstrap dan JavaScript -->
    <script src="{{ url('/frontend/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- datatables -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables.net-bs5/1.11.3/dataTables.bootstrap5.min.js"
        integrity="sha512-nfoMMJ2SPcUdaoGdaRVA1XZpBVyDGhKQ/DCedW2k93MTRphPVXgaDoYV1M/AJQLCiw/cl2Nbf9pbISGqIEQRmQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables.net/1.11.3/jquery.dataTables.min.js"
        integrity="sha512-v06MTH6dVBNBxtfuoTGYC0/UegZpDD/yWP7qJTdO7ysX619MpBZl+2hxg3n6tWKqAlsoKlhxQlVL9furav17vg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!-- moment -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
        integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- validator -->
    <script src="{{ asset('js/validator.min.js') }}"></script>

    <script>
        function preview(selector, temporaryFile, width = 200) {
            $(selector).empty();
            $(selector).append(`<img src="${window.URL.createObjectURL(temporaryFile)}" width="${width}">`);
        }
    </script>
    @stack('scripts')


</body>

</html>
