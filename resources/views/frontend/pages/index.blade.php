@extends('frontend.layout')
@section('content')
    <!-- Main Content starts here -->
    <main class="bg-light">
        <!-- Hero Header starts here -->
        <div
            class="hero-header container d-flex flex-column-reverse flex-lg-row justify-content-center justify-content-lg-between align-items-center py-4">
            <!-- Explore Products -->
            <div class="explore w-100 me-lg-2 mt-5 mt-lg-0">
                <div class="d-flex">

                    <div class="d-flex w-100 justify-content-lg-start justify-content-center">
                        <div
                            class="credible d-flex py-2 px-3 justify-content-center align-items-center text-center rounded-pill m-0 bg-white">
                            <span class="me-2">
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_11_2)">
                                        <path
                                            d="M18.5562 8.19875L16.8293 8.38063L17.583 4.69812C17.6507 4.36631 17.8071 4.05907 18.0356 3.80912C18.2641 3.55917 18.5561 3.37587 18.8805 3.27875L22.3474 2.23625C23.0355 2.03 23.7293 2.54375 23.7293 3.26375C23.7293 3.94063 23.0562 4.41313 22.4205 4.1825L21.9387 4.07375L19.9962 4.64937C19.8073 4.70559 19.6364 4.81029 19.5005 4.95306C19.3647 5.09583 19.2686 5.27168 19.2218 5.46312L18.5562 8.19875ZM16.7655 16.0156L15.5637 21.125L14.103 20.6094L15.003 16.0156H16.7655Z"
                                            fill="#3C5408" />
                                        <path d="M15.9162 19.625H4.11865V21.1869H15.6499L15.9162 19.625Z" fill="#3C5408" />
                                        <path
                                            d="M0.951792 9.515L2.34117 16.2875C2.44804 16.8125 2.90929 17.1875 3.44367 17.1875H16.2912C16.376 17.1876 16.4583 17.1588 16.5247 17.1061C16.5912 17.0533 16.6377 16.9795 16.6568 16.8969L18.9105 7.145C18.9687 6.89562 18.7662 6.665 18.5112 6.6875L1.95304 8.16875C1.79525 8.18281 1.64221 8.23006 1.50395 8.3074C1.3657 8.38475 1.24536 8.49045 1.15082 8.61756C1.05628 8.74468 0.989673 8.89035 0.955373 9.04501C0.921074 9.19967 0.919854 9.35983 0.951792 9.515ZM3.56742 9.71937L4.36617 9.64812C4.44401 9.64112 4.52247 9.65041 4.59653 9.6754C4.67059 9.70039 4.73863 9.74054 4.79631 9.79328C4.85399 9.84603 4.90005 9.91021 4.93156 9.98174C4.96306 10.0533 4.97932 10.1306 4.97929 10.2087V11.1125C4.97929 11.4237 4.72804 11.675 4.41679 11.675H3.57679C3.31054 11.675 3.07992 11.4875 3.02554 11.225L2.90179 10.6175C2.87992 10.5141 2.88025 10.4073 2.90276 10.304C2.92527 10.2008 2.96945 10.1035 3.03237 10.0186C3.0953 9.93366 3.17553 9.86308 3.26777 9.81151C3.36 9.75993 3.46214 9.72853 3.56742 9.71937ZM10.7318 13.1731H11.7968C12.108 13.1731 12.3593 13.4244 12.3593 13.7356V14.9375C12.3593 15.2487 12.108 15.5 11.7968 15.5H10.7318C10.4205 15.5 10.1693 15.2487 10.1693 14.9375V13.7356C10.1693 13.4244 10.4205 13.1731 10.7318 13.1731ZM11.7968 11.6731H10.7318C10.4205 11.6731 10.1693 11.4219 10.1693 11.1106V9.6425C10.1693 9.35187 10.3924 9.10812 10.6812 9.08187L11.7462 8.98625C11.824 8.97924 11.9025 8.98853 11.9765 9.01353C12.0506 9.03852 12.1186 9.07867 12.1763 9.13141C12.234 9.18415 12.2801 9.24834 12.3116 9.31987C12.3431 9.3914 12.3593 9.46871 12.3593 9.54687V11.1106C12.3593 11.4219 12.108 11.6731 11.7968 11.6731ZM8.66929 13.7356V14.9375C8.66929 15.2487 8.41804 15.5 8.10679 15.5H7.04179C6.73054 15.5 6.47929 15.2487 6.47929 14.9375V13.7356C6.47929 13.4244 6.73054 13.1731 7.04179 13.1731H8.10679C8.41804 13.1731 8.66929 13.4244 8.66929 13.7356ZM8.10679 11.6731H7.04179C6.73054 11.6731 6.47929 11.4219 6.47929 11.1106V9.9725C6.47929 9.68187 6.70242 9.43812 6.99117 9.41187L8.05617 9.31625C8.13401 9.30924 8.21247 9.31853 8.28653 9.34352C8.36059 9.36852 8.42862 9.40867 8.48631 9.46141C8.54399 9.51415 8.59005 9.57834 8.62156 9.64987C8.65306 9.7214 8.66932 9.79871 8.66929 9.87687V11.1106C8.66929 11.4219 8.41804 11.6731 8.10679 11.6731ZM16.683 9.28437L16.2312 11.2362C16.2025 11.36 16.1328 11.4704 16.0334 11.5494C15.934 11.6284 15.8107 11.6713 15.6837 11.6712H14.4218C14.1105 11.6712 13.8593 11.42 13.8593 11.1087V9.3125C13.8593 9.02187 14.0824 8.77812 14.3712 8.75187L16.083 8.59812C16.4655 8.56437 16.7693 8.91312 16.683 9.28437ZM14.6505 15.5H14.2362C14.0299 15.5 13.8612 15.3312 13.8612 15.125V13.7356C13.8612 13.4244 14.1124 13.1731 14.4237 13.1731H15.078C15.4399 13.1731 15.708 13.5106 15.6255 13.8631L15.3818 14.9206C15.3429 15.0854 15.2496 15.2323 15.1169 15.3374C14.9842 15.4426 14.8199 15.4999 14.6505 15.5ZM3.53929 13.73C3.47929 13.4412 3.70054 13.1712 3.99492 13.1712H4.41679C4.72804 13.1712 4.97929 13.4225 4.97929 13.7337V15.0331C4.97929 15.1565 4.9303 15.2747 4.8431 15.3619C4.75589 15.4491 4.63762 15.4981 4.51429 15.4981C4.15804 15.4981 3.85054 15.2469 3.77929 14.8981L3.53929 13.73Z"
                                            fill="#FAC136" />
                                        <path
                                            d="M14.7495 22.4994C15.8886 22.4994 16.812 21.576 16.812 20.4369C16.812 19.2978 15.8886 18.3744 14.7495 18.3744C13.6104 18.3744 12.687 19.2978 12.687 20.4369C12.687 21.576 13.6104 22.4994 14.7495 22.4994Z"
                                            fill="#2F2F2F" />
                                        <path
                                            d="M14.7495 21.3987C15.2807 21.3987 15.7113 20.9681 15.7113 20.4369C15.7113 19.9056 15.2807 19.475 14.7495 19.475C14.2182 19.475 13.7876 19.9056 13.7876 20.4369C13.7876 20.9681 14.2182 21.3987 14.7495 21.3987Z"
                                            fill="#FAC136" />
                                        <path
                                            d="M4.84229 22.4994C5.98137 22.4994 6.90479 21.576 6.90479 20.4369C6.90479 19.2978 5.98137 18.3744 4.84229 18.3744C3.7032 18.3744 2.77979 19.2978 2.77979 20.4369C2.77979 21.576 3.7032 22.4994 4.84229 22.4994Z"
                                            fill="#2F2F2F" />
                                        <path
                                            d="M4.84225 21.3987C5.37348 21.3987 5.80412 20.9681 5.80412 20.4369C5.80412 19.9056 5.37348 19.475 4.84225 19.475C4.31102 19.475 3.88037 19.9056 3.88037 20.4369C3.88037 20.9681 4.31102 21.3987 4.84225 21.3987Z"
                                            fill="#FAC136" />
                                        <path
                                            d="M22.8215 4.93625C23.5888 4.93625 24.2109 4.31421 24.2109 3.54688C24.2109 2.77955 23.5888 2.1575 22.8215 2.1575C22.0542 2.1575 21.4321 2.77955 21.4321 3.54688C21.4321 4.31421 22.0542 4.93625 22.8215 4.93625Z"
                                            fill="#FAC136" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_11_2">
                                            <rect width="24" height="24" fill="white"
                                                transform="translate(0.585938 0.5)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span> An credible export brand</p>
                        </div>
                        <span class="">
                            <svg width="27" height="26" viewBox="0 0 27 26" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.92994 0L9.30494 2.28L7.05494 1.687L8.67994 3.406L7.05494 5.093L9.30494 4.5L9.92994 6.812L10.5549 4.499L12.8049 5.093L11.1799 3.407L12.8049 1.688L10.5549 2.282L9.92994 0ZM2.89894 6.437L2.39894 8.25L0.585938 7.78L1.89994 9.126L0.585938 10.467L2.39894 9.998L2.89894 11.811L3.42994 9.999L5.24294 10.469L3.92994 9.123L5.24294 7.78L3.42994 8.249L2.89894 6.437ZM18.5239 7.125C19.9959 7.77364 21.2469 8.83733 22.1238 10.1859C23.0006 11.5345 23.4653 13.1094 23.4609 14.718C23.4609 19.299 19.7759 22.999 15.2109 22.999C13.5992 22.9988 12.0225 22.5287 10.6738 21.6464C9.32507 20.764 8.26279 19.5076 7.61694 18.031C8.00905 20.1979 9.15026 22.1581 10.8411 23.5689C12.5319 24.9797 14.6648 25.7514 16.8669 25.749C18.0986 25.7508 19.3185 25.5096 20.4568 25.0391C21.595 24.5686 22.6293 23.8782 23.5002 23.0072C24.3711 22.1363 25.0616 21.1021 25.5321 19.9638C26.0025 18.8256 26.2438 17.6057 26.2419 16.374C26.2431 14.1722 25.471 12.0399 24.0604 10.3493C22.6498 8.65874 20.6903 7.51721 18.5239 7.124V7.125Z"
                                    fill="#3C5408" />
                                <path d="M22.0859 9.5642L13.0859 3.5642L9.58594 16.5642L22.0859 9.5642Z" fill="#FAC136" />
                                <path
                                    d="M6.58594 7.5642C7.78594 5.1642 5.7526 3.5642 4.58594 3.0642C6.58594 2.6642 9.08594 4.23087 10.0859 5.0642L5.58594 10.5642L6.58594 7.5642Z"
                                    fill="#FAC136" />
                                <path d="M22.0859 9.5642L13.0859 3.5642L9.58594 16.5642L22.0859 9.5642Z" stroke="#FAC136" />
                                <path
                                    d="M6.58594 7.5642C7.78594 5.1642 5.7526 3.5642 4.58594 3.0642C6.58594 2.6642 9.08594 4.23087 10.0859 5.0642L5.58594 10.5642L6.58594 7.5642Z"
                                    stroke="#FAC136" />
                            </svg>

                        </span>
                    </div>
                </div>
                <div class="hero-text my-2">
                    <h1 class="fw-bold d-none d-lg-block display-4">Explore our Quality
                        And Rich Products</h1>
                    <p class="mt-2 fs-6 d-none d-lg-block">With over 7 years of experience, we are well known as a credible,
                        reliable, and trusted export brand serving our clients with quality
                        products at competitive rates. We have also carved a niche for
                        ourselves in the market as the preferred producer and supplier
                        of natural products.</p>
                    <h1 class="fw-bold display-4 d-block d-lg-none text-center">Explore our Quality
                        And Rich Products</h1>
                    <p class="mt-2 fs-6 d-block d-lg-none text-center">With over 7 years of experience, we are well known as
                        a
                        credible,
                        reliable, and trusted export brand serving our clients with quality
                        products at competitive rates. We have also carved a niche for
                        ourselves in the market as the preferred producer and supplier
                        of natural products.</p>

                    <div class="d-flex align-items-center my-3">
                        <a href="{{ route('frontend.about') }}" class="btn text-light px-3 py-2 rounded-pill details">See Details <svg
                                class="ms-2" width="18" height="15" viewBox="0 0 18 15" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17.293 8.20711C17.6836 7.81658 17.6836 7.18342 17.293 6.79289L10.9291 0.428933C10.5386 0.0384087 9.90539 0.0384086 9.51487 0.428933C9.12435 0.819457 9.12435 1.45262 9.51487 1.84315L15.1717 7.5L9.51487 13.1569C9.12435 13.5474 9.12435 14.1805 9.51487 14.5711C9.90539 14.9616 10.5386 14.9616 10.9291 14.5711L17.293 8.20711ZM0.585937 8.5L16.5859 8.5L16.5859 6.5L0.585938 6.5L0.585937 8.5Z"
                                    fill="white" />
                            </svg></a>
                        <a href="{{ route('frontend.product') }}" class="text-dark ms-4">View All Products</a>
                    </div>

                    <div class="ratings-header d-flex w-100">
                        <div class="images d-flex me-3 justify-content-center align-items-center">
                            <img src="{{ asset('assets/frontend/images/ratings/rating0.jpeg') }}" alt=""
                                class="rounded-circle img-fluid ratings">
                            <img src="{{ asset('assets/frontend/images/ratings/rating1.jpeg') }}" alt=""
                                class="rounded-circle img-fluid ratings rating">
                            <img src="{{ asset('assets/frontend/images/ratings/rating2.jpeg') }}" alt=""
                                class="rounded-circle img-fluid ratings rating">
                            <img src="{{ asset('assets/frontend/images/ratings/rating3.jpeg') }}" alt=""
                                class="rounded-circle img-fluid ratings rating">
                            <img src="" alt="">
                            <img src="" alt="">
                        </div>
                        <div class="rated">

                            <h5 class="fs-3">4.9+ Ratings</h5>
                            <p>Trusted by many customers.</p>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Video -->
            <div
                class="embed-responsive embed-responsive-16by9 video-embeded w-100 h-100 shadow ms-lg-2 px-2 border-1 bg-white py-3">
                <img src="{{ asset('assets/frontend/images/vid-embed.png') }}') }}" alt="" class="w-100">
                <!-- <iframe class="embed-responsive-item vh-50" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe> -->
                <p class="my-4 text-center d-none d-lg-block">We are into bulk export both air shipping and sea.
                    We however have different Minimum Order Quantity (MOQ) for air and sea
                    as well as different MOQ on some products.</p>
                <p class="my-4 d-block d-lg-none text-center">
                    We however have different Minimum Order Quantity (MOQ) for air and sea.</p>
            </div>
        </div>
        <!-- Hero Header ends here -->

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

        <!-- Our products Section starts here -->
        <div class="container py-5">
            <div class="header text-center d-flex justify-content-center w-100 h-100">
                <img src="{{ asset('assets/frontend/images/line.svg') }}') }}" alt="" class="line">
                <h3 class="text-uppercase ms-2 px-2 py-1 border bg-white border-dark rounded d-block">Our Products</h3>
            </div>

            <h1 class="my-3 text-center">Explore Our Products</h1>

            <div class="row justify-content-center align-items-center">
                @foreach ($products as $product)
                <div class="col-lg-3 col-md-6 col-11 ms-lg-4">
                    <div class="card p-2">
                        <img src="{{ asset('assets/frontend/images/products/featured/' . $product->feature_image) }}" class="card-img-top w-100"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">{{ $product->title }}</h5>
                            <p class="card-text">{{ $product->summary }}</p>
                            <div class="d-flex justify-content-center align-items-center">
                                <a href="{{ route('front.product.details', $product->slug) }}"
                                    class="btn rounded-pill details details-products text-white">See
                                    Details <svg class="ms-2" width="15" height="15" viewBox="0 0 18 15"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
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
        <!-- Our products Section ends here -->


        <!-- Export Section starts here -->
        <div class="bg-white">
            <div class="container py-5">
                <div class="header text-center d-flex justify-content-center w-100 h-100">
                    <img src="{{ asset('assets/frontend/images/line.svg') }}" alt="" class="line">
                    <h4 class="text-uppercase ms-2 px-2 py-1 border bg-white border-dark rounded d-block">OUR EXPORT
                        DESTINATION
                    </h4>
                </div>

                <h2 class="my-3 text-center">Countries We Current Export Our Products</h2>
                <p class="text-center fw-bold">Both by Air or Sea</p>

                <div class="row">
                    <div class="col-lg-3 col-md-6 mt-3 mt-lg-0">
                        <div class="card p-2">
                            <img src="{{ asset('assets/frontend/images/countries/usa.png') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                            </div>
                            <div class="ratings-header d-flex w-100 ps-2">
                                <div class="images d-flex me-3 justify-content-center align-items-center">
                                    <img src="{{ asset('assets/frontend/images/ratings/rating0.jpeg') }}" alt=""
                                        class="rounded-circle img-fluid ratings-country">
                                    <img src="{{ asset('assets/frontend/images/ratings/rating1.jpeg') }}" alt=""
                                        class="rounded-circle img-fluid ratings-country rating">
                                    <img src="{{ asset('assets/frontend/images/ratings/rating2.jpeg') }}" alt=""
                                        class="rounded-circle img-fluid ratings-country rating">
                                    <img src="{{ asset('assets/frontend/images/ratings/rating3.jpeg') }}" alt=""
                                        class="rounded-circle img-fluid ratings-country rating">
                                    <img src="" alt="">
                                    <img src="" alt="">
                                </div>
                                <div class="rated-country">

                                    <p class="fs-6">4.9+ Ratings</p>
                                    <span>Trusted by many customers.</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-3 mt-lg-0">
                        <div class="card p-2">
                            <img src="{{ asset('assets/frontend/images/countries/uk.png') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                            </div>
                            <div class="ratings-header d-flex w-100 ps-2">
                                <div class="images d-flex me-3 justify-content-center align-items-center">
                                    <img src="{{ asset('assets/frontend/images/ratings/rating0.jpeg') }}" alt=""
                                        class="rounded-circle img-fluid ratings-country">
                                    <img src="{{ asset('assets/frontend/images/ratings/rating1.jpeg') }}" alt=""
                                        class="rounded-circle img-fluid ratings-country rating">
                                    <img src="{{ asset('assets/frontend/images/ratings/rating2.jpeg') }}" alt=""
                                        class="rounded-circle img-fluid ratings-country rating">
                                    <img src="{{ asset('assets/frontend/images/ratings/rating3.jpeg') }}" alt=""
                                        class="rounded-circle img-fluid ratings-country rating">
                                    <img src="" alt="">
                                    <img src="" alt="">
                                </div>
                                <div class="rated-country">

                                    <p class="fs-6">4.9+ Ratings</p>
                                    <span>Trusted by many customers.</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-3 mt-lg-0">
                        <div class="card p-2">
                            <img src="{{ asset('assets/frontend/images/countries/canada.png') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                            </div>
                            <div class="ratings-header d-flex w-100 ps-2">
                                <div class="images d-flex me-3 justify-content-center align-items-center">
                                    <img src="{{ asset('assets/frontend/images/ratings/rating0.jpeg') }}" alt=""
                                        class="rounded-circle img-fluid ratings-country">
                                    <img src="{{ asset('assets/frontend/images/ratings/rating1.jpeg') }}" alt=""
                                        class="rounded-circle img-fluid ratings-country rating">
                                    <img src="{{ asset('assets/frontend/images/ratings/rating2.jpeg') }}" alt=""
                                        class="rounded-circle img-fluid ratings-country rating">
                                    <img src="{{ asset('assets/frontend/images/ratings/rating3.jpeg') }}" alt=""
                                        class="rounded-circle img-fluid ratings-country rating">
                                    <img src="" alt="">
                                    <img src="" alt="">
                                </div>
                                <div class="rated-country">

                                    <p class="fs-6">4.9+ Ratings</p>
                                    <span>Trusted by many customers.</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-3 mt-lg-0">
                        <div class="card p-2">
                            <img src="{{ asset('assets/frontend/images/countries/egypt.png') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                            </div>
                            <div class="ratings-header d-flex w-100 ps-2">
                                <div class="images d-flex me-3 justify-content-center align-items-center">
                                    <img src="{{ asset('assets/frontend/images/ratings/rating0.jpeg') }}" alt=""
                                        class="rounded-circle img-fluid ratings-country">
                                    <img src="{{ asset('assets/frontend/images/ratings/rating1.jpeg') }}" alt=""
                                        class="rounded-circle img-fluid ratings-country rating">
                                    <img src="{{ asset('assets/frontend/images/ratings/rating2.jpeg') }}" alt=""
                                        class="rounded-circle img-fluid ratings-country rating">
                                    <img src="{{ asset('assets/frontend/images/ratings/rating3.jpeg') }}" alt=""
                                        class="rounded-circle img-fluid ratings-country rating">
                                    <img src="" alt="">
                                    <img src="" alt="">
                                </div>
                                <div class="rated-country">

                                    <p class="fs-6">4.9+ Ratings</p>
                                    <span>Trusted by many customers.</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row mt-lg-3">
                    <div class="col-lg-3 col-md-6 mt-3 mt-lg-0">
                        <div class="card p-2">
                            <img src="{{ asset('assets/frontend/images/countries/usa.png') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                            </div>
                            <div class="ratings-header d-flex w-100 ps-2">
                                <div class="images d-flex me-3 justify-content-center align-items-center">
                                    <img src="{{ asset('assets/frontend/images/ratings/rating0.jpeg') }}" alt=""
                                        class="rounded-circle img-fluid ratings-country">
                                    <img src="{{ asset('assets/frontend/images/ratings/rating1.jpeg') }}" alt=""
                                        class="rounded-circle img-fluid ratings-country rating">
                                    <img src="{{ asset('assets/frontend/images/ratings/rating2.jpeg') }}" alt=""
                                        class="rounded-circle img-fluid ratings-country rating">
                                    <img src="{{ asset('assets/frontend/images/ratings/rating3.jpeg') }}" alt=""
                                        class="rounded-circle img-fluid ratings-country rating">
                                    <img src="" alt="">
                                    <img src="" alt="">
                                </div>
                                <div class="rated-country">

                                    <p class="fs-6">4.9+ Ratings</p>
                                    <span class="m-0 p-0">Trusted by many customers.</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-3 mt-lg-0">
                        <div class="card p-2">
                            <img src="{{ asset('assets/frontend/images/countries/uk.png') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                            </div>
                            <div class="ratings-header d-flex w-100 ps-2">
                                <div class="images d-flex me-3 justify-content-center align-items-center">
                                    <img src="{{ asset('assets/frontend/images/ratings/rating0.jpeg') }}" alt=""
                                        class="rounded-circle img-fluid ratings-country">
                                    <img src="{{ asset('assets/frontend/images/ratings/rating1.jpeg') }}" alt=""
                                        class="rounded-circle img-fluid ratings-country rating">
                                    <img src="{{ asset('assets/frontend/images/ratings/rating2.jpeg') }}" alt=""
                                        class="rounded-circle img-fluid ratings-country rating">
                                    <img src="{{ asset('assets/frontend/images/ratings/rating3.jpeg') }}" alt=""
                                        class="rounded-circle img-fluid ratings-country rating">
                                    <img src="" alt="">
                                    <img src="" alt="">
                                </div>
                                <div class="rated-country">

                                    <p class="fs-6">4.9+ Ratings</p>
                                    <span class="m-0 p-0">Trusted by many customers.</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-3 mt-lg-0">
                        <div class="card p-2">
                            <img src="{{ asset('assets/frontend/images/countries/canada.png') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                            </div>
                            <div class="ratings-header d-flex w-100 ps-2">
                                <div class="images d-flex me-3 justify-content-center align-items-center">
                                    <img src="{{ asset('assets/frontend/images/ratings/rating0.jpeg') }}" alt=""
                                        class="rounded-circle img-fluid ratings-country">
                                    <img src="{{ asset('assets/frontend/images/ratings/rating1.jpeg') }}" alt=""
                                        class="rounded-circle img-fluid ratings-country rating">
                                    <img src="{{ asset('assets/frontend/images/ratings/rating2.jpeg') }}" alt=""
                                        class="rounded-circle img-fluid ratings-country rating">
                                    <img src="{{ asset('assets/frontend/images/ratings/rating3.jpeg') }}" alt=""
                                        class="rounded-circle img-fluid ratings-country rating">
                                    <img src="" alt="">
                                    <img src="" alt="">
                                </div>
                                <div class="rated-country">

                                    <p class="fs-6">4.9+ Ratings</p>
                                    <span class="m-0 p-0">Trusted by many customers.</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-3 mt-lg-0">
                        <div class="card p-2">
                            <img src="{{ asset('assets/frontend/images/countries/egypt.png') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                            </div>
                            <div class="ratings-header d-flex w-100 ps-2">
                                <div class="images d-flex me-3 justify-content-center align-items-center">
                                    <img src="{{ asset('assets/frontend/images/ratings/rating0.jpeg') }}" alt=""
                                        class="rounded-circle img-fluid ratings-country">
                                    <img src="{{ asset('assets/frontend/images/ratings/rating1.jpeg') }}" alt=""
                                        class="rounded-circle img-fluid ratings-country rating">
                                    <img src="{{ asset('assets/frontend/images/ratings/rating2.jpeg') }}" alt=""
                                        class="rounded-circle img-fluid ratings-country rating">
                                    <img src="{{ asset('assets/frontend/images/ratings/rating3.jpeg') }}" alt=""
                                        class="rounded-circle img-fluid ratings-country rating">
                                    <img src="" alt="">
                                    <img src="" alt="">
                                </div>
                                <div class="rated-country">

                                    <p class="fs-6">4.9+ Ratings</p>
                                    <span class="m-0 p-0">Trusted by many customers.</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Export Section ends here -->

        <!-- Sponsors Sections starts here -->
        <div class="container py-5">
            <div class="header text-center d-flex justify-content-center w-100 h-100">
                <img src="{{ asset('assets/frontend/images/line.svg') }}" alt="" class="line">
                <h3 class="text-uppercase ms-2 px-2 py-1 border bg-white border-dark rounded d-block fs-4">Our Partnership
                </h3>
            </div>
            <div
                class="sponsorships d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center py-4">

                <div class="col-lg-5 me-lg-3">
                    <div class="sponsor w-100 me-lg-2 mt-5 mt-lg-0">
                        <p class="fs-4">TEAM. CUSTOMER. COMMUNITY</p>
                        <h1 class="display-5 fw-bold">We Work With The Best Partners</h1>
                        <p class="fs-6">We at Danikom believe that the success of our business lies in maintaining
                            and acting in ways that enhance our brand Integrity and credibility,
                            consistent quality of our products, timely delivery, and mutual trust between
                            us and our clients and partners.</p>
                    </div>
                </div>

                <!-- sponsorships images -->
                <div class=" col-lg-6 me-lg-3">
                    <div class="d-flex justify-evenly flex-wrap py-2 px-3 px-lg-5 ms-lg-2 border bg-white rounded w-100">
                        <img src="{{ asset('assets/frontend/images/sponsors/gsa.png') }}" alt=""
                            class="px-3 mx-md-2 img-fluid sponsors-imgs">
                        <img src="{{ asset('assets/frontend/images/sponsors/gepa.png') }}" alt=""
                            class="px-3 mx-md-2 img-fluid sponsors-imgs">
                        <img src="{{ asset('assets/frontend/images/sponsors/OIP2.png') }}" alt=""
                            class="px-3 mx-md-2 img-fluid sponsors-imgs">
                        <img src="{{ asset('assets/frontend/images/sponsors/absa.png') }}" alt=""
                            class="px-3 mx-md-2 img-fluid sponsors-imgs">
                        <img src="{{ asset('assets/frontend/images/sponsors/fidelity.png') }}" alt=""
                            class="px-2 mx-md-1 img-fluid sponsors-imgs">
                    </div>

                </div>
            </div>
        </div>
        <!-- Sponsors Sections ends here -->

        <!-- Testimonials Sections starts here -->
        <div class="testimonies bg-white py-5 ">
            <div class="container">

                <div class="header text-center d-flex justify-content-center w-100 h-100">
                    <img src="{{ asset('assets/frontend/images/line.svg') }}" alt="" class="line">
                    <h3 class="text-uppercase ms-2 px-2 py-1 border bg-white border-dark rounded d-block fs-4">Testimonials
                    </h3>
                </div>
                <p class="text-center py-3 fs-4 fw-bold">What Our Clients Say</p>

                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row d-flex justify-content-center align-items-center gap-3">
                                <div class="col-lg-5 col-12">
                                    <div class="card border-0">
                                        <div
                                            class="card-body p-0 m-0 border border-1 border-dark rounded-3 row justify-content-between align-items-center">
                                            <div class="rounded-right-pill p-3 col-4 justify-content-center">
                                                <img src="{{ asset('assets/frontend/images/testimonials/client1.svg') }}"
                                                    alt="" class="image-fluid ms-3 w-75">
                                            </div>
                                            <div class="col-4 ms-2">
                                                <h5 class="fs-6 fw-bold mt-2">Janice Antwi</h5>
                                                <p class="p-0 m-0">Beautician</p>
                                                <p class="p-0 m-0">Egypt</p>
                                                <div class="d-flex align-items-center">
                                                    <svg class="w-100" width="31" height="31"
                                                        viewBox="0 0 32 31" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <svg class="w-100 ms-2" width="31" height="31"
                                                        viewBox="0 0 32 31" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <svg class="w-100 ms-2" width="31" height="31"
                                                        viewBox="0 0 32 31" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <svg class="w-100 ms-2" width="31" height="31"
                                                        viewBox="0 0 32 31" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <svg class="w-100 ms-2" width="31" height="31"
                                                        viewBox="0 0 32 31" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <span class="rated-number ms-2 d-block">5.0</span>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="">
                                                    <svg class="bg-light p-2 rounded-circle" width="60"
                                                        height="60" viewBox="0 0 62 48" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.01482 43.4226C2.50516 39.6948 0.62085 35.5139 0.62085 28.7365C0.62085 16.8105 8.99292 6.12136 21.1677 0.836426L24.2105 5.53188C12.8467 11.6789 10.6251 19.6557 9.73915 24.6851C11.5689 23.7378 13.9644 23.4073 16.3121 23.6254C22.4591 24.1944 27.3045 29.2408 27.3045 35.5139C27.3045 38.6769 26.048 41.7103 23.8114 43.9469C21.5749 46.1835 18.5414 47.4399 15.3785 47.4399C13.6293 47.4247 11.9006 47.0616 10.2931 46.3719C8.68553 45.6822 7.23123 44.6796 6.01482 43.4226ZM40.0892 43.4226C36.5795 39.6948 34.6952 35.5139 34.6952 28.7365C34.6952 16.8105 43.0673 6.12136 55.2421 0.836426L58.2849 5.53188C46.9211 11.6789 44.6995 19.6557 43.8135 24.6851C45.6433 23.7378 48.0387 23.4073 50.3865 23.6254C56.5335 24.1944 61.3789 29.2408 61.3789 35.5139C61.3789 38.6769 60.1224 41.7103 57.8858 43.9469C55.6492 46.1835 52.6158 47.4399 49.4528 47.4399C47.7036 47.4247 45.975 47.0616 44.3674 46.3719C42.7599 45.6822 41.3056 44.6796 40.0892 43.4226Z"
                                                            fill="#3C5408" />
                                                    </svg>
                                                </div>
                                            </div>

                                            <p class="px-4 pt-4 pb-2">Danikom is a great company and trustworthy to do
                                                business with, with no
                                                doubt i always feel happy and comfortable trading with them, with no issue
                                                of delay in my products delivery.</p>

                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-5 col-12 d-lg-block d-none">
                                    <div class="card border-0">
                                        <div
                                            class="card-body p-0 m-0 border border-1 border-dark rounded-3 row justify-content-between align-items-center">
                                            <div class="rounded-right-pill p-3 col-4 justify-content-center">
                                                <img src="{{ asset('assets/frontend/images/testimonials/client2.svg') }}"
                                                    alt="" class="image-fluid ms-3 w-75">
                                            </div>
                                            <div class="col-4 ms-2">
                                                <h5 class="fs-6 fw-bold mt-2">Janice Antwi</h5>
                                                <p class="p-0 m-0">Beautician</p>
                                                <p class="p-0 m-0">Egypt</p>
                                                <div class="d-flex align-items-center">
                                                    <svg class="w-100" width="31" height="31"
                                                        viewBox="0 0 32 31" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <svg class="w-100 ms-2" width="31" height="31"
                                                        viewBox="0 0 32 31" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <svg class="w-100 ms-2" width="31" height="31"
                                                        viewBox="0 0 32 31" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <svg class="w-100 ms-2" width="31" height="31"
                                                        viewBox="0 0 32 31" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <svg class="w-100 ms-2" width="31" height="31"
                                                        viewBox="0 0 32 31" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <span class="rated-number ms-2 d-block">5.0</span>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="">
                                                    <svg class="bg-light p-2 rounded-circle" width="60"
                                                        height="60" viewBox="0 0 62 48" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.01482 43.4226C2.50516 39.6948 0.62085 35.5139 0.62085 28.7365C0.62085 16.8105 8.99292 6.12136 21.1677 0.836426L24.2105 5.53188C12.8467 11.6789 10.6251 19.6557 9.73915 24.6851C11.5689 23.7378 13.9644 23.4073 16.3121 23.6254C22.4591 24.1944 27.3045 29.2408 27.3045 35.5139C27.3045 38.6769 26.048 41.7103 23.8114 43.9469C21.5749 46.1835 18.5414 47.4399 15.3785 47.4399C13.6293 47.4247 11.9006 47.0616 10.2931 46.3719C8.68553 45.6822 7.23123 44.6796 6.01482 43.4226ZM40.0892 43.4226C36.5795 39.6948 34.6952 35.5139 34.6952 28.7365C34.6952 16.8105 43.0673 6.12136 55.2421 0.836426L58.2849 5.53188C46.9211 11.6789 44.6995 19.6557 43.8135 24.6851C45.6433 23.7378 48.0387 23.4073 50.3865 23.6254C56.5335 24.1944 61.3789 29.2408 61.3789 35.5139C61.3789 38.6769 60.1224 41.7103 57.8858 43.9469C55.6492 46.1835 52.6158 47.4399 49.4528 47.4399C47.7036 47.4247 45.975 47.0616 44.3674 46.3719C42.7599 45.6822 41.3056 44.6796 40.0892 43.4226Z"
                                                            fill="#3C5408" />
                                                    </svg>
                                                </div>
                                            </div>

                                            <p class="px-4 pt-4 pb-2">Danikom is a great company and trustworthy to do
                                                business with, with no
                                                doubt i always feel happy and comfortable trading with them, with no issue
                                                of delay in my products delivery.</p>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row d-flex justify-content-center align-items-center gap-3">
                                <div class="col-lg-5 col-12 d-lg-block d-none">
                                    <div class="card border-0">
                                        <div
                                            class="card-body p-0 m-0 border border-1 border-dark rounded-3 row justify-content-between align-items-center">
                                            <div class="rounded-right-pill p-3 col-4 justify-content-center">
                                                <img src="{{ asset('assets/frontend/images/testimonials/client1.svg') }}"
                                                    alt="" class="image-fluid ms-3 w-75">
                                            </div>
                                            <div class="col-4 ms-2">
                                                <h5 class="fs-6 fw-bold mt-2">Janice Antwi</h5>
                                                <p class="p-0 m-0">Beautician</p>
                                                <p class="p-0 m-0">Egypt</p>
                                                <div class="d-flex align-items-center">
                                                    <svg class="w-100" width="31" height="31"
                                                        viewBox="0 0 32 31" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <svg class="w-100 ms-2" width="31" height="31"
                                                        viewBox="0 0 32 31" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <svg class="w-100 ms-2" width="31" height="31"
                                                        viewBox="0 0 32 31" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <svg class="w-100 ms-2" width="31" height="31"
                                                        viewBox="0 0 32 31" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <svg class="w-100 ms-2" width="31" height="31"
                                                        viewBox="0 0 32 31" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <span class="rated-number ms-2 d-block">5.0</span>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="">
                                                    <svg class="bg-light p-2 rounded-circle" width="60"
                                                        height="60" viewBox="0 0 62 48" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.01482 43.4226C2.50516 39.6948 0.62085 35.5139 0.62085 28.7365C0.62085 16.8105 8.99292 6.12136 21.1677 0.836426L24.2105 5.53188C12.8467 11.6789 10.6251 19.6557 9.73915 24.6851C11.5689 23.7378 13.9644 23.4073 16.3121 23.6254C22.4591 24.1944 27.3045 29.2408 27.3045 35.5139C27.3045 38.6769 26.048 41.7103 23.8114 43.9469C21.5749 46.1835 18.5414 47.4399 15.3785 47.4399C13.6293 47.4247 11.9006 47.0616 10.2931 46.3719C8.68553 45.6822 7.23123 44.6796 6.01482 43.4226ZM40.0892 43.4226C36.5795 39.6948 34.6952 35.5139 34.6952 28.7365C34.6952 16.8105 43.0673 6.12136 55.2421 0.836426L58.2849 5.53188C46.9211 11.6789 44.6995 19.6557 43.8135 24.6851C45.6433 23.7378 48.0387 23.4073 50.3865 23.6254C56.5335 24.1944 61.3789 29.2408 61.3789 35.5139C61.3789 38.6769 60.1224 41.7103 57.8858 43.9469C55.6492 46.1835 52.6158 47.4399 49.4528 47.4399C47.7036 47.4247 45.975 47.0616 44.3674 46.3719C42.7599 45.6822 41.3056 44.6796 40.0892 43.4226Z"
                                                            fill="#3C5408" />
                                                    </svg>
                                                </div>
                                            </div>

                                            <p class="px-4 pt-4 pb-2">Danikom is a great company and trustworthy to do
                                                business with, with no
                                                doubt i always feel happy and comfortable trading with them, with no issue
                                                of delay in my products delivery.</p>

                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-5 col-12">
                                    <div class="card border-0">
                                        <div
                                            class="card-body p-0 m-0 border border-1 border-dark rounded-3 row justify-content-between align-items-center">
                                            <div class="rounded-right-pill p-3 col-4 justify-content-center">
                                                <img src="{{ asset('assets/frontend/images/testimonials/client2.svg') }}"
                                                    alt="" class="image-fluid ms-3 w-75">
                                            </div>
                                            <div class="col-4 ms-2">
                                                <h5 class="fs-6 fw-bold mt-2">Janice Antwi</h5>
                                                <p class="p-0 m-0">Beautician</p>
                                                <p class="p-0 m-0">Egypt</p>
                                                <div class="d-flex align-items-center">
                                                    <svg class="w-100" width="31" height="31"
                                                        viewBox="0 0 32 31" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <svg class="w-100 ms-2" width="31" height="31"
                                                        viewBox="0 0 32 31" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <svg class="w-100 ms-2" width="31" height="31"
                                                        viewBox="0 0 32 31" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <svg class="w-100 ms-2" width="31" height="31"
                                                        viewBox="0 0 32 31" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <svg class="w-100 ms-2" width="31" height="31"
                                                        viewBox="0 0 32 31" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <span class="rated-number ms-2 d-block">5.0</span>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="">
                                                    <svg class="bg-light p-2 rounded-circle" width="60"
                                                        height="60" viewBox="0 0 62 48" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.01482 43.4226C2.50516 39.6948 0.62085 35.5139 0.62085 28.7365C0.62085 16.8105 8.99292 6.12136 21.1677 0.836426L24.2105 5.53188C12.8467 11.6789 10.6251 19.6557 9.73915 24.6851C11.5689 23.7378 13.9644 23.4073 16.3121 23.6254C22.4591 24.1944 27.3045 29.2408 27.3045 35.5139C27.3045 38.6769 26.048 41.7103 23.8114 43.9469C21.5749 46.1835 18.5414 47.4399 15.3785 47.4399C13.6293 47.4247 11.9006 47.0616 10.2931 46.3719C8.68553 45.6822 7.23123 44.6796 6.01482 43.4226ZM40.0892 43.4226C36.5795 39.6948 34.6952 35.5139 34.6952 28.7365C34.6952 16.8105 43.0673 6.12136 55.2421 0.836426L58.2849 5.53188C46.9211 11.6789 44.6995 19.6557 43.8135 24.6851C45.6433 23.7378 48.0387 23.4073 50.3865 23.6254C56.5335 24.1944 61.3789 29.2408 61.3789 35.5139C61.3789 38.6769 60.1224 41.7103 57.8858 43.9469C55.6492 46.1835 52.6158 47.4399 49.4528 47.4399C47.7036 47.4247 45.975 47.0616 44.3674 46.3719C42.7599 45.6822 41.3056 44.6796 40.0892 43.4226Z"
                                                            fill="#3C5408" />
                                                    </svg>
                                                </div>
                                            </div>

                                            <p class="px-4 pt-4 pb-2">Danikom is a great company and trustworthy to do
                                                business with, with no
                                                doubt i always feel happy and comfortable trading with them, with no issue
                                                of delay in my products delivery.</p>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row d-flex justify-content-center align-items-center gap-3 w-100">
                                <div class="col-lg-5 col-12">
                                    <div class="card border-0">
                                        <div
                                            class="card-body p-0 m-0 border border-1 border-dark rounded-3 row justify-content-between align-items-center">
                                            <div class="rounded-right-pill p-3 col-4 justify-content-center">
                                                <img src="{{ asset('assets/frontend/images/testimonials/client2.svg') }}"
                                                    alt="" class="image-fluid ms-3 w-75">
                                            </div>
                                            <div class="col-4 ms-2">
                                                <h5 class="fs-6 fw-bold mt-2">Janice Antwi</h5>
                                                <p class="p-0 m-0">Beautician</p>
                                                <p class="p-0 m-0">Egypt</p>
                                                <div class="d-flex align-items-center">
                                                    <svg class="w-100" width="31" height="31"
                                                        viewBox="0 0 32 31" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <svg class="w-100 ms-2" width="31" height="31"
                                                        viewBox="0 0 32 31" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <svg class="w-100 ms-2" width="31" height="31"
                                                        viewBox="0 0 32 31" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <svg class="w-100 ms-2" width="31" height="31"
                                                        viewBox="0 0 32 31" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <svg class="w-100 ms-2" width="31" height="31"
                                                        viewBox="0 0 32 31" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <span class="rated-number ms-2 d-block">5.0</span>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="">
                                                    <svg class="bg-light p-2 rounded-circle" width="60"
                                                        height="60" viewBox="0 0 62 48" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.01482 43.4226C2.50516 39.6948 0.62085 35.5139 0.62085 28.7365C0.62085 16.8105 8.99292 6.12136 21.1677 0.836426L24.2105 5.53188C12.8467 11.6789 10.6251 19.6557 9.73915 24.6851C11.5689 23.7378 13.9644 23.4073 16.3121 23.6254C22.4591 24.1944 27.3045 29.2408 27.3045 35.5139C27.3045 38.6769 26.048 41.7103 23.8114 43.9469C21.5749 46.1835 18.5414 47.4399 15.3785 47.4399C13.6293 47.4247 11.9006 47.0616 10.2931 46.3719C8.68553 45.6822 7.23123 44.6796 6.01482 43.4226ZM40.0892 43.4226C36.5795 39.6948 34.6952 35.5139 34.6952 28.7365C34.6952 16.8105 43.0673 6.12136 55.2421 0.836426L58.2849 5.53188C46.9211 11.6789 44.6995 19.6557 43.8135 24.6851C45.6433 23.7378 48.0387 23.4073 50.3865 23.6254C56.5335 24.1944 61.3789 29.2408 61.3789 35.5139C61.3789 38.6769 60.1224 41.7103 57.8858 43.9469C55.6492 46.1835 52.6158 47.4399 49.4528 47.4399C47.7036 47.4247 45.975 47.0616 44.3674 46.3719C42.7599 45.6822 41.3056 44.6796 40.0892 43.4226Z"
                                                            fill="#3C5408" />
                                                    </svg>
                                                </div>
                                            </div>

                                            <p class="px-4 pt-4 pb-2">Danikom is a great company and trustworthy to do
                                                business with, with no
                                                doubt i always feel happy and comfortable trading with them, with no issue
                                                of delay in my products delivery.</p>

                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-5 col-12 d-lg-block d-none">
                                    <div class="card border-0">
                                        <div
                                            class="card-body p-0 m-0 border border-1 border-dark rounded-3 row justify-content-between align-items-center">
                                            <div class="rounded-right-pill p-3 col-4 justify-content-center">
                                                <img src="{{ asset('assets/frontend/images/testimonials/client1.svg') }}"
                                                    alt="" class="image-fluid ms-3 w-75">
                                            </div>
                                            <div class="col-4 ms-2">
                                                <h5 class="fs-6 fw-bold mt-2">Janice Antwi</h5>
                                                <p class="p-0 m-0">Beautician</p>
                                                <p class="p-0 m-0">Egypt</p>
                                                <div class="d-flex align-items-center">
                                                    <svg class="w-100" width="31" height="31"
                                                        viewBox="0 0 32 31" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <svg class="w-100 ms-2" width="31" height="31"
                                                        viewBox="0 0 32 31" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <svg class="w-100 ms-2" width="31" height="31"
                                                        viewBox="0 0 32 31" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <svg class="w-100 ms-2" width="31" height="31"
                                                        viewBox="0 0 32 31" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <svg class="w-100 ms-2" width="31" height="31"
                                                        viewBox="0 0 32 31" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <span class="rated-number ms-2 d-block">5.0</span>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="">
                                                    <svg class="bg-light p-2 rounded-circle" width="60"
                                                        height="60" viewBox="0 0 62 48" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.01482 43.4226C2.50516 39.6948 0.62085 35.5139 0.62085 28.7365C0.62085 16.8105 8.99292 6.12136 21.1677 0.836426L24.2105 5.53188C12.8467 11.6789 10.6251 19.6557 9.73915 24.6851C11.5689 23.7378 13.9644 23.4073 16.3121 23.6254C22.4591 24.1944 27.3045 29.2408 27.3045 35.5139C27.3045 38.6769 26.048 41.7103 23.8114 43.9469C21.5749 46.1835 18.5414 47.4399 15.3785 47.4399C13.6293 47.4247 11.9006 47.0616 10.2931 46.3719C8.68553 45.6822 7.23123 44.6796 6.01482 43.4226ZM40.0892 43.4226C36.5795 39.6948 34.6952 35.5139 34.6952 28.7365C34.6952 16.8105 43.0673 6.12136 55.2421 0.836426L58.2849 5.53188C46.9211 11.6789 44.6995 19.6557 43.8135 24.6851C45.6433 23.7378 48.0387 23.4073 50.3865 23.6254C56.5335 24.1944 61.3789 29.2408 61.3789 35.5139C61.3789 38.6769 60.1224 41.7103 57.8858 43.9469C55.6492 46.1835 52.6158 47.4399 49.4528 47.4399C47.7036 47.4247 45.975 47.0616 44.3674 46.3719C42.7599 45.6822 41.3056 44.6796 40.0892 43.4226Z"
                                                            fill="#3C5408" />
                                                    </svg>
                                                </div>
                                            </div>

                                            <p class="px-4 pt-4 pb-2">Danikom is a great company and trustworthy to do
                                                business with, with no
                                                doubt i always feel happy and comfortable trading with them, with no issue
                                                of delay in my products delivery.</p>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="carousel-item">
                            <div class="d-flex align-items-center justify-content-center align-items-center gap-3 w-100">
                                <div class="col-lg-5 col-12 d-lg-block d-none">
                                    <div class="card border-0">
                                        <div
                                            class="card-body p-0 m-0 border border-1 border-dark rounded-3 row justify-content-between align-items-center">
                                            <div class="rounded-right-pill p-3 col-4 justify-content-center">
                                                <img src="{{ asset('assets/frontend/images/testimonials/client2.svg') }}"
                                                    alt="" class="image-fluid ms-3 w-75">
                                            </div>
                                            <div class="col-4 ms-2">
                                                <h5 class="fs-6 fw-bold mt-2">Janice Antwi</h5>
                                                <p class="p-0 m-0">Beautician</p>
                                                <p class="p-0 m-0">Egypt</p>
                                                <div class="d-flex align-items-center">
                                                    <svg class="w-100" width="31" height="31"
                                                        viewBox="0 0 32 31" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <svg class="w-100 ms-2" width="31" height="31"
                                                        viewBox="0 0 32 31" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <svg class="w-100 ms-2" width="31" height="31"
                                                        viewBox="0 0 32 31" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <svg class="w-100 ms-2" width="31" height="31"
                                                        viewBox="0 0 32 31" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <svg class="w-100 ms-2" width="31" height="31"
                                                        viewBox="0 0 32 31" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <span class="rated-number ms-2 d-block">5.0</span>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="">
                                                    <svg class="bg-light p-2 rounded-circle" width="60"
                                                        height="60" viewBox="0 0 62 48" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.01482 43.4226C2.50516 39.6948 0.62085 35.5139 0.62085 28.7365C0.62085 16.8105 8.99292 6.12136 21.1677 0.836426L24.2105 5.53188C12.8467 11.6789 10.6251 19.6557 9.73915 24.6851C11.5689 23.7378 13.9644 23.4073 16.3121 23.6254C22.4591 24.1944 27.3045 29.2408 27.3045 35.5139C27.3045 38.6769 26.048 41.7103 23.8114 43.9469C21.5749 46.1835 18.5414 47.4399 15.3785 47.4399C13.6293 47.4247 11.9006 47.0616 10.2931 46.3719C8.68553 45.6822 7.23123 44.6796 6.01482 43.4226ZM40.0892 43.4226C36.5795 39.6948 34.6952 35.5139 34.6952 28.7365C34.6952 16.8105 43.0673 6.12136 55.2421 0.836426L58.2849 5.53188C46.9211 11.6789 44.6995 19.6557 43.8135 24.6851C45.6433 23.7378 48.0387 23.4073 50.3865 23.6254C56.5335 24.1944 61.3789 29.2408 61.3789 35.5139C61.3789 38.6769 60.1224 41.7103 57.8858 43.9469C55.6492 46.1835 52.6158 47.4399 49.4528 47.4399C47.7036 47.4247 45.975 47.0616 44.3674 46.3719C42.7599 45.6822 41.3056 44.6796 40.0892 43.4226Z"
                                                            fill="#3C5408" />
                                                    </svg>
                                                </div>
                                            </div>

                                            <p class="px-4 pt-4 pb-2">Danikom is a great company and trustworthy to do
                                                business with, with no
                                                doubt i always feel happy and comfortable trading with them, with no issue
                                                of delay in my products delivery.</p>

                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-5 col-12">
                                    <div class="card border-0">
                                        <div
                                            class="card-body p-0 m-0 border border-1 border-dark rounded-3 row justify-content-between align-items-center">
                                            <div class="rounded-right-pill p-3 col-4 justify-content-center">
                                                <img src="{{ asset('assets/frontend/images/testimonials/client1.svg') }}"
                                                    alt="" class="image-fluid ms-3 w-75">
                                            </div>
                                            <div class="col-4 ms-2">
                                                <h5 class="fs-6 fw-bold mt-2">Janice Antwi</h5>
                                                <p class="p-0 m-0">Beautician</p>
                                                <p class="p-0 m-0">Egypt</p>
                                                <div class="d-flex align-items-center w-100">
                                                    <svg class="w-100" width="31" height="31"
                                                        viewBox="0 0 32 31" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <svg class="w-100 ms-2" width="31" height="31"
                                                        viewBox="0 0 32 31" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <svg class="w-100 ms-2" width="31" height="31"
                                                        viewBox="0 0 32 31" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <svg class="w-100 ms-2" width="31" height="31"
                                                        viewBox="0 0 32 31" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <svg class="w-100 ms-2" width="31" height="31"
                                                        viewBox="0 0 32 31" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0979 1.8541C14.6966 0.0114832 17.3034 0.0114789 17.9021 1.8541L20.2658 9.12868C20.5335 9.95272 21.3014 10.5106 22.1679 10.5106H29.8168C31.7543 10.5106 32.5598 12.9899 30.9924 14.1287L24.8043 18.6246C24.1033 19.1339 23.81 20.0366 24.0777 20.8607L26.4414 28.1353C27.0401 29.9779 24.9311 31.5101 23.3637 30.3713L17.1756 25.8754C16.4746 25.3661 15.5254 25.3661 14.8244 25.8754L8.63631 30.3713C7.06888 31.5101 4.95992 29.9779 5.55862 28.1353L7.92228 20.8607C8.19002 20.0366 7.89671 19.1339 7.19573 18.6246L1.00761 14.1287C-0.559815 12.9899 0.245734 10.5106 2.18318 10.5106H9.83212C10.6986 10.5106 11.4665 9.95272 11.7342 9.12868L14.0979 1.8541Z"
                                                            fill="#FAC136" />
                                                    </svg>
                                                    <span class="rated-number ms-2 d-block">5.0</span>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="">
                                                    <svg class="bg-light p-2 rounded-circle" width="60"
                                                        height="60" viewBox="0 0 62 48" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.01482 43.4226C2.50516 39.6948 0.62085 35.5139 0.62085 28.7365C0.62085 16.8105 8.99292 6.12136 21.1677 0.836426L24.2105 5.53188C12.8467 11.6789 10.6251 19.6557 9.73915 24.6851C11.5689 23.7378 13.9644 23.4073 16.3121 23.6254C22.4591 24.1944 27.3045 29.2408 27.3045 35.5139C27.3045 38.6769 26.048 41.7103 23.8114 43.9469C21.5749 46.1835 18.5414 47.4399 15.3785 47.4399C13.6293 47.4247 11.9006 47.0616 10.2931 46.3719C8.68553 45.6822 7.23123 44.6796 6.01482 43.4226ZM40.0892 43.4226C36.5795 39.6948 34.6952 35.5139 34.6952 28.7365C34.6952 16.8105 43.0673 6.12136 55.2421 0.836426L58.2849 5.53188C46.9211 11.6789 44.6995 19.6557 43.8135 24.6851C45.6433 23.7378 48.0387 23.4073 50.3865 23.6254C56.5335 24.1944 61.3789 29.2408 61.3789 35.5139C61.3789 38.6769 60.1224 41.7103 57.8858 43.9469C55.6492 46.1835 52.6158 47.4399 49.4528 47.4399C47.7036 47.4247 45.975 47.0616 44.3674 46.3719C42.7599 45.6822 41.3056 44.6796 40.0892 43.4226Z"
                                                            fill="#3C5408" />
                                                    </svg>
                                                </div>
                                            </div>

                                            <p class="px-4 pt-4 pb-2">Danikom is a great company and trustworthy to do
                                                business with, with no
                                                doubt i always feel happy and comfortable trading with them, with no issue
                                                of delay in my products delivery.</p>

                                        </div>
                                    </div>

                                </div>
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
        <!-- Testimonials Section ends here -->

        <!-- FAQ Section starts here -->
        <div class="faq py-5 ">
            <div class="container">

                <div class="header text-center d-flex justify-content-center w-100 h-100">
                    <img src="{{ asset('assets/frontend/images/line.svg') }}" alt="" class="line">
                    <h3 class="text-uppercase ms-2 px-2 py-1 border bg-white border-dark rounded d-block fs-4">FAQs</h3>
                </div>
                <p class="text-center py-3 fs-4 fw-bold">Any Questions ? Look here.</p>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                What payment method do you accept?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">You can make payments for your orders via direct wire transfer,
                                Credit Card,
                                Debit Card, and/or MasterCard.
                                Kindly prompt us with Proof of Payment (POP – deposit slip, swift advice, etc) via email or
                                WhatsApp
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                What is your Terms of payment?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">We accept upfront/advance payment. We also accept letters of
                                Credit (LC) for
                                only large orders.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                What are your shipping process?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">We ship by Air (Airport to Airport) or by Sea (seaport to seaport)
                                depending
                                on the quantity ordered
                                and the preference of the buyer.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFour" aria-expanded="false"
                                aria-controls="flush-collapseFour">
                                What is your Minimum Order Quantity?
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Our MOQ depends on the product you wish to buy and the medium of
                                shipping you
                                choose.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFive" aria-expanded="false"
                                aria-controls="flush-collapseFive">
                                Can I track my ordered product delivery?
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Yes you can track your order delivery, to do so please enter you
                                order ID in
                                the box below and click on
                                ‘” Track Order” button. check the order ID on your invoice /reciept.

                                <div class="mb-3 mt-3">
                                    <label for="orderid" class="form-label fw-bold">Order ID</label>
                                    <input type="email" class="form-control" id="orderid"
                                        placeholder="E.g. 3454350732794623862">
                                </div>
                                <div class="mb-3">
                                    <label for="billingemail" class="form-label fw-bold">Billing Email</label>
                                    <input type="email" class="form-control" id="billingemail"
                                        placeholder="name@example.com">
                                </div>

                                <div class="mb-3">
                                    <button class="btn trackorder">Track Order <svg class="ms-2" width="11"
                                            height="10" viewBox="0 0 11 10" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.17 5.40165C10.3918 5.17982 10.3918 4.82018 10.17 4.59836L6.55521 0.98355C6.33338 0.761727 5.97374 0.761727 5.75192 0.98355C5.53009 1.20537 5.53009 1.56502 5.75192 1.78684L8.96508 5L5.75192 8.21316C5.53009 8.43498 5.53009 8.79463 5.75192 9.01645C5.97374 9.23827 6.33338 9.23827 6.55521 9.01645L10.17 5.40165ZM0.680176 5.56801L9.76837 5.56801L9.76837 4.43199L0.680176 4.43199L0.680176 5.56801Z"
                                                fill="#3C5408" />
                                        </svg></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contactsupport">
                    <h3 class="text-center mt-5">Have any adding questions</h3>
                    <div class="text-center">
                        <a href="#livechatagent" class="btn mt-3 text-center text-white livechat px-3">Live Chat</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQ Section ends here -->

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
