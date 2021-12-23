@extends('layout.main')
@section('blog')
<h1 class="text-center">Halaman Blog</h1>
<div class="container">
@if ($posts->count())
<div class="card mb-3">
    <a href="/posts/{{ $posts[1]->slug }}"><img src="{{ ('assets/images/'.$posts[1]->image )}}" class="card-img-top" alt="..."></a>
    <div class="card-body text-center">
      <h5 class="card-title"><a href="/posts/{{ $posts[1]->slug }}" class="text-decoration-none text-dark">{{ $posts[1]->title }}</a></h5>
      <p>By.<a href="/authors/{{ $posts[1]->user->id }}" class="text-decoration-none"> {{ $posts[1]->user->name }} </a> in <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none" >{{ $posts[1]->category->name }}</a><small class="text-muted"> {{ $posts[1]->created_at->diffForHumans() }}</small></p>
      <p class="card-text">{{ $posts[1]->excerpt }}</p>
      <a href="/posts/{{ $posts[1]->slug }}" class="text-decoration-none btn btn-primary" >Read more</a>
    </div>
  </div>
    
@else
<p class="text-center fs-4">No Post Found</p>    
@endif
</div>
<div class="container">
    <div class="row">
        @foreach ($posts->skip(0) as $post)
        <div class="col-md-4">
            <div class="card" >
                <div class="position-absolute bg-dark px-3 py-2 " style="background-color: rgba(0, 0, 0, 0.7)"><a href="/categories/{{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
                <img src="{{ ('assets/images/'.$post->image )}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $post->title }}</h5>
                  <p>By.<a href="/authors/{{ $post->user->id }}" class="text-decoration-none"> {{ $post->user->name }}<small class="text-muted"> {{ $post->created_at->diffForHumans() }}</small></p>
                  <p class="card-text text-dark">{{ $post->excerpt }}</p>
                  <a href="posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                </div>
              </div>
        </div>
        @endforeach 
    </div>
</div>
@endsection