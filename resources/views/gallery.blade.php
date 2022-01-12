@extends('layout.main')
@section('gallery')

{{-- <div class="container"> --}}
<section class="py-5 bg-light">
    <div class="container px-5">
        <h1 class="mb-5 text-center">Gallery</h1>
          <div class="container">
            <div class="row">
              @foreach ($gallerys as $galleri)
                  <div class="col-md-4">
                    <a href="#" class="text-white text-decoration-none" >
                        <div class="card bg-none text-white" >
                          <img src="{{ ('assets/images/'.$galleri->image )}}" class="card-img" alt="{{ $galleri->title }}">
                          <div class="card-img-overlay d-flex align-items-center p-0">
                          </div>
                        </div>
                    </a>
                    <br>
                  </div>
              @endforeach
            </div>
        </div>
    </div>
</section> 

{{-- </div> --}}
@endsection