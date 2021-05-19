@extends('layout.app')
@section('content')

    <div class="container">
        <h1 class="text-danger text-center my-5" >Galeries</h1>
        <a href={{ route("galeries.create") }} class="btn btn-success "> Créer</a>
    
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Image</th>
            <th scope="col">description</th>
            <th scope="col">Action</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($galeries as $galerie)
            
            <tr>
              <th scope="row">{{ $galerie->id }}</th>
              <td><a href="/galeries/{{ $galerie->id }}">{{ $galerie->nom}}</a></td>
              <td><img style="width : 200px" src={{ asset('img/'. $galerie->image) }} alt=""></td>
              <td>{{ $galerie->description }}</td>
              
              <td>
                  <div class="d-flex ">
                      <a href="/galeries/{{ $galerie->id }}/edit" class="btn btn-primary mx-1">Edit</a>
                    <form action="/galeries/{{ $galerie->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger mx-1 " type="submit">Delete</button>
                    </form>
                    <form action="/galeries/{{ $galerie->id }}/download" method="POST">
                        @csrf
                        <button class="btn btn-warning mx-1" type="submit">Download</button>
                    </form>
                  </div>
              </td>

            </tr>
            @endforeach
          
        </tbody>
      </table>
      <div>
          {{ $galeries->links() }}
      </div>
    </div>
@endsection