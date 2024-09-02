@extends('frontend.layout')


@section('styles')
    <link rel="stylesheet" href="{{ asset(' assets/frontend/css/jquery-ui.min.css') }}">
@endsection

@section('content')

    <!--====== SHOPPING CART PART START ======-->

    <section class="cart-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    @if ($cart != null)
                        <ul class="total-item-info">
                            @php
                                $cartTotal = 0;
                                $countitem = 0;
                                if ($cart) {
                                    foreach ($cart as $p) {
                                        $cartTotal += $p['price'] * $p['qty'];
                                        $countitem += $p['qty'];
                                    }
                                }
                            @endphp
                            <li><strong>{{ __('Total Items') }}:</strong> <strong
                                    class="cart-item-view">{{ $cart ? $countitem : 0 }}</strong></li>
                            <li><strong>{{ __('Cart Total') }} :</strong> <strong class="cart-total-view">
                                    {{ $cartTotal }} </strong></li>
                        </ul>
                    @endif
                    <div class="table-outer">
                        @if ($cart != null)
                            <table class="cart-table">
                                <thead class="cart-header">
                                    <tr>
                                        <th class="prod-column">{{ __('Products') }}</th>
                                        <th class="hide-column"></th>
                                        <th>{{ __('Quantity') }}</th>
                                        <th class="availability">{{ __('Availability') }}</th>
                                        <th class="price">{{ __('Price') }}</th>
                                        <th>{{ __('Total') }}</th>
                                        <th>{{ __('Remove') }}</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($cart as $id => $item)
                                        @php
                                            $product = App\Models\Product::findOrFail($id);
                                        @endphp
                                        <tr class="remove{{ $id }}">

                                            <td colspan="2" class="prod-column">
                                                <div class="column-box">
                                                    <div class="title pl-0">
                                                        <a target="_blank"
                                                            href="{{ route('frontend.product.details', $product->slug) }}">
                                                            <h3 class="prod-title">{{ convertUtf8($item['name']) }}</h3>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            
                                            <td class="qty">
                                                <div class="product-quantity d-flex mb-35" id="quantity">
                                                    <button type="button" id="sub" class="sub">-</button>
                                                    <input type="text" class="cart_qty" id="1"
                                                        value="{{ $item['qty'] }}" />
                                                    <button type="button" id="add" class="add">+</button>
                                                </div>
                                            </td>
                                            <input type="hidden" value="{{ $id }}" class="product_id">
                                            <td class="unit-price">
                                                <div class="available-info">
                                                    @if ($product->stock >= $item['qty'])
                                                        <span
                                                            class="icon fa fa-check thm-bg-clr"></span>{{ __('Item(s)') }}<br>{{ __('Avilable Now') }}
                                                    @else
                                                        <span
                                                            class="icon fa fa-times thm-bg-rmv"></span>{{ __('Item(s)') }}<br>{{ __('Out Of Stock') }}
                                                    @endif
                                                </div>
                                            </td>
                                            <td class="price cart_price"> <span>{{ $item['price'] }}</span> </td>
                                            <td class="sub-total"> <span>{{ $item['qty'] * $item['price'] }}</span> </td>
                                            <td>
                                                <div class="remove">
                                                    <div class="checkbox">
                                                        <span class="fas fa-times item-remove" rel="{{ $id }}"
                                                            data-href="{{ route('cart.item.remove', $id) }}"></span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        @else
                            <div class="bg-light py-5 text-center">
                                <h3 class="text-uppercase">{{ __('Cart is empty!') }}</h3>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            @if ($cart != null)
                <div class="row cart-middle">
                    <div class="col-lg-6 offset-lg-6 col-sm-12 d-flex" style="margin-left: 80%">
                        <div class="update-cart float-right d-inline-block ml-4">
                            <a class="proceed-checkout-btn" href="{{ route('frontend.checkout') }}"
                                ><span>{{ __('Checkout') }}</span></a>
                        </div>
                        <div class="update-cart float-right d-inline-block ml-4" style="margin-left: 20px">
                            <button class="main-btn main-btn-2" id="cartUpdate" data-href="{{ route('cart.update') }}"
                                ><span>{{ __('Update Cart') }}</span></button>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <!--====== SHOPPING CART PART ENDS ======-->

@endsection


@section('scripts')
    <script src="{{ asset('assets/frontend/js/jquery.ui.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/product.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/cart.js') }}"></script>

    <script></script>
@endsection
