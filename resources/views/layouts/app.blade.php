<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Master Page')</title>
</head>
<body>
    <!-- Title in page -->
    <h1>Home page</h1>

    <!-- navbar -->
    <nav>
        @yield('content')
    </nav>
    @include('components.sidebar')
    @include('components.navbar')
    
    <!-- body -->
    <main>
        @yield('main')
    </main>
    <footer>
        @yield('footer')
    </footer>
</body>
</html>