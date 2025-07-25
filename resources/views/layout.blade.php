<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Mon Application')</title>
</head>
<body>
    <header>
        <h1>@yield('header', 'Bienvenue sur notre site')</h1>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>
