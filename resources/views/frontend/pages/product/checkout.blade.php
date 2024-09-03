@extends('frontend.layout')

@section('pagename')
    -
    {{ __('Checkout') }}
@endsection

@section('breadcrumb-link', __('Checkout'))

@section('content')

    <!--====== CHECKOUT PART START ======-->
    <section class="checkout-area">
        <form action="{{ route('product.placeorder') }}" method="POST" id="payment" enctype="multipart/form-data"
            class="product_form">
            @csrf
            @if (Session::has('stock_error'))
                <p class="text-danger text-center my-3">{{ Session::get('stock_error') }}</p>
            @endif
            <div class="container">

                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="form billing-info">
                            <div class="shop-title-box">
                                <h3>{{ __('Billing Address') }}</h3>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <div class="field-label">{{ __('Country') }} *</div>
                                    <div class="field-input">
                                        @php
                                            $bcountry = '';
                                            if (empty(old())) {
                                                if (Auth::check()) {
                                                    $bcountry = Auth::user()->billing_country;
                                                }
                                            } else {
                                                $bcountry = old('billing_country');
                                            }
                                        @endphp
                                        <input type="text" class="form-control" name="billing_country" value="{{ $bcountry }}">
                                    </div>
                                    @error('billing_country')
                                        <p class="text-danger mt-2">{{ convertUtf8($message) }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="field-label">{{ __('First Name') }} *</div>
                                    <div class="field-input">
                                        @php
                                            $bfname = '';
                                            if (empty(old())) {
                                                if (Auth::check()) {
                                                    $bfname = Auth::user()->billing_fname;
                                                }
                                            } else {
                                                $bfname = old('billing_fname');
                                            }
                                        @endphp
                                        <input class="form-control" type="text" name="billing_fname" value="{{ $bfname }}">
                                    </div>
                                    @error('billing_fname')
                                        <p class="text-danger mt-2">{{ convertUtf8($message) }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="field-label">{{ __('Last Name') }} *</div>
                                    <div class="field-input">
                                        @php
                                            $blname = '';
                                            if (empty(old())) {
                                                if (Auth::check()) {
                                                    $blname = Auth::user()->billing_lname;
                                                }
                                            } else {
                                                $blname = old('billing_lname');
                                            }
                                        @endphp
                                        <input class="form-control" type="text" name="billing_lname" value="{{ $blname }}">
                                    </div>
                                    @error('billing_lname')
                                        <p class="text-danger mt-2">{{ convertUtf8($message) }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-4">
                                    <div class="field-label">{{ __('Address') }} *</div>
                                    <div class="field-input">
                                        @php
                                            $baddress = '';
                                            if (empty(old())) {
                                                if (Auth::check()) {
                                                    $baddress = Auth::user()->billing_address;
                                                }
                                            } else {
                                                $baddress = old('billing_address');
                                            }
                                        @endphp
                                        <input class="form-control" type="text" name="billing_address" value="{{ $baddress }}">
                                    </div>
                                    @error('billing_address')
                                        <p class="text-danger mt-2">{{ convertUtf8($message) }}</p>
                                    @enderror
                                </div>

                                <div class="col-md-12 mb-4">
                                    <div class="field-label">{{ __('Town / City') }} *</div>
                                    <div class="field-input">
                                        @php
                                            $bcity = '';
                                            if (empty(old())) {
                                                if (Auth::check()) {
                                                    $bcity = Auth::user()->billing_city;
                                                }
                                            } else {
                                                $bcity = old('billing_city');
                                            }
                                        @endphp
                                        <input class="form-control" type="text" name="billing_city" value="{{ $bcity }}">
                                    </div>
                                    @error('billing_city')
                                        <p class="text-danger mt-2">{{ convertUtf8($message) }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-4">
                                    <div class="field-label">{{ __('Contact Email') }} *</div>
                                    <div class="field-input">
                                        @php
                                            $bmail = '';
                                            if (empty(old())) {
                                                if (Auth::check()) {
                                                    $bmail = Auth::user()->billing_email;
                                                }
                                            } else {
                                                $bmail = old('billing_email');
                                            }
                                        @endphp
                                        <input class="form-control" type="text" name="billing_email" value="{{ $bmail }}">
                                    </div>
                                    @error('billing_email')
                                        <p class="text-danger mt-2">{{ convertUtf8($message) }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-4">
                                    <div class="field-label">{{ __('Phone') }} *</div>
                                    <div class="field-input">
                                        @php
                                            $bnumber = '';
                                            if (empty(old())) {
                                                if (Auth::check()) {
                                                    $bnumber = Auth::user()->billing_number;
                                                }
                                            } else {
                                                $bnumber = old('billing_number');
                                            }
                                        @endphp
                                        <input class="form-control" type="text" name="billing_number" value="{{ $bnumber }}">
                                    </div>
                                    @error('billing_number')
                                        <p class="text-danger mt-2">{{ convertUtf8($message) }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="form shipping-info">
                            <div class="shop-title-box">
                                <h3>{{ __('Shipping Address') }}</h3>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <div class="field-label">{{ __('Country') }} *</div>
                                    <div class="field-input">
                                        @php
                                            $scountry = '';
                                            if (empty(old())) {
                                                if (Auth::check()) {
                                                    $scountry = Auth::user()->shpping_country;
                                                }
                                            } else {
                                                $scountry = old('shpping_country');
                                            }
                                        @endphp
                                        <input class="form-control" type="text" name="shpping_country" value="{{ $scountry }}">
                                    </div>
                                    @error('shpping_country')
                                        <p class="text-danger mt-2">{{ convertUtf8($message) }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="field-label">{{ __('First Name') }} *</div>
                                    <div class="field-input">
                                        @php
                                            $sfname = '';
                                            if (empty(old())) {
                                                if (Auth::check()) {
                                                    $sfname = Auth::user()->shpping_fname;
                                                }
                                            } else {
                                                $sfname = old('shpping_fname');
                                            }
                                        @endphp
                                        <input class="form-control" type="text" name="shpping_fname" value="{{ $sfname }}">
                                    </div>
                                    @error('shpping_fname')
                                        <p class="text-danger mt-2">{{ convertUtf8($message) }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="field-label">{{ __('Last Name') }} *</div>
                                    <div class="field-input">
                                        @php
                                            $slname = '';
                                            if (empty(old())) {
                                                if (Auth::check()) {
                                                    $slname = Auth::user()->shpping_lname;
                                                }
                                            } else {
                                                $slname = old('shpping_lname');
                                            }
                                        @endphp
                                        <input class="form-control" type="text" name="shpping_lname" value="{{ $slname }}">
                                    </div>
                                    @error('shpping_lname')
                                        <p class="text-danger mt-2">{{ convertUtf8($message) }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-4">
                                    <div class="field-label">{{ __('Address') }} *</div>
                                    <div class="field-input">
                                        @php
                                            $saddress = '';
                                            if (empty(old())) {
                                                if (Auth::check()) {
                                                    $saddress = Auth::user()->shpping_address;
                                                }
                                            } else {
                                                $saddress = old('shpping_address');
                                            }
                                        @endphp
                                        <input class="form-control" type="text" name="shpping_address" value="{{ $saddress }}">
                                    </div>
                                    @error('shpping_address')
                                        <p class="text-danger mt-2">{{ convertUtf8($message) }}</p>
                                    @enderror
                                </div>

                                <div class="col-md-12 mb-4">
                                    <div class="field-label">{{ __('Town / City') }} *</div>
                                    <div class="field-input">
                                        @php
                                            $scity = '';
                                            if (empty(old())) {
                                                if (Auth::check()) {
                                                    $scity = Auth::user()->shpping_city;
                                                }
                                            } else {
                                                $scity = old('shpping_city');
                                            }
                                        @endphp
                                        <input class="form-control" type="text" name="shpping_city" value="{{ $scity }}">
                                    </div>
                                    @error('shpping_city')
                                        <p class="text-danger mt-2">{{ convertUtf8($message) }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-4">
                                    <div class="field-label">{{ __('Contact Email') }} *</div>
                                    <div class="field-input">
                                        @php
                                            $smail = '';
                                            if (empty(old())) {
                                                if (Auth::check()) {
                                                    $smail = Auth::user()->shpping_email;
                                                }
                                            } else {
                                                $smail = old('shpping_email');
                                            }
                                        @endphp
                                        <input class="form-control" type="text" name="shpping_email" value="{{ $smail }}">
                                    </div>
                                    @error('shpping_email')
                                        <p class="text-danger mt-2">{{ convertUtf8($message) }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-4">
                                    <div class="field-label">{{ __('Phone') }} *</div>
                                    <div class="field-input">
                                        @php
                                            $snumber = '';
                                            if (empty(old())) {
                                                if (Auth::check()) {
                                                    $snumber = Auth::user()->shpping_number;
                                                }
                                            } else {
                                                $snumber = old('shpping_number');
                                            }
                                        @endphp
                                        <input class="form-control" type="text" name="shpping_number" value="{{ $snumber }}">
                                    </div>
                                    @error('shpping_number')
                                        <p class="text-danger mt-2">{{ convertUtf8($message) }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                            <div class="table">
                                <div class="shop-title-box">
                                    <h3>{{ __('Order Summary') }}</h3>
                                </div>
                                <table class="cart-table">
                                    <thead class="cart-header">
                                        <tr>
                                            <th class="product-column">{{ __('Product') }}</th>
                                            <th>&nbsp;</th>
                                            <th>{{ __('Quantity') }}</th>
                                            <th class="price">{{ __('Total') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $total = 0;
                                        @endphp
                                        @if ($cart)
                                            @foreach ($cart as $key => $item)
                                                <input type="hidden" name="product_id[]" value="{{ $key }}">
                                                @php
                                                    $total += $item['price'] * $item['qty'];
                                                    $product = App\Models\Product::findOrFail($key);

                                                @endphp
                                                <tr>
                                                    <td colspan="2" class="product-column">
                                                        <div class="column-box">
                                                            <div class="product-title">
                                                                <a target="_blank"
                                                                    href="{{ route('frontend.product.details', $product->slug) }}">
                                                                    <h3 class="prod-title">
                                                                        {{ convertUtf8($item['name']) }}</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="qty">
                                                        <input class="quantity-spinner" disabled type="text"
                                                            value="{{ $item['qty'] }}" name="quantity">
                                                    </td>
                                                    <td class="price">
                                                        {{ $item['qty'] * $item['price'] }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr class="text-center">
                                                <td colspan="4">{{ __('Cart is empty') }}</td>
                                            </tr>
                                        @endif

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                            <div class="cart-total">
                                <div class="shop-title-box">
                                    <h3>{{ __('Order Total') }}</h3>
                                </div>

                                <div id="cartTotal">
                                    <ul class="cart-total-table">
                                        <li class="clearfix">
                                            <span class="col col-title">{{ __('Cart Total') }}</span>
                                            <span class="col"><span data="{{ cartTotal() }}"
                                                    class="subtotal">{{ cartTotal() }}</span></span>
                                        </li>
                                        <li class="clearfix">
                                            <span class="col col-title">{{ __('Discount') }}
                                                <span class="text-success">(<i class="fas fa-minus"></i>)</span></span>
                                            <span class="col">
                                                <span data="{{ $discount }}">{{ $discount }}</span>

                                            </span>

                                        </li>
                                        <li class="clearfix">
                                            <span class="col col-title">{{ __('Subtotal') }}</span>
                                            <span class="col">
                                                <span data="{{ cartSubTotal() }}" class="subtotal"
                                                    id="subtotal">{{ cartSubTotal() }}</span>
                                            </span>
                                        </li>


                                        {{-- @if (!onlyDigitalItemsInCart() && sizeof($shippings) > 0) --}}
                                        {{-- @php
                                            $scharge = round($shippings[0]->charge, 2);
                                        @endphp
                                        <li class="clearfix">
                                            <span class="col col-title">{{ __('Shipping Charge') }}
                                                <span class="text-danger">(<i class="fas fa-plus"></i>)</span></span>
                                            <span class="col"><span data="{{ $scharge }}"
                                                    class="shipping">{{ $scharge }}</span></span>
                                        </li> --}}
                                        {{-- @else
                                            @php
                                                $scharge = 0;
                                            @endphp
                                        @endif --}}

                                        <li class="clearfix">
                                            <span class="col col-title">{{ __('Order Total') }}</span>
                                            <span class="col">
                                                <span data="{{ cartSubTotal() }}"
                                                    class="grandTotal">{{ cartSubTotal() }}</span> </span>
                                        </li>


                                    </ul>
                                </div>

                                <div class="coupon mt-4">
                                    <h4 class="mb-3">{{ __('Coupon') }}</h4>
                                    <div class="form-group d-flex">
                                        <input type="text" class="form-control" name="coupon" value="">
                                        <button class="btn btn-primary base-bg border-0" type="button"
                                            onclick="applyCoupon();">{{ __('Apply') }}</button>
                                    </div>
                                </div>

                                <div class="payment-options">
                                    {{-- <h4 class="mb-4">{{ __('Pay Via') }}</h4> --}}


                                    {{-- @includeIf('frontend.product.payment-gateways') --}}


                                    <div class="placeorder-button text-left">
                                        <button {{ $cart ? '' : 'disabled' }} class="main-btn" type="submit"><span
                                                class="btn-title">{{ __('Place Order') }}</span></button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>

    <!--====== CHECKOUT PART ENDS ======-->
@endsection


@section('scripts')
    <script src="https://js.paystack.co/v1/inline.js"></script>
    @if (session()->has('unsuccess'))
        <script>
            toastr["error"]("{{ __(session('unsuccess')) }}");
        </script>
    @endif
    <script>
        // apply coupon functionality starts
        function applyCoupon() {
            $.post(
                "{{ route('frontend.coupon') }}", {
                    coupon: $("input[name='coupon']").val(),
                    _token: document.querySelector('meta[name=csrf-token]').getAttribute('content')
                },
                function(data) {
                    console.log(data);
                    if (data.status == 'success') {
                        toastr["success"](data.message);
                        $("input[name='coupon']").val('');
                        $("#cartTotal").load(location.href + " #cartTotal", function() {
                            let scharge = parseFloat($("input[name='shipping_charge']:checked").attr('data'));
                            let total = parseFloat($(".grandTotal").attr('data'));

                            $(".shipping").attr('data', scharge);
                            $(".shipping").text(scharge);

                            total += scharge;
                            $(".grandTotal").attr('data', total);
                            $(".grandTotal").text(total);
                        });
                    } else {
                        toastr["error"](data.message);
                    }
                }
            );
        }
        $("input[name='coupon']").on('keypress', function(e) {
            let code = e.which;
            if (code == 13) {
                e.preventDefault();
                applyCoupon();
            }
        });
        // apply coupon functionality ends

        $(document).on('click', '.shipping-charge', function() {
            let total = 0;
            let subtotal = 0;
            let grantotal = 0;
            let shipping = 0;

            subtotal = parseFloat($('.subtotal').attr('data'));
            grantotal = parseFloat($('.grandTotal').attr('data'));
            shipping = parseFloat($('.shipping').attr('data'));

            let shipCharge = parseFloat($(this).attr('data'));

            shipping = parseFloat(shipCharge);
            total = parseFloat(parseFloat(grantotal) + parseFloat(shipCharge));
            $('.shipping').text(shipping);
            $('.grandTotal').text(total);


        })

        $(document).ready(function() {
            $(".input-check").first().attr('checked', true);

            let tabid = $(".input-check:checked").data('tabid');

            $('#payment').attr('action', $(".input-check:checked").data('action'));

            showDetails(tabid);
        });

        // this function will decide which form to show...
        function showDetails(tabid) {

            $(".gateway-details").removeClass("d-flex");
            $(".gateway-details").addClass("d-none");
            $(".gateway-details input").attr('disabled', true);

            if ($("#tab-" + tabid).length > 0) {
                if (tabid == 'stripe') {
                    $("#tab-" + tabid).removeClass("d-none");
                    $("#tab-" + tabid).addClass("d-block");
                } else {
                    $("#tab-" + tabid + " input").removeAttr('disabled');
                    $("#tab-" + tabid).removeClass("d-none");
                    $("#tab-" + tabid).addClass("d-flex");
                }

            }

            if (tabid == 'paystack') {
                $('#payment').prop('id', 'paystack');
            }

        }

        // on gateway change...
        $(document).on('click', '.input-check', function() {
            // change form action
            $('#payment').attr('action', $(this).data('action'));
            // show relevant form (if any)
            showDetails($(this).data('tabid'));
        });


    </script>
@endsection
