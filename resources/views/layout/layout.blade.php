<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
    @livewireStyles()
</head>

<body>
    @include('sweetalert::alert')
    @include('includes.header')
    <div class="main">
        @yield('content')
    </div>

    <div class="section" id="footer">
        @include('includes.footer')
    </div>

    @include('includes.script')
    @livewireScripts()
</body>

</html>