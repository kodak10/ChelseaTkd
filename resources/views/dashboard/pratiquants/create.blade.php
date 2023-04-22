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

                    <a href="{{route('pratiquant.index')}}" class="p-3">
                        <i class="fa-solid fa-caret-left"></i>

                        RETOUR
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
                                <form id="" method="post" action="{{route('pratiquant.store')}}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                           <div class="form-group">
                                                   <label for="nom">N° de passeport</label>
                                                   <input type="text" class="form-control" placeholder="Entrez le numéro de passeport" name="num_passeport">
                                                   @error('num_passeport')
                                                       <div class="alert alert-danger">{{ $message }}</div>
                                                   @enderror
                                               </div>
                                           </div>
                                           <div class="col-lg-6">
                                               <div class="form-group">
                                                   <label for="prenoms">Grade actuel</label>
                                                   <select class="form-select" aria-label="Default select example" name="grade">
                                                        <option selected>Selectionner le grade</option>
                                                        <option value="1">Blanche</option>
                                                        <option value="2">1ère Jaune</option>
                                                        <option value="3">2ème Jaune</option>
                                                  </select>
                                                   @error('grade')
                                                       <div class="alert alert-danger">{{ $message }}</div>
                                                   @enderror
                                               </div>
                                           </div>
                                  </div>

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
                                                    <input type="text" class="form-control" placeholder="Entrez votre prénoms" name="prenoms">
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
                                                <input type="date" class="form-control" placeholder="" name="date_nais">
                                                @error('date_nais')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Lieu</label>
                                                <input type="text" class="form-control" placeholder="Lieu de naissance" name="lieu_nais">
                                                @error('lieu_nais')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                   </div>


                                   <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Profession</label>
                                            <input type="text" class="form-control" placeholder="Profession" name="profession">
                                            @error('profession')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Numéro de téléphone</label>
                                            <input type="text" class="form-control" placeholder="Numéro de téléphone" name="contact_pratiquant">
                                            @error('contact_pratiquant')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                               </div>

                                   <div class="row">


                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Personne à contacter en cas d'urgence</label>
                                                <input type="text" class="form-control" placeholder="Personne à contacter en cas d'urgence" name="nom_parent">
                                                @error('nom_parent')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Numéro à contacter en cas d'urgence 1</label>
                                                <input type="text" class="form-control" placeholder="Contact 1" name="contact_parent1">
                                                @error('contact_parent1')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Numéro à contacter en cas d'urgence 2</label>
                                                <input type="text" class="form-control" placeholder="Contact 2" name="contact_parent2">
                                                @error('contact_parent2')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="indicatif">Groupe sanguin</label>
                                                <select class="form-select" aria-label="Default select example" name="groupe_sanguin">
                                                    <option selected>Selectionner le groupe sanguin</option>
                                                    <option value="A+">A+</option>
                                                    <option value="A-">A-</option>
                                                    <option value="B+">B+</option>
                                                    <option value="AB+">AB+</option>
                                                    <option value="AB-">AB-</option>
                                                    <option value="O+">O+</option>
                                                    <option value="O-">O-</option>
                                                </select>
                                                @error('groupe_sanguin')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="indicatif">Photo</label>
                                                <input type="file" class="form-control" accept="jpg,png" placeholder="" name="photo">
                                                @error('photo')
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
