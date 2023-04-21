@extends('dashboard.layouts.app')
@section('content')

<div class="container-fluid">

    <div class="row">

        <div class="col-lg-10  m-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="p-3">
                        LISTE DES PRATIQUANTS
                    </h5>
                    <a href="{{route('pratiquant.create')}}" class="p-3">
                        NOUVEAU PRATIQUANT
                    </a>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="w-100">
                            <table id="liste_pratiquant" class="display expandable-table dataTable no-footer" style="width: 100%;" role="grid">
                                  <thead>
                                      <tr role="row">
                                            <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" style="width: 97px;">Photo</th>
                                            <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" style="width: 97px;">Date d'adhesion</th>
                                            <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" style="width: 97px;">N° de passeport</th>
                                            <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" style="width: 97px;">Nom & Prenoms</th>
                                            <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" style="width: 97px;">Date de naissance</th>
                                            <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" style="width: 97px;">Profession</th>
                                            <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" style="width: 97px;">Numéro de téléphone</th>
                                            <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" style="width: 97px;">Personne à contacter en cas d'urgence</th>
                                            <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" style="width: 97px;">Numéro à contacter en cas d'urgence</th>
                                            <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" style="width: 97px;">Groupe sanguin</th>
                                            <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 118px;">Grade Actuel</th>
                                            <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 118px;">Action</th>
                                        </tr>
                                  </thead>
                                  <tbody>

                                    @php $num=1 @endphp
                                    @foreach ($pratiquants as $pratiquant)
                                        <tr>
                                            <td>{{ $num++ }} </td>
                                            <td>{{$pratiquant->nom}} {{$pratiquant->prenoms}}</td>
                                            <td>{{$pratiquant->num_passeport}}</td>
                                            <td>{{$pratiquant->contact_pratiquant}}</td>
                                            <td></td>


                                            <td><a class="btn btn-primary" href="{{ route('pratiquant.edit',$pratiquant->id) }}">
                                                <i class="fa-solid fa-pen"></i>
                                            </a></td>

                                            <td>
                                                <form

                                                    method="POST"
                                                    action="{{ route('pratiquant.destroy', $pratiquant->id) }}"
                                                    onsubmit="return confirm('Etes vous sur de vouloir supprimer ? Cette action est irreversible.');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn " type="submit"><i class="fa-solid fa-trash" style="color: red;"></i></button>
                                                </form>
                                            </td>
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
