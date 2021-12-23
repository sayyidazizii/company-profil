@extends('layout.main')
@section('home')
<header class="bg-dark py-5">
    <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-lg-8 col-xl-7 col-xxl-6">
                <div class="my-5 text-center text-xl-start">
                    <h1 class="display-5 fw-bolder text-white mb-2">SEO & Digital</h1>
                    <p class="lead fw-normal text-white-50 mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit!</p>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                        <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Get Started</a>
                        <a class="btn btn-outline-light btn-lg px-4" href="#!">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="assets/images/banner-right-image.png" alt="..." /></div>
        </div>
    </div>
</header>
<!-- Features section-->
<section class="py-5" id="features">
 <div class="container px-5 my-5">
   <div class="container px-5">
    <div class="card border-0 shadow rounded-3 overflow-hidden">
        {{-- <br>
        <br> --}}
        <div class="container" style="position:relative;">
        <div class="card-body p-0">
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <div class="d-inline p-2 bg-primary text-dark">
                    <div class="col">
                      <div class="card h-50 ">
                        <div class="card-body">
                          <center><img src="assets\images\service-icon-03.png"></center>
                        </div>
                      </div>
                    </div>
                </div>
            <div class="d-inline p-2 bg-primary text-dark">
                <div class="col">
                  <div class="card h-50 ">
                    <div class="card-body">
                      <center><img src="assets\images\service-icon-01.png"></center>
                    </div>
                  </div>
                </div>
            </div>
            <div class="d-inline p-2 bg-primary text-dark">
                <div class="col">
                  <div class="card h-50 ">
                    <div class="card-body">
                      <center><img src="assets\images\service-icon-02.png"></center>
                    </div>
                  </div>
                </div>
            </div>
            <div class="d-inline p-2 bg-primary text-dark">
                <div class="col">
                  <div class="card h-50 ">
                    <div class="card-body">
                      <center><img src="assets\images\service-icon-03.png"></center>
                    </div>
                  </div>
                </div>
            </div>
              </div>
            </div>
        </div>
    </div>
</div>
 </div>
    </div>
</section>
</main>


@endsection