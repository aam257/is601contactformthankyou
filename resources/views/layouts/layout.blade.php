<!doctype html>

<html lang="en">

@include('includes.head')

<body>

    <header>

        @include('includes.menu')

    </header>

    <main role="main">

        @yield('content')

    </main>

</body>

@include('includes.footer')


</html>