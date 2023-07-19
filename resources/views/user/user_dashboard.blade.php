<!-- @extends('user.master') -->
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
            <div class="col-lg-10 m-auto">
                <div class="row">
                    <div class="col-md-3">
                        <div class="dashboard-menu">
                            <ul class="nav flex-column" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" href="#dashboard"
                                        role="tab" aria-controls="dashboard" aria-selected="false"><i
                                            class="fi-rs-settings-sliders mr-10"></i>Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="orders-tab" data-bs-toggle="tab" href="#orders" role="tab"
                                        aria-controls="orders" aria-selected="false"><i
                                            class="fi-rs-shopping-bag mr-10"></i>Orders</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="track-orders-tab" data-bs-toggle="tab" href="#track-orders"
                                        role="tab" aria-controls="track-orders" aria-selected="false"><i
                                            class="fi-rs-shopping-cart-check mr-10"></i>Track Your Order</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="address-tab" data-bs-toggle="tab" href="#address" role="tab"
                                        aria-controls="address" aria-selected="true"><i
                                            class="fi-rs-marker mr-10"></i>My Address</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="account-detail-tab" data-bs-toggle="tab"
                                        href="#account-detail" role="tab" aria-controls="account-detail"
                                        aria-selected="true"><i class="fi-rs-user mr-10"></i>Account details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('user.logout') }}"><i
                                            class="fi-rs-sign-out mr-10"></i>Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <!-- Message  -->
                        @if(session('status'))
                        <div class="alert alert-success border-0 bg-success alert-dismissible fade show py-2">
									<div class="d-flex align-items-center">
										<div class="font-35 text-white"><i class="bx bxs-check-circle"></i>
										</div>
										<div class="ms-3">
											<h6 class="mb-0 text-white">Success</h6>
											<div class="text-white">{{ session('status') }}</div>
										</div>
									</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
                        @elseif(session('error'))
                        <div class="alert alert-danger border-0 bg-danger alert-dismissible fade show py-2">
									<div class="d-flex align-items-center">
										<div class="font-35 text-white"><i class="bx bxs-message-square-x"></i>
										</div>
										<div class="ms-3">
											<h6 class="mb-0 text-white">Danger</h6>
											<div class="text-white">{{ session('error') }}</div>
										</div>
									</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>

                        @endif
                        <div class="tab-content account dashboard-content pl-50">
                            <div class="tab-pane fade active show" id="dashboard" role="tabpanel"
                                aria-labelledby="dashboard-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="mb-0">Hello {{ $userData->name }}!</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>
                                            From your account dashboard. you can easily check &amp; view your <a
                                                href="#">recent orders</a>,<br />
                                            manage your <a href="#">shipping and billing addresses</a> and <a
                                                href="#">edit your password and account details.</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="mb-0">Your Orders</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Order</th>
                                                        <th>Date</th>
                                                        <th>Status</th>
                                                        <th>Total</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>#1357</td>
                                                        <td>March 45, 2020</td>
                                                        <td>Processing</td>
                                                        <td>$125.00 for 2 item</td>
                                                        <td><a href="#" class="btn-small d-block">View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>#2468</td>
                                                        <td>June 29, 2020</td>
                                                        <td>Completed</td>
                                                        <td>$364.00 for 5 item</td>
                                                        <td><a href="#" class="btn-small d-block">View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>#2366</td>
                                                        <td>August 02, 2020</td>
                                                        <td>Completed</td>
                                                        <td>$280.00 for 3 item</td>
                                                        <td><a href="#" class="btn-small d-block">View</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="track-orders" role="tabpanel"
                                aria-labelledby="track-orders-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="mb-0">Orders tracking</h3>
                                    </div>
                                    <div class="card-body contact-from-area">
                                        <p>To track your order please enter your OrderID in the box below and press
                                            "Track" button. This was given to you on your receipt and in the
                                            confirmation email you should have received.</p>
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <form class="contact-form-style mt-30 mb-50" action="#" method="post">
                                                    <div class="input-style mb-20">
                                                        <label>Order ID</label>
                                                        <input name="order-id"
                                                            placeholder="Found in your order confirmation email"
                                                            type="text" />
                                                    </div>
                                                    <div class="input-style mb-20">
                                                        <label>Billing email</label>
                                                        <input name="billing-email"
                                                            placeholder="Email you used during checkout" type="email" />
                                                    </div>
                                                    <button class="submit submit-auto-width"
                                                        type="submit">Track</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card mb-3 mb-lg-0">
                                            <div class="card-header">
                                                <h3 class="mb-0">Billing Address</h3>
                                            </div>
                                            <div class="card-body">
                                                <address>
                                                    {{ $userData->address }}
                                                </address>
                                                <a href="#" class="btn-small">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">Shipping Address</h5>
                                            </div>
                                            <div class="card-body">
                                                <address>
                                                    {{ $userData->address }}
                                                </address>
                                                <a href="#" class="btn-small">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="account-detail" role="tabpanel"
                                aria-labelledby="account-detail-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Account Details</h5>
                                    </div>
                                    <div class="card-body">
                                        <p>Already have an account? <a href="page-login.html">Log in instead!</a></p>
                                        <form method="POST" name="enq" action="{{ route('user.update') }}">
                                        @csrf  
                                        
                                        <div class="row">
                                                <!-- username  -->
                                                <div class="form-group col-md-12">
                                                    <label>Username</label>
                                                    <input required="" class="form-control" name="username" type="text" value="{{ $userData->username }}" disabled/>
                                                </div>
                                                <!-- name  -->
                                                <div class="form-group col-md-12">
                                                    <label>Name <span class="required">*</span></label>
                                                    <input required="" class="form-control" name="uname" value="{{ $userData->name }}" />
                                                </div>
                                                <!-- email  -->
                                                <div class="form-group col-md-12">
                                                    <label>Email Address <span class="required">*</span></label>
                                                    <input required="" class="form-control" name="uemail" type="email" value="{{ $userData->email }}" />
                                                </div>
                                                <!-- phone  -->
                                                <div class="form-group col-md-12">
                                                    <label>Phone</label>
                                                    <input required="" class="form-control" name="uphone" type="text" value="{{ $userData->phone }}" />
                                                </div>

                                                <!-- address  -->
                                                <div class="form-group col-md-12">
                                                    <label>Address</label>
                                                    <input required="" class="form-control" name="uaddress" type="text" value="{{ $userData->address }}" />
                                                </div>


                                                 <!-- current password  -->
                                                <div class="form-group col-md-12">
                                                    <label>Current Password <span class="required">*</span></label>
                                                    <input required="" class="form-control" name="old_password"
                                                        type="password" />
                                                </div>
                                                <!-- new password  -->
                                                <div class="form-group col-md-12">
                                                    <label>New Password <span class="required">*</span></label>
                                                    <input required="" class="form-control" name="new_password"
                                                        type="password" />
                                                </div>
                                                <!-- confirm password  -->
                                                <div class="form-group col-md-12">
                                                    <label>Confirm Password <span class="required">*</span></label>
                                                    <input required="" class="form-control" name="confirm_password"
                                                        type="password" />
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit"
                                                        class="btn btn-fill-out submit font-weight-bold" value="Submit">Update User</button>
                                                </div>
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
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"
     integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ=="
     crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script>
     @if(Session::has('message'))
     var type = "{{ Session::get('alert-type', 'message') }}";
     switch (type) {
         case 'info':
             toastr.info("{{ Session::get('message') }}");
             break;

         case 'success':
             toastr.success("{{ Session::get('message') }}");
             break;

         case 'warning':
             toastr.warning("{{ Session::get('message') }}");
             break;
         case 'error':

             toastr.error("{{ Session::get('message') }}");
             break;

     }
     @endif

 </script>
@endsection
