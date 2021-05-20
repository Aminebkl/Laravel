@extends('layouts.app')
@section('content')
    @include('partials.navbar')
        <div class="container">
            <h1 class="text-center my-5">Create photo</h1>
            <form action="{{ route("photos.store") }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label class="form-label">Nom</label>
                  <input type="text" class="form-controm" name="nom">
                </div>
                <div class="mb-3">
                    <label class="form-label">Lien</label>
                    <input type="file" class="form-controm" name="lien">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Categorie</label>
                    <select name="categorie" id="">
                        <option value="Item1">Item 1</option>
                        <option value="Item2">Item 2</option>
                        <option value="Item3">Item 3</option>
                    </select>
                  </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" name="description"  cols="30" rows="10"></textarea>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Album</label>
                    <select name="album_id" id="">
                    @foreach ($albums as $album)
                        <option value="{{ $album->id }}">{{ $album->nom }}</option>
                    @endforeach
                  </select>
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>

        </div>
@endsection


Creer une base de donnée: laravel_onetomany_exo_2

deux tables : Articles (nom, images, categorie, description, auteur, date de publication)
              Commentaires (nom, mail, message, date du commentaire)

            creer une relation entre les deux

            validate, paginations, commentaires limite a 3