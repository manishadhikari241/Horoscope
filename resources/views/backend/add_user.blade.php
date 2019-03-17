@extends('master.master')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">
                        <h2>Add User</h2>
                    </div>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
                    @endif
                    <div class="container">
                        <form class="form-horizontal form-label-left" enctype="multipart/form-data" method="post"
                              action="{{route('add-user-action')}}">
                            @csrf
                            <div class="form-group">
                                <label class="control-label" for="name">Name <span
                                            class="required">*</span>
                                </label>
                                <input type="text" id="name" placeholder="Enter your name" name="name"
                                       class="form-control ">
                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        {{$errors->first('name')}}
                                    </div>
                                @endif

                                <div class="form-group">
                                    <label class="control-label " for="username">Username <span
                                                class="required">*</span>
                                    </label>
                                    <input type="text" id="username" name="username" placeholder="Enter your Username"
                                           class="form-control ">
                                    @if($errors->any())
                                        <div class="alert alert-danger">
                                            {{$errors->first('username')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="control-label " for="email">Email<span
                                                class="required">*</span>
                                    </label>
                                    <input type="text" id="email" name="email" placeholder="enter your email address"
                                           class="form-control ">
                                </div>
                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        {{$errors->first('email')}}
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label class="control-label " for="password">Password<span
                                                class="required">*</span>
                                    </label>
                                    <input type="text" id="password" name="password" placeholder="Enter Password"
                                           class="form-control ">
                                    @if($errors->any())
                                        <div class="alert alert-danger">
                                            {{$errors->first('password')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="control-label " for="password">Password Confirmation<span
                                                class="required">*</span>
                                    </label>
                                    <input type="text" id="password" name="password_confirmation"
                                           placeholder="Enter Password Again"
                                           class="form-control ">
                                    @if($errors->any())
                                        <div class="alert alert-danger">
                                            {{$errors->first('password_confirmation')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="control-label " for="image">Profile Picture <span
                                                class="required">*</span>
                                    </label>
                                    <img src="https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg"
                                         class="rounded-circle z-depth-1-half avatar-pic"
                                         width="30px" alt="example placeholder avatar">
                                    <input type="file" name="image" id="image" class="form-control ">
                                </div>

                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        {{$errors->first('image')}}
                                    </div>
                                @endif
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Add User</button>
                                </div>

                        </form>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /page content -->
@endsection
