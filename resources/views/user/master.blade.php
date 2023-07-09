@include('user.body.styles')
<!-- Modal -->

<!-- Quick view -->

@include('user.body.quick_view')

<!-- Header  -->

@include('user.body.header')

<!--End header-->
<main class="main">

    @include('user.body.hero')
    <!--End hero slider-->

    @include('user.body.category')
    <!--End category slider-->

    @include('user.body.banner')
    <!--End banners-->

    @include('user.body.newproducts')
    <!--Products Tabs-->
    
    @include('user.body.featuredproduct')
    <!--End Best Sales-->
    
    @include('user.body.tvcategory')
    <!--End TV Category -->
    
    
    @include('user.body.tshirt')
    <!--End Tshirt Category -->
    
    
    @include('user.body.comcategory')
    <!--End Computer Category -->
    
    
    @include('user.body.offerdeals')
    <!--End 4 columns/offer deals-->
    
    @include('user.body.vendorlist')
    <!--End Vendor List -->

    @yield('main-content')

</main>

@include('user.body.footer')
@include('user.body.scripts')
