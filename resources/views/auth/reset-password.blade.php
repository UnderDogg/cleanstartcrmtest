<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('vendor/coreui/css/coreui.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/coreui/fontawesome/css/fontawesome.css') }}">

    <title>Login</title>
</head>
<body class="app flex-row align-items-center">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mx-4">
                <div class="card-body p-4">
                    <h1>Reset password</h1>
                    <p class="text-muted">Please enter your email address</p>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                            <i class="fa fa-envelope"></i>
                            </span>
                        </div>
                        <input class="form-control" type="text" placeholder="Email">
                    </div>
                    <button class="btn btn-block btn-success" type="button">Send me a new password</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery first, then Popper.js, Bootstrap, then CoreUI  -->
<script src="{{ asset('vendor/coreui/js/jquery.js') }}"></script>
<script src="{{ asset('vendor/coreui/js/popper.js') }}"></script>
<script src="{{ asset('vendor/coreui/js/bootstrap.js') }}"></script>
<script src="{{ asset('vendor/coreui/js/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('vendor/coreui/js/coreui.js') }}"></script>
<script src="{{ asset('vendor/coreui/js/coreui-utilities.js') }}"></script>
</body>
</html>
