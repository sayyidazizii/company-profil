@extends('layout.main')
@section('categories')
<section class="py-5 bg-light">
    <div class="container px-5">
        <h1 class="mb-5 text-center">Post Categories</h1>
          <div class="container">
            <div class="row">
              @foreach ($categories as $category)
                  <div class="col-md-4">
                    <a href="/categories/{{ $category->slug }}" class="text-white text-decoration-none">
                        <div class="card bg-dark text-white">
                          <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                          <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill p-4" style="background-color: rgba(0,0,0,0.7)">{{ $category->name }}</h5>
                          </div>
                        </div>
                    </a>
                      </div>
              @endforeach
            </div>
          </div>
    </div>
</section>   
@endsection