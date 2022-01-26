@extends('layout.main')
@section('video')
<section class="py-5 bg-light">
    <div class="container px-5">
        <h1 class="mb-5 text-center">Video</h1>
          <div class="container">
            <div class="row">
              @foreach ($videos as $video)
              <video width="400px" height="350px" controls >
                <source src="{{ ('assets/video/'.$video->video) }}" type="video/mp4" alt="{{ $video->title }}">
                <source src="{{ ('assets/video/'.$video->video) }}" type="video/ogg" alt="{{ $video->title }}">
            </video>
            <p style="font-family:lato,sans-serif;font-weight:100">{{ $video->title }}</p>
            <br/>
            @endforeach
            </div>
        </div>
    </div>
</section> 
@endsection