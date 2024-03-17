<!DOCTYPE html>
<html lang="en">
@include('frontend.includes.head')

<body>
    @include('frontend.includes.navbar')

    <main id="main">
        @yield('main-content')
    </main>
    @include('frontend.includes.footer')
</body>

</html>
