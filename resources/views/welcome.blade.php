<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- styleshets --}}
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <title>Corporate Website</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
    <div class="container">
        <a href="#" class="navbar-brand">Business</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-right px-5">
                <li class="nav-item">
                    <a href="#home" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#services" class="nav-link">Services</a>
                </li>
                <li class="nav-item">
                    <a href="#pricing" class="nav-link">Pricing</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link" target="_blank">Login</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>
    {{-- Showcase start--}}
    <section class="bg-primary text-light p-5 text-center text-sm-start" id="home">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                    <h1>Corporate Website</h1>
                    <p class="py-3">We are digital agency that helps brands to achieve thier business outcomes. We see technology as tool to create amazing things</p>
                    <div class="d-flex align-items-center">
                        <button class="btn bg-white text-primary">GET STARTED</button>
                        <h1><i class="text-white px-3 bi bi-play-circle-fill"></i></h1>
                        <h5>Watch Intro</h5>

                    </div>
                </div>
                <img class="img-fluid w-50" src="{{ asset('frontend/assets/img/showcase.jpg') }}" alt="">

            </div>
        </div>
    </section>
    {{-- Showcase end--}}
    {{-- Story start --}}
    <section id="story" class="p-5">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md">
                    <img class="img-fluid" src="{{ asset('frontend/assets/img/stories.jpg') }}" alt="">
                </div>
                <div class="col-md">
                    <h5>OUR STORY</h5>
                    <h5 class="fw-bold py-3">Our team  comes with the experience and knowledge</h5>
                    <div class="border rounded p-4">
                        <div class="nav nav-pills d-flex justify-content-between pt-3 px-2" id="nav-pills-story">

                            <button class="nav-link d-flex align-items-center text-start border p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                                <h5 class="m-0">Who we are</h5>
                            </button>
                            <button class="nav-link d-flex align-items-center text-start border p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                                <h5 class="m-0">Our Vision</h5>
                            </button>
                            <button class="nav-link d-flex align-items-center text-start border p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                                <h5 class="m-0">Our History</h5>
                            </button>
                        </div>
                        {{-- tab panes --}}
                        <div class="tab-content w-100">
                            <div class="tab-pane fade show active" id="tab-pane-1">
                                <div class="row g-4">
                                    <div class="col-md-12">
                                        <p>kkkkk</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-pane-2">
                                <div class="row g-4">
                                    <div class="col-md-12">
                                        <p>kkkkk</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-pane-3">
                                <div class="row g-4">
                                    <div class="col-md-12">
                                        <p>kkkkk</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Services start --}}
    <section class="p-5" id="services">
        <div class="container">
            <div class="text-center mx-auto mb-3">
                <p class="border text-primary rounded d-inline-block px-3 py-2 fw-bold">Services</p>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="card p-4">
                        <h1><i class="text-primary bi bi-bootstrap-fill"></i></h1>
                        <div class="card-title fw-bold mb-3">
                            Refreshing Design
                        </div>
                        <p class="card-text">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita magni debitis sapiente autem nobis sit!
                        </p>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card p-4">
                        <h1><i class="text-primary bi bi-stack"></i></h1>
                        <div class="card-title fw-bold mb-3">
                            Refreshing Design
                        </div>
                        <p class="card-text">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita magni debitis sapiente autem nobis sit!
                        </p>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card p-4">
                        <h1><i class="text-primary bi bi-speedometer2"></i></h1>
                        <div class="card-title fw-bold mb-3">
                            Refreshing Design
                        </div>
                        <p class="card-text">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita magni debitis sapiente autem nobis sit!
                        </p>
                    </div>
                </div>
            </div>
            {{-- second row --}}
            <div class="row py-4">
                <div class="col-md">
                    <div class="card p-4">
                        <h1><i class="text-primary bi bi-speedometer2"></i></h1>
                        <div class="card-title fw-bold mb-3">
                            Refreshing Design
                        </div>
                        <p class="card-text">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita magni debitis sapiente autem nobis sit!
                        </p>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card p-4">
                        <h1><i class="text-primary bi bi-speedometer2"></i></h1>
                        <div class="card-title fw-bold mb-3">
                            Refreshing Design
                        </div>
                        <p class="card-text">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita magni debitis sapiente autem nobis sit!
                        </p>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card p-4">
                        <h1><i class="text-primary bi bi-speedometer2"></i></h1>
                        <div class="card-title fw-bold mb-3">
                            Refreshing Design
                        </div>
                        <p class="card-text">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita magni debitis sapiente autem nobis sit!
                        </p>
                    </div>
                </div>
            </div>
            {{-- second row end --}}
        </div>
    </section>

        {{-- pricing start --}}
        <section class="p-5 bg-gray" id="pricing">
            <div class="container">
                <div class="text-center mx-auto mb-3">
                    <p class="border text-primary rounded d-inline-block px-3 py-2 fw-bold">Pricing</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-3">
                        <div class="card p-3">
                            <div class="card-head text-center">
                                <div class="text-center mx-auto mb-3">
                                    <p class="border text-primary rounded d-inline-block px-3 py-2 fw-semi-bold">Starter</p>
                                </div>
                                <p class="card-text">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum, nisi quaerat.
                                </p>
                                <button class="btn btn-outline-primary fw-bold">START FREE TRIAL</button>
                            </div>
                            <div class="card-body">
                                <p><i class="bi bi-check-circle text-primary me-3"></i> Lorem, ipsum dolor.</p>
                                <p><i class="bi bi-check-circle text-primary me-3"></i> Lorem, ipsum dolor.</p>
                                <p><i class="bi bi-check-circle text-secondary me-3"></i> Lorem, ipsum dolor.</p>
                                <p><i class="bi bi-check-circle text-secondary me-3"></i> Lorem, ipsum dolor.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card p-4">
                            <div class="card-head text-center">
                                <div class="text-center mx-auto mb-3">
                                    <p class="border text-primary rounded d-inline-block px-3 py-2 fw-semi-bold">Exclusive</p>
                                </div>
                                <p class="card-text">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum, nisi quaerat.
                                </p>
                                <button class="btn btn-outline-primary fw-bold">START FREE TRIAL</button>
                            </div>
                            <div class="card-body">
                                <p><i class="bi bi-check-circle text-primary me-3"></i> Lorem, ipsum dolor.</p>
                                <p><i class="bi bi-check-circle text-primary me-3"></i> Lorem, ipsum dolor.</p>
                                <p><i class="bi bi-check-circle text-primary me-3"></i> Lorem, ipsum dolor.</p>
                                <p><i class="bi bi-check-circle text-secondary me-3"></i> Lorem, ipsum dolor.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card p-4">
                            <div class="card-head text-center">
                                <div class="text-center mx-auto mb-3">
                                    <p class="border text-primary rounded d-inline-block px-3 py-2 fw-semi-bold">Premium</p>
                                </div>
                                <p class="card-text">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum, nisi quaerat.
                                </p>
                                <button class="btn btn-outline-primary fw-bold">START FREE TRIAL</button>
                            </div>
                            <div class="card-body">
                                <p><i class="bi bi-check-circle text-primary me-3"></i> Lorem, ipsum dolor.</p>
                                <p><i class="bi bi-check-circle text-primary me-3"></i> Lorem, ipsum dolor.</p>
                                <p><i class="bi bi-check-circle text-primary me-3"></i> Lorem, ipsum dolor.</p>
                                <p><i class="bi bi-check-circle text-primary me-3"></i> Lorem, ipsum dolor.</p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Callback Start -->
    <div class="container-fluid callback my-5 pt-5">
        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">

                </div>
            </div>
        </div>
    </div>
    <!-- Callback End -->



    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
