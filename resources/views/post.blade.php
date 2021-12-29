
@extends('layout.main')
@section('post') 
     <!-- Page Content-->
     <section class="py-5">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1">{{ $post->title }}</h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">{{ $post->created_at->diffForHumans() }} By.<a href="/authors/{{ $post->user->username }}" class=" text-decoration-none">{{ $post->user->name }}</a> </div>
                            <!-- Post categories-->
                            <a class="badge bg-secondary text-decoration-none link-light" href="/categories/{{ $post->category->slug }}" >{{ $post->category->name }}</a>
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4"><img class="img-fluid rounded" src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="..." /></figure>
                        <!-- Post content-->
                        <section class="mb-5">
                            {!! $post->body !!}
                        </section>
                        <div class="container">
                            <center>
                        <a class="text-decoration-none" href="/blog">
                            <i class="bi bi-arrow-left"></i>
                           Back To Post
                        </a>
                        <span>|</span>
                        <a class="text-decoration-none" href="/home ">
                           Go To  Home
                           <i class="bi bi-arrow-right"></i>
                        </a>
                            </center>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection





