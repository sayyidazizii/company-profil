@extends('layout.main')
@section('category')
<section class="py-5 bg-light">
    <div class="container px-5">
        <h1 class="mb-5">Post Category : {{ $category }}</h1>
        <div class="row gx-5">
            <div class="col-xl-8">
                <h2 class="fw-bolder fs-5 mb-4">News</h2>
                @foreach ($posts as $post)
                <!-- News item-->
                <div class="card border-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header bg-transparent border-dark">By.<a href="/authors/{{ $post->user->id }}">{{ $post->user->name }}</a></div>
                    <div class="card-body text-dark">
                      <h5 class="card-title">{{ $post->title }}</h5>
                      <p class="card-text">{{ $post->excerpt }}</p>
                    </div>
                    <div class="card-footer bg-transparent border-dark"><a href="/posts/{{ $post->slug }}">read more</a></div>
                </div>
                @endforeach
                <div class="text-end mb-5 mb-xl-0">
                    <a class="text-decoration-none" href="#!">
                        More news
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>   
@endsection