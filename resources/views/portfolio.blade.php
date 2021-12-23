@extends('layout.main')
@section('portfolio')
<section class="py-5">
    <div class="container px-5 my-5">
            @foreach ($portfolios as $portfolio)
            <div class="card mb-3">
                <img src="{{ ('assets/images/'.$portfolio->image )}}" class="card-img" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $portfolio->title }}</h5>
                  <p class="card-text">{{ $portfolio->body }}</p>
                  <p class="card-text"><small class="text-muted">Last updated  {{ $portfolio->published_at }}</small></p>
                </div>
              </div>
              @endforeach
        </div>
    </div>
</section>
</main>
@endsection