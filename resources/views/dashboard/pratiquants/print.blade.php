@extends('dashboard.layouts.app')
@section('content')

<div class="container-fluid">

    <div class="row">

        <div class="col-lg-10  m-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="p-3">
                        IMPRESSION DE CARTE DE MEMBRE
                    </h5>
                    <form method="post" action="{{ route('print') }}">
                       @csrf
                        <button class ="btn btn-primary" type="submit">Imprimer</button>
                    

                    
                    
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="w-100">
                            <table class="table table-striped" id="liste_pratiquant" style="width:100%">
                                <thead class="text-center">
                                    <tr>
                                        <th>Cocher</th>
                                        <th>#</th>
                                        <th>Numéro de passeport</th>
                                        <th>Nom & Prénoms</th>
                                        <th>Date de naissance</th>
                                        <th>Contact</th>
                                        <th>Grade Actuel</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <?php $i=0; ?>
                                    <!-- Boucle sur les données pour afficher les lignes -->
                                    @foreach($pratiquants as $pratiquant)
                                        <?php $i++; ?>
                                        <tr>
                                            <td><input class="form-check-input" type="checkbox" name="pratiquants[]" value="{{ $pratiquant->id }}"></td>
                                            <td>{{$i}}</td>
                                            <td>{{ $pratiquant->num_passeport }}</td>
                                            <td>{{ $pratiquant->nom }} {{ $pratiquant->prenoms }}</td>
                                            <td>{{ $pratiquant->dat_nais }}</td>
                                            <td>{{ $pratiquant->contact }}</td>
                                            <td>{{ $pratiquant->grade }}</td>
                                            {{-- <td><a class="btn btn-primary" href="{{route('print_card',$pratiquant->id)}}"><i class="fa-solid fa-print"></i></a></td> --}}
                                            {{-- <td class="text-center"> <a href="{{route('impression', $pratiquant->id )}}" ><i class="fa-solid fa-print"></i></a> </td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </form>
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
