@extends('layout.main')
@section('category')
<section class="py-5 bg-light">
    <div class="container px-5">
        <h1 class="mb-5 text-center">Post Categories</h1>
        <div class="row gx-5">
            <div class="col-xl-8">
                @foreach ($categories as $category)
                <!-- News item-->
                <div class="card w-75">
                    <div class="card-body">
                      <p class="card-text"><a href="/categories/{{ $category->slug }}">{{ $category->name }} </a></p>
                      <a href="/categories/{{ $category->slug }}" class="btn btn-primary">Read more</a>
                    </div>
                  </div>
                @endforeach
                <div class="text-end mb-5 mb-xl-0">
                    <a class="text-decoration-none" href="/blog">
                        More news
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card border-0 h-100">
                    <div class="card-body p-4">
                        <div class="d-flex h-100 align-items-center justify-content-center">
                            <div class="text-center">
                                <div class="h6 fw-bolder">Contact</div>
                                <p class="text-muted mb-4">
                                    For press inquiries, email us at
                                    <br />
                                    <a href="#!">sayyidsyafiq234@gmail.com</a>
                                </p>
                                <div class="h6 fw-bolder">Follow us</div>
                                <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-twitter"></i></a>
                                <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-facebook"></i></a>
                                <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-linkedin"></i></a>
                                <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-telegram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>   
@endsection