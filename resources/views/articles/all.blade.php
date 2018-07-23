@extends ('layouts.app')

@section('content')


<!-- Page Content -->
<div class="container">

  <div class="row">
    <div class="col-md-4">
      @auth
        <a href="{{ route('create') }}" class="btn btn-primary"> Kreiraj članak </a>
      @endauth
    </div>
  </div>

  <div class="row">
    <!-- Blog Entries Column -->
    <div class="col-md-12">



      <h1 class="my-4">Članci</h1>

      <!-- Blog Post -->
      @foreach($articles as $article)
      <div class="card mb-4">
        <div class="card-body">
          <h2 class="card-title">
              {{ $article->title }}

              @if($article->user == Auth::user())
                <a href="{{ route('edit', $article) }}"><span class="glyphicon glyphicon-edit"></span></a>
              @endif

          </h2>
          <p class="card-text">{!! str_limit($article->body, 200) !!}</p>
          <a href="{{ route('article', $article) }}" class="btn btn-secondary">Pročitaj više &rarr;</a>
        </div>
        <div class="card-footer text-muted">
          Posted {{ $article->created_at->diffForHumans() }}
        </div>
      </div>
      @endforeach
    </div>

    <!-- Sidebar Widgets Column -->
    

  </div>
  <!-- /.row -->
  {{ $articles->links() }}
</div>
<!-- /.container -->



<!-- Footer -->
<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; Martin Popović {{ date('Y') }}</p>
  </div>
  <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->

@stop