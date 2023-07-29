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


        <style>
            .container{
                margin-top: 50vh;
            }
            a{
                text-decoration: none !important;
                color: #000000;
                font-size: 18px;
                font-weight: 600;
            }
        </style>
    </head>



    <body>

        <!-- Preloader -->
        {{-- <div id="loading">
            <div id="loading-center">
            </div>
        </div> --}}


        <div class="wrapper">

            <div class="container text-center">
                <a href="/">Dashboard</a>
                <div class="content ">
                    <form action="" method="post">
                       <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Entrer votre prénoms" name="prenoms">
                                @error('prenoms')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Entrer votre prénoms" name="prenoms">
                                @error('prenoms')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="date" class="form-control" placeholder="Entrer votre prénoms" name="prenoms">
                                @error('prenoms')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                       </div>
                       <button class="w-100 btn btn-success mt-5">Rechercher</button>
                    </form>

                    <a href="/search/passeport">J'ai mon numéro de passeport</a>
                </div>
            </div>

        </div>

        <!-- Content -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

        <!-- Backend Bundle JavaScript -->
        <script src="assets/js/backend-bundle.min.js"></script>

        <!-- SweetAlert JavaScript -->
        <script src="assets/js/sweetalert.js"></script>

        <!-- app JavaScript -->
        <script src="assets/js/app.js"></script>





    </body>

</html>
