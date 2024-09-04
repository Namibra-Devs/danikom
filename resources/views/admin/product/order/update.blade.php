@extends('admin.layout')
@section('content')
    <div class="page-header">
        <h4 class="page-title">Order Details</h4>
        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="flaticon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="{{ url()->previous() }}">Order</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">{{ __('Order Details') }}</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <div class="card-title d-inline-block">Order [ {{ $order->order_number }} ]</div>
                </div>
                <div class="card-body pt-5 pb-5">
                    <form action="{{ route('admin.product.order.update.submit', $order->id) }}" method="POST">
                        @csrf

                        <input type="text" name="order_id" value="{{ $order->id }}" hidden>
        
                        <div class="payment-information">
                            <div class="row mb-2">
                                <div class="col-lg-6">
                                    <strong>{{ __('Payment Status') }} :</strong>
                                </div>
                                <div class="col-lg-6">
                                    <select name="payment_status" class="form-control">
                                        <option value="Pending" {{ $order->payment_status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="Completed" {{ $order->payment_status == 'Completed' ? 'selected' : '' }}>Completed</option>
                                    </select>
                                </div>
                            </div>
        
                            <div class="row mb-2">
                                <div class="col-lg-6">
                                    <strong>{{ __('Order Status') }} :</strong>
                                </div>
                                <div class="col-lg-6">
                                    <select name="order_status" class="form-control">
                                        <option value="pending" {{ $order->order_status == 'pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="processing" {{ $order->order_status == 'processing' ? 'selected' : '' }}>Processing</option>
                                        <option value="completed" {{ $order->order_status == 'completed' ? 'selected' : '' }}>Completed</option>
                                        <option value="reject" {{ $order->order_status == 'reject' ? 'selected' : '' }}>Reject</option>
                                    </select>
                                </div>
                            </div>
        
                            <div class="row mb-2">
                                <div class="col-lg-6">
                                    <strong>{{ __('Shipping Method') }} :</strong>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="shipping_method" class="form-control" value="{{ $order->shipping_method }}">
                                </div>
                            </div>
        
                            <div class="row mb-2">
                                <div class="col-lg-6">
                                    <strong>{{ __('Cart Total') }} :</strong>
                                </div>
                                <div class="col-lg-6">
                                    <input type="number" name="cart_total" class="form-control" id="cart_total" value="{{ $order->cart_total }}" readonly>
                                </div>
                            </div>
        
                            <div class="row mb-2">
                                <div class="col-lg-6">
                                    <strong class="text-success">{{ __('Discount') }} :</strong>
                                </div>
                                <div class="col-lg-6">
                                    <input type="number" name="discount" class="form-control" id="discount" value="{{ $order->discount }}" oninput="updateTotal()">
                                </div>
                            </div>
        
                            <div class="row mb-2">
                                <div class="col-lg-6">
                                    <strong>{{ __('Subtotal') }} :</strong>
                                </div>
                                <div class="col-lg-6">
                                    <input type="number" name="subtotal" class="form-control" id="subtotal" value="{{ round($order->cart_total - $order->discount, 2) }}" readonly>
                                </div>
                            </div>
        
                            <div class="row mb-2">
                                <div class="col-lg-6">
                                    <strong class="text-danger">{{ __('Shipping Charge') }} :</strong>
                                </div>
                                <div class="col-lg-6">
                                    <input type="number" name="shipping_charge" class="form-control" id="shipping_charge" value="{{ $order->shipping_charge }}" oninput="updateTotal()">
                                </div>
                            </div>
        
                            <div class="row mb-2">
                                <div class="col-lg-6">
                                    <strong>{{ __('Tax') }} :</strong>
                                </div>
                                <div class="col-lg-6">
                                    <input type="number" name="tax" class="form-control" id="tax" value="{{ $order->tax }}" oninput="updateTotal()">
                                </div>
                            </div>
        
                            <div class="row mb-2">
                                <div class="col-lg-6">
                                    <strong>{{ __('Total') }} :</strong>
                                </div>
                                <div class="col-lg-6">
                                    <input type="number" name="total" class="form-control" id="total" value="{{ $order->total }}" readonly>
                                </div>
                            </div>
        
                            <div class="row mb-2">
                                <div class="col-lg-6">
                                    <strong>{{ __('Payment Method') }} :</strong>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="payment_method" class="form-control" value="{{ convertUtf8($order->method) }}">
                                </div>
                            </div>
        
                            <div class="row mb-0">
                                <div class="col-lg-6">
                                    <strong>{{ __('Order Date') }} :</strong>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="order_date" class="form-control" value="{{ convertUtf8($order->created_at->format('d-m-Y')) }}" disabled>
                                </div>
                            </div>
        
                            <div class="row mt-3">
                                <div class="col-lg-12 text-right">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
        
        

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <div class="card-title d-inline-block">Address</div>

                </div>
                <div class="card-body pt-5 pb-5">
                    <div class="payment-information">
                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <strong>{{ __('Email') }} :</strong>
                            </div>
                            <div class="col-lg-6">
                                {{ convertUtf8($order->shpping_email) }}
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <strong>{{ __('Phone') }} :</strong>
                            </div>
                            <div class="col-lg-6">
                                {{ $order->shpping_number }}
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <strong>{{ __('City') }} :</strong>
                            </div>
                            <div class="col-lg-6">
                                {{ convertUtf8($order->shpping_city) }}
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <strong>{{ __('Address') }} :</strong>
                            </div>
                            <div class="col-lg-6">
                                {{ convertUtf8($order->shpping_address) }}
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-lg-6">
                                <strong>{{ __('Country') }} :</strong>
                            </div>
                            <div class="col-lg-6">
                                {{ convertUtf8($order->billing_country) }}
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <div class="card-title d-inline-block">Billing Details</div>

                </div>
                <div class="card-body pt-5 pb-5">
                    <div class="payment-information">
                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <strong>{{ __('Email') }} :</strong>
                            </div>
                            <div class="col-lg-6">
                                {{ convertUtf8($order->billing_email) }}
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <strong>{{ __('Phone') }} :</strong>
                            </div>
                            <div class="col-lg-6">
                                {{ $order->billing_number }}
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <strong>{{ __('City') }} :</strong>
                            </div>
                            <div class="col-lg-6">
                                {{ convertUtf8($order->billing_city) }}
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <strong>{{ __('Address') }} :</strong>
                            </div>
                            <div class="col-lg-6">
                                {{ convertUtf8($order->billing_address) }}
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-lg-6">
                                <strong>{{ __('Country') }} :</strong>
                            </div>
                            <div class="col-lg-6">
                                {{ convertUtf8($order->billing_country) }}
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Order Product</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive product-list">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ __('Image') }}</th>
                                    <th>{{ __('Name') }}</th>
                                    <th>{{ __('Details') }}</th>
                                    <th>{{ __('Size') }}</th>
                                    <th>{{ __('Price') }}</th>
                                    <th>{{ __('Total') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order->orderitems as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td><img src="{{ asset('assets/frontend/images/products/featured/' . $item->image) }}"
                                                alt="product" width="100"></td>
                                        <td>{{ convertUtf8($item->title) }}</td>
                                        <td>
                                            <b>{{ __('Quantity') }}:</b> <span>{{ $item->qty }}</span><br>
                                        </td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->price * $item->qty }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script src="{{ asset('assets/frontend/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/product.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/cart.js') }}"></script>
    <script>
        $('.image-popup').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        });
    </script>

    <script>
        $(document).on('click', '.review-value li a', function() {
            $('.review-value li a i').removeClass('text-primary');
            let reviewValue = $(this).attr('data-href');
            parentClass = `review-${reviewValue}`;
            $('.' + parentClass + ' li a i').addClass('text-primary');
            $('#reviewValue').val(reviewValue);
        })
    </script>

<script>
    function updateTotal() {
        const cartTotal = parseFloat(document.getElementById('cart_total').value) || 0;
        const discount = parseFloat(document.getElementById('discount').value) || 0;
        const shippingCharge = parseFloat(document.getElementById('shipping_charge').value) || 0;
        const tax = parseFloat(document.getElementById('tax').value) || 0;

        const subtotal = cartTotal - discount;
        document.getElementById('subtotal').value = subtotal.toFixed(2);

        const total = subtotal + shippingCharge + tax;
        document.getElementById('total').value = total.toFixed(2);
    }
</script>
@endsection
