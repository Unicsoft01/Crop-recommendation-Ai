<!DOCTYPE html>
<html lang="en" dir="ltr">
<base href="{{ url('/') }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Ekka - Admin Dashboard eCommerce HTML Template.">

    <title>Admin Dashboard - {{ config('app.name') }}.</title>

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap"
        rel="stylesheet">

    <link href="cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/plugins/simplebar/simplebar.css" rel="stylesheet" />

	<!-- Data Tables -->
	<link href='{{ url('/') }}/assets/plugins/data-tables/datatables.bootstrap5.min.css' rel='stylesheet'>
	<link href='{{ url('/') }}/assets/plugins/data-tables/responsive.datatables.min.css' rel='stylesheet'>


    <!-- Ekka CSS -->
    <link id="ekka-css" href="{{ url('/') }}/assets/css/ekka.css" rel="stylesheet" />

    <!-- FAVICON -->
    <link href="{{ url('/') }}/assets/img/favicon.png" rel="shortcut icon" />

    <style>
        .text-danger {
            color: crimson;
        }
    </style>

</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-light ec-header-light" id="body">

    <!--  WRAPPER  -->
    <div class="wrapper">

        <!-- LEFT MAIN SIDEBAR -->
        @include('layouts.navigation')

        <!--  PAGE WRAPPER -->
        <div class="ec-page-wrapper bg-lights" style="background: rgb(229, 243, 232);">

            <!-- Header -->
            @include('layouts.header')
            <!-- CONTENT WRAPPER -->
            {{ $slot }}
            <!-- End Content Wrapper -->

            <!-- Footer -->
            <footer class="footer mt-auto">
                <div class="copyright bg-white">
                    <p>
                        Copyright &copy; <span id="ec-year"></span><a class="text-success" href="#" target="_blank"> {{
                            config('app.name') }}
                        </a>. All Rights Reserved.
                    </p>
                </div>
            </footer>

        </div> <!-- End Page Wrapper -->
    </div> <!-- End Wrapper -->

    <!-- Common Javascript -->
    <script src="{{ url('/') }}/assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="{{ url('/') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('/') }}/assets/plugins/simplebar/simplebar.min.js"></script>
    <script src="{{ url('/') }}/assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
    <script src="{{ url('/') }}/assets/plugins/slick/slick.min.js"></script>

	<!-- Data Tables -->
	<script src='{{ url('/') }}/assets/plugins/data-tables/jquery.datatables.min.js'></script>
	<script src='{{ url('/') }}/assets/plugins/data-tables/datatables.bootstrap5.min.js'></script>
	<script src='{{ url('/') }}/assets/plugins/data-tables/datatables.responsive.min.js'></script>

    <!-- Chart -->
    <script src="{{ url('/') }}/assets/plugins/charts/Chart.min.js"></script>
    <script src="{{ url('/') }}/assets/js/chart.js"></script>

    <!-- Google map chart -->
    <script src="{{ url('/') }}/assets/plugins/charts/google-map-loader.js"></script>
    <script src="{{ url('/') }}/assets/plugins/charts/google-map.js"></script>

    <!-- Date Range Picker -->
    <script src="{{ url('/') }}/assets/plugins/daterangepicker/moment.min.js"></script>
    <script src="{{ url('/') }}/assets/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="{{ url('/') }}/assets/js/date-range.js"></script>

    <!-- Option Switcher -->
    <script src="{{ url('/') }}/assets/plugins/options-sidebar/optionswitcher.js"></script>

    <!-- Ekka Custom -->
    <script src="{{ url('/') }}/assets/js/ekka.js"></script>
</body>

</html>
