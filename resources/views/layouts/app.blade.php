<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
@include('components.head')
{{-- <x-head></x-head> --}}

<body>
    <div id="main-wrapper">
        @include('components.header')
        {{-- <x-header></x-header>  --}}
        <div class="page-wrapper">
            @yield('content')
        </div>
        @include('components.footer')
    </div>
    @include('components.script')
    @stack('scripts')

</body>

</html>
