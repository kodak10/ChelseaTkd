@extends('dashboard.layouts.app')
@section('content')

<div class="container-fluid">

    <div class="row">

        <div class="col-lg-12  m-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="p-3">
                        CREATION D'UN NOUVEL ARTICLE
                    </h5>

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
                                    @csrf


                                   <div class="row">
                                         <div class="col-lg-6">
                                            <div class="form-group">
                                                    <label for="nom">Titre</label>
                                                    <input type="text" class="form-control" placeholder="Entrez votre nom" name="nom" value="{{ old('nom') }}">

                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="prenoms">Image de couverture</label>
                                                    <input type="file" accept="jpg,png" class="form-control" placeholder="Entrez votre prénom" name="prenoms" value="{{ old('prenoms') }}">

                                                </div>
                                            </div>
                                   </div>
                                   <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="dat_nais">Texte</label>
                                                <textarea class="ckeditor form-control" name="wysiwyg-editor texte"></textarea>
                                            </div>
                                        </div>


                                   </div>


                                   <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="dat_nais">Images / Videos</label>
                                                <div class="needsclick dropzone" id="document-dropzone">

                                                </div>
                                            </div>






                                   </div>

                                   <div class="row">
                                        <div class="col-lg-6">
                                            <button class="btn btn-primary btn-block my-4" type="submit">Enregistrer</button>
                                        </div>
                                        <div class="col-lg-6">
                                            <a class="btn btn-success btn-block my-4" href="{{route('article.index')}}">Retour</a>
                                        </div>
                                   </div>
                                </form>


                            </div>
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
