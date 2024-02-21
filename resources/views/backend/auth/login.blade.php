<!doctype html>
<html lang="en" class="semi-dark">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('backend/images/favicon-32x32.png') }}" type="image/png" />

    <!--plugins-->
    <link href="{{ asset('backend/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/css/bootstrap-extended.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/css/icons.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- loader-->
    <link href="{{ asset('backend/css/pace.min.css') }}" rel="stylesheet" />

    <!--Theme Styles-->
    <link href="{{ asset('backend/css/dark-theme.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/css/light-theme.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/css/semi-dark.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/css/header-colors.css') }}" rel="stylesheet" />

    <title>Snacked - Bootstrap 5 Admin Template</title>
</head>

<body class="bg-login">

<!--start wrapper-->
<div class="wrapper">

    <!--start content-->
    <main class="authentication-content mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-4 mx-auto">
                    <div class="card shadow rounded-5 overflow-hidden">
                        <div class="card-body p-4 p-sm-5">
                            <h4 class="card-title text-center mb-2">BALI BLISS UMA</h4>
                            <p class="card-text text-center mb-3">LOGIN ADMINISTRATOR</p>
                            <div class="login-separater text-center mb-3"><hr></div>
                            @if (sizeof($errors) > 0)
                                @foreach ($errors->all() as $error)
                                    <div class="alert border-0 bg-light-success alert-dismissible fade show py-2">
                                        <div class="d-flex align-items-center">
                                            <div class="fs-3 text-danger"><i class="bi bi-check-circle-fill"></i></div>
                                            <div class="ms-3">
                                                <div class="text-danger">{{ $error }}</div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endforeach
                            @endif
                            <form class="form-body" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-12">
                                        <label for="inputUsername" class="form-label">Username</label>
                                        <div class="ms-auto position-relative">
                                            <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-person-fill"></i></div>
                                            <input type="text" class="form-control radius-30 ps-5" name="username" id="inputUsername" placeholder="Username" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputChoosePassword" class="form-label">Enter Password</label>
                                        <div class="ms-auto position-relative">
                                            <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                                            <input type="password" class="form-control radius-30 ps-5" name="password" id="inputChoosePassword" placeholder="Enter Password" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary radius-30">LOGIN</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!--end page main-->

</div>
<!--end wrapper-->


<!-- Bootstrap bundle JS -->
<script src="{{ asset('backend/js/bootstrap.bundle.min.js')  }}"></script>

<!--plugins-->
<script src="{{ asset('backend/js/jquery.min.js') }}"></script>
<script src="{{ asset('backend/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src="{{ asset('backend/plugins/metismenu/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('backend/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>

<!--app-->
<script src="{{ asset('backend/js/app.js') }}"></script>
<script src="{{ asset('backend/js/pace.min.js') }}"></script>


</body>

</html>
