@extends('website.master')

@section('title','Change Password')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="list-group">
                        <a href="{{route('my-dashboard')}}" class="list-group-item"> My Dashboard </a>
                        <a href="{{route('my-profile')}}" class="list-group-item"> My Profile </a>
                        <a href="{{route('my-comment')}}" class="list-group-item"> My Comment </a>
                        <a href="{{route('change-password')}}" class="list-group-item"> Change Password </a>
                        <a href="{{route('user-logout')}}" class="list-group-item"> Logout </a>

                    </div>

                </div>
                <div class="col-md-9">
                    <h1> Change Password</h1>

                </div>

            </div>

        </div>

    </section>
@endsection
