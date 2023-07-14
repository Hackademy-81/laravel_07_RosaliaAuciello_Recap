<form method="POST" action="{{route('article.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label class="form-label">Titolo</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{old('title')}}">
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Descrizione</label>
        <textarea name="description" cols="30" rows="10" placeholder="Inserisci la descrizione" class="@error('description') is-invalid @enderror form-control">{{old('description')}}</textarea>
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
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