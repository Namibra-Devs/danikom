@extends('admin.layout')

@section('content')
  <div class="page-header">
    <h4 class="page-title">Admins</h4>
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
        <a href="#">Admins Management</a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
        <a href="#">Admins</a>
      </li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">

      <div class="card">
        <div class="card-header">
          <div class="card-title d-inline-block">Admins</div>
          <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#createModal"><i class="fas fa-plus"></i> Add Admin</a>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-12">
              @if (count($users) == 0)
                <h3 class="text-center">NO USER FOUND</h3>
              @else
                <div class="table-responsive">
                  <table class="table table-striped mt-3" id="basic-datatables">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Picture</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Status</th>
                        <th scope="col" width="15%">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($users as $key => $user)
                        @if ($user->id != Auth::guard('admin')->user()->id)
                          <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>
                              <img src="{{asset('assets/admin/images/propics/'.$user->image)}}" alt="" width="45">
                            </td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                              @if (empty($user->role))
                                <span class="badge badge-danger">Owner</span>
                              @else
                                {{$user->role->name}}
                              @endif
                            </td>
                            <td>
                              @if ($user->status == 1)
                                <span class="badge badge-success">Active</span>
                              @elseif ($user->status == 0)
                                <span class="badge badge-danger">Deactive</span>
                              @endif
                            </td>
                            <td width="15%">
                              <a class="btn btn-secondary btn-sm" href="{{route('admin.user.edit', $user->id)}}">
                                  <i class="fas fa-edit"></i>
                              </a>
                              <form class="deleteform d-inline-block" action="{{route('admin.user.delete')}}" method="post">
                                @csrf
                                <input type="hidden" name="user_id" value="{{$user->id}}">
                                <button type="submit" class="btn btn-danger btn-sm deletebtn">
                                    <i class="fas fa-trash"></i>
                                </button>
                              </form>
                            </td>
                          </tr>
                        @endif
                      @endforeach
                    </tbody>
                  </table>
                </div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Create Users Modal -->
  @includeif('admin.user.create')

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
@endsection
