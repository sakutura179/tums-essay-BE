{{--
    boxicons
    DataTable
    CKEditor
--}}

<!DOCTYPE html>
<html lang="en">
<head>
    @include('meta')
    @include('css')

    @yield('css')
    @yield('upperScripts')
    @yield('title')
</head>
<body>
    <div class="content">
        @yield('content')
    </div>

    @include('script')

    @yield('lowerScripts')
</body>
</html>
