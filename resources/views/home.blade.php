@extends('layout.main')
@section('home')
@if ($homes->count())
<header class="bg-dark py-5">
    <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-lg-8 col-xl-7 col-xxl-6">
                <div class="my-5 text-center text-xl-start">
                    <h1 class="display-5 fw-bolder text-white mb-2">{{ $homes[0]->title }}</h1>
                    <p class="lead fw-normal text-white-50 mb-4">{{ $homes[0]->body }}</p>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                        <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Get Started</a>
                        <a class="btn btn-outline-light btn-lg px-4" href="/about">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="{{ ('assets/images/'.$homes[0]->image )}}" alt="..." /></div>
        </div>
    </div>
</header>



<!-- Features section-->
<section class="py-5" id="features">
<div class="container bg-white" style="height:20vh;">
  <div class="card">
    <div class="card-body">
          <table class="table table-borderless">
            <tr>
              <td>
                <a href="/blog"><center><img src="{{ ('assets/images/'.$homes[0]->icon1 )}}"></center></a>
              </td>
              <td>
                <a href="/portfolio"><center><img src="{{ ('assets/images/'.$homes[0]->icon2 )}}"></center></a>
              </td>
              <td>
                <a href="/contact"><center><img src="{{ ('assets/images/'.$homes[0]->icon3 )}}"></center></a>
              </td>
              <td>
                <a href="/gallery"><center><img src="{{ ('assets/images/'.$homes[0]->icon4 )}}"></center></a>
              </td>
            </tr>
          </table>
      </div>
    </div>
</div>

@endif
<br>
<br>
@if ($posts->count())
<div class="container center mb-5">
  <div class="text-center">
    <h2 class="fw-bolder">From our blog</h2>
    <p class="lead fw-normal text-muted mb-5">Berikut adalah beberapa Blog terbaru,silahkan kunjungi halaman blog,jika ingin melihat semua blog kami</p>
  </div>
  <div class="row">
    <div class="col-md-4 mb-5">
          <div class="card" >
              <div class="position-absolute bg-dark px-3 py-2 " style="background-color: rgba(0, 0, 0, 0.7)"><a href="/categories/{{ $posts[0]->category->slug }}" class="text-white text-decoration-none">{{ $posts[3]->category->name }}</a></div>
              <img src="https://source.unsplash.com/500x500?{{ $posts[0]->category->name }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{ $posts[0]->title }}</h5>
                <p>By.<a href="/authors/{{ $posts[0]->user->username }}" class="text-decoration-none"> {{ $posts[3]->user->name }}<small class="text-muted"> {{ $posts[3]->created_at->diffForHumans() }}</small></p>
                <p class="card-text text-dark">{{ $posts[0]->excerpt }}</p>
                <a href="posts/{{ $posts[0]->slug }}" class="btn btn-primary">Read More</a>
              </div>
            </div>
      </div>
      <div class="col-md-4">
        <div class="card" >
            <div class="position-absolute bg-dark px-3 py-2 " style="background-color: rgba(0, 0, 0, 0.7)"><a href="/categories/{{ $posts[1]->category->slug }}" class="text-white text-decoration-none">{{ $posts[1]->category->name }}</a></div>
            <img src="https://source.unsplash.com/500x500?{{ $posts[1]->category->name }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $posts[1]->title }}</h5>
              <p>By.<a href="/authors/{{ $posts[1]->user->username }}" class="text-decoration-none"> {{ $posts[1]->user->name }}<small class="text-muted"> {{ $posts[1]->created_at->diffForHumans() }}</small></p>
              <p class="card-text text-dark">{{ $posts[1]->excerpt }}</p>
              <a href="posts/{{ $posts[1]->slug }}" class="btn btn-primary">Read More</a>
            </div>
          </div>
    </div>
    <div class="col-md-4">
      <div class="card" >
          <div class="position-absolute bg-dark px-3 py-2 " style="background-color: rgba(0, 0, 0, 0.7)"><a href="/categories/{{ $posts[5]->category->slug }}" class="text-white text-decoration-none">{{ $posts[5]->category->name }}</a></div>
          <img src="https://source.unsplash.com/500x500?{{ $posts[2]->category->name }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $posts[5]->title }}</h5>
            <p>By.<a href="/authors/{{ $posts[5]->user->username }}" class="text-decoration-none"> {{ $posts[5]->user->name }}<small class="text-muted"> {{ $posts[5]->created_at->diffForHumans() }}</small></p>
            <p class="card-text text-dark">{{ $posts[5]->excerpt }}</p>
            <a href="posts/{{ $posts[5]->slug }}" class="btn btn-primary">Read More</a>
          </div>
        </div>
  </div>
  </div>
</div>
@endif
</section>
</main>


@endsection