@extends('admin.layout')
@section('content')
@php
  $default = \App\Language::where('is_default', 1)->first();
@endphp

<div class="page-header">
   <h4 class="page-title">Choose Product Type</h4>
   <ul class="breadcrumbs">
      <li class="nav-home">
         <a href="#">
         <i class="flaticon-home"></i>
         </a>
      </li>
      <li class="separator">
         <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
         <a href="#">Product Management</a>
      </li>
      <li class="separator">
         <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
         <a href="#">Product Type</a>
      </li>
   </ul>
</div>
<div class="product-type">

    <div class="row">
        <div class="col-lg-6">
            <a href="{{route('admin.product.create') . '?language=' . $default->code . '&type=digital'}}" class="d-block">
                <div class="card card-stats card-round">
                    <div class="card-body ">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <div class="col-icon mx-auto">
                                    <div class="icon-big text-center icon-success bubble-shadow-small">
                                        <i class="icon-screen-desktop"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-stats ml-3 ml-sm-0">
                                <div class="numbers mx-auto text-center">
                                    <h2 class="card-title mt-2 mb-4 text-uppercase">Digital Product</h2>
                                    <p class="card-category"><strong>Total:</strong> {{$digitalCount}} Items</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-6">
            <a href="{{route('admin.product.create') . '?language=' . $default->code . '&type=physical'}}" class="d-block">
                <div class="card card-stats card-round">
                    <div class="card-body ">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <div class="col-icon mx-auto">
                                    <div class="icon-big text-center icon-warning bubble-shadow-small">
                                        <i class="icon-present"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-stats ml-3 ml-sm-0">
                                <div class="numbers mx-auto text-center">
                                    <h2 class="card-title mt-2 mb-4 text-uppercase">Physical Product</h2>
                                    <p class="card-category"><strong>Total:</strong> {{$physicalCount}} Items</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
