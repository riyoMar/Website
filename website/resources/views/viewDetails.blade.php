{{-- <!DOCTYPE html> --}}
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Details</title>
    @include('bootstraps.css')
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                {{-- <a href="/" class="navbar-brand">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
                </a> --}}
                {{-- <img src="{{url('/images/Logo.jpg')}}" alt="Image" width="40" height="32"/>
                <a class="navbar-brand" href="#">Coffee Shop</a> --}}


                {{-- need to check  --}}


                <a href="{{ url()->previous() }}">


                {{-- need to check  --}}
                    <button type="hidden" class="btn btn-dark">
                        <img src="{{url('/images/backButton.png')}}" alt="" width="30" height="24" class="d-inline-block align-text-top bg-dark">
                    </button>
                </a>
                <div class="col">
                    <a class="navbar-brand" href="/">
                        {{-- <img src="{{url('/images/back.png')}}" alt="" width="30" height="24" class="d-inline-block align-text-top bg-dark">
                        <a href="" class="btn btn-dark"><</a> --}}
                        {{-- <button type="button" class="bg-dark" style="color: white"><</button> --}}
                        <img src="{{url('/images/Logo.jpg')}}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                        Coffee Shop
                    </a>
                </div>
                {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> --}}
                <ul class="nav justify-content-end" id="navbarCollapse">
                {{-- test  --}}
                {{-- <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0" id="navbarCollapse"> --}}
                {{-- test  --}}
                    <li class="navbar-nav me-auto mb-2 mb-md-0">
                        <a class="nav-link active" aria-current="page" href="home">Home</a>
                    </li>
                    <li class="navbar-nav me-auto mb-2 mb-md-0">
                        <a class="nav-link active" aria-current="page" href="support">Support</a>
                    </li>
                </ul>
            </div>
          </nav>
    </header>
    <main style="min-height: 100vh; display: flex; flex-direction: column;">
        <div class="container marketing" style="padding-top: 100px">
            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Product Name
                        {{-- <span class="text-muted">See for yourself.</span> --}}
                    </h2>
                    <hr class="featurette-divider">
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
        </div>
        <div style="margin-top: auto">
            @include('footer')
        </div>
    </main>

    @include('bootstraps.js')
</body>
</html>
