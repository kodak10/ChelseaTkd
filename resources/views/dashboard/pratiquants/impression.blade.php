<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                @foreach($pratiquants->chunk(2) as $pratiquantsChunk)
                    <div class="page">
                        @foreach($pratiquantsChunk as $pratiquants)
                            <div class="card">
                                <h2>{{ $pratiquants->nom }}</h2>
                                <p>{{ $pratiquants->prenoms }}</p>
                            </div>
                        @endforeach
                    </div>
                @endforeach

                
            </div>

            <div class="col-lg-6">
                <h4 class="text-center">MENSUALITE DE LA SAISON SPORTIVE</h4>
            </div>
            

        </div>
    </div>


</body>
</html>