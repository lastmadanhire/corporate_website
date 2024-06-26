<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--favicon-->
	<link rel="icon" href="{{ asset('frontend/assets/img/favicon.png') }}" type="image/png" />
    {{-- styleshets --}}
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <title>{{ config('app.name') }}</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
    <div class="container">
        <a href="#" class="navbar-brand"><img  src="{{ url('frontend/assets/img/favicon.png') }}" alt=""> {{ config('app.name') }}</a>
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
                    <h1>{{ $showcase->title }}</h1>
                    <p class="py-3">{{ $showcase->description }}</p>
                    <div class="d-flex align-items-center">
                        <button class="btn bg-white text-primary">GET STARTED</button>
                        <h1><i class="text-white px-3 bi bi-play-circle-fill"></i></h1>
                        <h5>Watch Intro</h5>

                    </div>
                </div>
                <img class="img-fluid w-50" src="{{ asset($showcase->image) }}" alt="">

            </div>
        </div>
    </section>
    {{-- Showcase end--}}
    {{-- Story start --}}
    <section id="story" class="p-5">
        <div class="container">
            @foreach ($story as $st)
            <div class="row align-items-center justify-content-between">
                <div class="col-md">
                    <img class="img-fluid" src="{{ url( $st->image) }}" alt="">
                </div>
                <div class="col-md">
                    <h5>{{ $st->title }}</h5>
                    <h5 class="fw-bold py-3">{{ $st->subtitle }}</h5>
                    <div class="row">
                        <div class="col-md-12">
                          <ul class="nav nav-tabs nav-justified mb-3 p-2 g-2" role="tablist">
                            <li class="nav-item" role="presentation">
                              <a href="#who-we-are" class="nav-link active btn btn-primary text-primary" data-bs-toggle="tab" role="tab" aria-selected="true">Who We Are</a>
                            </li>
                            <li class="nav-item" role="presentation">
                              <a href="#our-vision" class="nav-link btn text-primary" data-bs-toggle="tab" role="tab" aria-selected="false">Our Vision</a>
                            </li>
                            <li class="nav-item" role="presentation">
                              <a href="#our-history" class="nav-link btn btn-outline-primary text-primary" data-bs-toggle="tab" role="tab" aria-selected="false">Our History</a>
                            </li>
                          </ul>
                          <div class="tab-content">
                            <div class="tab-pane active" id="who-we-are" role="tabpanel" aria-labelledby="who-we-are-tab">
                              <p class="lead">{{ $st->who_we_are }}</p>
                            </div>
                            <div class="tab-pane" id="our-vision" role="tabpanel" aria-labelledby="our-vision-tab">
                              <p class="lead">{{ $st->our_vision }}</p>
                            </div>
                            <div class="tab-pane" id="our-history" role="tabpanel" aria-labelledby="our-history-tab">
                              <p class="lead">{{ $st->our_history }}</p>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    {{-- Services start --}}
    <section class="p-5" id="services">
        <div class="container">
            <div class="text-center mx-auto mb-3">
                <p class="text-primary d-inline-block px-3 py-1 fw-bold" id="rounded-section-btn">Services</p>
            </div>
            <div class="row py-4 g-3">
                @if (count($services) > 0)
                    @foreach ($services as $service)
                    <div class="col-md-4">
                        <div class="card p-4">
                            <h1><i class="text-primary {{ $service->icon }}"></i></h1>
                            <div class="card-title fw-bold mb-3">
                                {{ $service->title }}
                            </div>
                            <p class="card-text">
                                {{ $service->description }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                @else
                <p>No services found.</p>
                @endif
            </div>

        </div>
    </section>

        {{-- pricing start --}}
        <section class="p-5 bg-gray" id="pricing">
            <div class="container">
                <div class="text-center mx-auto mb-3">
                    <p class="text-primary d-inline-block px-3 py-1 fw-bold" id="rounded-section-btn">Pricing</p>
                </div>
                <div class="row justify-content-center g-3">
                    @if (count($pricing) > 0)
                    @foreach ($pricing as $plan)
                    <div class="col-md-6 col-lg-3">
                        <div class="card p-4" id="pricing-card">
                            <div class="card-head text-center">
                                <div class="text-center mx-auto mb-3">
                                    <p class="text-primary d-inline-block px-3 py-1 fw-bold" id="rounded-section-btn">{{ $plan->title }}</p>
                                </div>
                                <p class="card-text">
                                    {{ $plan->description}}
                                </p>
                                <p class="mb-10"><span class="mb-50">$</span><span class="pricing-card-price fw-bold">{{ $plan->price }}</span> <span>/mo</span></p>
                                <button class="btn btn-outline-primary fw-bold">START FREE TRIAL</button>
                            </div>
                            <div class="card-body">
                                @foreach ($plan->features as $feature)
                                <p><i class="bi bi-check-circle text-primary me-3"></i> {{ $feature }}</p>
                                @endforeach
                            </div>

                        </div>
                    </div>
                    @endforeach
                    @else
                    <p>No services found.</p>
                    @endif
                </div>

            </div>
        </section>

        <!-- cta-section start -->
        <section class="cta-section bg-primary">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4 text-center py-5 ">
                        <h2 class="cta-content text-light">{{ $cta->title }}</h2>
                        <p class="lead text-light">{{ $cta->description }}</p>
                        <div class="cta-button">
                            <a class="btn btn-primary text-light"  href="#">GET STARTED</a>
                        </div>
                    </div>
                    <div class="col-lg-4"></div>
                </div>
            </div>
        </section>
        <!-- cta-section end -->



    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
