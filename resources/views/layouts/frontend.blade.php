<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6T0MFC9H1N"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-6T0MFC9H1N');
    </script>

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bocacosta Coffee</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <meta name="keywords" content="coffee, bocacosta, Guatemala, shop">
    <meta name="description" content="Bocacosta Coffee Shop">
    <meta name="author" content="Szystems">
    <link rel="icon" href="{{ asset('bocacostacafeweb/images/logos/favico.ico') }}">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('bocacostacafeweb/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bocacostacafeweb/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('bocacostacafeweb/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bocacostacafeweb/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bocacostacafeweb/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('bocacostacafeweb/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('bocacostacafeweb/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('bocacostacafeweb/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('bocacostacafeweb/css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('bocacostacafeweb/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('bocacostacafeweb/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('bocacostacafeweb/css/style.css') }}">

    {{-- material icons --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    {{-- whatsapp --}}
    <style>
        .whatsapp-chat{
            bottom: 10px;
            left: 50px;
            position: fixed;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('bocacostacafeweb/images/logos/logorojo.png') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ Request::is('/') ? 'active bg-gradient-info':''  }}"><a href="{{ url('/') }}" class="nav-link">Home</a></li>

                    <li class="nav-item dropdown {{ Request::is('history') ? 'active bg-gradient-info':''  }}">
                        <a class="nav-link dropdown-toggle" href="" id="dropdown04" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">About</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="{{ url('history') }}">History</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown {{ Request::is('category','ourcoffee') ? 'active bg-gradient-info':''  }}">
                        <a class="nav-link dropdown-toggle" href="{{ url('category') }}" id="dropdown03" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Our Coffee</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown03">
                            <a class="dropdown-item" href="{{ url('category') }}">Choose your type of flavor</a>
                            @php
                                $categories=DB::table('categories')
                                ->where('status','=','1')
                                ->orderBy('name','asc')
                                ->get();
                            @endphp
                            @foreach ($categories as $cat)
                                <a class="dropdown-item" href="{{ url('view-category/'.$cat->slug) }}">
                                    {{ $cat->name }}
                                    @if ($cat->popular == "1")
                                        <span class="badge badge-info">{{ $cat->popular == '1'? 'Popular':''}}</span>
                                    @endif
                                </a>
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item {{ Request::is('contact') ? 'active bg-gradient-info':''  }}"><a href="{{ url('contact') }}" class="nav-link">Contact</a></li>
                    <li class="nav-item {{ Request::is('wholesale') ? 'active bg-gradient-info':''  }}"><a href="{{ url('wholesale') }}" class="nav-link">Wholesale</a></li>
                    <!-- <li class="nav-item"><a href="socialimpact.html" class="nav-link">Social Impact</a></li>
                    <li class="nav-item"><a href="coffeebenefits.html" class="nav-link">Coffee Benefits</a></li> -->
                    <!-- <li class="nav-item"><a href="" class="nav-link">Coffee Quiz</a></li> -->




                    @if (Auth::guest())
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                My Account
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                                <a class="dropdown-item" href="{{ route('login') }}">Sign In</a>
                                <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                                <a class="dropdown-item" href="{{ route('password.request') }}">Forgot Your Password?</a>
                            </div>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            @php
                                $usuario = Auth::user()->name; $nombre = explode(' ',trim($usuario));
                            @endphp
                            <a class="nav-link dropdown-toggle" href="" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ ucwords($nombre[0]) }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdown02">
                                <a class="dropdown-item" href="{{ url('my-account') }}">- My Account</a>
                                <a class="dropdown-item" href="{{ url('whislist') }}">- Wishlist</a>
                                <a class="dropdown-item" href="{{ url('cart') }}">- Cart</a>
                                <a class="dropdown-item" href="{{ url('my-orders') }}">- Orders</a>
                                @if (Auth::user()->role_as == "1")
                                <a class="dropdown-item" href="{{ url('dashboard') }}">- Admin Dashboard</a>
                                @endif
                                <a href="javascript:; {{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item"><font color="red">- LOGOUT</font>  </a>
                                <form id="logout-form" action="{{ url('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endif
                    <li class="nav-item cart">
                        @if (Auth::guest())
                            <a href="{{ route('login') }}" class="nav-link">
                                <span class="icon icon-shopping_cart"></span>
                                <span class="bag d-flex justify-content-center align-items-center font-weight-bold text-white"><small>0</small></span>
                            </a>
                        @else
                            <a href="{{ url('cart') }}" class="nav-link">
                                <span class="icon icon-shopping_cart"></span>
                                <span class="bag d-flex justify-content-center align-items-center cart-count-pill font-weight-bold text-white"><small>0</small></span>
                            </a>
                        @endif
                    </li>
                    <li class="nav-item cart">
                        @if (Auth::guest())
                            <a href="{{ route('login') }}" class="nav-link">
                                <span class="material-symbols-outlined">favorite</span>
                                <span class="bag d-flex justify-content-center align-items-center font-weight-bold text-white"><small>0</small></span>
                            </a>
                        @else
                        <a href="{{ url('wishlist') }}" class="nav-link">
                            <span class="material-symbols-outlined">favorite</span>
                            <span class="bag d-flex justify-content-center align-items-center wish-count font-weight-bold text-white"><small>0</small></span>
                        </a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    @yield('content')

    <footer class="ftco-footer ftco-section img">
        <div class="overlay"></div>
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6 col-md-6 mb-5 mb-md-5">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">About Us</h2>
                        <p>The flavors of our coffee are spectacular. But, unfortunately, they are nowhere to be found.
                        </p>
                        <p><strong>ONLY IN BOCACOSTA COFFEE</strong></p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <!-- <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li> -->
                            <li class="ftco-animate"><a href="https://www.instagram.com/bocacostacoffeeus/"><span
                                        class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <!-- <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Recent Blog</h2>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a>
                                </h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a>
                                </h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="{{ url('/') }}" class="py-2 d-block">Home</a></li>
                            <li><a href="ourcoffee.html" class="py-2 d-block">Our Coffee</a></li>
                            <!-- <li><a href="wholesale.html" class="py-2 d-block">Wholesale</a></li> -->
                            <li><a href="{{ url('social-impact') }}" class="py-2 d-block">Social Impact</a></li>
                            <!-- <li><a href="coffeebenefits.html" class="py-2 d-block">Coffee Benefits</a></li> -->
                            <li><a href="{{ url('contact') }}" class="py-2 d-block">Contact</a></li>
                            <!-- <li><a href="faq.html" class="py-2 d-block">FAQ</a></li> -->
                        </ul>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        All rights reserved
                        | <a href="https://szystems.com" target="_blank">Szystems</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#c70017" />
        </svg></div>

    <!-- Plugins JS whatsapp File -->
    <div class="whatsapp-chat">
        <a href="https://wa.me/50242153288?text=I'm%20interested%20in%20your%20car%20for%20sale" target="_blank">
            <img src="{{ asset('assets/imgs/logow.png') }}" alt="whatsapp-chat" height="75px" width="75px">
        </a>
    </div>
    <script src="{{ asset('bocacostacafeweb/js/jquery.min.js') }}"></script>
    <script src="{{ asset('bocacostacafeweb/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('bocacostacafeweb/js/popper.min.js') }}"></script>
    <script src="{{ asset('bocacostacafeweb/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bocacostacafeweb/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('bocacostacafeweb/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('bocacostacafeweb/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('bocacostacafeweb/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('bocacostacafeweb/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('bocacostacafeweb/js/aos.js') }}"></script>
    <script src="{{ asset('bocacostacafeweb/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('bocacostacafeweb/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('bocacostacafeweb/js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('bocacostacafeweb/js/scrollax.min.js') }}"></script>
    <script src="{{ asset('bocacostacafeweb/js/main.js') }}"></script>
    {{-- Custom --}}
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
    {{-- <script src="{{ asset('frontend/css/custom.css') }}"></script> --}}
    <script src="{{ asset('frontend/js/checkout.js') }}"></script>

    {{-- sweet alert --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/63dae358474251287910fb32/1go7gg4im';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    <script>

        var availableTags = [];
        $.ajax({
            method: "GET",
            url: "/product-list",
            success: function (response) {
                //console.log(response);
                startAutoComplete(response);
            }
        });

        function startAutoComplete(availableTags)
        {
            $( "#search_product" ).autocomplete({
                source: availableTags
            });
        }


    </script>

    @if (session('status'))
    <script>
        swal("{{ session('status') }}");
    </script>
    @endif
    @yield('scripts')

</body>

</html>
