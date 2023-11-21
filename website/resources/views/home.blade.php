{{-- <!DOCTYPE html> --}}
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @include('bootstraps.css')
</head>
<body>
    @include('header')
    <main>
        {{-- <post-header> --}}
        <div id="myCarousel" class="carousel slide pointer-event" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    {{-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#777"></rect>
                    </svg> --}}
                    {{-- <img clip-path={{url("/images/Logo.jpg")}} /> --}}
                    {{-- <image src="{{url('/images/Logo.jpg')}}" alt="Logo" width="100" height="24" class="d-inline-block align-text-top"> --}}


                    <svg class="bd-placeholder-img" width="100%" height="100%" xlink:href="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <image xlink:href="{{url('images/backgroundHeader.jpg')}}" width="100%" height="142%" />
                        {{-- <rect width="100%" height="100%" fill="#777"></rect> --}}
                    </svg>


                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Introlude</h1>
                            <h3>Our coffee product is the best in the country, and going to international. Check our product details with click 'Here'</h3>
                            <p><a class="btn btn-lg btn-primary" href="product">Here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- </post-header> --}}


        <!-- START THE FEATURETTES -->
        <div class="container marketing">
            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Product Introductions
                        {{-- <span class="text-muted">See for yourself.</span> --}}
                    </h2>
                    <p class="lead">Product details product details product details product details product details product details product details product details product details product details product details product details product details product details product details.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        {{-- <title>Placeholder</title> --}}
                        {{-- <rect width="100%" height="100%" fill="#eee"></rect> --}}
                        {{-- <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text> --}}
                        <image xlink:href="{{url('images/productImage.jpg')}}" width="735" height="500" />
                    </svg>

                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Product Introductions
                        {{-- <span class="text-muted">See for yourself.</span> --}}
                    </h2>
                    <p class="lead">Product details product details product details product details product details product details product details product details product details product details product details product details product details product details product details.</p>
                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                        width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img"
                        aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        {{-- <title>Placeholder</title> --}}
                        <rect width="100%" height="100%" fill="#777"></rect>
                        {{-- <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text> --}}
                        <image xlink:href="{{url('images/productImage.jpg')}}" width="735" height="500"/>
                    </svg>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Product Introductions
                        {{-- <span class="text-muted">See for yourself.</span> --}}
                    </h2>
                    <p class="lead">Product details product details product details product details product details product details product details product details product details product details product details product details product details product details product details.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        {{-- <title>Placeholder</title> --}}
                        {{-- <rect width="100%" height="100%" fill="#eee"></rect> --}}
                        {{-- <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text> --}}
                        <image xlink:href="{{url('images/productImage.jpg')}}" width="735" height="500" />
                    </svg>

                </div>
            </div>

            <hr class="featurette-divider">

        </div>

        @include('footer')
    </main>

    @include('bootstraps.js')
</body>

</html>
