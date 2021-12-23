@extends('layout.main')
@section('about')
   
    <!-- Team members section-->
    <section class="py-5 bg-light">
        <div class="container px-5 my-5">
            <div class="text-center">
                @foreach ($abouts as $about)
                <h2 class="fw-bolder">About</h2>
                <p class="lead fw-normal text-muted mb-5">{{ $about->subtitle }}</p>
            </div>
            <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
                <div class="col mb-5 mb-5 mb-xl-0">
                    <div class="text-center">
                        <img class="img-fluid rounded-circle mb-4 px-4" src="{{ ('assets/images/'.$about->image )}}" alt="..." />
                        <h5 class="fw-bolder">{{ $about->name }}</h5>
                        <div class="fst-italic text-muted">{{ $about->role }}</div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Testimonial section-->
    <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-10 col-xl-7">
                <div class="text-center">
                    <h2 class="fw-bolder">Vision</h2>
                    <div class="fs-4 mb-4 fst-italic">"{{ $about->visi }}"</div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection