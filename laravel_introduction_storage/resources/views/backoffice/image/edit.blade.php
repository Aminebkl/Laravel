@extends('layouts.app')
    @section('content')
    <form enctype="multipart/form-data" action="/image/{{ $image->id }}/update" method="POST">
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