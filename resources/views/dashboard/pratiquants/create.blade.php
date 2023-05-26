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

<<<<<<< HEAD
=======
                    <a href="{{route('pratiquant.index')}}" class="p-3">
                        <i class="fa-solid fa-caret-left"></i>

                        RETOUR
                    </a>
>>>>>>> cd4568ce7e5c3b7e5e8dee225775ddd19a50711f
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="w-100">
                            <div class="row">
                                @if ($message = Session::get('success'))
<<<<<<< HEAD
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <div class="row">
                                            @foreach ($errors->all() as $error)
                                                <div class="col-lg-4">
                                                    <li>{{ $error }}</li>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                                
                                <form id="" method="post" action="{{route('pratiquants.store')}}">
=======
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>


                                @endif
                                <form id="" method="post" action="{{route('pratiquant.store')}}">
>>>>>>> cd4568ce7e5c3b7e5e8dee225775ddd19a50711f
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
                                                    <input type="text" class="form-control" placeholder="Entrez votre nom" name="nom" value="{{ old('nom') }}">
                                                    
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="prenoms">Prénoms</label>
<<<<<<< HEAD
                                                    <input type="text" class="form-control" placeholder="Entrez votre prénom" name="prenoms" value="{{ old('prenoms') }}">
                                                   
=======
                                                    <input type="text" class="form-control" placeholder="Entrez votre prénoms" name="prenoms">
                                                    @error('prenoms')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
>>>>>>> cd4568ce7e5c3b7e5e8dee225775ddd19a50711f
                                                </div>
                                            </div>
                                   </div>
                                   <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
<<<<<<< HEAD
                                                <label for="dat_nais">Date de naissance</label>
                                                <input type="date" class="form-control" placeholder="" name="dat_nais" value="{{ old('dat_nais') }}">
                                               
=======
                                                <label for="code_postal">Date de naissance</label>
                                                <input type="date" class="form-control" placeholder="" name="date_nais">
                                                @error('date_nais')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
>>>>>>> cd4568ce7e5c3b7e5e8dee225775ddd19a50711f
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
<<<<<<< HEAD
                                                <label for="lieu">Lieu</label>
                                                <input type="text" class="form-control" placeholder="Lieu de naissance" name="lieu" value="{{ old('lieu') }}">
                                               
=======
                                                <label>Lieu</label>
                                                <input type="text" class="form-control" placeholder="Lieu de naissance" name="lieu_nais">
                                                @error('lieu_nais')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
>>>>>>> cd4568ce7e5c3b7e5e8dee225775ddd19a50711f
                                            </div>
                                        </div>
                                   </div>


                                   <div class="row">
<<<<<<< HEAD
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="contact">Contact</label>
                                                <input type="text" class="form-control" placeholder="Ex : +225 0707572125" name="contact" value="{{ old('contact') }}">
                                               
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="profession">Profession</label>
                                                <input type="text" class="form-control" placeholder="Profession" name="profession" value="{{ old('profession') }}">
                                                
                                            </div>
                                        </div>
                                   </div>
=======
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
>>>>>>> cd4568ce7e5c3b7e5e8dee225775ddd19a50711f

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
<<<<<<< HEAD
                                                <label for="num_passeport">Numéro de passeport</label>
                                                <input type="text" class="form-control" placeholder="Numéro de passeport" name="num_passeport" value="{{ old('num_passeport') }}">
                                               
=======
                                                <label for="indicatif">Photo</label>
                                                <input type="file" class="form-control" accept="jpg,png" placeholder="" name="photo">
                                                @error('photo')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
>>>>>>> cd4568ce7e5c3b7e5e8dee225775ddd19a50711f
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="grade">Grade Actuel</label>
                                                <select class="form-select" aria-label="" name="grade" value="{{ old('num_passeport') }}">
                                                    <option selected>Selectionner le grade</option>
                                                    <option value="1">Blanche</option>
                                                    <option value="1">1ère Jaune</option>
                                                    <option value="2">2ème Jaune</option>
                                                    <option value="1">1ère Verte</option>
                                                    <option value="2">2ème Verte</option>
                                                    <option value="1">1ère Bleu</option>
                                                    <option value="2">2ème Bleu</option>
                                                    <option value="1">1ère Rouge</option>
                                                    <option value="2">2ème Rouge</option>
                                                    <option value="1">1ère Dan</option>
                                                    <option value="1">2ère Dan</option>
                                                    <option value="1">3ère Dan</option>
                                                    <option value="1">4ère Dan</option>
                                                    <option value="1">5ère Dan</option>
                                                    <option value="1">6ère Dan</option>
                                                    <option value="1">7ère Dan</option>

<<<<<<< HEAD
                                                </select>
                                                   
                                            </div>
                                        </div>
                                   </div>
=======

                                       </div>


>>>>>>> cd4568ce7e5c3b7e5e8dee225775ddd19a50711f

                                   <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="contact_urgence">Contact en cas d'urgence</label>
                                                <input type="text" class="form-control" placeholder="Contact en cas d'urgence" name="contact_urgence" value="{{ old('contact_urgence') }}">
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="photo">Photo</label>
                                                <input type="file" class="form-control" accept="jpg,png" placeholder="" name="photo">
                                                
                                            </div>
                                        </div>
                                   </div>

                                   <div class="row">
                                        <div class="col-lg-6">
                                            <button class="btn btn-primary btn-block my-4" type="submit">Inscrire</button>
                                        </div>
                                        <div class="col-lg-6">
                                            <button class="btn btn-success btn-block my-4">Retour</button>
                                        </div>
                                   </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>


@endsection
