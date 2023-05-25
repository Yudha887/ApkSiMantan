
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Aplikasi</title>

    <link rel="shortcut icon" href="{{ url('') }}/assets/images/logo/favicon.png">
    <link href="{{ url('') }}/assets/css/app.min.css" rel="stylesheet">

</head>

<body>
    <div class="app">
        <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex" style="background-image: url('/images/background-bps.png'); background-size: cover; background-repeat: no-repeat">
            <div class="d-flex flex-column justify-content-between w-100">
                <div class="container d-flex h-100">
                    <div class="row align-items-center w-100">
                        <div class="col-md-7 col-lg-5 m-h-auto">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <div class="align-items-center justify-content-between m-b-30">
                                        <center>
                                            <img src="{{ url('/images/logo-bps.png') }}" style="width: 100px">
                                        </center>
                                    </div>
                                    <form action="{{ url('/login') }}" method="POST">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="email">E - Mail:</label>
                                            <div class="input-affix">
                                                <i class="prefix-icon anticon anticon-user"></i>
                                                <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan E - Mail">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="password">Password:</label>
                                            <a class="float-right font-size-13 text-muted" href="">Forget Password?</a>
                                            <div class="input-affix m-b-10">
                                                <i class="prefix-icon anticon anticon-lock"></i>
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ url('') }}/assets/js/vendors.min.js"></script>
    <script src="{{ url('') }}/assets/js/app.min.js"></script>

</body>

</html>
