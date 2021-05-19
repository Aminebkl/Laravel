@extends('layouts.app')
    @section('content')
    <a href="/image/create">Create</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">nom</th>
            <th scope="col">path</th>
            <th scope="col">description</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($images as $image)
            <tr>
                <th scope="row">{{ $image->id }}</th>
                <td>{{ $image->nom }}</td>
                <td> <img style="with: 10%" src="{{ asset("img/" . $image->path) }}"  alt=""></td>
                <td>{{ $image->description }}</td>
                <td><a href="/image/{{ $image->id }}/edit">Edit</a>
                    <form action="/image/{{$image->id}}/delete" enctype="multipart/form-data"  method="POST">
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                </td>
              </tr>
            @endforeach
          
          
        </tbody>
      </table>
    @endsection