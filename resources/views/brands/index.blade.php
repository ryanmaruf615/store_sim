@extends('layouts.master')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Brands</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Brand List</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <h3 class="card-title ">Brand List</h3>
                                <a  href="{{route('brands.create')}}" class="btn btn-sm btn-success ml-5">
                                    <i class="fa fa-plus"></i> Add Brand
                                </a>
                            </div>
                            <table class="table table-bordered datatable">
                                <thead>
                                <tr>
                                    <th>#SL</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($brands)
                                    @foreach($brands as $key => $brand)
                                        <tr class="text-center">
                                            <td>{{ ++$key }}</td>
                                            <td>{{ $brand->name ?? ''}}</td>
                                            <td>
                                                <a href="{{route('brands.edit',$brand->id)}}" class="btn btn-sm btn-info mr-3">
                                                    <i class="fa fa-edit"></i>  Edit
                                                </a>

                                                <a href="javascript:;" class="btn btn-sm btn-danger ml-3 sa-delete" data-form-id="brand-delete-{{ $brand->id }}" >
                                                    <i class="fa fa-trash"></i>  Delete
                                                </a>
                                                <form id="brand-delete-{{$brand->id}}" action="{{route('brands.destroy',$brand->id)}}" method="post">
                                                    @csrf
                                                    @method("DELETE")

                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->

                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

@endsection
