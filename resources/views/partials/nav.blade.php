{{-- @if ($homes->count()) --}}
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    {{-- <a class="navbar-brand" href="/home"><img src="{{ ('assets/images/'.$homes[0]->logo )}}"><span></span></a> --}}
                    <a class="navbar-brand" href="/home"><img src="assets/images/logo-top.png" style="position:absolut;width: 65px ;height:50px;"><span style="position:absolute;margin-top:10px;margin-left:-10px;color:peachpuff;font-size:20px;">Say-id</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="/home"><i class="uil uil-home"></i>Home</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="uil uil-blogger"></i>Blog</a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                                    <li><a class="dropdown-item" href="/blog">Blog Home</a></li>
                                    <li><a class="dropdown-item" href="/categories">Blog Categories</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="uil uil-image"></i>Gallery</a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                                    <li><a class="dropdown-item" href="/gallery">Foto</a></li>
                                    <li><a class="dropdown-item" href="/video">Video</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="/portfolio"><i class="uil uil-bag"></i>Portfolio</a></li>
                            <li class="nav-item"><a class="nav-link" href="/contact"><i class="uil uil-phone"></i>Contact</a></li>
                            <li class="nav-item"><a class="nav-link" href="/about"><i class="uil uil-info-circle"></i>About</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            {{-- @endif --}}