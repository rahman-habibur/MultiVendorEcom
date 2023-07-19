@extends('user.master')

@section('main-content')

    @include('user.body.heroslider')
    <!-- end hero here  -->

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

@endsection
