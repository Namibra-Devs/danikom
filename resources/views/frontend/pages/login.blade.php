@extends('frontend.layout')

@section('content')
    <main class="main my-5 row justify-content-center bg-white">

        <div class="col-lg-4">
            <form action="" class="container singup-form">

                <div class="singup-header">
                    <h4>Sign In</h4>
                    <p>Fill your information below or register with your
                        social account.</p>
                </div>

                <div class="mb-3">
                    <label for="emailaddress" class="form-label">Email Address<span
                            class="required-field fw-bold text-danger">*</span></label>
                    <input type="email" class="form-control" id="emailaddress" placeholder="name@example.com" required>
                </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password<span class="required-field fw-bold text-danger">*</span></label>
                            <div class="input-group flex-nowrap" tabindex="0">
                            <input type="password" class="form-control" name="password" placeholder="**********" aria-label="password" aria-describedby="addon-wrapping" required>
                            <span class="input-group-text" id="addon-wrapping">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                                  </svg>
                            </span>
                    </div>
                   
                </div>
                <div class="remember d-flex ms-5 my-2">
                    <input type="checkbox" name="agree" id="agree" class="me-2">
                   <span> Remember Me </span>
                </div>

                <div class="d-flex my-3 justify-content-center">
                    <button type="button" class="btn btn-login text-light px-4" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">Sign In</button>

                </div>
                <!-- Button Loggin -->
                <div class="other-options my-3">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="me-2">
                            <svg width="120" height="2" viewBox="0 0 129 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <line x1="0.134521" y1="1.35318" x2="128.135" y2="1.35318" stroke="black" stroke-opacity="0.5" stroke-width="1.18042"/>
                              </svg>
                        </div>
                        <div class="or-signup">Or</div>
                        <div class="ms-2">
                            <svg width="120" height="2" viewBox="0 0 129 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <line x1="0.134521" y1="1.35318" x2="128.135" y2="1.35318" stroke="black" stroke-opacity="0.5" stroke-width="1.18042"/>
                              </svg>
                        </div>
                    </div>


                    <div class="d-flex my-3 justify-content-center align-items-center">
                        
                        <button type="button" class="btn google-signup px-5"><svg class="me-2" width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.8992 12.4375H24.9483V12.3885H14.3245V17.1102H20.9957C20.0224 19.8588 17.4072 21.8319 14.3245 21.8319C10.4132 21.8319 7.24196 18.6607 7.24196 14.7494C7.24196 10.838 10.4132 7.66683 14.3245 7.66683C16.13 7.66683 17.7725 8.34793 19.0232 9.46048L22.362 6.12165C20.2538 4.15684 17.4338 2.94513 14.3245 2.94513C7.80562 2.94513 2.52026 8.23048 2.52026 14.7494C2.52026 21.2683 7.80562 26.5536 14.3245 26.5536C20.8434 26.5536 26.1288 21.2683 26.1288 14.7494C26.1288 13.9579 26.0473 13.1853 25.8992 12.4375Z" fill="#FFC107"/>
                            <path d="M3.88062 9.25509L7.7589 12.0993C8.8083 9.50121 11.3498 7.66683 14.3238 7.66683C16.1293 7.66683 17.7719 8.34793 19.0225 9.46048L22.3613 6.12165C20.2531 4.15684 17.4331 2.94513 14.3238 2.94513C9.78982 2.94513 5.85783 5.50488 3.88062 9.25509Z" fill="#FF3D00"/>
                            <path d="M14.3246 26.5536C17.3737 26.5536 20.1441 25.3867 22.2388 23.4892L18.5854 20.3977C17.3604 21.3293 15.8636 21.8331 14.3246 21.8319C11.2544 21.8319 8.6474 19.8742 7.66528 17.1421L3.81592 20.1079C5.76952 23.9307 9.73693 26.5536 14.3246 26.5536Z" fill="#4CAF50"/>
                            <path d="M25.8991 12.4375H24.9483V12.3885H14.3245V17.1102H20.9956C20.5301 18.4184 19.6915 19.5615 18.5834 20.3983L18.5852 20.3971L22.2386 23.4886C21.9801 23.7235 26.1287 20.6515 26.1287 14.7494C26.1287 13.9579 26.0473 13.1853 25.8991 12.4375Z" fill="#1976D2"/>
                          </svg> Sign In With Google</button>

                    </div>
                    <div class="d-flex my-3 justify-content-center align-items-center">
                        <p class="p-0 m-0">Don't have an Account?</p> <a href="./signup.html" class="signin-link ms-2">Sign Up</a>

                    </div>
                </div>

            </form>
        </div>
    </main>
@endsection