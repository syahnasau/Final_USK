
<!DOCTYPE html>
<html lang="en">
    <head>
		<link rel="shortcut icon" href="assets/images/favicon.svg">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Fintech</title>
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('welcome/css/styles.css') }}" rel="stylesheet" />
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand"  href="{{ url('/') }}">Fintech</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        @guest
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a href="{{ route('register') }}" class="nav-link ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a href="{{ url('/home') }}" class="nav-link font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <header class="bg-dark py-5 ">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center my-5">
                            <h1 class="display-5 fw-bolder text-white mb-5">Present your money in wallet new solution</h1>
                            <p class="lead text-white-50 mb-2">Introducing Our Next-Gen Wallet Solution for Tenizen! Get easy payment and saving your money</p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center pt-5">
                                <a class="btn btn-primary btn px-4 me-sm-3" href="{{ route('login') }}">Get Started</a>
                                <a class="btn btn-outline-light btn px-4" href="{{ route('login') }}">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Footer-->
        {{-- <footer class="py-5 bg-dark">
            <div class="container px-5"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer> --}}
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('welcome/js/scripts.js') }}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
