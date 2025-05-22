@extends('layouts.admin.master')

@section('content')
    <div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Treks</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="#">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Edit</a>
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
                        <h3 class="mb-0">Edit</h3>
                        <a href="{{route('trek.index')}}" class="btn btn-sm btn-primary">Back</a>
                    </div>
                    <div class="card-body">
                          <div class="col-md-12">
                            <form action="{{ route('trek.update',$trek->id) }}" method="POST">
                                @csrf
                                @include('admin.trek.form')
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary btn-sm mt-3">Update</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
