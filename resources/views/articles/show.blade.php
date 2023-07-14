<x-layout>
    <div class="container-fluid bg-dark">
        <div class="row">
            <div class="col-12">
                <h1 class="display-1 text-center text-white">
                    {{$article['title']}}
                </h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
          <div class="col-12 col-md-8">
            <x-cardArticle :article="$article"></x-cardArticle>
          </div>
        </div>
    </div>
</x-layout>