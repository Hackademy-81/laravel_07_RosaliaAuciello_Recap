<x-layout>
    <div class="container-fluid bg-dark">
        <div class="row">
            <div class="col-12">
                <h1 class="display-1 text-center text-white">
                    Modifica il tuo Articolo
                </h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
         <div class="col-12 col-md-8">
            <form method="POST" action="{{route('article.update', compact('article'))}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label class="form-label">Titolo</label>
                  <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{$article['title']}}">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Descrizione</label>
                    <textarea name="description" cols="30" rows="10" placeholder="Inserisci la descrizione" class="@error('description') is-invalid @enderror form-control">{{$article['description']
                    }}</textarea>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <p>Immagine corrente:</p>
                    <img src="{{Storage::url($article['img'])}}" alt="" width="150px" height="150px">
                </div>
                <div class="mb-3">
                    <label class="form-label">Immagine</label>
                    <input type="file" class="form-control @error('description') is-invalid @enderror" name="img">
                    @error('img')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>      
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
         </div>
        </div>
    </div>
</x-layout>