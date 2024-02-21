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

<body>
    <div class="wrapper">
        <header class="top-header">
            <nav class="navbar navbar-expand gap-3">
                <div class="mobile-toggle-icon fs-3">
                    <i class="bi bi-list"></i>
                </div>
                <div class="top-navbar-right ms-auto">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item dropdown dropdown-user-setting">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                                <div class="user-setting d-flex align-items-center">
                                    <img src="{{ asset('backend/images/avatars/avatar-1.png') }}" class="user-img" alt="">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('backend/images/avatars/avatar-1.png') }}" alt="" class="rounded-circle" width="54" height="54">
                                            <div class="ms-3">
                                                <h6 class="mb-0 dropdown-user-name">Jhon Deo</h6>
                                                <small class="mb-0 dropdown-user-designation text-secondary">HR Manager</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item" href="authentication-signup-with-header-footer.html">
                                        <div class="d-flex align-items-center">
                                            <div class=""><i class="bi bi-lock-fill"></i></div>
                                            <div class="ms-3"><span>Logout</span></div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <h4 class="logo-text">BALI BLISS UMA</h4>
                </div>
                <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="{{ route('dashboard') }}">
                        <div class="parent-icon"><i class="bi bi-envelope-fill"></i></div>
                        <div class="menu-title">Message</div>
                    </a>
                </li>
            </ul>
            <!--end navigation-->
        </aside>

        <main class="page-content">
            <div class="email-wrapper">
                <div class="email-sidebar">
                    <div class="email-sidebar-header d-grid"> <a href="javascript:;" class="btn btn-primary compose-mail-btn"><i class="bi bi-plus-lg me-2"></i>Compose</a></div>
                    <div class="email-sidebar-content d-grid mt-2">
                        <div class="email-navigation">
                            <div class="list-group list-group-flush">
                                <a href="{{ route('dashboard') }}" class="list-group-item active d-flex align-items-center">
                                    <i class='bx bxs-inbox me-3 font-20'></i><span>Inbox</span>
                                    <span class="badge bg-primary rounded-pill ms-auto">{{ $messageUnreadCount }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="email-content">
                    <div class="email-list">
                        @foreach($messages as $message)
                            <a href="{{ route('message.detail', $message->ucode) }}">
                                <div class="d-md-flex align-items-center email-message px-3 py-2">
                                    <div class="d-flex align-items-center email-actions">
                                        <p class="mb-0"><b>{{ $message->name }}</b></p>
                                    </div>
                                    <div class="">
                                        <p class="mb-0">{{ \Illuminate\Support\Str::limit($message->message, 100) }}</p>
                                    </div>
                                    <div class="ms-auto">
                                        <p class="mb-0 email-time">{{ \Carbon\Carbon::parse($message->created_at)->diffForHumans() }}</p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="compose-mail-popup">
                    <div class="card">
                        <div class="card-header bg-dark text-white py-2 cursor-pointer">
                            <div class="d-flex align-items-center">
                                <div class="compose-mail-title">New Message</div>
                                <div class="compose-mail-close ms-auto">x</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="email-form">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="To" />
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Subject" />
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" placeholder="Message" rows="10" cols="10"></textarea>
                                </div>
                                <div class="mb-0">
                                    <button type="button" class="btn btn-primary">SEND</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="overlay email-toggle-btn-mobile"></div>
            </div>
        </main>

        <div class="overlay nav-toggle-icon"></div>

        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    </div>

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
    <script src="{{ asset('backend/js/app-emailbox.js') }}"></script>
</body>
</html>
