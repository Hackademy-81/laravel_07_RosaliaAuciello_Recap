<div class="card mt-5 cardCustom">
    <img src="{{Storage::url($article['img'])}}" class="card-img-top" alt="...">
    <div class="card-body d-flex flex-column justify-content-center align-items-center">
      <h5 class="card-title fw-bold text-center">{{$article['title']}}</h5>
      <h5 class="card-title text-center">{{$article['author']}}</h5>
      @if(Route::currentRouteName()=='homePage' || Route::currentRouteName()=='contact.thank')
      <p class="card-text">{{$article->getdescriptionSubstring()}}</p>
      <p class="card-text">Creato il: {{$article->getFormatData()}}</p>
      <a href="{{route('article.show', ['idArticle'=>$article['id']])}}" class="btn btn-primary">Dettaglio</a>
      @else
      <p class="card-text">{{$article['description']}}</p>
      <a href="{{route('homePage')}}" class="btn btn-primary">Torna alla Home</a>
      @if(Auth::user()->name==$article['author'])
      <a href="{{route('article.edit', compact('article'))}}" class="btn btn-warning mt-2">Modifica</a>
      <form action="{{route('article.destroy', compact('article'))}}" method="POST">
        @csrf
        @method('delete')
        <button class="btn btn-danger mt-2">Elimina</button>
      </form>
      @endif     
      @endif      
    </div>
  </div>