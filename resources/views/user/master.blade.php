@include('user.body.styles')
<!-- Modal -->

<!-- Quick view -->

@include('user.body.quick_view')

<!-- Header  -->

@include('user.body.header')

<!--End header-->
<main class="main">

    @yield('main-content')

</main>

@include('user.body.footer')
@include('user.body.scripts')
