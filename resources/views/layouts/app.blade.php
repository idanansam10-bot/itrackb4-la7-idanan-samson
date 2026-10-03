<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <h1>My Video Game Collection</h1>

    @include('partials._nav')

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="container">
        @yield('content')
    </div>

    <footer class="container mt-4">
        <p>Created by: Samson Idanan Jr.</p>
    </footer>

</body>
</html>