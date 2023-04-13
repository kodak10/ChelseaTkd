@extends('dashboard.layouts.app')
@section('content')

<div class="container-fluid">

    <div class="row">

        <div class="col-lg-10  m-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="p-3">
                        CREATION DE NOUVEAU PRATIQUANT
                    </h5>
                    <a href="/inscription" class="p-3 d-flex">
                        <i class="fa-solid fa-caret-left"></i>
                        <span>RETOUR</span>
                    </a>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="w-100">
                            <div class="row">
                                @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                                @endif
                                <form id="" method="post" action="">
                                    @csrf
                                   <div class="row">
                                         <div class="col-lg-6">
                                            <div class="form-group">
                                                    <label for="nom">Nom</label>
                                                    <input type="text" class="form-control" placeholder="Entrez votre nom" name="nom">
                                                    @error('nom')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="prenoms">Prénoms</label>
                                                    <input type="text" class="form-control" placeholder="Entrez votre prénom" name="prenoms">
                                                    @error('prenoms')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                   </div>
                                   <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="code_postal">Date de naissance</label>
                                                <input type="date" class="form-control" placeholder="" name="code_postal">
                                                @error('code_postal')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="ville">Lieu</label>
                                                <input type="text" class="form-control" placeholder="Ville de résidence" name="ville">
                                                @error('ville')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                   </div>

                                   <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="indicatif">Contact</label>
                                            <input type="text" class="form-control" placeholder="Ex : +33" name="indicatif" required>
                                            @error('indicatif')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="telephone">Grade Actuel</label>
                                                <input type="text" class="form-control" placeholder="Entrez votre numéro de téléphone (Ex : 00000000)" name="telephone" required>
                                                @error('telephone')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>


                                   </div>

                                   <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="indicatif">Photo</label>
                                                <input type="file" class="form-control" accept="jpg,png" placeholder="" name="indicatif" required>
                                                @error('indicatif')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>



                                   </div>

                                    <button class="btn btn-primary btn-block my-4" type="submit">Inscrire</button>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <!-- Page end  -->
</div>


@endsection
