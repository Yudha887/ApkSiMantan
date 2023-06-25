<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ApkSI - @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    @include('pages.landingpage.partials.css.style_css')
    
</head>

<body>
    <!-- header -->
    @include("pages.landingpage.partials.header.header")
    
    <main>
        
        <section class="breadcrumb-area d-flex align-items-center" style="background-image:url({{ url('/landing-page') }}/img/testimonial/test-bg.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="breadcrumb-wrap text-center">
                            <div class="breadcrumb-title mb-30">
                                <h2>News Feeds</h2>
                            </div>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">News</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="inner-blog pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bsingle__post mb-50">
                            <div class="bsingle__post-thumb">
                                <img src="{{ url('/landing-page') }}/img/blog/inner_b1.jpg" alt="">
                            </div>
                            <div class="bsingle__content">
                                <div class="meta-info">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="far fa-user"></i>by Zcube
                                            </a>
                                        </li>
                                        <li>
                                            <i class="far fa-comments"></i>
                                            35 Comments
                                        </li>
                                    </ul>
                                </div>
                                <h2>
                                    <a href="blog-details.html">
                                        Lorem ipsum dolor sit amet, consectetur cing elit, sed do eiusmod tempor.
                                    </a>
                                </h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum dolore.
                                </p>
                                <div class="slider-btn">
                                    <a href="#" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">
                                        Read More
                                    </a>
                                    <div class="btn-after" data-animation="fadeInRight" data-delay=".8s">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    @include('pages.landingpage.partials.footer.footer')
    
    @include('pages.landingpage.partials.javascript.style_js')
    
</body>

</html>
