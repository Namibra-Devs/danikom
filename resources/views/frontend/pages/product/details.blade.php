@extends('frontend.layout')

@php
    $reviews = App\Models\ProductReview::where('product_id', $product->id)->get();
    $avarage_rating = App\Models\ProductReview::where('product_id', $product->id)->avg('review');
    $avarage_rating = round($avarage_rating, 2);

@endphp

@section('content')
    <!-- Main Content starts here -->
    <main class="bg-light main">
        <!-- Hero Header starts here -->
        <div class="naturalcocoa text-light d-flex flex-column justify-content-center align-items-center">

            <h3 class="fw-bold">Our Products</h3>
            <p>Unrefined Shea Butter (Ivory)</p>

        </div>
        <!-- Hero Header ends here -->


        <!--====== PRODUCT DETAILS PART START ======-->

        <div class="product-details-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-item-slide ">
                            @foreach ($product->product_images as $image)
                                <div class="item pt-30">
                                    <a class="image-popup"
                                        href="{{ asset('assets/frontend/images/product/sliders/' . $image->image) }}"><img
                                            src="{{ asset('assets/frontend/images/product/sliders/' . $image->image) }}"
                                            alt=""></a>
                                </div>
                            @endforeach
                        </div>
                        <div class="product-details-slide-item mt-30">
                            <ul class="d-flex">
                                @foreach ($product->product_images as $image)
                                    <li><img src="{{ asset('assets/frontend/images/product/sliders/' . $image->image) }}"
                                            alt=""></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-details-content ml-60 mt-30">
                            <div class="product-details-content-item">
                                <h4 class="title pb-0">{{ convertUtf8($product->title) }}</h4>
                                <div class="d-flex justify-content-between">
                                    <div class="rate">
                                        <div class="rating" style="width:{{ $product->rating * 20 }}%"></div>
                                    </div>

                                    @if ($product->stock > 0)
                                        <h4 class="badge badge-success">
                                            <i class="far fa-check-circle"></i> {{ __('In Stock') }}
                                        </h4>
                                    @else
                                        <h4 class="badge badge-danger">
                                            <i class="far fa-times-circle"></i> {{ __('Out of Stock') }}
                                        </h4>
                                    @endif
                                </div>

                                <span>GH₵ {{ $product->current_price }}
                                    @if (!empty($product->previous_price))
                                        <del> <span class="prepice"> {{ $product->previous_price }}</span></del>
                                    @endif
                                </span>

                                @if (!empty($product->summary))
                                    <p>{{ convertUtf8($product->summary) }}</p>
                                @endif
                            </div>

                            <div class="product-btns d-block d-sm-flex align-items-center mt-40">
                                <div class="product-quantity  d-flex" id="quantity">
                                    <button type="button" id="sub" class="sub subclick">-</button>
                                    <input type="text" class="cart-amount" id="1" value="1" />
                                    <button type="button" id="add" class="add addclick">+</button>
                                </div>
                            </div>

                            <div class="actions">

                                <form class="d-inline-block ml-2" method="GET"
                                    action="{{ route('frontend.product.checkout', $product->slug) }}">
                                    <input type="hidden" value="" name="qty" id="order_click_with_qty">
                                    {{-- <div class="row flex-start mx-0 product-sizes">
                              <div class="product-description-label text-body mt-2 pr-2">Sizes
                                  :
                              </div>
                              <div>
                                  <div class="list-inline checkbox-alphanumeric checkbox-alphanumeric--style-1 mb-2 mx-1 flex-start row"
                                      style="padding-left: 0;">
                                      <div>
                                          <li class="for-mobile-capacity">
                                              <input type="radio" id="choice_1-M" name="choice_1" value="M" checked="">
                                              <label style="font-size: 12px;" for="choice_1-M">M</label>
                                          </li>
                                      </div>
                                      <div>
                                          <li class="for-mobile-capacity">
                                              <input type="radio" id="choice_1-L" name="choice_1" value="L">
                                              <label style="font-size: 12px;" for="choice_1-L">L</label>
                                          </li>
                                      </div>
                                      <div>
                                          <li class="for-mobile-capacity">
                                              <input type="radio" id="choice_1-XL" name="choice_1" value="XL">
                                              <label style="font-size: 12px;" for="choice_1-XL">XL</label>
                                          </li>
                                      </div>
                                      <div>
                                          <li class="for-mobile-capacity">
                                              <input type="radio" id="choice_1-2XL" name="choice_1" value="2XL">
                                              <label style="font-size: 12px;" for="choice_1-2XL">2XL</label>
                                          </li>
                                      </div>
                                  </div>
                              </div>
                          </div> --}}
                                    <a class="main-btn cart-btn cart-link d-inline-block"
                                        data-href="{{ route('add.cart', $product->id) }}">{{ __('Add To Cart') }}</a>
                                    <button type="submit" class="main-btn checkout-btn">{{ __('Order Now') }}</button>
                                </form>
                            </div>

                            {{-- <div class="product-social-icon social-link a2a_kit a2a_kit_size_32">
                      <ul class="social-share">
                          <li>
                              <a class="facebook a2a_button_facebook" href="">
                                <i class="fab fa-facebook-f"></i>
                              </a>
                            </li>
                              <li>
                                  <a class="twitter a2a_button_twitter" href="">
                                    <i class="fab fa-twitter"></i>
                                  </a>
                              </li>
                              <li>
                                  <a class="linkedin a2a_button_linkedin" href="">
                                    <i class="fab fa-linkedin-in"></i>
                                  </a>
                              </li>
                              <li>
                                  <a class="pinterest a2a_button_pinterest" href="">
                                    <i class="fab fa-pinterest"></i>
                                  </a>
                              </li>
                              <li>

                              <a class="a2a_dd plus" href="https://www.addtoany.com/share">
                                  <i class="fas fa-plus"></i>
                                </a>
                              </li>
                      </ul>
                  </div> --}}
                            <script async src="https://static.addtoany.com/menu/page.js"></script>
                            <div class="product-details-tags">
                                <ul>
                                    @if (!empty($product->sku))
                                        <li><span>{{ __('SKU') }}:</span> {{ $product->sku }} </li>
                                    @endif
                                    @if (!empty($product->category))
                                        <li><span>{{ __('Category') }}:</span> <a
                                                href="{{ route('frontend.product') . '?category_id=' . $product->category_id }}">{{ $product->category ? convertUtf8($product->category->name) : '' }}</a>
                                        </li>
                                    @endif
                                    @if (!empty($product->tags))
                                        <li><span>{{ __('Product Tags') }}:</span>{{ $product->tags }}</li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--====== PRODUCT DETAILS PART ENDS ======-->

        <!--====== SHOP TAB PART START ======-->

    <div class="shop-tab-area" @if ($related_product->count() == 0) style="padding-bottom:120px;" @endif>
      <div class="container">
          <div class="row">
              <div class="col-lg-11">
                  <div class="shop-tab-area">
                      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                          <li class="nav-item">
                              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                  role="tab" aria-controls="pills-home"
                                  aria-selected="true">{{ __('Description') }}</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                                  role="tab" aria-controls="pills-contact" aria-selected="false">{{ __('Reviews') }}
                                  {{-- ({{ count($reviews) }})</a> --}}
                          </li>
                      </ul>
                      <div class="tab-content" id="pills-tabContent">
                          <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                              aria-labelledby="pills-home-tab">
                              {!! convertUtf8($product->description) !!}

                          </div>
                          <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                              aria-labelledby="pills-contact-tab">
                              <div class="shop-review-area">
                                  <div class="shop-review-title">
                                      <h3 class="title">{{ convertUtf8($product->title) }}</h3>
                                  </div>
                                  @if (count($reviews) > 0)
                                      @foreach ($reviews as $review)
                                          <div class="shop-review-user">
                                              @if (strpos($review->user->photo, 'facebook') !== false || strpos($review->user->photo, 'google'))
                                                  <img class="lazy"
                                                      data-src="{{ $review->user->photo ? $review->user->photo : asset('assets/frontend/images/user/profile.jpg') }}"
                                                      alt="user image" width="60">
                                              @else
                                                  <img class="lazy"
                                                      data-src="{{ $review->user->photo ? asset('assets/frontend/images/user/' . $review->user->photo) : '' }}"
                                                      alt="user image" width="60">
                                              @endif
                                              <ul>
                                                  <div class="rate">
                                                      <div class="rating" style="width:{{ $review->review * 20 }}%">
                                                      </div>
                                                  </div>
                                              </ul>
                                              <span><span>{{ convertUtf8($review->user->username) }}</span> –
                                                  {{ $review->created_at->format('d-m-Y') }}</span>
                                              <p>{{ convertUtf8($review->comment) }}</p>
                                          </div>
                                      @endforeach
                                  @else
                                      <div class="bg-light mt-4 text-center py-5">
                                          {{ __('NOT RATED YET') }}
                                      </div>
                                  @endif
                                  @if (Auth::user())
                                      @if (App\OrderItem::where('user_id', Auth::user()->id)->where('product_id', $product->id)->exists())
                                          <div class="shop-review-form">
                                              @error('error')
                                                  <p class="text-danger my-2">{{ Session::get('error') }}</p>
                                              @enderror
                                              <form class="mt-5" action="{{ route('product.review.submit') }}"
                                                  method="POST">@csrf
                                                  <div class="input-box">
                                                      <span>{{ __('Comment') }}</span>
                                                      <textarea name="comment" cols="30" rows="10" placeholder="{{ __('Comment') }}"></textarea>
                                                  </div>
                                                  <input type="hidden" value="" id="reviewValue"
                                                      name="review">
                                                  <input type="hidden" value="{{ $product->id }}" name="product_id">
                                                  <div class="input-box">
                                                      <span>{{ __('Rating') }} *</span>
                                                      <div class="review-content ">
                                                          <ul class="review-value review-1">
                                                              <li><a class="cursor-pointer" data-href="1"><i
                                                                          class="far fa-star"></i></a></li>
                                                          </ul>
                                                          <ul class="review-value review-2">
                                                              <li><a class="cursor-pointer" data-href="2"><i
                                                                          class="far fa-star"></i></a></li>
                                                              <li><a class="cursor-pointer" data-href="2"><i
                                                                          class="far fa-star"></i></a></li>
                                                          </ul>
                                                          <ul class="review-value review-3">
                                                              <li><a class="cursor-pointer" data-href="3"><i
                                                                          class="far fa-star"></i></a></li>
                                                              <li><a class="cursor-pointer" data-href="3"><i
                                                                          class="far fa-star"></i></a></li>
                                                              <li><a class="cursor-pointer" data-href="3"><i
                                                                          class="far fa-star"></i></a></li>
                                                          </ul>
                                                          <ul class="review-value review-4">
                                                              <li><a class="cursor-pointer" data-href="4"><i
                                                                          class="far fa-star"></i></a></li>
                                                              <li><a class="cursor-pointer" data-href="4"><i
                                                                          class="far fa-star"></i></a></li>
                                                              <li><a class="cursor-pointer" data-href="4"><i
                                                                          class="far fa-star"></i></a></li>
                                                              <li><a class="cursor-pointer" data-href="4"><i
                                                                          class="far fa-star"></i></a></li>
                                                          </ul>
                                                          <ul class="review-value review-5">
                                                              <li><a class="cursor-pointer" data-href="5"><i
                                                                          class="far fa-star"></i></a></li>
                                                              <li><a class="cursor-pointer" data-href="5"><i
                                                                          class="far fa-star"></i></a></li>
                                                              <li><a class="cursor-pointer" data-href="5"><i
                                                                          class="far fa-star"></i></a></li>
                                                              <li><a class="cursor-pointer" data-href="5"><i
                                                                          class="far fa-star"></i></a></li>
                                                              <li><a class="cursor-pointer" data-href="5"><i
                                                                          class="far fa-star"></i></a></li>
                                                          </ul>
                                                      </div>
                                                  </div>
                                                  <div class="input-btn mt-3">
                                                      <button type="submit">{{ __('Submit') }}</button>
                                                  </div>
                                              </form>
                                          </div>
                                      @endif
                                  @else
                                      <div class="review-login mt-5">
                                          <a class="boxed-btn d-inline-block mr-2"
                                              href="{{ route('user.login') }}">{{ __('Login') }}</a>
                                          {{ __('to leave a rating') }}
                                      </div>
                                  @endif
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!--====== SHOP TAB PART ENDS ======-->


        <!-- Related products Sections starts here -->
        <div class="testimonies bg-white py-5 ">
            <div class="container">

                <div class="header text-center d-flex justify-content-center w-100 h-100">
                    <img src="/public/src/img/line.svg" alt="" class="line">
                    <h3 class="text-uppercase ms-2 px-2 py-1 border bg-white border-dark rounded d-block fs-4">Related
                        Products</h3>
                </div>
                <p class="text-center py-3 fs-4 fw-bold">Explore Related Products.</p>

                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row d-flex justify-content-center align-items-center gap-3">
                              @foreach ($related_product as $product)
                              <div class="col-lg-3 col-10">
                                <div class="card p-2 mt-2 small-card">
                                    <img src="{{ asset('assets/frontend/images/product/featured/' . $product->feature_image) }}" class="card-img-top w-100"
                                        alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ convertUtf8($product->title) }}</h5>
                                        <p class="card-text">{{ convertUtf8($product->summary) }}</p>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <a href="{{ route('front.product.details', $product->slug) }}"
                                                class="btn rounded-pill details details-products text-white">See
                                                Details <svg class="ms-2" width="15" height="15"
                                                    viewBox="0 0 18 15" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17.293 8.20711C17.6836 7.81658 17.6836 7.18342 17.293 6.79289L10.9291 0.428933C10.5386 0.0384087 9.90539 0.0384086 9.51487 0.428933C9.12435 0.819457 9.12435 1.45262 9.51487 1.84315L15.1717 7.5L9.51487 13.1569C9.12435 13.5474 9.12435 14.1805 9.51487 14.5711C9.90539 14.9616 10.5386 14.9616 10.9291 14.5711L17.293 8.20711ZM0.585937 8.5L16.5859 8.5L16.5859 6.5L0.585938 6.5L0.585937 8.5Z"
                                                        fill="white" />
                                                </svg></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                              @endforeach
                                
                                
                            </div>

                        </div>

                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                                aria-label="Slide 4"></button>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- Related Products Section ends here -->

        <!-- Shipping Section starts here-->
        <div class="bg-white py-4">
            <div class="container d-lg-flex justify-content-lg-between align-items-center">
                <!-- Shipping -->
                <div class="d-flex">
                    <div class="box me-2">
                        <svg width="50" height="60" viewBox="0 0 68 68" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="47.5" cy="38.5" r="20.5" fill="#FAC136" />
                            <path
                                d="M59.16 18.0386L35.785 5.2408C35.2385 4.93896 34.6243 4.78064 34 4.78064C33.3757 4.78064 32.7615 4.93896 32.215 5.2408L8.84 18.0386C8.25511 18.3586 7.76701 18.83 7.42681 19.4034C7.0866 19.9768 6.90681 20.6311 6.90625 21.2978V46.7022C6.90681 47.3689 7.0866 48.0232 7.42681 48.5966C7.76701 49.17 8.25511 49.6414 8.84 49.9614L32.215 62.7592C32.7617 63.0606 33.3758 63.2186 34 63.2186C34.6242 63.2186 35.2383 63.0606 35.785 62.7592L59.16 49.9614C59.7449 49.6414 60.233 49.17 60.5732 48.5966C60.9134 48.0232 61.0932 47.3689 61.0938 46.7022V21.2978C61.0932 20.6311 60.9134 19.9768 60.5732 19.4034C60.233 18.83 59.7449 18.3586 59.16 18.0386ZM33.7344 8.03517C33.8126 7.99239 33.9003 7.96997 33.9894 7.96997C34.0785 7.96997 34.1662 7.99239 34.2444 8.03517L56.448 20.1875L47.4327 25.1202L24.982 12.8324L33.7344 8.03517ZM32.4062 59.2344L10.3594 47.167C10.2779 47.12 10.2104 47.0522 10.1637 46.9705C10.1171 46.8889 10.0929 46.7963 10.0938 46.7022V23.0191L32.4062 35.2378V59.2344ZM11.552 20.1875L21.6644 14.6492L44.1123 26.937L34 32.47L11.552 20.1875ZM57.9062 46.7022C57.9071 46.7963 57.8829 46.8889 57.8363 46.9705C57.7896 47.0522 57.7221 47.12 57.6406 47.167L35.5938 59.2344V35.2325L45.1562 29.997V40.375C45.1562 40.7977 45.3242 41.2031 45.623 41.502C45.9219 41.8009 46.3273 41.9688 46.75 41.9688C47.1727 41.9688 47.5781 41.8009 47.877 41.502C48.1758 41.2031 48.3438 40.7977 48.3438 40.375V28.2545L57.9062 23.0191V46.7022Z"
                                fill="black" />
                        </svg>
                    </div>
                    <div class="ms-2 ship">
                        <h5>Great Shipping</h5>
                        <p>Reliable in terms exporting products</p>
                    </div>
                </div>

                <!-- Flexible Payment -->
                <div class="d-flex">
                    <div class="box me-2">
                        <svg width="50" height="60" viewBox="0 0 68 68" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="46.5" cy="37.5" r="21.5" fill="#FAC136" />
                            <path
                                d="M53.8334 34C53.8334 34.7515 53.5349 35.4721 53.0036 36.0035C52.4722 36.5348 51.7515 36.8334 51.0001 36.8334C50.2486 36.8334 49.528 36.5348 48.9966 36.0035C48.4653 35.4721 48.1667 34.7515 48.1667 34C48.1667 33.2486 48.4653 32.5279 48.9966 31.9966C49.528 31.4652 50.2486 31.1667 51.0001 31.1667C51.7515 31.1667 52.4722 31.4652 53.0036 31.9966C53.5349 32.5279 53.8334 33.2486 53.8334 34Z"
                                fill="black" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M28.1747 9.20831H36.9921C42.1997 9.20831 46.3251 9.20831 49.5522 9.64181C52.8729 10.0895 55.5617 11.0301 57.6839 13.1495C60.3019 15.7703 61.1377 19.278 61.4409 23.8311C63.0757 24.548 64.3111 26.0695 64.4443 27.9961C64.4584 28.169 64.4584 28.3531 64.4584 28.5231V39.4768C64.4584 39.6468 64.4584 39.831 64.4471 40.001C64.3111 41.9276 63.0757 43.452 61.4409 44.1716C61.1377 48.722 60.3019 52.2296 57.6839 54.8505C55.5617 56.9698 52.8729 57.9105 49.5522 58.3581C46.3223 58.7916 42.1997 58.7916 36.9921 58.7916H28.1747C22.9671 58.7916 18.8417 58.7916 15.6146 58.3581C12.2939 57.9105 9.60508 56.9698 7.48291 54.8505C5.36358 52.7283 4.42291 50.0395 3.97525 46.7188C3.54175 43.4888 3.54175 39.3663 3.54175 34.1586V33.8413C3.54175 28.6336 3.54175 24.5083 3.97525 21.2811C4.42291 17.9605 5.36358 15.2716 7.48291 13.1495C9.60508 11.0301 12.2939 10.0895 15.6146 9.64181C18.8446 9.20831 22.9671 9.20831 28.1747 9.20831ZM57.1427 44.625H51.6517C45.5742 44.625 40.3722 40.0123 40.3722 34C40.3722 27.9876 45.5742 23.375 51.6489 23.375H57.1399C56.8169 19.5755 56.0888 17.5666 54.6749 16.1556C53.4764 14.9571 51.8331 14.2375 48.9827 13.855C46.0729 13.464 42.2337 13.4583 36.8306 13.4583H28.3306C22.9274 13.4583 19.0911 13.464 16.1756 13.855C13.3281 14.2375 11.6847 14.9571 10.4862 16.1556C9.28775 17.3541 8.56808 18.9975 8.18558 21.8478C7.79458 24.7605 7.78892 28.5968 7.78892 34C7.78892 39.4031 7.79458 43.2423 8.18558 46.155C8.56808 49.0025 9.28775 50.6458 10.4862 51.8443C11.6847 53.0428 13.3281 53.7625 16.1784 54.145C19.0911 54.536 22.9274 54.5416 28.3306 54.5416H36.8306C42.2337 54.5416 46.0729 54.536 48.9856 54.145C51.8331 53.7625 53.4764 53.0428 54.6749 51.8443C56.0888 50.4333 56.8197 48.4273 57.1427 44.625ZM14.8751 22.6666C14.8751 22.1031 15.099 21.5626 15.4975 21.164C15.896 20.7655 16.4365 20.5416 17.0001 20.5416H28.3334C28.897 20.5416 29.4375 20.7655 29.836 21.164C30.2345 21.5626 30.4584 22.1031 30.4584 22.6666C30.4584 23.2302 30.2345 23.7707 29.836 24.1692C29.4375 24.5678 28.897 24.7916 28.3334 24.7916H17.0001C16.4365 24.7916 15.896 24.5678 15.4975 24.1692C15.099 23.7707 14.8751 23.2302 14.8751 22.6666ZM59.2848 27.625H51.6517C47.6171 27.625 44.6222 30.6255 44.6222 34C44.6222 37.3745 47.6171 40.375 51.6489 40.375H59.3499C59.9336 40.3381 60.1858 39.9443 60.2056 39.7063V28.2936C60.1858 28.0556 59.9336 27.6618 59.3499 27.6278L59.2848 27.625Z"
                                fill="black" />
                        </svg>
                    </div>
                    <div class="ms-2 ship">
                        <h5>Flexible Payment</h5>
                        <p>Multiple secure payment options.</p>
                    </div>
                </div>

                <!-- 24/7 Support -->
                <div class="d-flex">
                    <div class="box me-2">
                        <svg width="50" height="60" viewBox="0 0 68 68" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="46.5" cy="37.5" r="21.5" fill="#FAC136" />
                            <path
                                d="M53.8334 34C53.8334 34.7515 53.5349 35.4721 53.0036 36.0035C52.4722 36.5348 51.7515 36.8334 51.0001 36.8334C50.2486 36.8334 49.528 36.5348 48.9966 36.0035C48.4653 35.4721 48.1667 34.7515 48.1667 34C48.1667 33.2486 48.4653 32.5279 48.9966 31.9966C49.528 31.4652 50.2486 31.1667 51.0001 31.1667C51.7515 31.1667 52.4722 31.4652 53.0036 31.9966C53.5349 32.5279 53.8334 33.2486 53.8334 34Z"
                                fill="black" />
                            <path
                                d="M14.1429 33.5013V22.375C14.1808 20.1879 14.7138 18.0288 15.7114 16.0215C16.709 14.0142 18.1515 12.198 19.9564 10.6771C21.7612 9.1562 23.8928 7.96042 26.2292 7.1583C28.5655 6.35617 31.0606 5.96346 33.5714 6.00267C36.0823 5.96346 38.5774 6.35617 40.9137 7.1583C43.25 7.96042 45.3817 9.1562 47.1865 10.6771C48.9913 12.198 50.4339 14.0142 51.4314 16.0215C52.429 18.0288 52.9621 20.1879 53 22.375V33.5013M43.2857 55.7118C45.8621 55.7118 48.333 54.8204 50.1548 53.2336C51.9765 51.6468 53 49.4947 53 47.2507V37.7319M43.2857 55.7118C43.2857 57.1143 42.646 58.4594 41.5074 59.4511C40.3688 60.4429 38.8245 61 37.2143 61H29.9286C28.3183 61 26.774 60.4429 25.6354 59.4511C24.4968 58.4594 23.8571 57.1143 23.8571 55.7118C23.8571 54.3093 24.4968 52.9642 25.6354 51.9725C26.774 50.9807 28.3183 50.4236 29.9286 50.4236H37.2143C38.8245 50.4236 40.3688 50.9807 41.5074 51.9725C42.646 52.9642 43.2857 54.3093 43.2857 55.7118ZM6.85714 27.1555H11.7143C12.3584 27.1555 12.9761 27.3783 13.4315 27.775C13.887 28.1717 14.1429 28.7098 14.1429 29.2708V41.9625C14.1429 42.5235 13.887 43.0615 13.4315 43.4582C12.9761 43.8549 12.3584 44.0777 11.7143 44.0777H6.85714C5.56895 44.0777 4.33352 43.632 3.42262 42.8386C2.51173 42.0453 2 40.9692 2 39.8472V31.3861C2 30.264 2.51173 29.188 3.42262 28.3946C4.33352 27.6012 5.56895 27.1555 6.85714 27.1555ZM60.2857 44.0777H55.4286C54.7845 44.0777 54.1668 43.8549 53.7113 43.4582C53.2559 43.0615 53 42.5235 53 41.9625V29.2708C53 28.7098 53.2559 28.1717 53.7113 27.775C54.1668 27.3783 54.7845 27.1555 55.4286 27.1555H60.2857C61.5739 27.1555 62.8093 27.6012 63.7202 28.3946C64.6311 29.188 65.1429 30.264 65.1429 31.3861V39.8472C65.1429 40.9692 64.6311 42.0453 63.7202 42.8386C62.8093 43.632 61.5739 44.0777 60.2857 44.0777Z"
                                stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="ms-2 ship">
                        <div>
                            <h5>24 x 7 Support</h5>
                            <p>We support both online and offline all day.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shipping Section ends here-->
    </main>
@endsection

