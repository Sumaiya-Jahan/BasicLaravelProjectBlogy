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
                                    <h5 class="text-center text-dark">All category Information</h5>

                                </div>
                                <div class="card-block px-3">
                                    <p class="text-center text-success">{{session('message')}}</p>
                                    <div class="dt-responsive table-responsive">
                                        <table id="order-table" class="table table-striped table-bordered nowrap ">
                                            <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Name</th>
                                                <th>Image</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($categories as $category)
                                                @csrf
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$category->name}}</td>
                                                    <td><img src="{{asset($category->image)}}" alt="" height="50" width="70"></td>
                                                    <td>{{$category->description}}</td>
                                                    <td>{{$category->status ==1 ? 'Published':'Unpublished'}}</td>
                                                    <td>
                                                        <a href="{{route('category.edit',['id'=>$category->id])}}" class="btn btn-success btn-sm">
                                                            <i class="fa fa-edit"></i>
                                                        </a>


                                                        <a href="{{route('category.delete',['id'=>$category->id])}}" onclick="return confirm('Innalillah hoye jabe kintu!!')" class="btn btn-danger btn-sm">
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
