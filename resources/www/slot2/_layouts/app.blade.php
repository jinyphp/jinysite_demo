<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Modern Business - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

        <!-- Core theme CSS (includes Bootstrap)-->
        {{-- <link href="/assets/css/styles.css" rel="stylesheet" /> --}}
        @vite('resources/scss/jiny.scss')

        <style>
            .feature {
display: inline-flex;
align-items: center;
justify-content: center;
height: 3rem;
width: 3rem;
font-size: 1.5rem;
}
        </style>

        {{-- @livewireStyles --}}

    </head>
    <body class="d-flex flex-column h-100">
        {{$slot}}

        {{-- @livewireScripts --}}

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Core theme JS-->
        {{-- <script src="js/scripts.js"></script> --}}
    </body>
</html>
