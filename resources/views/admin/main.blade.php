@include('admin/partials/header')
<div class="wrapper">
    @include('admin/partials/sidebar')
    <div class="main-panel">
        @include('admin/partials/navbar')
        @yield('konten')
    </div>
</div>
@include('admin/partials/footer')