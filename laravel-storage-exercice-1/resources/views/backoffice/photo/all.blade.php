@extends('layout.app')

@section('content')
    @include('partial.nav')
        
    <section class="container mr-5">
        
        <h1 class="text-center my-3">tableau de Photo</h1>
        
        <a class="btn btn-secondary text-white my-2" href="{{ route("photo.create") }}">Create</a>

        @if (session("message"))
            <div class="alert alert-success">
                {{ session("message") }}
            </div>

        @endif

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">nom</th>
                <th scope="col">lien</th>
                <th scope="col">categorie</th>
                <th scope="col">description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody class="col-6">
                @foreach ($photo as $photo)
                    <tr>
                        <th scope="row">{{ $photo->id }}</th>
                        <td>{{ $photo->nom }}</td>
                        <td class="w-25"><img class="img-thumbnail col-4" src={{ asset("img/" . $photo->lien) }} alt=""></td>
                        <td>{{ $photo->categorie }}</td>
                        <td>{{ $photo->description }}</td>
                        <td class="d-flex">
                            <form action="/photo/{{ $photo->id }}/download" method="POST">
                                @csrf
                                <button class="btn btn-warning text-white mx-2" type="submit">Download</button>
                            </form>
                            <a class="btn btn-primary text-white" href="/photo/{{ $photo->id }}/edit">Edit</a>
                            <form action="/photo/{{ $photo->id }}" method="POST">
                                @csrf
                                @method("delete")
                                <button class="btn btn-danger text-white mx-2" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
           
    </section>

    @include('partial.footer')
@endsection