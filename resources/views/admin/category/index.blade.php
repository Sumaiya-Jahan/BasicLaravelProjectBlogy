@extends('admin.master')
@section('body')



    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-12">
                <div class="page-header-title">
                    <div class="my-3 ">
                        <h5 class="text-center ">Category Module</h5>

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
                        <div class="col-sm-12 px-3">

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="px-2 text-center" >Add Category Form</h5>

                                </div>
                                <div class="card-block">
                                    <h3 class="sub-title text-center text-success">{{session('message')}}</h3>

                                    <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">

                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Category Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="name" placeholder="Category Name"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Category Description</label>
                                            <div class="col-sm-10">
                                                <textarea  name="description" class="summernote" placeholder="Category Description"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Category Image</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control-file" name="image"/>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Publication Status</label>
                                            <div class="col-sm-10">
                                                <label><input type="radio" name="status" value="1" checked >Published</label>
                                                <label><input type="radio" name="status" value="0">Unpublished</label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">
                                                <input type="submit" class="btn btn-success" value="Create New Category">
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
