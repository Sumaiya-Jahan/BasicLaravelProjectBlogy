@extends('admin.master')

@section('title')
    Blog
@endsection
@section('body')


    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-12">
                <div class="page-header-title">
                    <div class="my-3 ">
                        <h5 class="text-center ">Blog Module</h5>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="pcoded-inner-content">


        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="text-center">Edit Blog Form</h5>

                                </div>
                                <div class="card-block">
                                    <h4 class="sub-title text-center">{{session('message')}}</h4>
                                    <form action="{{route('blog.update',['id'=>$blog->id])}}" method="post" enctype="multipart/form-data">

                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Category Name</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" id="" name="category_id" >
                                                    <option value="">Select</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}" {{$blog->category_id == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Blog Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" value="{{$blog->name}}" class="form-control" name="name" placeholder="Blog Title"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Blog Description</label>
                                            <div class="col-sm-10">
                                                <textarea  name="description" class="summernote" placeholder="Blog Description">{!!$blog->description!!}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Blog Image</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control-file" name="image"/>
                                                <img src="{{asset($blog->image)}}" alt="" height="100" width="120"/>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Publication Status</label>
                                            <div class="col-sm-10">
                                                <label><input type="radio" name="status" {{$blog->status == 1 ? 'checked' : ' '}} value="1" checked >Published</label>
                                                <label><input type="radio" name="status" {{$blog->status == 0 ? 'checked' : ' '}} value="0">Unpublished</label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">
                                                <input type="submit" class="btn btn-success" value="Update Blog Info">
                                            </div>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div id="styleSelector">
        </div>
    </div>

@endsection
