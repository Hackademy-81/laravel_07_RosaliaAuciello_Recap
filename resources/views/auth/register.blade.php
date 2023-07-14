<x-layout>
    <div class="container bg-dark">
        <div class="row">
            <div class="col-12">
                <h1 class="display-1 text-center text-white">
                    Registrati
                </h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form method="POST" action="{{route('register')}}" class="mt-5">
                    @csrf
                    <div class="mb-3">
                      <label class="form-label">Username</label>
                      <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password_confirmation">
                    </div> 
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
