<!doctype html>
<html lang="fr">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Chelsea Taekwondo | Administration</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{asset('')}}" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('assets/css/app_template_admin.css')}}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

        <link rel="stylesheet" href="cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

    </head>

    <body>

        <!-- Preloader -->
        <div id="loading">
            <div id="loading-center">
            </div>
        </div>


        <div class="wrapper">

            <!-- Sidebar -->
            @include('dashboard.layouts.sidebar')


            <!-- Navbar -->
            @include('dashboard.layouts.navbar')


            <!-- Content -->
            <div class="content-page">
                @yield('content')
            </div>

        </div>

        <!-- Content -->
        @include('dashboard.layouts.footer')

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

        <!-- Backend Bundle JavaScript -->
        <script src="assets/js/backend-bundle.min.js"></script>

        <!-- SweetAlert JavaScript -->
        <script src="assets/js/sweetalert.js"></script>

        <!-- app JavaScript -->
        <script src="assets/js/app.js"></script>



        <script>
            $(document).ready(function () {
                $('#liste_pratiquant').DataTable();
            });
        </script>
    </body>

</html>
