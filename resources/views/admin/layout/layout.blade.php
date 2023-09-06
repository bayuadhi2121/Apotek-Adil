<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.template.head')

</head>

<body class="g-sidenav-show  bg-gray-100">
    @include('admin.template.sidebar')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        @include('admin.template.navbar')
        @yield('content')
    </main>



    @include('admin.template.script')

</body>

</html>