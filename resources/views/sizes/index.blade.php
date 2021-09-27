@extends('layouts.master')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Sizes</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Size List</li>
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
                                <h3 class="card-title ">Size List</h3>
                                <a  href="{{route('sizes.create')}}" class="btn btn-sm btn-success ml-5">
                                    <i class="fa fa-plus"></i> Add Size
                                </a>
                            </div>
                            <table class="table table-bordered datatable">
                                <thead>
                                <tr>
                                    <th>#SL</th>
                                    <th>Size</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($sizes)
                                    @foreach($sizes as $key => $size)
                                        <tr class="text-center">
                                            <td>{{ ++$key }}</td>
                                            <td>{{ $size->size ?? ''}}</td>
                                            <td>

                                                <a href="{{route('sizes.edit',$size->id)}}" class="btn btn-sm btn-info mr-3">
                                                    <i class="fa fa-edit"></i>  Edit
                                                </a>

                                                <a href="javascript:;" class="btn btn-sm btn-danger ml-3 sa-delete" data-form-id="size-delete-{{$size->id}}" >
                                                    <i class="fa fa-trash"></i>  Delete
                                                </a>
                                                <form id="size-delete-{{$size->id}}" action="{{route('sizes.destroy',$size->id)}}" method="post">
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
