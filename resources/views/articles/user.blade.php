<x-layout>
    <div class="container-fluid bg-dark">
        <div class="row">
            <div class="col-12">
                <h1 class="display-1 text-center text-white">
                    Benvenuti in Article81
                </h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
            @if($articles->isNotEmpty())
                @foreach ($articles as $article)
                    <div class="col-12 col-md-4">
                        <x-cardArticle :article="$article"></x-cardArticle>
                    </div>                   
                @endforeach
            @endif
        </div>
    </div>
</x-layout>