@extends('user.master')

@section('main-content')
<div class="page-header breadcrumb-wrap">
    <div class="container">
        <div class="breadcrumb">
            <a href="{{ route('user.home') }}" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
            <span></span> My Account
        </div>
    </div>
</div>
<div class="page-content pt-150 pb-150">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
                <div class="row">
                    <div class="col-lg-6 pr-30 d-none d-lg-block">
                        <img class="border-radius-15" src="{{ asset('frontend/user') }}/assets/imgs/page/login-1.png"
                            alt="" />
                    </div>
                    <div class="col-lg-6 col-md-8">
                        <div class="login_wrap widget-taber-content background-white">
                            <div class="padding_eight_all bg-white">
                                <div class="heading_s1">
                                    <h1 class="mb-5">Login Here</h1>
                                    <p class="mb-30">Don't have an account? <a href="page-register.html">Create here</a>
                                    </p>
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <!-- username     -->
                                    <div class="form-group">
                                        <input type="text" required="" name="login" id="login"
                                            placeholder="Username or Email or Phone*" />
                                    </div>


                                    <!-- password     -->

                                    <div class="form-group">
                                        <input required="" type="password" name="password" id="password"
                                            placeholder="Your password *" />
                                    </div>

                                    <!-- check     -->

                                    <div class="login_footer form-group mb-50">
                                        <div class="chek-form">
                                            <div class="custome-checkbox">
                                                <input class="form-check-input" type="checkbox" name="checkbox"
                                                    id="exampleCheckbox1" value="" />
                                                <label class="form-check-label" for="exampleCheckbox1"><span>Remember
                                                        me</span></label>
                                            </div>
                                        </div>
                                        <a class="text-muted" href="#">Forgot password?</a>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-heading btn-block hover-up">Log in</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection