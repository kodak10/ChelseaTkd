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
                    <a href="/create" class="p-3">
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
