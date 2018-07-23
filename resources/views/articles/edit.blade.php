@extends ('layouts.app')

@section('content')

@if($article->user == Auth::user())


<div class="card my-4">
  <h5 class="card-header"> Editovanje članka  </h5>
  <div class="card-body">
    <form method="POST" action="{{ route('update', $article) }}">
      @method('PUT')
      @csrf
      <div class="form-group">
        <label for="title">Naslov:</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $article->title }}">
      </div>
      <div class="form-group">
        <label for="body">Sadržaj:</label>
          <textarea class="form-control" id="editor" name="body">{!! strip_tags($article->body) !!}</textarea>
      </div>
      <div class="form-group row">
        <div class="col-md-4 col-md-offset-4">
          <button class="btn btn-success form-control" type="submit"> Edituj </button>
        </div>
        
      </div>
      
    </form>


  </div>
</div>

@else
    
   <h2>Nemate pravo da editujete ovaj članak, kliknite <a href="{{ route('index') }}"> ovdje </a>  kako bi ste se vratili na početnu stranu.</h2>


@endif

<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; Martin Popović {{ date('Y') }}</p>
  </div>
  <!-- /.container -->
</footer>

@stop