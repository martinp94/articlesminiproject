@extends ('layouts.app')

@section('content')
    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-12">

          <!-- Title -->
          <h1 class="mt-4">{{ $article->title }}</h1>

          <!-- Author -->
          <p class="lead">
            by {{ $article->user->name }}
          </p>

          <hr>

          <!-- Date/Time -->
          <p>Posted {{ $article->created_at->diffForHumans() }}</p>

          <hr>

          <img width="1110" src="{{ asset('uploads/articles/' . $article->image) }}" title="" alt="Slika">

          <hr>

          <!-- Post Content -->
          <p>{!! $article->body !!}</p>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    @if($article->user == Auth::user())

    <form method="POST" action="{{ route('delete', $article) }}">
      
      @csrf
      @method('DELETE')
      <button class="form-control" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
        
      
    </form>

    @endif

@stop