@extends('layouts.base')

@section('head')
  @parent
  @section('add')
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/Hover-master/css/hover-min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/forumStyle.css')}}">
    <title>FORUM</title>
  @endsection
@endsection

<?php 
  use Illuminate\Support\Facades\Auth;
  use Illuminate\Support\Facades\Storage;
?>


    
    @section('class', 'hero')
    @section('header')
    
      <script src="{{ asset('js/main.js') }}"></script>
      <!--<button type="button" class="Filter-Btn"><i class="fas fa-sliders-h"></i></button>-->
    
      @parent

      @section('posnav')
       <h1>SPECTRA FORUM</h1>
        <p>Please try looking for your problem before your question, thanks!</p>
        <section class="search-container">
            <form action="" method="get">
                <input type="text" class="SearchBox" name="SearchBox" id="SearchBox" placeholder="Buscar Consulta" autocomplete="false">
            </form>
        </section>
        @endsection
    @endsection
    
    @section('content')
    <main class="container-fluid">
        @if (Auth::check())
            <div class="fixed-button">
                <a href="{{ route('forum.newentry') }}" class="hvr-bounce-in" data-toggle="tooltip" data-placement="top" title="Nuevo"><button
                        class="btn"><i class="fas fa-plus"></i></button></a>
            </div>
        @endif
        <div class="row">
            <div class="col-lg-3 d-lg-block Categories">
                <i class="fas fa-arrow-circle-left close-categorie"></i>
                <div class="title-container">
                    <span><i class="fas fa-bars"></i></span><span class="title">Categorías</span>
                </div>
                <div class="Categories-Container">
                    @foreach($cats as $cat)
                      <a href="{{ route('forum.cat', ['category' => $cat->name ]) }}" class="hvr-push"><button type="button" class="btn">{{ $cat->name }}</button></a>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-9 col-sm-12 Questions">
                <h1 class="display-4 headerQuestions">Últimas Entradas</h1>
                <div class="card-container">
                    
                    @foreach($topics as $topic)
                        <a href="" class="card Programming-Card">
                            <div class="card-bg-Container bg-img-card-programming"><img class="card-img-top" src="{{ asset('img/Cards/Programming/Programming.png') }}" alt="Card image cap"></div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $topic->title}}</h5>
                                <p class="card-text"> {{ $topic->content }} </p>
                            </div>
                            <div class="card-footer">
                                <small class="row1_footer"><span class="autor">{{ $topic->author }}</span><span class="Replies text-muted"><span class="CantReplies"></span><span class="ml-1">{{ $topic->answers }} Réplicas</span></span></small>
                                <small class="text-muted row2_footer"><span class="CardCategorie">{{ $topic->category }}</span><span
                                class="date"> {{$topic->date}}</span></small>
                            </div>
                        </a>
                    @endforeach
                    <div class="pag">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <?php $uri =  explode('?', Request::fullUrl(),2);?>
                            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item <?php if($pageItems[0] == $current){echo 'active';} ?>"><a class="page-link" href="{{$uri[0]}}?page={{$pageItems[0]}}">{{ $pageItems[0] }}</a></li>
                            <li class="page-item <?php if($pageItems[1] == $current){echo 'active';} ?>"><a class="page-link" href="{{$uri[0]}}?page={{$pageItems[1]}}">{{ $pageItems[1] }}</a></li>
                            <li class="page-item <?php if($pageItems[2] == $current){echo 'active';} ?>"><a class="page-link" href="{{$uri[0]}}?page={{$pageItems[2]}}">{{ $pageItems[2]}}</a></li>
                            <li class="page-item <?php if($pageItems[3] == $current){echo 'active';} ?>"><a class="page-link" href="{{$uri[0]}}?page={{$pageItems[3]}}">{{ $pageItems[3]}}</a></li>
                            <li class="page-item <?php if($pageItems[4] == $current){echo 'active';} ?>"><a class="page-link" href="{{$uri[0]}}?page={{$pageItems[4]}}">{{ $pageItems[4]}}</a></li>
                            <li class="page-item <?php if($pageItems[5] == $current){echo 'active';} ?>"><a class="page-link" href="{{$uri[0]}}?page={{$pageItems[5]}}">{{ $pageItems[5]}}</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                            
                            
                            @if(isset($totalPages))
                              <li class="page-item"><a class="page-link" href="{{ $uri[0] }}?page={{ $totalPages }}">{{ $totalPages}}</a></li>
                            @else
                              <li class="page-item"><a class="page-link" href="{{ $uri[0] }}?page={{ $topics->lastPage() }}">{{ $topics->lastPage() }}</a></li>
                            @endif

                            <li class="page-item"><a class="page-link" href="">Next</a></li>
                        </ul>
                    </nav>
                    </div>
                </div>
            </div>

            
    </main>
 @endsection

 @section('footer')
   @parent
 @endsection

