
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Aplikasi Kepegawaian | @yield("title") </title>

    @include("pages.layouts.partials.css.style_css")

    @yield("css")

</head>

<body>
    <div class="app">
        <div class="layout">

            @include("pages.layouts.partials.header")

            @include("pages.layouts.partials.sidebar")

            <div class="page-container">
                <div class="main-content">
                    @yield("page-content")
                </div>

                @include("pages.layouts.partials.footer")
            </div>
        </div>
    </div>

    @include("pages.layouts.partials.js.style_js")

    @yield("javascript")
</body>

</html>
