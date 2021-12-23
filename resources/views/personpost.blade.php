@extends('layout.main')
@section('personpost')
<br>
<center><h3> Postingan Personal</h3></center>
<section class="py-5">
    <div class="container">
        <div class="row">
            @foreach ($posts as $post)
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
</section>
@endsection

