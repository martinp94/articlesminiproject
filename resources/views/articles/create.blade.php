@extends ('layouts.app')

@section('content')

<div class="container">
	
	<div class="row">
    <div class="col-md-12">
      
      @auth
      <!-- New Post Widget -->
      <div class="card my-4">
        <h5 class="card-header"> Novi članak </h5>
        <div class="card-body">
          <form id="my-awesome-dropzone" method="POST" class="dropzone" action="{{ route('store') }}" enctype="multipart/form-data">
          @csrf
            <div class="form-group">
              <label for="title">Naslov:</label>
              <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
              <label for="image"> Slika </label>
              <input type="file" name="image">
            </div>
            <div class="form-group">
              <label for="body">Sadržaj:</label>
                <textarea class="form-control" id="editor" name="body"></textarea>
            </div>
            
            <div class="form-group row">
              <div class="col-md-4 col-md-offset-4">
                <button class="btn btn-success form-control" type="submit">Postavi</button>
              </div>
              
            </div>
            
          </form>


        </div>
      </div>
      @else
      <div class="card my-4">
        <p class="text-center"><a href="{{  route('login') }}">Ulogujte se</a> kako bi napravili članak</p>
      </div>
      @endauth
      
    </div>
  </div>

</div>

<div class="row">
  <div class="col-md-12">
    
  </div>
</div>


        


@stop

<script>

</script>