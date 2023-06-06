<!doctype html>
<html lang="fr">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Chelsea Taekwondo | Administration</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{asset('')}}" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

        <link rel="stylesheet" href="cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

        <link rel="stylesheet" href="{{asset('assets/css/app_template_admin.css')}}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>


    </head>

    <body>

        <!-- Preloader -->
        {{-- <div id="loading">
            <div id="loading-center">
            </div>
        </div> --}}


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

        <script type="text/javascript">
            Dropzone.options.dropzone =
             {
                maxFilesize: 12,
                renameFile: function(file) {
                    var dt = new Date();
                    var time = dt.getTime();
                   return time+file.name;
                },
                acceptedFiles: ".jpeg,.jpg,.png,.gif",
                addRemoveLinks: true,
                timeout: 5000,
                success: function(file, response)
                {
                    console.log(response);
                },
                error: function(file, response)
                {
                   return false;
                }
        };
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

        <!-- Backend Bundle JavaScript -->
        <script src="assets/js/backend-bundle.min.js"></script>

        <!-- SweetAlert JavaScript -->
        <script src="assets/js/sweetalert.js"></script>

        <!-- app JavaScript -->
        <script src="assets/js/app.js"></script>








        <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('.ckeditor').ckeditor();
            });
        </script>

    </body>

</html>
