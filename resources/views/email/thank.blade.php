<x-layout>
    <div class="container-fluid bg-dark">
        <div class="row">
            <div class="col-12">
                <h1 class="display-1 text-center text-white">
                    Grazie per averci contattato {{$nameRedirect}}
                </h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-2 text-center text-white">
                    Potrebbero interessarti questi articoli
                </h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
          @foreach ($articles as $article)
            <div class="col-12 col-md-4">
                <x-cardArticle :article="$article"></x-cardArticle>
            </div>              
          @endforeach
        </div>
    </div>
</x-layout>