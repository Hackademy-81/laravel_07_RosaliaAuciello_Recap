<x-layout>
    <div class="container-fluid bg-dark">
        <div class="row">
            <div class="col-12">
                <h1 class="display-1 text-center text-white">
                    Contattaci
                </h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12 col-md-8">
                <form method="POST" action="{{route('contact.submit')}}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nome e Cognome</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Email</label>
                      <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Messaggio</label>
                        <textarea name="message" cols="30" rows="10" class="form-control"></textarea>
                    </div>                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>