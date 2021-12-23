@extends('layout.main')
@section('blog')
<h1 class="display-5 fw-bolder text-white mb-2">Halaman Blog Home</h1>
@foreach ($posts as $post)
<section class="py-5">
    <div class="container px-5">
        <div class="card border-0 shadow rounded-3 overflow-hidden">
            <div class="card-body p-0">
                <div class="row gx-0">
                    <div class="col-lg-6 col-xl-5 py-lg-5">
                        <div class="p-4 p-md-5">
                            <img src="{{ ('assets/images/'.$post->image )}}" class="img-thumbnail">
                            <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                            <h3><a href="/posts/{{ $post->slug }}"  class="text-decoration-none">{{ $post->title }}</a></h3>
                            <div class="fw-bold">By.<a href="/authors/{{ $post->user->id }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" >{{ $post->category->name }}</a> </div>
                            <p>{{ $post->excerpt }}</p>
                            <a class="stretched-link text-decoration-none" href="/posts/{{ $post->slug }}">
                                Read more
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-7"><div class="bg-featured-blog"></div></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach   
@endsection