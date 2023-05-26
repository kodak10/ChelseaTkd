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
                    <button class="btn btn-secondary">
                        <a href="/pratiquants/create" class="p-3">
                            NOUVEAU PRATIQUANT
                        </a>
                    </button>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="w-100">
                            <table class="table table-striped" id="liste_pratiquant" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Numéro de passeport</th>
                                        <th>Nom & Prénoms</th>
                                        <th>Date de naissance</th>
                                        <th>Contact</th>
                                        <th>Grade Actuel</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Boucle sur les données pour afficher les lignes -->
                                    @foreach($pratiquants as $pratiquant)
                                        <tr>
                                            <td></td>
                                            <td>{{ $pratiquant->num_passeport }}</td>
                                            <td>{{ $pratiquant->nom }} {{ $pratiquant->prenoms }}</td>
                                            <td>{{ $pratiquant->dat_nais }}</td>
                                            <td>{{ $pratiquant->contact }}</td>
                                            <td>{{ $pratiquant->grade }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>


                            {{-- <table id="liste_pratiquant" class="display expandable-table dataTable no-footer" style="width: 100%;" role="grid">
                                  <thead>
                                      <tr role="row">
                                            <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" style="width: 97px;">Photo</th>
                                            <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" style="width: 97px;">Nom & Prenoms</th>
                                            <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" style="width: 97px;">Date d'adhesion</th>
                                            <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" style="width: 97px;">Date de naissance</th>
                                            <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" style="width: 97px;">Contact</th>
                                            <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 118px;">Grade Actuel</th>
                                      </tr>
                                  </thead>
                                  <tbody>


                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>



                                  </tbody>
                                </table> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <!-- Page end  -->
</div>


@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#liste_pratiquant').DataTable();
        });
    </script>
@endpush
