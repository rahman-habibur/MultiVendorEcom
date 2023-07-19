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
                    <li class="breadcrumb-item active" aria-current="page">All Brand</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->

    <div class="row">
        <div class="col-6 d-flex align-items-center">
            <h6 class="text-uppercase">all brands</h6>
        </div>
        <div class="col-6 d-flex justify-content-end">
            <a href="{{ route('brand.add') }}" class="btn btn-sm btn-primary text-uppercase">Add Brand</a>
        </div>
    </div>
    <hr />
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>#SL</th>
                            <th>Brand Name</th>
                            <th>Brand Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($allBrand as $key => $brand)
                            <tr>
                                <td>{{ ($key+1); }}</td>
                                <td>{{ $brand->brand_name }}</td>
                                <td>
                                    <img src="{{ (empty($brand->brand_image)) ? url('/backend/admin/avatar.png') : url('backend/admin/brand/uploads/'.$brand->brand_image)}}" alt="{{ $brand->brand_image }}" height="50px" width="50px">
                                </td>
                                <td>
                                    <a href="" class="btn btn-primary">Show</a>
                                    <a href="" class="btn btn-info">Edit</a>
                                    <a href="" class="btn btn-danger">Delete</a>
                                </td>
                            </tr> 
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#SL</th>
                            <th>Brand Name</th>
                            <th>Brand Image</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection
