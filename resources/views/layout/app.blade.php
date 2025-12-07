<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="A beautifully crafted agency website with subtle visual magic." />
    <meta name="author" content="Izzdden S. R. Alnouno" />
    <title>Agency — Enhanced Landing Experience</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />

    <!-- Font Awesome (Free v6.3.0) -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Google Fonts: Montserrat (Headings) + Roboto Slab (Body/Subheadings) -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet" type="text/css" />

    <!-- Core Theme CSS (Bootstrap + Custom Styles) -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />

    <!-- Page-specific styles will be pushed here -->
    @stack('styles')
</head>

<body id="page-top">
    <!-- Navigation Bar -->
    @include('partials.nav')

    <!-- Dynamic Page Content -->
    @yield('content')

    <!-- Global Footer -->
    @include('partials.footer')

    <!-- Bootstrap 5 Bundle (with Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Core Theme JavaScript -->
    <script src="{{ asset('js/scripts.js') }}"></script>

    <!-- SB Forms (Optional per page) -->
    @stack('scripts')
</body>
</html>
