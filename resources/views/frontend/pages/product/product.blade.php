@extends('frontend.layout')

@section('content')
    <!-- Main Content starts here -->
    <main class="bg-light main">
        <!-- Hero Header starts here -->
        <div class="return d-flex flex-column justify-content-center align-items-center">

            <h3 class="fw-bold">Our Products</h3>
            <!-- <p class="text-capitalize">BODICARE ORGANIC AFRICAN BLACK SOAP</p> -->

        </div>
        <!-- Hero Header ends here -->


        <!-- Product starts here -->
        <div class="bg-white">

                <div class="py-5 mx-md-3 mx-lg-0">
                    <div class="row justify-content-center align-items-start">
                        <div class="col-lg-3 col-md-4 col-11 mb-4 mb-lg-0">
                            <div class="card bg-light py-2">
                                <div class="border-bottom mx-2 mb-2">
                                    <h4 class="fw-bold fs-5 px-2 pt-2">Products Available</h4>
                                </div>
                                <nav class="nav flex-column nav-pills" id="pills-tab" role="tablist">
                                    @foreach ($products as $product)
                                    <a class="available-products nav-link text-dark my-lg-2 @if ($product->id == 1)
                                        active
                                        
                                    @endif" id="product-{{ $product->id }}-tab"
                                    data-bs-toggle="pill" data-bs-target="#product-1" type="button" role="tab"
                                    aria-controls="product-{{ $product->id }}" aria-selected="true"></a>
                                    @endforeach
                                    {{-- <a class="available-products nav-link text-dark my-lg-2 active" id="product-1-tab"
                                        data-bs-toggle="pill" data-bs-target="#product-1" type="button" role="tab"
                                        aria-controls="product-1" aria-selected="true">Unrefined Shea Butter
                                        (Ivory)</a>
                                        <a class="available-products nav-link text-dark my-lg-2" id="product-4-tab"
                                        data-bs-toggle="pill" data-bs-target="#product-4" type="button" role="tab"
                                        aria-controls="product-4" aria-selected="false">Unrefined Shea Butter
                                        (Yellow)</a>
                                    <a class="available-products nav-link text-dark my-lg-2" id="product-2-tab"
                                        data-bs-toggle="pill" data-bs-target="#product-2" type="button" role="tab"
                                        aria-controls="product-2" aria-selected="false">Natural Cocoa Butter</a>
                                    <a class="available-products nav-link text-dark my-lg-2" id="product-3-tab"
                                        data-bs-toggle="pill" data-bs-target="#product-3" type="button" role="tab"
                                        aria-controls="product-3" aria-selected="false">Handcrafted basket</a>
                                    <a class="available-products nav-link text-dark my-lg-2" id="product-5-tab"
                                        data-bs-toggle="pill" data-bs-target="#product-5" type="button" role="tab"
                                        aria-controls="product-5" aria-selected="false">Cashew Nuts in Shells</a>
                                    <a class="available-products nav-link text-dark my-lg-2" id="product-6-tab"
                                        data-bs-toggle="pill" data-bs-target="#product-6" type="button" role="tab"
                                        aria-controls="product-6" aria-selected="false">Bodicare African Black
                                        Soap</a> --}}
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-8 col-11 ms-lg-2">
                            <div class="tab-content mt-lg-0" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="product-1" role="tabpanel"
                                    aria-labelledby="product-1-tab">

                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-lg-4 col-md-6 col-11 ms-lg-4">
                                                <div class="card p-2">
                                                    <img src="/public/src/img/products/cocoa.png"
                                                        class="card-img-top w-100" alt="ceo-image">
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-md-6 col-11 ms-lg-3 my-lg-3 mt-4 mt-lg-0">
                                                <div class="">
                                                    <div class="header d-flex">
                                                        <h4 class="text-uppercase fs-5">Unrefined Shea Butter
                                                            (Ivory)</h4>
                                                    </div>
                                                    <p class="">Traditionally extracted Unrefined Shea Butter.</p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <svg class="" width="20" height="31" viewBox="0 0 32 31" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <svg class=" ms-2" width="20" height="31" viewBox="0 0 32 31"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <svg class=" ms-2" width="20" height="31" viewBox="0 0 32 31"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <svg class=" ms-2" width="20" height="31" viewBox="0 0 32 31"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <svg class=" ms-2" width="20" height="31" viewBox="0 0 32 31"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <span
                                                        class="d-flex justify-content-center align-items-center ratings-review">
                                                        <span class="rated-number ms-2 d-block">4.9</span>( <span
                                                            class="rate-count">123 </span> &nbsp; Reviews)
                                                    </span>
                                                </div>
                                                <p class="py-2 pe-lg-5">Packaging in 25kg & 12kg per carton for Africa
                                                    and other markets; 25pounds per carton for USA, Canada and the
                                                    Caribbean. Other Packaging sizes are available but base on client
                                                    request.</p>

                                                <div class="d-flex">
                                                    <button class="btn cart-btn">Add to Cart</button>
                                                    <a href="#buynow" class="btn ms-2 buy-btn">Buy Now</a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row justify-content-center align-items-center w-100">



                                            <div class="col-lg-10 mt-5 products-links" id="link-div">
                                                <ul class="nav nav-pills mt-3 mb-3 w-100 justify-content-center gap-4"
                                                    id="pills-tab" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link active" id="pills-home-tab"
                                                            data-bs-toggle="pill" data-bs-target="#pills-home"
                                                            type="button" role="tab" aria-controls="pills-home"
                                                            aria-selected="true">Desicription</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="pills-profile-tab"
                                                            data-bs-toggle="pill" data-bs-target="#pills-profile"
                                                            type="button" role="tab" aria-controls="pills-profile"
                                                            aria-selected="false">Addtional Info</button>
                                                    </li>
                                                  
                                                </ul>
                                                <div class="tab-content mt-4" id="pills-tabContent">
                                                    <div class="tab-pane fade show active" id="pills-home"
                                                        role="tabpanel" aria-labelledby="pills-home-tab">
                                                        <p>

                                                            Shea butter is a fatty extract from the seed of the Shea
                                                            nut. The extract is known to contain a number of ingredients
                                                            with biological activity. This biological activity includes
                                                            moisturizing abilities and the healing of minor skin
                                                            ailments. <br>
                                                            Our Shea Butter is pure unrefined handcrafted and extracted
                                                            using the traditional method. This traditional handcrafted
                                                            method of processing shea butter is proven to be the
                                                            most-trusted method of production that keeps all the
                                                            much-talked-about beneficial properties of the Shea. Our
                                                            extraction process is done using clean water and without any
                                                            chemical additives whatsoever. This makes our Shea Butter
                                                            very natural and chemicals-free.
                                                        </p>
                                                        <div class="mt-3">
                                                            <h4 class="fw-bold">Suggested Use</h4>
                                                            <ul class="list-group-disc">
                                                                <li>Our pure Shea butter is used for body, hand and
                                                                    facial products because of its un-saponifiable
                                                                    content. Pure Shea butter
                                                                    contain sester resins recommended for damaged skin
                                                                    repair, cleansing and the sun's protection.</li>
                                                                <li>Phytosterols content helps cellular stimulation and
                                                                    regeneration. Pure Shea butter contains latex, which
                                                                    prevents against sun
                                                                    allergies.</li>
                                                                <li> Clinical studies have demonstrated that pure shea
                                                                    butter enhances capillary vessels blood activity,
                                                                    increasing oxygenation
                                                                    and metabolic residues elimination.</li>
                                                                <li>Shea nut products, the solid fat (butter or stearin)
                                                                    and the liquid oil (olien), are ideal for use as raw
                                                                    materials in cooking oil,
                                                                    margarine, cosmetics, soap, detergents and candles,
                                                                    but it has found its primary market niche as a
                                                                    substitute for cocoa
                                                                    butter in the chocolate and confectionery industry.
                                                                </li>
                                                                <li> Pure Shea butter has been used for centuries in
                                                                    Africa. It is used to moisturize and protect the
                                                                    skin from sun, wind, heat and
                                                                    salt water. It is known as the most effective skin
                                                                    moisturizer and conditioner because of its high
                                                                    content of non-saponifiable
                                                                    fats including vitamin F.</li>
                                                                <li>It is an excellent skin moistener and is used for
                                                                    aging skin, eczema and all forms of massage. It is
                                                                    also used to relax the
                                                                    muscles and to treat sprains wounds and colds. The
                                                                    unique formula of Pure Shea butter also helps
                                                                    prevent and protect dry
                                                                    skin providing temporal relief from irritation,
                                                                    dryness and wind burned skin.</li>
                                                                <li>Pure Shea Butter can be used as a hair dressing
                                                                    cream to moisturize a dry scalp and stimulate hair
                                                                    growth. As a hair cream,
                                                                    it helps to hold the hairstyle and lightly relax
                                                                    curls.</li>
                                                                <li>
                                                                    Medicinally, Pure Shea Butter has been studied as an
                                                                    anti-inflammatory tropical cream, being helpful in
                                                                    cases of arthritis
                                                                    (Kerharo), and it contains stigmasterol, which is
                                                                    the sterol known as "the anti-stiffness factor"
                                                                    making it helpful in cases
                                                                    of rheumatism (Hampton). It has additionally been
                                                                    studied as a nasal decongestant by applying it to
                                                                    the inside of the
                                                                    nostrils (Tella).</li>
                                                                <li>
                                                                    Pure Shea Butter is also helpful in cases of eczema
                                                                    and dermatitis and "contains chemical constituents
                                                                    that help to heal
                                                                    bruising and soreness" (Falconi).</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                                        aria-labelledby="pills-profile-tab">
                                                        <div>
                                                            <table class="table border">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col" class="featured-table">Feature
                                                                        </th>
                                                                        <th scope="col" class="desicription-table">
                                                                            Desicription</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Quality</td>
                                                                        <td>Natural Unrefined Shea Butter</td>
                                                                    </tr>
                                                                    <tr class="table-active">
                                                                        <td>Color</td>
                                                                        <td>Ivory/White</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Packing</td>
                                                                        <td>
                                                                            <p class="pb-1">
                                                                                Packaging in 25kg & 12kg per carton for
                                                                                Africa and other markets
                                                                            </p>
                                                                            <p>
                                                                                25 pounds per carton for USA, Canada and
                                                                                the Caribbean.
                                                                            </p>
                                                                            <p class="pb-1">Other Packaging sizes are
                                                                                available but base on client request</p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="table-active">
                                                                        <td>Production</td>
                                                                        <td>We produce to meet export or international
                                                                            standards.</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>
                                        </div>
                                </div>

                                <!-- Cocoa tab -->
                                <div class="tab-pane fade show" id="product-2" role="tabpanel"
                                    aria-labelledby="product-2-tab">

                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-lg-4 col-md-6 col-11 ms-lg-4">
                                                <div class="card p-2">
                                                    <img src="/public/src/img/products/cocoa.png" class="card-img-top w-100" alt="ceo-image">
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-md-6 col-11 ms-lg-3 my-lg-3 mt-4 mt-lg-0">
                                                <div class="">
                                                <div class="header d-flex">
                                                    <h4 class="text-uppercase fs-5">NATURAL COCOA BUTTER</h4>
                                                </div>
                                                <p class="">Traditionally extracted Unrefined Shea Butter.</p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <svg class="" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <svg class=" ms-2" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <svg class=" ms-2" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <svg class=" ms-2" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <svg class=" ms-2" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <span class="d-flex justify-content-center align-items-center ratings-review">
                                                    <span class="rated-number ms-2 d-block">4.9</span>( <span class="rate-count">123 </span> &nbsp; Reviews)
                                                </span>
                                              </div>
                                              <p class="py-2 pe-lg-5">Packaging in 25kg & 12kg per carton for Africa and other markets; 25pounds per carton for USA, Canada and the Caribbean. Other Packaging sizes are available but base on client request.</p>
                            
                                              <div class="d-flex">
                                                <button class="btn cart-btn">Add to Cart</button>
                                                <a href="#buynow" class="btn ms-2 buy-btn">Buy Now</a>
                                              </div>
                                            </div>
                            
                                            </div>
                                            <div class="row justify-content-center align-items-center w-100">
                            
                                            
                            
                                                <div class="col-lg-10 mt-5 products-links" id="link-div">
                                                    <ul class="nav nav-pills mt-3 mb-3 w-100 justify-content-center gap-4" id="pills-tab" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Desicription</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Addtional Info</button>
                                                        </li>

                                                      </ul>
                                                      <div class="tab-content mt-4" id="pills-tabContent">
                                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                            <p>
                                                            Our Cocoa Butter is extracted from the finest cocoa beans in Ghana.
                                                            Cocoa butter, also called theobroma oil, is a pale-yellow, edible vegetable fat extracted from the cocoa bean. Cocoa butter has a cocoa flavor and aroma. <br>
                                                            Cocoa butter contains a high proportion of saturated fats, derived from stearic and palmitic acids. Cocoa butter, unlike cocoa solids, has no more than trace amounts of caffeine and theobromine. Cocoa butter is obtained from whole cocoa beans, which are fermented, roasted, and then separated from their hulls. <br>
                                                            About 54–58% of the residue is cocoa butter. Chocolate liquor is pressed to separate the cocoa butter from the cocoa solids. The Broma process is used to extract cocoa butter from ground cacao beans.
                                                        </p>
                                                        <div class="mt-3">
                                                            <h4 class="fw-bold">What It does</h4>
                                                            <ul class="list-group-disc">
                                                                <li>It is used to make chocolate, as well as some ointments, toiletries, cosmetics, and pharmaceuticals.</li>
                                                                <li>Dry Skin, chapped lips diaper rash and minor burns</li>
                                                                <li>Massage, swelling and inflammation</li>
                                                                <li>Conditioner for damaged hair and scalp</li>
                                                                <li>Dark spots and skin discolorations</li>
                                                                <li>Stretch marks, wrinkles and blemishes</li>
                                                            </ul>
                                                        </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                            <div>
                                                                <table class="table border">
                                                                    <thead>
                                                                      <tr>
                                                                        <th scope="col" class="featured-table">Feature</th>
                                                                        <th scope="col" class="desicription-table">Desicription</th>
                                                                      </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                      <tr>
                                                                        <td>Quality</td>
                                                                        <td>Natural Unrefined Cocoa Butter</td>
                                                                      </tr>
                                                                      <tr class="table-active">
                                                                        <td>Color</td>
                                                                        <td>Pale-yellow</td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td>Packing</td>
                                                                        <td> 
                                                                                <p class="pb-1">
                                                                                    Packaging in 25kg & 12kg per carton for Africa and other markets
                                                                                </p>
                                                                                <p>
                                                                                    25 pounds per carton for USA, Canada and the Caribbean.
                                                                                </p>
                                                                                <p class="pb-1">Other Packaging sizes are available but base on client request</p>
                                                                            </td>
                                                                      </tr>
                                                                      <tr class="table-active">
                                                                        <td>Production</td>
                                                                        <td>We produce to meet export or international standards.</td>
                                                                      </tr>
                                                                    </tbody>
                                                                  </table>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane w-100 fade pb-5" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                                            <div class="row justify-content-center align-items-center w-100 border-bottom pb-5">
                                                                <div class="col-lg-3 col-md-4 col-4 justify-content-lg-center align-items-center p-3 border bg-light">
                                                                    <span class="d-flex justify-content-center align-items-end ratings-review">
                                                                        <span class="rated-number display-lg-3 display-4 d-block">4.9</span> out of 5
                                                                    </span>
                                                                    <div class="d-flex justify-content-center align-items-center">
                                                <svg class="" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <svg class=" ms-2" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <svg class=" ms-2" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <svg class=" ms-2" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <svg class="ms-2" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                
                                              </div>
                                              <span class="text-center w-100 rate-count count d-block">(123 Reviews)</span>
                                                                </div>
                            
                                                                <div class="ms-lg-5 ms-3 col-7 justify-content-center justify-content-lg-start">
                                                                    <div class="top-ratings row align-items-center">
                                                                        <span class="col star-num text-center px-0 mx-0" style="width: 1%;">5 Star</span>
                                                                        <div class="col-10 progress-div px-0 mx-0">
                            
                                                                            <div class="progress mx-0 px-0">
                                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 90%"
                                                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="top-ratings row align-items-center">
                                                                        <span class="col star-num text-center px-0 mx-0" style="width: 1%;">4 Star</span>
                                                                        <div class="col-10 progress-div px-0 mx-0">
                            
                                                                            <div class="progress mx-0 px-0">
                                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 80%"
                                                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="top-ratings row align-items-center">
                                                                        <span class="col star-num text-center px-0 mx-0" style="width: 1%;">3 Star</span>
                                                                        <div class="col-10 progress-div px-0 mx-0">
                            
                                                                            <div class="progress mx-0 px-0">
                                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 65%"
                                                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="top-ratings row align-items-center">
                                                                        <span class="col star-num text-center px-0 mx-0" style="width: 1%;">2 Star</span>
                                                                        <div class="col-10 progress-div px-0 mx-0">
                            
                                                                            <div class="progress mx-0 px-0">
                                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 25%"
                                                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="top-ratings row align-items-center">
                                                                        <span class="col star-num text-center px-0 mx-0" style="width: 2%;">1 Star</span>
                                                                        <div class="col-10 progress-div px-0 mx-0">
                            
                                                                            <div class="progress mx-0 px-0">
                                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 5%"
                                                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                            
                                    
                                                        </div>
                                                      </div>
                                                      
                            
                                            </div>
                                        </div>
                                </div>

                                <!-- Yellow tab -->
                                <div class="tab-pane fade show" id="product-4" role="tabpanel"
                                    aria-labelledby="product-4-tab">

                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-lg-4 col-md-6 col-11 ms-lg-4">
                                                <div class="card p-2">
                                                    <img src="/public/src/img/products/cocoa.png" class="card-img-top w-100" alt="ceo-image">
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-md-6 col-11 ms-lg-3 my-lg-3 mt-4 mt-lg-0">
                                                <div class="">
                                                <div class="header d-flex">
                                                    <h4 class="text-uppercase fs-5">Unrefined Shea Butter (Yellow)</h4>
                                                </div>
                                                <p class="">Traditionally extracted Unrefined Shea Butter.</p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <svg class="" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <svg class=" ms-2" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <svg class=" ms-2" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <svg class=" ms-2" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <svg class=" ms-2" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <span class="d-flex justify-content-center align-items-center ratings-review">
                                                    <span class="rated-number ms-2 d-block">4.9</span>( <span class="rate-count">123 </span> &nbsp; Reviews)
                                                </span>
                                              </div>
                                              <p class="py-2 pe-lg-5">Packaging in 25kg & 12kg per carton for Africa and other markets; 25pounds per carton for USA, Canada and the Caribbean. Other Packaging sizes are available but base on client request.</p>
                            
                                              <div class="d-flex">
                                                <button class="btn cart-btn">Add to Cart</button>
                                                <a href="#buynow" class="btn ms-2 buy-btn">Buy Now</a>
                                              </div>
                                            </div>
                            
                                            </div>
                                            <div class="row justify-content-center align-items-center w-100">
                            
                                            
                            
                                                <div class="col-lg-10 mt-5 products-links" id="link-div">
                                                    <ul class="nav nav-pills mt-3 mb-3 w-100 justify-content-center gap-4" id="pills-tab" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Desicription</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Addtional Info</button>
                                                        </li>
                                                       
                                                      </ul>
                                                      <div class="tab-content mt-4" id="pills-tabContent">
                                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                            <p>
                                                            Our Cocoa Butter is extracted from the finest cocoa beans in Ghana.
                                                            Cocoa butter, also called theobroma oil, is a pale-yellow, edible vegetable fat extracted from the cocoa bean. Cocoa butter has a cocoa flavor and aroma. <br>
                                                            Cocoa butter contains a high proportion of saturated fats, derived from stearic and palmitic acids. Cocoa butter, unlike cocoa solids, has no more than trace amounts of caffeine and theobromine. Cocoa butter is obtained from whole cocoa beans, which are fermented, roasted, and then separated from their hulls. <br>
                                                            About 54–58% of the residue is cocoa butter. Chocolate liquor is pressed to separate the cocoa butter from the cocoa solids. The Broma process is used to extract cocoa butter from ground cacao beans.
                                                        </p>
                                                        <div class="mt-3">
                                                            <h4 class="fw-bold">What It does</h4>
                                                            <ul class="list-group-disc">
                                                                <li>It is used to make chocolate, as well as some ointments, toiletries, cosmetics, and pharmaceuticals.</li>
                                                                <li>Dry Skin, chapped lips diaper rash and minor burns</li>
                                                                <li>Massage, swelling and inflammation</li>
                                                                <li>Conditioner for damaged hair and scalp</li>
                                                                <li>Dark spots and skin discolorations</li>
                                                                <li>Stretch marks, wrinkles and blemishes</li>
                                                            </ul>
                                                        </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                            <div>
                                                                <table class="table border">
                                                                    <thead>
                                                                      <tr>
                                                                        <th scope="col" class="featured-table">Feature</th>
                                                                        <th scope="col" class="desicription-table">Desicription</th>
                                                                      </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                      <tr>
                                                                        <td>Quality</td>
                                                                        <td>Natural Unrefined Cocoa Butter</td>
                                                                      </tr>
                                                                      <tr class="table-active">
                                                                        <td>Color</td>
                                                                        <td>Pale-yellow</td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td>Packing</td>
                                                                        <td> 
                                                                                <p class="pb-1">
                                                                                    Packaging in 25kg & 12kg per carton for Africa and other markets
                                                                                </p>
                                                                                <p>
                                                                                    25 pounds per carton for USA, Canada and the Caribbean.
                                                                                </p>
                                                                                <p class="pb-1">Other Packaging sizes are available but base on client request</p>
                                                                            </td>
                                                                      </tr>
                                                                      <tr class="table-active">
                                                                        <td>Production</td>
                                                                        <td>We produce to meet export or international standards.</td>
                                                                      </tr>
                                                                    </tbody>
                                                                  </table>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane w-100 fade pb-5" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                                            <div class="row justify-content-center align-items-center w-100 border-bottom pb-5">
                                                                <div class="col-lg-3 col-md-4 col-4 justify-content-lg-center align-items-center p-3 border bg-light">
                                                                    <span class="d-flex justify-content-center align-items-end ratings-review">
                                                                        <span class="rated-number display-lg-3 display-4 d-block">4.9</span> out of 5
                                                                    </span>
                                                                    <div class="d-flex justify-content-center align-items-center">
                                                <svg class="" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <svg class=" ms-2" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <svg class=" ms-2" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <svg class=" ms-2" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <svg class="ms-2" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                
                                              </div>
                                              <span class="text-center w-100 rate-count count d-block">(123 Reviews)</span>
                                                                </div>
                            
                                                                <div class="ms-lg-5 ms-3 col-7 justify-content-center justify-content-lg-start">
                                                                    <div class="top-ratings row align-items-center">
                                                                        <span class="col star-num text-center px-0 mx-0" style="width: 1%;">5 Star</span>
                                                                        <div class="col-10 progress-div px-0 mx-0">
                            
                                                                            <div class="progress mx-0 px-0">
                                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 90%"
                                                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="top-ratings row align-items-center">
                                                                        <span class="col star-num text-center px-0 mx-0" style="width: 1%;">4 Star</span>
                                                                        <div class="col-10 progress-div px-0 mx-0">
                            
                                                                            <div class="progress mx-0 px-0">
                                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 80%"
                                                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="top-ratings row align-items-center">
                                                                        <span class="col star-num text-center px-0 mx-0" style="width: 1%;">3 Star</span>
                                                                        <div class="col-10 progress-div px-0 mx-0">
                            
                                                                            <div class="progress mx-0 px-0">
                                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 65%"
                                                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="top-ratings row align-items-center">
                                                                        <span class="col star-num text-center px-0 mx-0" style="width: 1%;">2 Star</span>
                                                                        <div class="col-10 progress-div px-0 mx-0">
                            
                                                                            <div class="progress mx-0 px-0">
                                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 25%"
                                                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="top-ratings row align-items-center">
                                                                        <span class="col star-num text-center px-0 mx-0" style="width: 2%;">1 Star</span>
                                                                        <div class="col-10 progress-div px-0 mx-0">
                            
                                                                            <div class="progress mx-0 px-0">
                                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 5%"
                                                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                            
                                                        
                                                        </div>
                                                      </div>
                                                      
                            
                                            </div>
                                    </div>
                                </div>

                                <!-- Basket tab -->
                                <div class="tab-pane fade show" id="product-3" role="tabpanel"
                                    aria-labelledby="product-3-tab">

                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-lg-4 col-md-6 col-11 ms-lg-4">
                                                <div class="card p-2">
                                                    <img src="/public/src/img/products/basket.png" class="card-img-top w-100" alt="ceo-image">
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-md-6 col-11 ms-lg-3 my-lg-3 mt-4 mt-lg-0">
                                                <div class="">
                                                <div class="header d-flex">
                                                    <h4 class="text-uppercase fs-5">TRADITIONAL BASKETS</h4>
                                                </div>
                                                <p class="">Traditional handmade basket from bolgatanga.</p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <svg class="" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <svg class=" ms-2" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <svg class=" ms-2" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <svg class=" ms-2" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <svg class=" ms-2" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <span class="d-flex justify-content-center align-items-center ratings-review">
                                                    <span class="rated-number ms-2 d-block">4.9</span>( <span class="rate-count">123 </span> &nbsp; Reviews)
                                                </span>
                                              </div>
                                              <p class="py-2 pe-lg-5">Packaging in 25kg & 12kg per carton for Africa and other markets; 25pounds per carton for USA, Canada and the Caribbean. Other Packaging sizes are available but base on client request.</p>
                            
                                              <div class="d-flex">
                                                <button class="btn cart-btn">Add to Cart</button>
                                                <a href="#buynow" class="btn ms-2 buy-btn">Buy Now</a>
                                              </div>
                                            </div>
                            
                                            </div>
                                            <div class="row justify-content-center align-items-center w-100">
                            
                                            
                            
                                                <div class="col-lg-10 mt-5 products-links" id="link-div">
                                                    <ul class="nav nav-pills mt-3 mb-3 w-100 justify-content-center gap-4" id="pills-tab" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Desicription</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Addtional Info</button>
                                                        </li>
                                                      
                                                      </ul>
                                                      <div class="tab-content mt-4" id="pills-tabContent">
                                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                            <p>
                                                                Our Baskets which is also known in Ghana and beyond as “Bolga Baskets” is handwoven by women group and some few men using the Elephant Grass. These baskets and its use have been part of the tradition of the people of Bolgatanga and people of the Upper East Region of Ghana. Being part of our tradition, it is common to see young children learning how to weave a hat, fan or basket especially during the raining season when the raw materials (Elephant Grass) are in abundance.
                             <br><br>
                                                                Weaving baskets, hats, fans, etc. is self-taught and passed on from generation to generation. Traditionally, these baskets were originally used by our people for farming activities such as storage (yam tubers, millet, maize) and colanders in the kitchen to rinse vegetables among others. The Bolga Baskets have become a key part of Ghana’s craft culture and also into the fashion industry. With innovations and additions of colors and improved quality by weavers.
                                                        </p>
                                                        <div class="mt-3">
                                                            <h4 class="fw-bold text-uppercase">Origin</h4>
                                                            <p>
                                                                These traditional handmade baskets come from Bolgatanga in the Upper East Region of Ghana. These baskets may also be popular in a few other West Africa countries but the uniqueness and beauty of our baskets and for matter the Bolga Baskets need not be over emphasized.</p>
                                                        </div>
                                                        <div class="mt-3">
                                                            <h4 class="fw-bold text-uppercase">THE EARLY USES OF BOLGA BASKETS</h4>
                                                            <p>
                                                                Traditionally, these baskets were mainly used for farming activities such as storage (e.g. tubers like yam), and colanders to separate grains like millet, rice or wheat from waste. 
                            <br><br>
                                                                The baskets have not always had handles like we see today. With the growing patronage, their practicality and versatile characteristics, weavers have come up with the idea of making versions with handles to serve as markets bags or shopping bags.  This makes it easy and practical for carrying items in them. 
                                                                <br><br>
                                                                For about 10 years now, Bolga Baskets have become popular and appealing to foreigners and westerners. The skill, hard work and patience that goes into making these baskets is admirable and one can understand why people are falling in love with these treasures.    
                                                            </p>
                                                       </div>
                                                       <div class="mt-3">
                                                        <h4 class="fw-bold text-uppercase">WHY ARE THE BOLGA BASKETS SO COLOURFUL?</h4>
                                                        <p>
                                                            If you thought the baskets have always come in different colors like you see today, I’m afraid that hasn’t been the case. 
                                                            They were normally made in the natural nude colors which is in fact the color of the dried elephant grass.
                                                            <br><br>
                                                            Over the course of several years, local artisan weavers have adapted to meet the taste of the foreign buyers, who love them for their beauty, sturdiness and versatility. The weavers have done so by adding a touch of colors to get more variety to suit the increasing demand from across the globe. These creations come in all shapes and sizes and are available in a vibrant array of colors and different patterns of weaving.
                                                            <br><br>
                                                            The baskets are lightweight and sometimes with strong, ergonomic leather handles. There are baskets made as shopping bags, laundry containers, planters, dog beds, baby cots and so much more.                            </p>
                                                    </div>
                                                        </div>
                            
                                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                            <div>
                                                                <table class="table border">
                                                                    <thead>
                                                                      <tr>
                                                                        <th scope="col" class="featured-table">Feature</th>
                                                                        <th scope="col" class="desicription-table">Desicription</th>
                                                                      </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                      <tr>
                                                                        <td>Quality</td>
                                                                        <td>These traditional handmade baskets come from Bolgatanga in the Upper East Region of Ghana.</td>
                                                                      </tr>
                                                                      <tr class="table-active">
                                                                        <td>Color</td>
                                                                        <td>Available in a vibrant array of colors</td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td>Packing</td>
                                                                        <td> 
                                                                                <p class="pb-1">
                                                                                    Packaging in 25kg & 12kg per carton for Africa and other markets
                                                                                </p>
                                                                                <p>
                                                                                    25 pounds per carton for USA, Canada and the Caribbean.
                                                                                </p>
                                                                                <p class="pb-1">Other Packaging sizes are available but base on client request</p>
                                                                            </td>
                                                                      </tr>
                                                                      <tr class="table-active">
                                                                        <td>Production</td>
                                                                        <td>We produce to meet export or international standards.</td>
                                                                      </tr>
                                                                    </tbody>
                                                                  </table>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane w-100 fade pb-5" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                                            <div class="row justify-content-center align-items-center w-100 border-bottom pb-5">
                                                                <div class="col-lg-3 col-md-4 col-4 justify-content-lg-center align-items-center p-3 border bg-light">
                                                                    <span class="d-flex justify-content-center align-items-end ratings-review">
                                                                        <span class="rated-number display-lg-3 display-4 d-block">4.9</span> out of 5
                                                                    </span>
                                                                    <div class="d-flex justify-content-center align-items-center">
                                                <svg class="" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <svg class=" ms-2" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <svg class=" ms-2" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <svg class=" ms-2" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <svg class="ms-2" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                
                                              </div>
                                              <span class="text-center w-100 rate-count count d-block">(123 Reviews)</span>
                                                                </div>
                            
                                                                <div class="ms-lg-5 ms-3 col-7 justify-content-center justify-content-lg-start">
                                                                    <div class="top-ratings row align-items-center">
                                                                        <span class="col star-num text-center px-0 mx-0" style="width: 1%;">5 Star</span>
                                                                        <div class="col-10 progress-div px-0 mx-0">
                            
                                                                            <div class="progress mx-0 px-0">
                                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 90%"
                                                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="top-ratings row align-items-center">
                                                                        <span class="col star-num text-center px-0 mx-0" style="width: 1%;">4 Star</span>
                                                                        <div class="col-10 progress-div px-0 mx-0">
                            
                                                                            <div class="progress mx-0 px-0">
                                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 80%"
                                                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="top-ratings row align-items-center">
                                                                        <span class="col star-num text-center px-0 mx-0" style="width: 1%;">3 Star</span>
                                                                        <div class="col-10 progress-div px-0 mx-0">
                            
                                                                            <div class="progress mx-0 px-0">
                                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 65%"
                                                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="top-ratings row align-items-center">
                                                                        <span class="col star-num text-center px-0 mx-0" style="width: 1%;">2 Star</span>
                                                                        <div class="col-10 progress-div px-0 mx-0">
                            
                                                                            <div class="progress mx-0 px-0">
                                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 25%"
                                                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="top-ratings row align-items-center">
                                                                        <span class="col star-num text-center px-0 mx-0" style="width: 2%;">1 Star</span>
                                                                        <div class="col-10 progress-div px-0 mx-0">
                            
                                                                            <div class="progress mx-0 px-0">
                                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 5%"
                                                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                      </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Cashew tab -->
                                <div class="tab-pane fade show" id="product-5" role="tabpanel"
                                    aria-labelledby="product-5-tab">

                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-lg-4 col-md-6 col-11 ms-lg-4">
                                                <div class="card p-2">
                                                    <img src="/public/src/img/products/cocoa.png" class="card-img-top w-100" alt="ceo-image">
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-md-6 col-11 ms-lg-3 my-lg-3 mt-4 mt-lg-0">
                                                <div class="">
                                                <div class="header d-flex">
                                                    <h4 class="text-uppercase fs-5">Cashew Nuts In Shells</h4>
                                                </div>
                                                <p class="">Traditionally extracted Unrefined Shea Butter.</p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <svg class="" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <svg class=" ms-2" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <svg class=" ms-2" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <svg class=" ms-2" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <svg class=" ms-2" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <span class="d-flex justify-content-center align-items-center ratings-review">
                                                    <span class="rated-number ms-2 d-block">4.9</span>( <span class="rate-count">123 </span> &nbsp; Reviews)
                                                </span>
                                              </div>
                                              <p class="py-2 pe-lg-5">Packaging in 25kg & 12kg per carton for Africa and other markets; 25pounds per carton for USA, Canada and the Caribbean. Other Packaging sizes are available but base on client request.</p>
                            
                                              <div class="d-flex">
                                                <button class="btn cart-btn">Add to Cart</button>
                                                <a href="#buynow" class="btn ms-2 buy-btn">Buy Now</a>
                                              </div>
                                            </div>
                            
                                            </div>
                                            <div class="row justify-content-center align-items-center w-100">
                            
                                            
                            
                                                <div class="col-lg-10 mt-5 products-links" id="link-div">
                                                    <ul class="nav nav-pills mt-3 mb-3 w-100 justify-content-center gap-4" id="pills-tab" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Desicription</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Addtional Info</button>
                                                        </li>
                                                      </ul>
                                                      <div class="tab-content mt-4" id="pills-tabContent">
                                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                            <p>
                                                            Our Cocoa Butter is extracted from the finest cocoa beans in Ghana.
                                                            Cocoa butter, also called theobroma oil, is a pale-yellow, edible vegetable fat extracted from the cocoa bean. Cocoa butter has a cocoa flavor and aroma. <br>
                                                            Cocoa butter contains a high proportion of saturated fats, derived from stearic and palmitic acids. Cocoa butter, unlike cocoa solids, has no more than trace amounts of caffeine and theobromine. Cocoa butter is obtained from whole cocoa beans, which are fermented, roasted, and then separated from their hulls. <br>
                                                            About 54–58% of the residue is cocoa butter. Chocolate liquor is pressed to separate the cocoa butter from the cocoa solids. The Broma process is used to extract cocoa butter from ground cacao beans.
                                                        </p>
                                                        <div class="mt-3">
                                                            <h4 class="fw-bold">What It does</h4>
                                                            <ul class="list-group-disc">
                                                                <li>It is used to make chocolate, as well as some ointments, toiletries, cosmetics, and pharmaceuticals.</li>
                                                                <li>Dry Skin, chapped lips diaper rash and minor burns</li>
                                                                <li>Massage, swelling and inflammation</li>
                                                                <li>Conditioner for damaged hair and scalp</li>
                                                                <li>Dark spots and skin discolorations</li>
                                                                <li>Stretch marks, wrinkles and blemishes</li>
                                                            </ul>
                                                        </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                            <div>
                                                                <table class="table border">
                                                                    <thead>
                                                                      <tr>
                                                                        <th scope="col" class="featured-table">Feature</th>
                                                                        <th scope="col" class="desicription-table">Desicription</th>
                                                                      </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                      <tr>
                                                                        <td>Quality</td>
                                                                        <td>Natural Unrefined Cocoa Butter</td>
                                                                      </tr>
                                                                      <tr class="table-active">
                                                                        <td>Color</td>
                                                                        <td>Pale-yellow</td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td>Packing</td>
                                                                        <td> 
                                                                                <p class="pb-1">
                                                                                    Packaging in 25kg & 12kg per carton for Africa and other markets
                                                                                </p>
                                                                                <p>
                                                                                    25 pounds per carton for USA, Canada and the Caribbean.
                                                                                </p>
                                                                                <p class="pb-1">Other Packaging sizes are available but base on client request</p>
                                                                            </td>
                                                                      </tr>
                                                                      <tr class="table-active">
                                                                        <td>Production</td>
                                                                        <td>We produce to meet export or international standards.</td>
                                                                      </tr>
                                                                    </tbody>
                                                                  </table>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane w-100 fade pb-5" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                                            <div class="row justify-content-center align-items-center w-100 border-bottom pb-5">
                                                                <div class="col-lg-3 col-md-4 col-4 justify-content-lg-center align-items-center p-3 border bg-light">
                                                                    <span class="d-flex justify-content-center align-items-end ratings-review">
                                                                        <span class="rated-number display-lg-3 display-4 d-block">4.9</span> out of 5
                                                                    </span>
                                                                    <div class="d-flex justify-content-center align-items-center">
                                                <svg class="" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <svg class=" ms-2" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <svg class=" ms-2" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <svg class=" ms-2" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <svg class="ms-2" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                
                                              </div>
                                              <span class="text-center w-100 rate-count count d-block">(123 Reviews)</span>
                                                                </div>
                            
                                                                <div class="ms-lg-5 ms-3 col-7 justify-content-center justify-content-lg-start">
                                                                    <div class="top-ratings row align-items-center">
                                                                        <span class="col star-num text-center px-0 mx-0" style="width: 1%;">5 Star</span>
                                                                        <div class="col-10 progress-div px-0 mx-0">
                            
                                                                            <div class="progress mx-0 px-0">
                                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 90%"
                                                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="top-ratings row align-items-center">
                                                                        <span class="col star-num text-center px-0 mx-0" style="width: 1%;">4 Star</span>
                                                                        <div class="col-10 progress-div px-0 mx-0">
                            
                                                                            <div class="progress mx-0 px-0">
                                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 80%"
                                                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="top-ratings row align-items-center">
                                                                        <span class="col star-num text-center px-0 mx-0" style="width: 1%;">3 Star</span>
                                                                        <div class="col-10 progress-div px-0 mx-0">
                            
                                                                            <div class="progress mx-0 px-0">
                                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 65%"
                                                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="top-ratings row align-items-center">
                                                                        <span class="col star-num text-center px-0 mx-0" style="width: 1%;">2 Star</span>
                                                                        <div class="col-10 progress-div px-0 mx-0">
                            
                                                                            <div class="progress mx-0 px-0">
                                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 25%"
                                                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="top-ratings row align-items-center">
                                                                        <span class="col star-num text-center px-0 mx-0" style="width: 2%;">1 Star</span>
                                                                        <div class="col-10 progress-div px-0 mx-0">
                            
                                                                            <div class="progress mx-0 px-0">
                                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 5%"
                                                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Bodicare tab -->
                                <div class="tab-pane fade show" id="product-6" role="tabpanel"
                                    aria-labelledby="product-6-tab">

                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-lg-4 col-md-6 col-11 ms-lg-4">
                                                <div class="card p-2">
                                                    <img src="/public/src/img/products/bodicare.png" class="card-img-top w-100" alt="ceo-image">
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-md-6 col-11 ms-lg-3 my-lg-3 mt-4 mt-lg-0">
                                                <div class="">
                                                <div class="header d-flex">
                                                    <h4 class="text-uppercase fs-5 ms-2">BODICARE ORGANIC AFRICAN BLACK
                                                        SOAP</h4>
                                                </div>
                                                <p class="">Traditionally extracted African Black Soap</p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <svg class="" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <svg class=" ms-2" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <svg class=" ms-2" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <svg class=" ms-2" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <svg class=" ms-2" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <span class="d-flex justify-content-center align-items-center ratings-review">
                                                    <span class="rated-number ms-2 d-block">4.9</span>( <span class="rate-count">123 </span> &nbsp; Reviews)
                                                </span>
                                              </div>
                                              <p class="py-2 pe-lg-5">Packaging in 25kg & 12kg per carton for Africa and other markets; 25pounds per carton for USA, Canada and the Caribbean. Other Packaging sizes are available but base on client request.</p>
                            
                                              <div class="d-flex">
                                                <button class="btn cart-btn">Add to Cart</button>
                                                <a href="#buynow" class="btn ms-2 buy-btn">Buy Now</a>
                                              </div>
                                            </div>
                            
                                            </div>
                                            <div class="row justify-content-center align-items-center w-100">
                            
                                            
                            
                                                <div class="col-lg-10 mt-5 products-links" id="link-div">
                                                    <ul class="nav nav-pills mt-3 mb-3 w-100 justify-content-center gap-4" id="pills-tab" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Desicription</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Addtional Info</button>
                                                        </li>
                                                       </ul>
                                                      <div class="tab-content mt-4" id="pills-tabContent">
                                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                            <p>
                                                                This is a traditional Ghanaian soap known in Ghana as “alata samina” which has antibacterial properties with a great lather. It contains 100% natural ingredients which helps in moisturizing and preventing dry skin. <br>
                                                                BODICARE Organic African Black Soap is a 100% natural bath soap which is enriched with Shea Butter and coconut oil. With the presence of natural shea butter, this soap is gentle on skin and makes your skin soft, smooth and flawless. It is ideal for all skin types including babies. <br>
                                                                Recommended for those who want to maintain natural beauty and healthy skincare
                                                        </p>
                                                        <div class="ingredients">
                                                            <h5 class="fs-5 fw-bold">Ingredients:</h5>
                                                            <p>Natural Shea Butter (Butyrospermum parkii),water(Aqua),Cocoa Pods Ash(Potash)and Palm Kernel Oil(Elaeis guineensis).</p>
                                                        </div>
                                                        <div class="mt-3">
                                                            <h4 class="fw-bold">What It does</h4>
                                                            <ul class="list-group-disc">
                                                                <li>It is used to make chocolate, as well as some ointments, toiletries, cosmetics, and pharmaceuticals.</li>
                                                                <li>It also helps to soothe irritation and inflammation, clears up pimples and removes bacteria from the surface of the skin
                                                                    that can cause more break-outs keeping you clean and fresh all day</li>
                                                            </ul>
                                                        </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                            <div>
                                                                <table class="table border">
                                                                    <thead>
                                                                      <tr>
                                                                        <th scope="col" class="featured-table">Feature</th>
                                                                        <th scope="col" class="desicription-table">Desicription</th>
                                                                      </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                      <tr>
                                                                        <td>Quality</td>
                                                                        <td>All natural: no chemicals nor animal-derived ingredients added.</td>
                                                                      </tr>
                                                                      <tr class="table-active">
                                                                        <td>Color</td>
                                                                        <td>--</td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td>Packing</td>
                                                                        <td> 
                                                                                <p class="pb-1">
                                                                                    Packaging in 25kg & 12kg per carton for Africa and other markets
                                                                                </p>
                                                                                <p>
                                                                                    25 pounds per carton for USA, Canada and the Caribbean.
                                                                                </p>
                                                                                <p class="pb-1">Other Packaging sizes are available but base on client request</p>
                                                                            </td>
                                                                      </tr>
                                                                      <tr class="table-active">
                                                                        <td>Production</td>
                                                                        <td>We produce to meet export or international standards.</td>
                                                                      </tr>
                                                                    </tbody>
                                                                  </table>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane w-100 fade pb-5" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                                            <div class="row justify-content-center align-items-center w-100 border-bottom pb-5">
                                                                <div class="col-lg-3 col-md-4 col-4 justify-content-lg-center align-items-center p-3 border bg-light">
                                                                    <span class="d-flex justify-content-center align-items-end ratings-review">
                                                                        <span class="rated-number display-lg-3 display-4 d-block">4.9</span> out of 5
                                                                    </span>
                                                                    <div class="d-flex justify-content-center align-items-center">
                                                <svg class="" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <svg class=" ms-2" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <svg class=" ms-2" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <svg class=" ms-2" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                <svg class="ms-2" width="20" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                    fill="#FAC136" />
                                                </svg>
                                                
                                              </div>
                                              <span class="text-center w-100 rate-count count d-block">(123 Reviews)</span>
                                                                </div>
                            
                                                                <div class="ms-lg-5 ms-3 col-7 justify-content-center justify-content-lg-start">
                                                                    <div class="top-ratings row align-items-center">
                                                                        <span class="col star-num text-center px-0 mx-0" style="width: 1%;">5 Star</span>
                                                                        <div class="col-10 progress-div px-0 mx-0">
                            
                                                                            <div class="progress mx-0 px-0">
                                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 90%"
                                                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="top-ratings row align-items-center">
                                                                        <span class="col star-num text-center px-0 mx-0" style="width: 1%;">4 Star</span>
                                                                        <div class="col-10 progress-div px-0 mx-0">
                            
                                                                            <div class="progress mx-0 px-0">
                                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 80%"
                                                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="top-ratings row align-items-center">
                                                                        <span class="col star-num text-center px-0 mx-0" style="width: 1%;">3 Star</span>
                                                                        <div class="col-10 progress-div px-0 mx-0">
                            
                                                                            <div class="progress mx-0 px-0">
                                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 65%"
                                                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="top-ratings row align-items-center">
                                                                        <span class="col star-num text-center px-0 mx-0" style="width: 1%;">2 Star</span>
                                                                        <div class="col-10 progress-div px-0 mx-0">
                            
                                                                            <div class="progress mx-0 px-0">
                                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 25%"
                                                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="top-ratings row align-items-center">
                                                                        <span class="col star-num text-center px-0 mx-0" style="width: 2%;">1 Star</span>
                                                                        <div class="col-10 progress-div px-0 mx-0">
                            
                                                                            <div class="progress mx-0 px-0">
                                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 5%"
                                                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                      </div>
                                                      
                            
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

        </div>
        <!-- Products Section ends here -->
        </div>

        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="w-100 d-flex justify-content-end">
                        <button type="button" class="btn-close btn-danger m-3" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="celebrate text-center mb-3">
                            <svg width="100" height="100" viewBox="0 0 233 233" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.5596 224.39C17.6917 228.868 34.7117 221.059 48.1456 214.797C58.2119 210.119 98.4954 193.59 118.519 185.017C123.925 182.705 131.789 179.683 137.45 172.238C142.474 165.612 155.799 137.47 128.967 108.964C101.736 80.0209 73.6846 88.0121 63.1996 95.439C57.0287 99.8077 52.0046 109.656 49.7474 114.661C40.209 135.814 26.6113 174.568 21.0775 189.804C17.0182 201.035 9.46394 219.948 13.5596 224.39Z"
                                    fill="#FFC107" />
                                <path
                                    d="M47.0526 121.033C47.3074 124.2 47.9445 129.351 50.1289 139.272C51.6216 146.08 54.0608 153.216 56.0449 157.93C61.9974 172.111 70.3526 177.826 78.817 182.414C93.1975 190.204 102.973 191.661 102.973 191.661L91.2498 196.448C91.2498 196.448 84.1506 194.974 74.4665 190.204C65.2375 185.654 55.6263 177.954 48.5999 162.882C45.5599 156.347 43.7942 150.012 42.7749 144.988C41.5188 138.762 41.3186 135.231 41.3186 135.231L47.0526 121.033Z"
                                    fill="#FF8F00" />
                                <path
                                    d="M32.6544 157.948C32.6544 157.948 34.1107 169.762 43.8676 184.671C55.2991 202.109 71.2633 204.967 71.2633 204.967L60.6508 209.336C60.6508 209.336 48.8006 205.713 37.5329 190.332C30.5065 180.739 28.5405 169.271 28.5405 169.271L32.6544 157.948Z"
                                    fill="#FF8F00" />
                                <path
                                    d="M22.5522 185.945C22.5522 185.945 25.2098 196.139 31.0348 203.747C37.9702 212.831 46.7987 215.47 46.7987 215.47L38.6619 219.074C38.6619 219.074 32.4911 217.782 25.7377 209.227C20.6044 202.728 19.1482 195.265 19.1482 195.265L22.5522 185.945Z"
                                    fill="#FF8F00" />
                                <g opacity="0.44">
                                    <path
                                        d="M18.1307 211.83C17.7666 211.01 17.7666 210.082 18.1489 209.281L64.5122 113.132L72.1394 141.802L23.355 212.266C22.0443 214.232 19.0954 213.978 18.1307 211.83Z"
                                        fill="#FFFDE7" />
                                </g>
                                <path
                                    d="M75.8141 151.432C97.4758 176.771 122.141 173.603 130.351 167.196C138.578 160.77 145.077 138.69 123.506 113.77C100.898 87.6665 75.3044 95.1116 69.3884 100.755C63.4723 106.398 55.9362 128.187 75.8141 151.432Z"
                                    fill="url(#paint0_linear_135_836)" />
                                <path
                                    d="M150.208 161.862C142.308 155.236 138.103 156.419 132.46 158.768C125.179 161.789 113.729 164.028 98.1836 158.768L102.862 147.5C112.091 150.613 118.771 149.102 124.542 145.698C131.969 141.329 142.126 135.34 157.926 148.61C164.516 154.144 171.269 157.821 176.22 156.146C179.825 154.945 181.736 149.575 182.701 145.297C182.792 144.915 182.937 143.823 183.047 142.858C183.92 136.178 185.377 121.761 196.116 114.388C207.603 106.506 219.671 106.506 219.671 106.506L221.856 128.205C216.304 127.385 212.445 128.514 209.186 130.316C196.917 137.142 207.603 163.355 188.507 172.165C170.141 180.702 155.123 165.976 150.208 161.862Z"
                                    fill="#03A9F4" />
                                <path
                                    d="M82.6421 134.193L74.742 127.112C89.2499 110.912 85.4272 99.0068 82.6421 90.3421C82.0779 88.5946 81.55 86.9381 81.2041 85.3545C79.9663 79.7479 79.7114 74.8695 80.0937 70.6099C74.5236 63.6745 72.0661 56.4115 71.9023 55.92C68.5165 45.6716 71.065 35.6781 76.9082 26.3035C88.722 7.28125 110.111 7.28125 110.111 7.28125L117.246 26.3763C111.822 26.1579 94.0373 26.4309 88.5764 35.041C81.6774 45.8901 86.21 52.5888 86.5376 53.3534C87.8664 51.6241 89.2135 50.2406 90.4149 49.1666C99.1342 41.4303 106.707 40.3199 111.531 40.7568C116.955 41.2483 121.87 43.9788 125.383 48.4567C129.224 53.3716 130.808 59.7609 129.588 65.5677C128.405 71.2288 124.637 76.0163 118.976 79.0562C109.091 84.3715 100.863 83.6434 95.3479 81.8048C95.3843 81.9323 95.4025 82.0779 95.4389 82.2053C95.6392 83.1155 96.0396 84.3897 96.5129 85.8641C99.7349 95.8394 105.724 111.676 82.6421 134.193ZM96.0214 65.8771C97.0772 66.6416 98.1876 67.2787 99.3344 67.7338C103.157 69.2629 107.326 68.7532 112.058 66.2048C114.843 64.7121 115.171 63.1102 115.28 62.5823C115.608 60.9987 115.062 58.9781 113.879 57.4673C112.841 56.1384 111.64 55.4467 110.202 55.3011C107.471 55.0645 103.776 56.7937 100.081 60.0885C98.315 61.6722 96.968 63.6199 96.0214 65.8771Z"
                                    fill="#F44336" />
                                <path
                                    d="M114.256 137.161L102.951 136.851C102.951 136.851 108.321 106.525 125.705 101.428C128.964 100.481 132.531 99.5166 136.118 98.9887C138.247 98.6611 141.615 98.1696 143.271 97.5507C143.654 94.6928 142.452 91.0522 141.105 86.9201C140.049 83.7163 138.957 80.4215 138.375 76.8173C137.246 69.7909 139.121 63.5837 143.654 59.3059C149.187 54.118 158.125 52.4616 168.21 54.7551C173.962 56.0658 178.203 58.8872 181.935 61.3629C187.268 64.9125 190.381 66.7146 196.898 62.3276C204.78 57.0123 194.477 36.2062 188.998 24.1921L209.44 15.673C212.188 21.6801 225.458 52.589 216.703 70.2278C213.754 76.162 208.675 80.0939 202.013 81.5684C187.523 84.8085 179.04 79.1655 172.851 75.0516C169.921 73.1039 167.354 71.5748 164.569 70.7739C145.219 65.2583 172.233 93.728 159.581 106.525C151.991 114.188 133.442 116.209 132.24 116.5C120.299 119.376 114.256 137.161 114.256 137.161Z"
                                    fill="#F48FB1" />
                                <path
                                    d="M80.072 70.6101C79.7261 74.6148 79.5623 76.9994 80.5999 82.2055C85.6057 85.8825 96.5094 85.8825 96.5094 85.8825C96.0361 84.4081 95.6175 83.1339 95.4354 82.2237C95.399 82.0963 95.3808 81.9507 95.3444 81.8232C84.2587 76.2895 80.072 70.6101 80.072 70.6101Z"
                                    fill="#C92B27" />
                                <path
                                    d="M57.3916 88.5399L38.5696 79.3109L47.9442 65.7678L62.7069 75.5428L57.3916 88.5399Z"
                                    fill="#FFC107" />
                                <path
                                    d="M29.6499 62.9829C20.0387 61.6905 10.2454 53.5355 9.17139 52.6071L18.6188 41.5214C21.4767 43.9424 27.5383 48.0017 31.5976 48.5478L29.6499 62.9829Z"
                                    fill="#FB8C00" />
                                <path
                                    d="M46.6178 38.7182L32.7834 34.1856C34.3671 29.3436 34.7858 24.1193 33.9666 19.0771L48.3471 16.7653C49.5303 24.0829 48.9296 31.6736 46.6178 38.7182Z"
                                    fill="#03A9F4" />
                                <path
                                    d="M147.239 24.7844L133.013 27.8964L137.121 46.6748L151.347 43.5628L147.239 24.7844Z"
                                    fill="#FB8C00" />
                                <path
                                    d="M168.304 32.3471L158.292 21.7711C163.534 16.8016 164.736 10.3031 164.736 10.2303L179.116 12.5785C178.934 13.7253 177.096 24.0283 168.304 32.3471Z"
                                    fill="#FFC107" />
                                <path
                                    d="M186.584 84.4587L173.865 88.4334L178.209 102.333L190.928 98.3586L186.584 84.4587Z"
                                    fill="#FB8C00" />
                                <path
                                    d="M177.572 205.75L163.1 204.039C163.719 198.887 159.878 192.571 158.823 191.169L170.473 182.432C171.346 183.578 178.937 194.082 177.572 205.75Z"
                                    fill="#F44336" />
                                <path
                                    d="M219.109 187.292C213.666 186.473 208.096 186.146 202.599 186.346L202.107 171.783C208.496 171.565 214.959 171.929 221.275 172.894L219.109 187.292Z"
                                    fill="#FB8C00" />
                                <path d="M209.761 196.975L199.53 207.338L213.61 221.24L223.842 210.877L209.761 196.975Z"
                                    fill="#F48FB1" />
                                <path
                                    d="M179.987 127.312L169.466 115.282L157.436 125.803L167.958 137.833L179.987 127.312Z"
                                    fill="#F44336" />
                                <defs>
                                    <linearGradient id="paint0_linear_135_836" x1="135.401" y1="112.566" x2="81.2149"
                                        y2="145.077" gradientUnits="userSpaceOnUse">
                                        <stop offset="0.0235" stop-color="#8F4700" />
                                        <stop offset="1" stop-color="#703E2D" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>

                        <div class="feedback-message text-center py-2">
                            <h5>Your account details has been updated successfully !</h5>
                            <div class="w-100 d-flex align-items-center justify-content-center check-update">Want to
                                check your details to confirm?
                                <button type="button" class="btn close-update" data-bs-dismiss="modal">Check it
                                    out</button>
                            </div>

                        </div>

                        <div class="w-100 my-3 d-flex justify-content-center align-items-center">
                            <a href="/index.html" class="btn btn-send" data-bs-dismiss="modal">Go back to homepage</a>
                        </div>


                        <div class="my-4 connect text-center">
                            <h5>Lets Connect!</h5>
                            <a href="#linkedin" class="me-1 text-decoration-none">
                                <svg width="41" height="40" viewBox="0 0 41 40" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M27.9659 11.1133H11.9493C11.2154 11.1133 10.6191 11.7179 10.6191 12.4602V28.4475C10.6191 29.1897 11.2154 29.7944 11.9493 29.7944H27.9659C28.6998 29.7944 29.3002 29.1897 29.3002 28.4475V12.4602C29.3002 11.7179 28.6998 11.1133 27.9659 11.1133ZM16.2652 27.1256H13.4964V18.2104H16.2693V27.1256H16.2652ZM14.8808 16.9928C13.9926 16.9928 13.2754 16.2714 13.2754 15.3874C13.2754 14.5034 13.9926 13.782 14.8808 13.782C15.7648 13.782 16.4862 14.5034 16.4862 15.3874C16.4862 16.2756 15.7689 16.9928 14.8808 16.9928ZM26.644 27.1256H23.8752V22.789C23.8752 21.7548 23.8544 20.4246 22.4366 20.4246C20.9938 20.4246 20.7728 21.5505 20.7728 22.7139V27.1256H18.004V18.2104H20.6602V19.428H20.6978C21.0689 18.7275 21.9737 17.9894 23.3206 17.9894C26.1228 17.9894 26.644 19.8367 26.644 22.2385V27.1256Z"
                                        fill="black" />
                                    <circle cx="20.3486" cy="20.0645" r="19.3486" stroke="black" />
                                </svg>
                            </a>
                            <a href="#facebook" class="mx-1 text-decoration-none">
                                <svg width="41" height="40" viewBox="0 0 41 40" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="20.5003" cy="20.0645" r="19.3486" stroke="black" />
                                    <path
                                        d="M27.8952 20.4537C27.8952 16.1571 24.4081 12.6699 20.1114 12.6699C15.8148 12.6699 12.3276 16.1571 12.3276 20.4537C12.3276 24.2211 15.0053 27.3579 18.5547 28.0818V22.7888H16.9979V20.4537H18.5547V18.5078C18.5547 17.0055 19.7767 15.7834 21.279 15.7834H23.2249V18.1186H21.6682C21.2401 18.1186 20.8898 18.4688 20.8898 18.8969V20.4537H23.2249V22.7888H20.8898V28.1986C24.8206 27.8094 27.8952 24.4935 27.8952 20.4537Z"
                                        fill="black" />
                                </svg>
                            </a>
                            <a href="#instagram" class="ms-1 text-decoration-none">
                                <svg width="41" height="40" viewBox="0 0 41 40" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="20.6514" cy="20.0645" r="19.3486" stroke="black" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M16.1915 13.5119C18.8972 13.212 21.6277 13.212 24.3334 13.5119C25.8115 13.6769 27.0032 14.8406 27.1768 16.3242C27.4976 19.0677 27.4976 21.8393 27.1768 24.5828C27.0032 26.0664 25.8115 27.2301 24.3341 27.3959C21.6282 27.6958 18.8974 27.6958 16.1915 27.3959C14.7134 27.2301 13.5217 26.0664 13.3481 24.5836C13.0272 21.8398 13.0272 19.068 13.3481 16.3242C13.5217 14.8406 14.7134 13.6769 16.1915 13.5119ZM24.1543 15.7832C23.9479 15.7832 23.7499 15.8652 23.6039 16.0112C23.458 16.1572 23.3759 16.3552 23.3759 16.5616C23.3759 16.768 23.458 16.966 23.6039 17.112C23.7499 17.258 23.9479 17.34 24.1543 17.34C24.3608 17.34 24.5588 17.258 24.7047 17.112C24.8507 16.966 24.9327 16.768 24.9327 16.5616C24.9327 16.3552 24.8507 16.1572 24.7047 16.0112C24.5588 15.8652 24.3608 15.7832 24.1543 15.7832ZM16.5651 20.4535C16.5651 19.4729 16.9547 18.5325 17.6481 17.8391C18.3414 17.1457 19.2819 16.7562 20.2624 16.7562C21.243 16.7562 22.1834 17.1457 22.8768 17.8391C23.5702 18.5325 23.9597 19.4729 23.9597 20.4535C23.9597 21.4341 23.5702 22.3745 22.8768 23.0679C22.1834 23.7613 21.243 24.1508 20.2624 24.1508C19.2819 24.1508 18.3414 23.7613 17.6481 23.0679C16.9547 22.3745 16.5651 21.4341 16.5651 20.4535Z"
                                        fill="black" />
                                    <path
                                        d="M20.2624 17.9241C19.5915 17.9241 18.948 18.1906 18.4736 18.665C17.9992 19.1394 17.7327 19.7829 17.7327 20.4538C17.7327 21.1247 17.9992 21.7682 18.4736 22.2426C18.948 22.717 19.5915 22.9835 20.2624 22.9835C20.9333 22.9835 21.5768 22.717 22.0512 22.2426C22.5256 21.7682 22.7921 21.1247 22.7921 20.4538C22.7921 19.7829 22.5256 19.1394 22.0512 18.665C21.5768 18.1906 20.9333 17.9241 20.2624 17.9241Z"
                                        fill="black" />
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <!-- Shipping Section starts here-->
        <div class="bg-white py-4">
            <div class="container d-lg-flex justify-content-lg-between align-items-center">
                <!-- Shipping -->
                <div class="d-flex">
                    <div class="box me-2">
                        <svg width="50" height="60" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                        <svg width="50" height="60" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                        <svg width="50" height="60" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
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
