<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Company-Profile-Sayyid</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="favicon.ico" />
        <!-- Bootstrap icons-->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">

        @include('partials.nav')   
        @yield('home')
        @yield('about')
        @yield('contact')
        @yield('gallery')
        @yield('video')
        @yield('blog')
        @yield('portfolio')
        @yield('post')
        @yield('category')
        @yield('categories')
        @yield('privacy')
        @yield('personpost')
        
         <!-- Footer-->
         {{-- @foreach ($footers as $footers) --}}
         {{-- @if ($footers->count()) --}}
         <footer class="bg-dark py-4 mt-auto">
            <div class="container px-3">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Say-id @2022</div>
                        {{-- <a class="fs-5 px-2 link-light" href="{{ footers[0]->instagram }}"><i class="bi-instagram"></i></a>
                        <a class="fs-5 px-2 link-light" href="{{ footers[0]->facebook }}"><i class="bi-facebook"></i></a>
                        <a class="fs-5 px-2 link-light" href="{{ footers[0]->linkedin }}"><i class="bi-linkedin"></i></a>
                        <a class="fs-5 px-2 link-light" href="{{ footers[0]->telegram }}"><i class="bi-telegram"></i></a>    --}}
                        <a class="fs-5 px-2 link-light" href="https://www.instagram.com/sayyidazizii/"><i class="bi-instagram"></i></a>
                        <a class="fs-5 px-2 link-light" href="https://www.instagram.com/sayyidazizii/"><i class="bi-facebook"></i></a>
                        <a class="fs-5 px-2 link-light" href="https://www.linkedin.com/in/sayyid-syafiq-52aaaa220/"><i class="bi-linkedin"></i></a>
                        <a class="fs-5 px-2 link-light" href="https://t.me/SayyidAzizyz"><i class="bi-telegram"></i></a>  
                    </div>
                    <div class="col-auto">
                        <a class="link-light small" href="/privacy">Privacy</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#">Terms</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="/contact">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- @endif --}}
        </footer>
        {{-- @endforeach --}}
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>