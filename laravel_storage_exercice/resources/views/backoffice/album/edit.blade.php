@extends('layout.app')

@section('content')
  
    <div class="container">

        <h1 class="text-center my-3">Edit Album</h1>

        <form method="POST" action="/album/{{ $album->id }}/update">
            @csrf
            <div class="mb-3">
                <label  class="form-label">nom</label>
                <input type="text" class="form-control" value="{{ $album->nom }}" name="nom">
            </div>
            <div class="mb-3">
                <label class="form-label">description</label>
                <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ $album->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary text-white">Submit</button>
        </form>
      
    </div>

  @include('partial.footer')
@endsection