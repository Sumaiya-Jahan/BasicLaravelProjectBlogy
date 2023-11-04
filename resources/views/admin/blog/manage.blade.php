@extends('admin.master')

@section('body')


    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">

                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">All Blog Information</h4>

                                </div>
                                <div class="card-block">
                                    <p class="text-center text-success">{{session('message')}}</p>
                                    <div class="dt-responsive table-responsive">
                                        <table id="order-table" class="table table-striped table-bordered nowrap">
                                            <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Category</th>
                                                <th>Name</th>
                                                <th>Image</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($blogs as $blog)
                                                @csrf
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$blog->category->name}}</td>
                                                    <td>{{$blog->name}}</td>
                                                    <td><img src="{{asset($blog->image)}}" alt="" height="50" width="70"></td>
                                                    <td>{!! $blog->description !!}</td>
                                                    <td>{{$blog->status}}</td>
                                                    <td>
                                                        <a href="{{route('blog.edit',['id'=>$blog->id])}}" class="btn btn-success btn-sm">
                                                            <i class="fa fa-edit"></i>
                                                        </a>


                                                        <a href="{{route('blog.delete',['id'=>$blog->id])}}" onclick="return confirm('Innalillah hoye jabe kintu!!')" class="btn btn-danger btn-sm">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    </td>

                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
