@extends('layouts.admin.master')

@section('content')
    <div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Bookings</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="#">
                        <i class="icon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Manage</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>

            </ul>
        </div>
        <div class="row">
            @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
            @endif
            @if (session('error'))
            <div class="alert alert-danger mt-3">
                {{ session('error') }}
            </div>
            @endif
            @if (session('warning'))
            <div class="alert alert-warning mt-3">
                {{ session('warning') }}
            </div>
            @endif
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">List</h3>
                        <!-- <a href="{{route('trek.create')}}" class="btn btn-sm btn-primary">Add New</a> -->
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered mt-1">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Treks</th>
                                    <th scope="col">Dated</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
