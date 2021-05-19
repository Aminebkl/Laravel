@extends('layouts.app')
    @section('content')
    <ul class="bg-danger">
    @foreach ($errors->all() as $message)
        <li class=>{{ $message }}</li>
    @endforeach
  </ul>
    <form action="/image/store" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nom</label>
          <input name="nom" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">path</label>
            <input name="path" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">description</label>
            <input name="description" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    @endsection