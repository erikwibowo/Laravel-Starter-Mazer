
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('template/mazer/dist/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('template/mazer/dist/assets/vendors/simple-datatables/style.css') }}">
    <link rel="stylesheet" href="{{ asset('template/mazer/dist/assets/vendors/iconly/bold.css') }}">

    <link rel="stylesheet" href="{{ asset('template/mazer/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('template/mazer/dist/assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('template/mazer/dist/assets/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('template/mazer/dist/assets/images/favicon.svg') }}" type="image/x-icon">
</head>

<body>
    <div id="app">
        @include('admin.layouts.sidebar')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            @yield('content')

            @include('admin.layouts.footer')
        </div>
    </div>
    <script src="{{ asset('template/mazer/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('template/mazer/dist/assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('template/mazer/dist/assets/vendors/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('template/mazer/dist/assets/js/pages/dashboard.js') }}"></script>
    <script src="{{ asset('template/mazer/dist/assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
    <script src="{{ asset('template/mazer/dist/assets/js/main.js') }}"></script>
    @yield('js')
    @yield('modal')
</body>

</html>