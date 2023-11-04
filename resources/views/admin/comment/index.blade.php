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
                                    <h5 class="text-center text-dark">All Comments</h5>

                                </div>
                                <div class="card-block px-3">
                                    <p class="text-center text-success">{{session('message')}}</p>
                                    <div class="dt-responsive table-responsive">
                                        <table id="order-table" class="table table-striped table-bordered nowrap ">
                                            <thead>
                                            <tr>
                                                <th>SL No</th>
                                                <th>Blog Title</th>
                                                <th>Visitor Name</th>
                                                <th>Comment</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($comments as $comment)
                                                @csrf
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$comment->blog->name}}</td>
                                                    <td>{{$comment->visitor->name}}</td>
                                                    <td>{{$comment->comment}}</td>
                                                    <td>{{$comment->status ==1 ? 'Published':'Unpublished'}}</td>
                                                    <td>
                                                        <a href="{{route('comment.update-status',['id'=> $comment->id])}}" class="btn {{$comment->status == '1' ? 'btn-success' :'btn-danger'}} btn-sm">
                                                            <i class="fa fa-arrow-circle-up"></i>
                                                        </a>


                                                        <a href="" onclick="return confirm('Innalillah hoye jabe kintu!!')" class="btn btn-danger btn-sm">
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
