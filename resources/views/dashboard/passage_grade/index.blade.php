@extends('dashboard.layouts.app')
@section('content')

<div class="container-fluid">

    <div class="row">

        <div class="col-lg-10  m-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="p-3">
                        Passage de grade
                    </h5>
                    <a href="" class="p-3">

                    </a>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="w-100">
                            <div class="row">
                                <h5 class="mb-3">Tri</h5>
                                <div class="col-lg-4">
                                    <label for="prenoms">Dernier pasage de grade</label>
                                        <select class="form-select" aria-label="Default select example" name="grade">
                                            <option selected>Selectionner le grade</option>
                                            <option value="1">03 mois</option>
                                            <option value="2">06 mois</option>
                                            <option value="3">01 ans</option>
                                            <option value="3">Plus anciens</option>

                                        </select>
                                </div>

                                <div class="col-lg-4">
                                    <label for="prenoms">Grade</label>
                                        <select class="form-select" aria-label="Default select example" name="grade">
                                            <option selected>Selectionner le grade</option>
                                            <option value="1">Blanche</option>
                                            <option value="2">1ère Jaune</option>
                                            <option value="3">2ème Jaune</option>
                                        </select>
                                </div>

                                <div class="col-lg-4">
                                    <label for="prenoms">Rechercher</label>
                                    <input type="text" class="form-control" placeholder="Entrez la recherche" name="prenoms">

                                </div>
                            </div>

                            <div class="row mt-3 mb-3">
                                <div class="col-lg-4">
                                    <label for="prenoms">Date du passage de grade</label>
                                    <input type="date" class="form-control" placeholder="Entrez la recherche" name="prenoms">
                                </div>

                                <div class="col-lg-4">
                                    <label for="prenoms">Grade suivant</label>
                                    <select class="form-select" aria-label="Default select example" name="grade">
                                        <option selected>Selectionner le grade</option>
                                        <option value="1">Blanche</option>
                                        <option value="2">1ère Jaune</option>
                                        <option value="3">2ème Jaune</option>
                                    </select>
                                </div>

                                <div class="col-lg-4">
                                    <label></label>
                                    <button class="btn btn-success w-100">Valider</button>
                                </div>


                            </div>

                            <table id="liste_pratiquant" class="display expandable-table dataTable no-footer" style="width: 100%;" role="grid">
                                <thead>
                                    <tr role="row">
                                          <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" style="width: 97px;">Cocher</th>
                                          <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" style="width: 97px;">N° de passeport</th>
                                          <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" style="width: 97px;">Nom & Prenoms</th>
                                          <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" style="width: 97px;">Date de naissance</th>
                                          <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" style="width: 97px;">Numéro de téléphone</th>
                                          <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" style="width: 97px;">Numéro à contacter en cas d'urgence</th>
                                          <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 118px;">Grade Actuel</th>
                                         
                                      </tr>
                                </thead>
                                <tbody>

                                  @php $num=1 @endphp
                                  @foreach ($pratiquants as $pratiquant)
                                      <tr>
                                          <td> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                                          <td>{{$pratiquant->num_passeport}}</td>
                                          <td>{{$pratiquant->nom}} {{$pratiquant->prenoms}}</td>
                                          <td>{{$pratiquant->dat_nais}}</td>
                                          <td>{{$pratiquant->contact}}</td>
                                          <td>{{$pratiquant->contact_urgence}}</td>
                                          <td>{{$pratiquant->grade}}</td>


                                         

                                         
                                      </tr>
                              @endforeach



                                </tbody>
                              </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <!-- Page end  -->
</div>


@endsection
