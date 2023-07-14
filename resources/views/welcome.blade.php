<x-layout>
    <div class="container-fluid bg-dark header">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-12">
                <h1 class="display-1 text-center text-white ">
                    Benvenuti in Article81
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