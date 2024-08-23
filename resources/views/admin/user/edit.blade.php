@extends('admin.layout')

@section('content')
<div class="page-header">
    <h4 class="page-title">Edit User</h4>
    <ul class="breadcrumbs">
        <li class="nav-home">
            <a href="{{route('admin.dashboard')}}">
                <i class="flaticon-home"></i>
            </a>
        </li>
        <li class="separator">
            <i class="flaticon-right-arrow"></i>
        </li>
        <li class="nav-item">
            <a href="#">User Management</a>
        </li>
        <li class="separator">
            <i class="flaticon-right-arrow"></i>
        </li>
        <li class="nav-item">
            <a href="#">Edit User</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title d-inline-block">Edit User</div>
                <a class="btn btn-info btn-sm float-right d-inline-block" href="{{route('admin.user.index')}}">
                    <span class="btn-label">
                        <i class="fas fa-backward" style="font-size: 12px;"></i>
                    </span>
                    Back
                </a>
            </div>
            <div class="card-body pt-5 pb-5">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">

                    <form id="ajaxForm" class="" action="{{route('admin.user.update')}}" method="post">
                        @csrf

                        <input type="hidden" name="user_id" value="{{$user->id}}">

                        {{-- Image Part --}}
                        <div class="form-group">
                            <label for="">Image ** </label>
                            <br>
                            <div class="thumb-preview" id="thumbPreview1">
                                <img src="{{asset('assets/admin/images/propics/'.$user->image)}}" alt="User Image">
                            </div>
                            <br>
                            <br>


                            <input id="fileInput1" type="hidden" name="image">
                            <button id="chooseImage1" class="choose-image btn btn-primary" type="button" data-multiple="false" data-toggle="modal" data-target="#lfmModal1">Choose Image</button>


                            <p class="text-warning mb-0">JPG, PNG, JPEG, SVG images are allowed</p>
                            <p class="em text-danger mb-0" id="errimage"></p>

                            <!-- Image LFM Modal -->
                            <div class="modal fade lfm-modal" id="lfmModal1" tabindex="-1" role="dialog" aria-labelledby="lfmModalTitle" aria-hidden="true">
                                <i class="fas fa-times-circle"></i>
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body p-0">
                                            <iframe src="{{url('laravel-filemanager')}}?serial=1" style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Username **</label>
                                        <input type="text" class="form-control" name="username" placeholder="Enter username" value="{{$user->username}}">
                                        <p id="errusername" class="mb-0 text-danger em"></p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Email **</label>
                                        <input type="text" class="form-control" name="email" placeholder="Enter email" value="{{$user->email}}">
                                        <p id="erremail" class="mb-0 text-danger em"></p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">First Name **</label>
                                        <input type="text" class="form-control" name="first_name" placeholder="Enter first name" value="{{$user->first_name}}">
                                        <p id="errfirst_name" class="mb-0 text-danger em"></p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Last Name **</label>
                                        <input type="text" class="form-control" name="last_name" placeholder="Enter last name" value="{{$user->last_name}}">
                                        <p id="errlast_name" class="mb-0 text-danger em"></p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Status **</label>
                                        <select class="form-control" name="status">
                                            <option value="" selected disabled>Select a status</option>
                                            <option value="1" {{$user->status == 1 ? 'selected' : ''}}>Active</option>
                                            <option value="0" {{$user->status == 0 ? 'selected' : ''}}>Deactive</option>
                                        </select>
                                        <p id="errstatus" class="mb-0 text-danger em"></p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Role **</label>
                                        <select class="form-control" name="role">
                                            <option value="" selected disabled>Select a Role</option>
                                            @foreach ($roles as $key => $role)
                                            <option value="{{$role->id}}" {{$user->role_id == $role->id ? 'selected' : ''}}>{{$role->name}}</option>
                                            @endforeach
                                        </select>
                                        <p id="errrole" class="mb-0 text-danger em"></p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="form">
                    <div class="form-group from-show-notify row">
                        <div class="col-12 text-center">
                            <button type="submit" id="submitBtn" class="btn btn-success">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
