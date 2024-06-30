<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/style.css" />

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- Inter Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />

    <!-- JS -->
    <script src="/main.js" defer></script>
    <script src="https://kit.fontawesome.com/7b3b6f7f8f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

        <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  

    <title>Danikom Trading</title>
</head>

<body>

    <div class="fixed-top">

        <!-- Notification/Highlighted top navbar -->
        <div class="notification">
            <div class="container d-lg-flex d-none justify-content-between align-items-center w-100 py-3">
                <div class="contact">
                    Contact US: <span id="contact">+233(0) 24 662 6516</span>
                </div>
                <div class="signup">
                    Sign up and be part of the family.
                    <a href="./signup.html" class="signup-top">Sign up now</a>
                </div>
                <div class="socials d-flex justify-content-center">
                    <div class="social">
                        <a href="#">
                            <svg width="18" height="18" viewBox="0 0 19 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.9397 0.291885H1.81293C1.11981 0.291885 0.556641 0.862928 0.556641 1.56393V16.6631C0.556641 17.3641 1.11981 17.9351 1.81293 17.9351H16.9397C17.6328 17.9351 18.1999 17.3641 18.1999 16.6631V1.56393C18.1999 0.862928 17.6328 0.291885 16.9397 0.291885ZM5.889 15.4147H3.27402V6.99474H5.89293V15.4147H5.889ZM4.58151 5.84478C3.74266 5.84478 3.06529 5.16347 3.06529 4.32857C3.06529 3.49366 3.74266 2.81235 4.58151 2.81235C5.41641 2.81235 6.09772 3.49366 6.09772 4.32857C6.09772 5.16741 5.42035 5.84478 4.58151 5.84478ZM15.6912 15.4147H13.0763V11.3189C13.0763 10.3422 13.0566 9.08594 11.7176 9.08594C10.3549 9.08594 10.1462 10.1493 10.1462 11.248V15.4147H7.53124V6.99474H10.0399V8.1447H10.0753C10.4258 7.48308 11.2804 6.78602 12.5525 6.78602C15.199 6.78602 15.6912 8.53065 15.6912 10.7991V15.4147Z"
                                    fill="black" />
                            </svg>
                        </a>
                    </div>
                    <div class="social">
                        <a href="#">
                            <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.9837 9.11351C16.9837 5.05557 13.6903 1.76216 9.63236 1.76216C5.57441 1.76216 2.28101 5.05557 2.28101 9.11351C2.28101 12.6716 4.80987 15.6342 8.16209 16.3178V11.3189H6.69182V9.11351H8.16209V7.27567C8.16209 5.85686 9.31625 4.7027 10.7351 4.7027H12.5729V6.90811H11.1026C10.6983 6.90811 10.3675 7.23892 10.3675 7.64324V9.11351H12.5729V11.3189H10.3675V16.4281C14.0799 16.0605 16.9837 12.9289 16.9837 9.11351Z"
                                    fill="black" />
                            </svg>
                        </a>
                    </div>
                    <div class="social">
                        <a href="#">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.8865 6.72432C8.25285 6.72432 7.64515 6.97604 7.19709 7.4241C6.74903 7.87216 6.49731 8.47986 6.49731 9.11351C6.49731 9.74716 6.74903 10.3549 7.19709 10.8029C7.64515 11.251 8.25285 11.5027 8.8865 11.5027C9.52016 11.5027 10.1279 11.251 10.5759 10.8029C11.024 10.3549 11.2757 9.74716 11.2757 9.11351C11.2757 8.47986 11.024 7.87216 10.5759 7.4241C10.1279 6.97604 9.52016 6.72432 8.8865 6.72432Z"
                                    fill="black" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M5.04166 2.55757C7.59701 2.27433 10.1758 2.27433 12.7312 2.55757C14.1272 2.71342 15.2527 3.81245 15.4166 5.21362C15.7197 7.80472 15.7197 10.4223 15.4166 13.0134C15.2527 14.4146 14.1272 15.5136 12.7319 15.6702C10.1763 15.9535 7.59725 15.9535 5.04166 15.6702C3.64564 15.5136 2.52015 14.4146 2.35621 13.0141C2.05314 10.4228 2.05314 7.80496 2.35621 5.21362C2.52015 3.81245 3.64564 2.71342 5.04166 2.55757ZM12.5621 4.7027C12.3671 4.7027 12.1801 4.78015 12.0423 4.91801C11.9044 5.05588 11.827 5.24286 11.827 5.43783C11.827 5.6328 11.9044 5.81979 12.0423 5.95765C12.1801 6.09552 12.3671 6.17297 12.5621 6.17297C12.7571 6.17297 12.944 6.09552 13.0819 5.95765C13.2198 5.81979 13.2972 5.6328 13.2972 5.43783C13.2972 5.24286 13.2198 5.05588 13.0819 4.91801C12.944 4.78015 12.7571 4.7027 12.5621 4.7027ZM5.39453 9.11351C5.39453 8.1874 5.76242 7.29923 6.41728 6.64437C7.07213 5.98951 7.96031 5.62162 8.88642 5.62162C9.81253 5.62162 10.7007 5.98951 11.3556 6.64437C12.0104 7.29923 12.3783 8.1874 12.3783 9.11351C12.3783 10.0396 12.0104 10.9278 11.3556 11.5826C10.7007 12.2375 9.81253 12.6054 8.88642 12.6054C7.96031 12.6054 7.07213 12.2375 6.41728 11.5826C5.76242 10.9278 5.39453 10.0396 5.39453 9.11351Z"
                                    fill="black" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bigger Screen Navbar Menu -->
        <nav class="navbar d-none d-lg-flex navbar-expand-lg bg-white shadow">
            <div class="container-fluid mx-lg-5 px-lg-4 mx-2 px-2">
                <div class="me-lg-5 pe-lg-5">
                    <a href="./index.html" class="text-decoration-none text-dark logo">
                        <img src="/public/src/img/danikomlogo.svg" alt="Danikom Logo" class="me-1" />Danikom Trading
                    </a>
                </div>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g id="Menu / Menu_Alt_02">
                                    <path id="Vector" d="M11 17H19M5 12H19M11 7H19" stroke="#000000" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                            </g>
                        </svg>
                    </span>
                </button>

                <div class="collapse navbar-collapse ms-lg-5 ps-lg-5 mt-4 mt-lg-0" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 ms-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="./index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="./about.html">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown"
                              aria-expanded="false">
                              Our Products
                            </a>
                            <ul class="dropdown-menu">
                              <li>
                                <a class="dropdown-item my-1 nav-link text-dark" href="./naturalcocoa.html">Natural Cocoa Butter</a>
                              </li>
                              <li class="nav-item dropdown-submenu">
                                <a class="nav-link test text-dark dropdown-toggle" tabindex="-1" href="#">Unrefined Shea Butter<span class="caret"></span></a>
                                </a>
                                <ul class="dropdown-menu">
                                  <li>
                                    <a class="dropdown-item my-1 nav-link text-dark" href="./ivoryshea.html">Ivory</a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item my-1 nav-link text-dark" href="./yellowshea.html">Yellow</a>
                                  </li>
                                 
                                </ul>
                              </li>    
                             
                              <li>
                                <a class="dropdown-item my-1 nav-link text-dark" href="./handcraftedbasket.html">Handcrafted Basket</a>
                              </li>
                              <li>
                                <a class="dropdown-item my-1 nav-link text-dark" href="./cashewnuts.html">Cashew Nuts in Shells</a>
                              </li>
                              <li>
                                <a class="dropdown-item my-1 nav-link text-dark" href="./bodicare.html">Bodicare African Black Soap</a>
                              </li>
                            </ul>
                          </li>

                        <li class="nav-item">
                            <a class="nav-link text-dark" href="./contact.html">Contact us</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="./search.html" class="btn px-4 rounded-5">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.5 14H14.71L14.43 13.73C15.4439 12.554 16.0011 11.0527 16 9.5C16 8.21442 15.6188 6.95772 14.9046 5.8888C14.1903 4.81988 13.1752 3.98676 11.9874 3.49479C10.7997 3.00282 9.49279 2.87409 8.23192 3.1249C6.97104 3.3757 5.81285 3.99477 4.90381 4.90381C3.99477 5.81285 3.3757 6.97104 3.1249 8.23192C2.87409 9.49279 3.00282 10.7997 3.49479 11.9874C3.98676 13.1752 4.81988 14.1903 5.8888 14.9046C6.95772 15.6188 8.21442 16 9.5 16C11.11 16 12.59 15.41 13.73 14.43L14 14.71V15.5L19 20.49L20.49 19L15.5 14ZM9.5 14C7.01 14 5 11.99 5 9.5C5 7.01 7.01 5 9.5 5C11.99 5 14 7.01 14 9.5C14 11.99 11.99 14 9.5 14Z"
                                        fill="black" />
                                </svg>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./cart.html" class="btn px-4 rounded-5">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16 18C16.5304 18 17.0391 18.2107 17.4142 18.5858C17.7893 18.9609 18 19.4696 18 20C18 20.5304 17.7893 21.0391 17.4142 21.4142C17.0391 21.7893 16.5304 22 16 22C15.4696 22 14.9609 21.7893 14.5858 21.4142C14.2107 21.0391 14 20.5304 14 20C14 19.4696 14.2107 18.9609 14.5858 18.5858C14.9609 18.2107 15.4696 18 16 18ZM16 19C15.7348 19 15.4804 19.1054 15.2929 19.2929C15.1054 19.4804 15 19.7348 15 20C15 20.2652 15.1054 20.5196 15.2929 20.7071C15.4804 20.8946 15.7348 21 16 21C16.2652 21 16.5196 20.8946 16.7071 20.7071C16.8946 20.5196 17 20.2652 17 20C17 19.7348 16.8946 19.4804 16.7071 19.2929C16.5196 19.1054 16.2652 19 16 19ZM7 18C7.53043 18 8.03914 18.2107 8.41421 18.5858C8.78929 18.9609 9 19.4696 9 20C9 20.5304 8.78929 21.0391 8.41421 21.4142C8.03914 21.7893 7.53043 22 7 22C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20C5 19.4696 5.21071 18.9609 5.58579 18.5858C5.96086 18.2107 6.46957 18 7 18ZM7 19C6.73478 19 6.48043 19.1054 6.29289 19.2929C6.10536 19.4804 6 19.7348 6 20C6 20.2652 6.10536 20.5196 6.29289 20.7071C6.48043 20.8946 6.73478 21 7 21C7.26522 21 7.51957 20.8946 7.70711 20.7071C7.89464 20.5196 8 20.2652 8 20C8 19.7348 7.89464 19.4804 7.70711 19.2929C7.51957 19.1054 7.26522 19 7 19ZM18 6H4.27L6.82 12H15C15.33 12 15.62 11.84 15.8 11.6L18.8 7.6C18.93 7.43 19 7.22 19 7C19 6.73478 18.8946 6.48043 18.7071 6.29289C18.5196 6.10536 18.2652 6 18 6ZM15 13H6.87L6.1 14.56L6 15C6 15.2652 6.10536 15.5196 6.29289 15.7071C6.48043 15.8946 6.73478 16 7 16H18V17H7C6.46957 17 5.96086 16.7893 5.58579 16.4142C5.21071 16.0391 5 15.5304 5 15C4.9997 14.6607 5.08573 14.3269 5.25 14.03L5.97 12.56L2.34 4H1V3H3L3.85 5H18C18.5304 5 19.0391 5.21071 19.4142 5.58579C19.7893 5.96086 20 6.46957 20 7C20 7.5 19.83 7.92 19.55 8.26L16.64 12.15C16.28 12.66 15.68 13 15 13Z"
                                        fill="black" />
                                </svg>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./account.html" class="btn px-4 rounded-5">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4 18C4 16.9391 4.42143 15.9217 5.17157 15.1716C5.92172 14.4214 6.93913 14 8 14H16C17.0609 14 18.0783 14.4214 18.8284 15.1716C19.5786 15.9217 20 16.9391 20 18C20 18.5304 19.7893 19.0391 19.4142 19.4142C19.0391 19.7893 18.5304 20 18 20H6C5.46957 20 4.96086 19.7893 4.58579 19.4142C4.21071 19.0391 4 18.5304 4 18Z"
                                        stroke="black" stroke-width="1.5" stroke-linejoin="round" />
                                    <path
                                        d="M12 10C13.6569 10 15 8.65685 15 7C15 5.34315 13.6569 4 12 4C10.3431 4 9 5.34315 9 7C9 8.65685 10.3431 10 12 10Z"
                                        stroke="black" stroke-width="1.5" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Smaller Screen Navbar Menu -->
        <nav class="navbar d-flex d-lg-none navbar-expand-lg bg-white shadow">
            <div class="container-fluid mx-lg-5 px-lg-4 mx-2 px-2">
                <div class="d-flex flex-column justify-content-center w-100">
                    <div class="d-block text-center">
                        <a href="./index.html" class="text-decoration-none text-dark logo">
                            <img src="/public/src/img/danikomlogo.svg" alt="Danikom Logo" class="me-1" />Danikom
                            Trading
                        </a>
                    </div>
                    <button class="navbar-toggler border-0 d-block" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon border-0">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <g id="Menu / Menu_Alt_02">
                                        <path id="Vector" d="M11 17H19M5 12H19M11 7H19" stroke="#000000"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </g>
                            </svg>
                        </span>
                    </button>
                </div>
                <div class="collapse navbar-collapse border-top-2 w-100" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="./index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="./about.html">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown"
                              aria-expanded="false">
                              Our Products
                            </a>
                            <ul class="dropdown-menu">
                              <li>
                                <a class="dropdown-item my-1 nav-link text-dark" href="./naturalcocoa.html">Natural Cocoa Butter</a>
                              </li>
                              <li class="nav-item dropdown-submenu">
                                <a class="nav-link test text-dark dropdown-toggle" tabindex="-1" href="#">Unrefined Shea Butter<span class="caret"></span></a>
                                </a>
                                <ul class="dropdown-menu">
                                  <li>
                                    <a class="dropdown-item my-1 nav-link text-dark" href="./ivoryshea.html">Ivory</a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item my-1 nav-link text-dark" href="./yellowshea.html">Yellow</a>
                                  </li>
                                 
                                </ul>
                              </li>    
                             
                              <li>
                                <a class="dropdown-item my-1 nav-link text-dark" href="./handcraftedbasket.html">Handcrafted Basket</a>
                              </li>
                              <li>
                                <a class="dropdown-item my-1 nav-link text-dark" href="./cashewnuts.html">Cashew Nuts in Shells</a>
                              </li>
                              <li>
                                <a class="dropdown-item my-1 nav-link text-dark" href="./bodicare.html">Bodicare African Black Soap</a>
                              </li>
                            </ul>
                          </li>

                        <li class="nav-item">
                            <a class="nav-link text-dark" href="./contact.html">Contact us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="./trackorder.html">Track Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="./account.html">My Account</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- Main Content starts here -->
    <main class="bg-light main">
        <!-- Hero Header starts here -->
        <div class="about-header text-light d-flex flex-column justify-content-center align-items-center">

            <h3 class="fw-bold">About Us</h3>
            <p>Get To Know Who We Are</p>

        </div>
        <!-- Hero Header ends here -->


        <!-- About US Section starts here -->
        <div class="container py-5">
            <div class="header text-center d-flex justify-content-center w-100 h-100">
                <img src="/public/src/img/line.svg" alt="" class="line">
                <h3 class="text-uppercase ms-2 px-2 py-1 border bg-white border-dark rounded d-block">Our Story</h3>
            </div>

            <h5 class="my-3 text-center">Core Values: Credible & Reputable, Quality, <br>
                Innovations & Timely Delivery of products </h5>

            <div class="about-us d-flex justify-content-center align-items-center p-lg-5 p-2">
                <p>
                    Danikom Trading is a credible export brand strategically located in Tamale, the northern region of
                    Ghana which produces Unrefined Shea Butter, Black Soap, and other range of natural cosmetic raw
                    materials for the Ghanaian and export markets.
                    <br><br>
                    We also export Cocoa Butter, Soya beans and Cashews. With over 7 years of experience, we are well
                    known as a credible, reliable, and trusted export brand serving our clients with quality products at
                    competitive rates. We have also carved a niche for ourselves in the market as the preferred producer
                    and supplier of natural products.
                    <br><br>
                    We at Danikom believe that the success of our business lies in maintaining and acting in ways that
                    enhance our brand Integrity and credibility, consistent quality of our products, timely delivery,
                    and mutual trust between us and our clients and partners.
                     

                </p>
            </div>

            <div class="row justify-content-center align-items-center">
                <div class="col-lg-3 col-md-6 col-11 ms-lg-4 d-none d-lg-block">
                    <div class="card p-2">
                        <img src="/public/src/img/team/ceo.png" class="card-img-top w-100" alt="ceo-image">
                        <div class="card-body">
                            <h6 class="card-title team-name">Daniel D. Kombat</h6>
                            <p class="card-text">CEO</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6 col-11 my-lg-3 mt-4 mt-lg-0">
                    <div class="">
                        <div class="header d-flex">
                            <img src="/public/src/img/line.svg" alt="" class="line">
                            <h4 class="text-uppercase fs-5 ms-2 px-2 py-1 border bg-white border-dark rounded d-block">
                                Our Mission</h4>
                        </div>
                        <p class="py-2">To specialize in the production and supply of natural shea butter and the use of
                            modern technology to produce innovative and quality Shea products.</p>
                    </div>
                    <div class="pt-2">
                        <div class="header d-flex">
                            <img src="/public/src/img/line.svg" alt="" class="line">
                            <h4 class="text-uppercase fs-5 ms-2 px-2 py-1 border bg-white border-dark rounded d-block">
                                Our Vision</h4>
                        </div>
                        <p class="py-2">To be a world-class producer and supplier of natural shea butter, Black Soap,
                            and other Shea products.Our Core Values: Credible & Reputable, Quality, Innovation & Timely
                            Delivery.</p>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center ps-lg-4 w-100">
                    <p class=" col-lg-10 py-lg-5 py-3"> 
                        <b>NB:</b> <em>We are into bulk export both air shipping and sea. We however have different
                            Minimum Order Quantity
                            (MOQ) for air and sea a as well as different MOQ on some products. </em>
                    </p>
                </div>
            </div>

        </div>
        <!-- Our products Section ends here -->


        <!-- Our team Section starts here -->
        <div class="bg-light">
            <div class="container py-5">
                <div class="header text-center d-flex justify-content-center w-100 h-100">
                    <img src="/public/src/img/line.svg" alt="" class="line">
                    <h4 class="text-uppercase ms-2 px-2 py-1 border bg-white border-dark rounded d-block">
                        OUR TEAM
                    </h4>
                </div>

                <p class="text-center fw-bold">Meet Our Team</p>

                <div class="row">
                    <div class="col-lg-3 col-md-6 mt-3 mt-lg-0">
                        <div class="card p-2">
                            <img src="/public/src/img/team/ceo.png" class="card-img-top" alt="ceo">
                            <div class="card-body pb-5">
                                <h6 class="card-title team-name">Daniel D. Kombat</h6>
                                <p class="card-text">CEO</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-3 mt-lg-0">
                        <div class="card p-2">
                            <img src="/public/src/img/team/gm.png" class="card-img-top" alt="ceo">
                            <div class="card-body">
                                <h6 class="card-title team-name">Naseri Banning Batholomew</h6>
                                <p class="card-text">GENERAL MANAGER</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-3 mt-lg-0">
                        <div class="card p-2">
                            <img src="/public/src/img/team/fam.png" class="card-img-top" alt="ceo">
                            <div class="card-body">
                                <h6 class="card-title team-name">Nashiru Philemon Dakibat</h6>
                                <p class="card-text">FINANCE & ADMINISTRATION MANAGER</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-3 mt-lg-0">
                        <div class="card p-2">
                            <img src="/public/src/img/team/ceo.png" class="card-img-top" alt="ceo">
                            <div class="card-body">
                                <h6 class="card-title team-name">Angdi Impelee</h6>
                                <p class="card-text">SALES DIRECTOR (USA, CANADA & THE CARIBBEAN</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Our team Section ends here -->

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

    <!-- Footer Section Starts here -->
    <footer class="pt-5 w-100 d-flex flex-column justify-content-center align-items-center">
        <div class="d-none d-lg-flex row w-100 justify-content-between align-items-start container px-4 text-light">
            <div class="col-lg-3">
                <div class="footer-logo">
                    <h5 class="fs-6">
                        <img src="/public/src/img/danikomlogo.svg" alt="Danikom Logo"> Danikom Trading
                    </h5>
                </div>
                <p class="mt-3">Danikom Trading is a credible export brand strategically
                    located in Tamale, the northern region of Ghana which
                    produces Unrefined Shea Butter, Black Soap, and other
                    range of natural cosmetic raw materials for the Ghanaian
                    and export markets. We also export Cocoa Butter, Soya
                    beans and Cashews.
                    <!-- With over 7 years of experience, we are well known as
            a credible, reliable, and trusted export brand serving our 
            clients with quality products at competitive rates.
            We have also carved a niche for ourselves in the market 
            as the preferred producer and supplier of natural products. -->
                </p>

                <div class="socials d-flex align-items-center">
                    <div class="social">
                        <a href="#">
                            <svg width="18" height="18" viewBox="0 0 19 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.9397 0.291885H1.81293C1.11981 0.291885 0.556641 0.862928 0.556641 1.56393V16.6631C0.556641 17.3641 1.11981 17.9351 1.81293 17.9351H16.9397C17.6328 17.9351 18.1999 17.3641 18.1999 16.6631V1.56393C18.1999 0.862928 17.6328 0.291885 16.9397 0.291885ZM5.889 15.4147H3.27402V6.99474H5.89293V15.4147H5.889ZM4.58151 5.84478C3.74266 5.84478 3.06529 5.16347 3.06529 4.32857C3.06529 3.49366 3.74266 2.81235 4.58151 2.81235C5.41641 2.81235 6.09772 3.49366 6.09772 4.32857C6.09772 5.16741 5.42035 5.84478 4.58151 5.84478ZM15.6912 15.4147H13.0763V11.3189C13.0763 10.3422 13.0566 9.08594 11.7176 9.08594C10.3549 9.08594 10.1462 10.1493 10.1462 11.248V15.4147H7.53124V6.99474H10.0399V8.1447H10.0753C10.4258 7.48308 11.2804 6.78602 12.5525 6.78602C15.199 6.78602 15.6912 8.53065 15.6912 10.7991V15.4147Z"
                                    fill="black" />
                            </svg>
                        </a>
                    </div>
                    <div class="social">
                        <a href="#">
                            <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.9837 9.11351C16.9837 5.05557 13.6903 1.76216 9.63236 1.76216C5.57441 1.76216 2.28101 5.05557 2.28101 9.11351C2.28101 12.6716 4.80987 15.6342 8.16209 16.3178V11.3189H6.69182V9.11351H8.16209V7.27567C8.16209 5.85686 9.31625 4.7027 10.7351 4.7027H12.5729V6.90811H11.1026C10.6983 6.90811 10.3675 7.23892 10.3675 7.64324V9.11351H12.5729V11.3189H10.3675V16.4281C14.0799 16.0605 16.9837 12.9289 16.9837 9.11351Z"
                                    fill="black" />
                            </svg>
                        </a>
                    </div>
                    <div class="social">
                        <a href="#">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.8865 6.72432C8.25285 6.72432 7.64515 6.97604 7.19709 7.4241C6.74903 7.87216 6.49731 8.47986 6.49731 9.11351C6.49731 9.74716 6.74903 10.3549 7.19709 10.8029C7.64515 11.251 8.25285 11.5027 8.8865 11.5027C9.52016 11.5027 10.1279 11.251 10.5759 10.8029C11.024 10.3549 11.2757 9.74716 11.2757 9.11351C11.2757 8.47986 11.024 7.87216 10.5759 7.4241C10.1279 6.97604 9.52016 6.72432 8.8865 6.72432Z"
                                    fill="black" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M5.04166 2.55757C7.59701 2.27433 10.1758 2.27433 12.7312 2.55757C14.1272 2.71342 15.2527 3.81245 15.4166 5.21362C15.7197 7.80472 15.7197 10.4223 15.4166 13.0134C15.2527 14.4146 14.1272 15.5136 12.7319 15.6702C10.1763 15.9535 7.59725 15.9535 5.04166 15.6702C3.64564 15.5136 2.52015 14.4146 2.35621 13.0141C2.05314 10.4228 2.05314 7.80496 2.35621 5.21362C2.52015 3.81245 3.64564 2.71342 5.04166 2.55757ZM12.5621 4.7027C12.3671 4.7027 12.1801 4.78015 12.0423 4.91801C11.9044 5.05588 11.827 5.24286 11.827 5.43783C11.827 5.6328 11.9044 5.81979 12.0423 5.95765C12.1801 6.09552 12.3671 6.17297 12.5621 6.17297C12.7571 6.17297 12.944 6.09552 13.0819 5.95765C13.2198 5.81979 13.2972 5.6328 13.2972 5.43783C13.2972 5.24286 13.2198 5.05588 13.0819 4.91801C12.944 4.78015 12.7571 4.7027 12.5621 4.7027ZM5.39453 9.11351C5.39453 8.1874 5.76242 7.29923 6.41728 6.64437C7.07213 5.98951 7.96031 5.62162 8.88642 5.62162C9.81253 5.62162 10.7007 5.98951 11.3556 6.64437C12.0104 7.29923 12.3783 8.1874 12.3783 9.11351C12.3783 10.0396 12.0104 10.9278 11.3556 11.5826C10.7007 12.2375 9.81253 12.6054 8.88642 12.6054C7.96031 12.6054 7.07213 12.2375 6.41728 11.5826C5.76242 10.9278 5.39453 10.0396 5.39453 9.11351Z"
                                    fill="black" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <h5 class="fs-6">Company</h5>
                <ul class="list-unstyled">
                    <li><a href="./home.html" class="text-decoration-none text-light mt-3">Home</a></li>
                    <li><a href="./about.html" class="text-decoration-none text-light mt-3">About Us</a></li>
                    <li><a href="./products.html" class="text-decoration-none text-light mt-3">Our Products</a></li>
                    <li><a href="./contact.html" class="text-decoration-none text-light mt-3">Contact Us</a></li>
                </ul>
            </div>

            <div class="col-lg-2">
                <h5 class="fs-6">Customer Service</h5>
                <ul class="list-unstyled">
                    <li><a href="./account.html" class="text-decoration-none text-light mt-3">My Account</a></li>
                    <li><a href="./trackorder.html" class="text-decoration-none text-light mt-3">Track Orders</a></li>
                    <li><a href="./faqs.html" class="text-decoration-none text-light mt-3">FAQs</a></li>
                </ul>
            </div>
            <div class="col-lg-2">
                <h5 class="fs-6">Our Information</h5>
                <ul class="list-unstyled">
                    <li><a href="./privacypolicy.html" class="text-decoration-none text-light mt-3">Privacy</a></li>
                    <li><a href="#" class="text-decoration-none text-light mt-3">User T&Cs</a></li>
                    <li><a href="./returnpolicy.html" class="text-decoration-none text-light mt-3">Return Policy</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h5 class="fs-6">Contact Info</h5>
                <p>+233 (0) 24 662 6516</p>
                <p>
                    <span>danikomtrading@gmail.com </span> <br>
                    <span>clientservices@danikom.net</span>
                </p>
                <p>PLT NO. 217, BLK A, Opposite <br>
                    Salvation of Christ Prayer Family <br>
                    Church Auditorium, <br>
                    Target Tamale, Ghana <br>
                    P. O. Box 3061, Tamale, Ghana <br>
                    NT – 0299 – 7389</p>
            </div>
        </div>
        <div class="d-flex d-lg-none row w-100 justify-content-between align-items-start container px-4 text-light">
            <div class="col-lg-3">
                <div class="footer-logo">
                    <h5 class="fs-6">
                        <img src="/public/src/img/danikomlogo.svg" alt="Danikom Logo"> Danikom Trading
                    </h5>
                </div>
                <p class="mt-3">Danikom Trading is a credible export brand strategically
                    located in Tamale, the northern region of Ghana which
                    produces Unrefined Shea Butter, Black Soap, and other
                    range of natural cosmetic raw materials for the Ghanaian
                    and export markets. We also export Cocoa Butter, Soya
                    beans and Cashews.
                    <!-- With over 7 years of experience, we are well known as
            a credible, reliable, and trusted export brand serving our 
            clients with quality products at competitive rates.
            We have also carved a niche for ourselves in the market 
            as the preferred producer and supplier of natural products. -->
                </p>
            </div>

            <div class="col-lg-3 mt-3">
                <h5 class="fs-6">Contact Info</h5>
                <p>+233 (0) 24 662 6516</p>
                <p>
                    <span>danikomtrading@gmail.com </span> <br>
                    <span>clientservices@danikom.net</span>
                </p>
                <p>PLT NO. 217, BLK A, Opposite <br>
                    Salvation of Christ Prayer Family <br>
                    Church Auditorium, <br>
                    Target Tamale, Ghana <br>
                    P. O. Box 3061, Tamale, Ghana <br>
                    NT – 0299 – 7389</p>
            </div>

            <div class="socials d-flex align-items-center">
                <div class="social">
                    <a href="#">
                        <svg width="18" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.9397 0.291885H1.81293C1.11981 0.291885 0.556641 0.862928 0.556641 1.56393V16.6631C0.556641 17.3641 1.11981 17.9351 1.81293 17.9351H16.9397C17.6328 17.9351 18.1999 17.3641 18.1999 16.6631V1.56393C18.1999 0.862928 17.6328 0.291885 16.9397 0.291885ZM5.889 15.4147H3.27402V6.99474H5.89293V15.4147H5.889ZM4.58151 5.84478C3.74266 5.84478 3.06529 5.16347 3.06529 4.32857C3.06529 3.49366 3.74266 2.81235 4.58151 2.81235C5.41641 2.81235 6.09772 3.49366 6.09772 4.32857C6.09772 5.16741 5.42035 5.84478 4.58151 5.84478ZM15.6912 15.4147H13.0763V11.3189C13.0763 10.3422 13.0566 9.08594 11.7176 9.08594C10.3549 9.08594 10.1462 10.1493 10.1462 11.248V15.4147H7.53124V6.99474H10.0399V8.1447H10.0753C10.4258 7.48308 11.2804 6.78602 12.5525 6.78602C15.199 6.78602 15.6912 8.53065 15.6912 10.7991V15.4147Z"
                                fill="black" />
                        </svg>
                    </a>
                </div>
                <div class="social">
                    <a href="#">
                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.9837 9.11351C16.9837 5.05557 13.6903 1.76216 9.63236 1.76216C5.57441 1.76216 2.28101 5.05557 2.28101 9.11351C2.28101 12.6716 4.80987 15.6342 8.16209 16.3178V11.3189H6.69182V9.11351H8.16209V7.27567C8.16209 5.85686 9.31625 4.7027 10.7351 4.7027H12.5729V6.90811H11.1026C10.6983 6.90811 10.3675 7.23892 10.3675 7.64324V9.11351H12.5729V11.3189H10.3675V16.4281C14.0799 16.0605 16.9837 12.9289 16.9837 9.11351Z"
                                fill="black" />
                        </svg>
                    </a>
                </div>
                <div class="social">
                    <a href="#">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.8865 6.72432C8.25285 6.72432 7.64515 6.97604 7.19709 7.4241C6.74903 7.87216 6.49731 8.47986 6.49731 9.11351C6.49731 9.74716 6.74903 10.3549 7.19709 10.8029C7.64515 11.251 8.25285 11.5027 8.8865 11.5027C9.52016 11.5027 10.1279 11.251 10.5759 10.8029C11.024 10.3549 11.2757 9.74716 11.2757 9.11351C11.2757 8.47986 11.024 7.87216 10.5759 7.4241C10.1279 6.97604 9.52016 6.72432 8.8865 6.72432Z"
                                fill="black" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5.04166 2.55757C7.59701 2.27433 10.1758 2.27433 12.7312 2.55757C14.1272 2.71342 15.2527 3.81245 15.4166 5.21362C15.7197 7.80472 15.7197 10.4223 15.4166 13.0134C15.2527 14.4146 14.1272 15.5136 12.7319 15.6702C10.1763 15.9535 7.59725 15.9535 5.04166 15.6702C3.64564 15.5136 2.52015 14.4146 2.35621 13.0141C2.05314 10.4228 2.05314 7.80496 2.35621 5.21362C2.52015 3.81245 3.64564 2.71342 5.04166 2.55757ZM12.5621 4.7027C12.3671 4.7027 12.1801 4.78015 12.0423 4.91801C11.9044 5.05588 11.827 5.24286 11.827 5.43783C11.827 5.6328 11.9044 5.81979 12.0423 5.95765C12.1801 6.09552 12.3671 6.17297 12.5621 6.17297C12.7571 6.17297 12.944 6.09552 13.0819 5.95765C13.2198 5.81979 13.2972 5.6328 13.2972 5.43783C13.2972 5.24286 13.2198 5.05588 13.0819 4.91801C12.944 4.78015 12.7571 4.7027 12.5621 4.7027ZM5.39453 9.11351C5.39453 8.1874 5.76242 7.29923 6.41728 6.64437C7.07213 5.98951 7.96031 5.62162 8.88642 5.62162C9.81253 5.62162 10.7007 5.98951 11.3556 6.64437C12.0104 7.29923 12.3783 8.1874 12.3783 9.11351C12.3783 10.0396 12.0104 10.9278 11.3556 11.5826C10.7007 12.2375 9.81253 12.6054 8.88642 12.6054C7.96031 12.6054 7.07213 12.2375 6.41728 11.5826C5.76242 10.9278 5.39453 10.0396 5.39453 9.11351Z"
                                fill="black" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="copyright pt-3 mt-3">
            <p class="container mt-0 fs-6">
                Copyright © Danikom Trading 2024. All Rights Reserved
            </p>
        </div>
    </footer>
    <!-- Footer Section Ends here -->
</body>

</html>