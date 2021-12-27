@extends('layout.main')
@section('categories')
<section class="py-5 bg-light">
    <div class="container px-5">
        <h1 class="mb-5 text-center">Post Categories</h1>
        <div class="row gx-5">
                @foreach ($categories as $category)
                <!-- News item-->
                <div class="card w-75">
                    <div class="card-body">
                      <p class="card-text"><a href="/categories/{{ $category->slug }}" class="text-decoration-none">{{ $category->name }} </a></p>
                    </div>
                  </div>
                  <br>
                @endforeach
        </div>
    </div>
</section>   
@endsection