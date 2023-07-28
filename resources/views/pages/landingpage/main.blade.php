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
        
        @yield("main_content")
        
    </main>
    
    @include('pages.landingpage.partials.footer.footer')
    
    @include('pages.landingpage.partials.javascript.style_js')
    
</body>

</html>
