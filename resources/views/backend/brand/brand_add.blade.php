@extends('admin.master')

@section('main-content')
<script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">All Brand</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}"><i
                                class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Add Brand</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->

    <div class="row">
        <div class="col-6 d-flex align-items-center">
            <h6 class="text-uppercase">add brands</h6>
        </div>
        <div class="col-6 d-flex justify-content-end">
            <a href="{{ route('brand.all') }}" class="btn btn-sm btn-primary text-uppercase">All Brand</a>
        </div>
    </div>
    <hr />

    <div class="row">
        <!-- add brand  -->
        <div class="col-xl-7 mx-auto">
            <div class="card border-top border-0 border-4 border-primary">
                <div class="card-body p-5">
                    <div class="card-title d-flex align-items-center">
                        <h5 class="mb-0 text-primary">Brand Registration</h5>
                    </div>
                    <hr>
                    <form class="row g-3" action="{{ route('brand.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- brand name  -->
                        <div class="col-md-12">
                            <label for="brand_name" class="form-label">Brand Name</label>
                            <input type="text" class="form-control" id="brand_name" name="brand_name">
                        </div>
                        <!-- brand image  -->
                        <div class="col-md-12">
                            <label for="brand_image" class="form-label">Brand Image</label>
                            <input type="file" class="form-control" id="brand_image" name="brand_image">
                        </div>
                        
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary px-5">Add Brand</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
