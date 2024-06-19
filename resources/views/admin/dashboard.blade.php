@extends('admin.layout')
@section('content')
    @php
        // $default = \App\Language::where('is_default', 1)->first();
        $admin = Auth::guard('admin')->user();
        if (!empty($admin->role)) {
            $permissions = $admin->role->permissions;
            $permissions = json_decode($permissions, true);
        }
    @endphp
    <div class="mt-2 mb-4">
        <h2 class="text-white pb-2">Welcome back, {{ Auth::guard('admin')->user()->first_name }}
            {{ Auth::guard('admin')->user()->last_name }}!</h2>
    </div>
    <div class="row">
        @if (empty($admin->role) || (!empty($permissions) && in_array('Shop Management', $permissions)))
            <div class="col-sm-6 col-md-3">
                <a href="{{ route('admin.product.index') }}" class="d-block">
                    <div class="card card-stats card-danger card-round">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3">
                                    <div class="icon-big text-center">
                                        <i class="fas fa-boxes"></i>
                                    </div>
                                </div>
                                <div class="col-9 col-stats">
                                    <div class="numbers">
                                        <p class="card-category">Product</p>
                                        <h4 class="card-title">{{ \App\Product::count() }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-md-3">
                <a href="{{ route('admin.all.product.orders') }}" class="d-block">
                    <div class="card card-stats card-warning card-round">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3">
                                    <div class="icon-big text-center">
                                        <i class="fas fa-truck"></i>
                                    </div>
                                </div>
                                <div class="col-9 col-stats">
                                    <div class="numbers">
                                        <p class="card-category">Product Orders</p>
                                        <h4 class="card-title">{{ \App\ProductOrder::count() }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            {{-- @endif --}}
        @endif

    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="row row-card-no-pd">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-head-row">
                                <h4 class="card-title">Product Orders</h4>
                            </div>
                            <p class="card-category">
                                Top 10 latest orders
                            </p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Order</th>
                                                    <th>Total</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($porders as $key => $porder)
                                                    <tr>
                                                        <td>#{{ $porder->order_number }}</td>
                                                        <td>
                                                            {{ round($porder->total, 2) }}
                                                        </td>

                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-info btn-sm dropdown-toggle"
                                                                    type="button" id="dropdownMenuButton"
                                                                    data-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    Actions
                                                                </button>
                                                                <div class="dropdown-menu"
                                                                    aria-labelledby="dropdownMenuButton">
                                                                    <a class="dropdown-item"
                                                                        href="{{ route('admin.product.details', $porder->id) }}"
                                                                        target="_blank">Details</a>
                                                                    <a class="dropdown-item"
                                                                        href="{{ asset('assets/frontend/invoices/product/' . $porder->invoice_number) }}"
                                                                        target="_blank">Invoice</a>
                                                                    <form class="deleteform d-block"
                                                                        action="{{ route('admin.product.order.delete') }}"
                                                                        method="post">
                                                                        @csrf
                                                                        <input type="hidden" name="order_id"
                                                                            value="{{ $porder->id }}">
                                                                        <button type="submit" class="deletebtn">
                                                                            Delete
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </div>
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
