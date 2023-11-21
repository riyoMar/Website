<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Support</title>
    @include('bootstraps.css')
    <style>

    </style>

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="{{url('/images/Logo.jpg')}}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                    Coffee Shop
                </a>
                <ul class="nav justify-content-end" id="navbarCollapse">
                    <li class="navbar-nav me-auto mb-2 mb-md-0">
                        <a class="nav-link active" aria-current="page" href="home">Home</a>
                    </li>
                    <li class="navbar-nav me-auto mb-2 mb-md-0">
                        <a class="nav-link active" aria-current="page" href="product">Product</a>
                    </li>
                </ul>
            </div>
          </nav>
    </header>

    <div style="min-height: 100vh; display: flex; flex-direction: column; text-align: center; padding-top: 70px;">
    {{-- <div style="text-align: center; padding-top: 70px;height: 850px; margin: auto"> --}}

        <h1>Find us on :</h1>
    {{-- facebook --}}
        <p>
            <a href="https://www.facebook.com/">
                <img src="/images/facebook.png" alt="facebook" style="width: 295px; height: 100px" >
            </a>
        </p>
    {{-- whatsapp --}}
        <p>
            <a href="https://web.whatsapp.com/">
                <img src="/images/whatsapp.png" alt="whatsapp" style="width: 295px; height: 100px">
            </a>
        </p>
    {{-- twitter --}}
       <p>
        <div class="img">
            <a href="https://twitter.com">
                <img src="/images/twitter.png" alt="twitter" style="width: 295px; height: 100px">
            </a>
        </div>
        </p>
    </div>
    <div style="margin-top: auto">
        @include('footer')
    </div>
            @include('bootstraps.js')
</body>
</html>