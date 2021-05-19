@extends('layout.app')

@section('content')
  
    <div class="container">

      <h2>Create Photo</h2>
    <ul>
        @foreach ($errors->all() as $message)
            <li>{{ $message }}</li>
        @endforeach
      </ul> 
      <form method="POST" action="/photo/store">
          @csrf
          <div class="mb-3">
            <label  class="form-label">lien</label>
            
            <img class="col-4 img-thumbnail mt-3"src="" alt="">
          </div>
          <div class="mb-3">
            <label class="form-label">categorie</label>
            <select class="custom-select"  name="categorie">
              <option value="item1" >item 1</option> 
              <option value="item2" selected>item 2</option>
              <option value="item3">item 3</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary text-white">Submit</button>
      </form>
      
    </div>

  @include('partial.footer')
@endsection

<script>
  window.onload=function(){
  
    let selected = document.querySelector(".custom-select");
  
    selected.addEventListener("change", event=>{
      const img = document.querySelector("img");
      img.src = event.target.value;
    })
}
</script>