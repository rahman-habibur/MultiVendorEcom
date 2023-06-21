@extends('admin.master')

@section('main-content')
<div class="page-content">

    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3" bis_skin_checked="1">
        <div class="breadcrumb-title pe-3" bis_skin_checked="1">Admin Profile</div>
        <div class="ps-3" bis_skin_checked="1">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="http://127.0.0.1:8000/admin/dashboard"><i
                                class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Change Password</li>
                </ol>
            </nav>
        </div>

    </div>

    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="card my-5">
                <div class="card-body">

                    <form action="{{ route('admin.changes.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf

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

                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Old Password</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="password" class="form-control" name="old_password" placeholder="Old Password"/>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">New Password</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="password" class="form-control" name="new_password" placeholder="New Password" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Confirm Password</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="password" class="form-control" name="confirm_password" placeholder="Confirm password" />
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-sm-12 text-secondary text-center">
                                <input type="submit" class="btn btn-primary px-4" value="Change Password">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


</div>
@endsection
