@extends('layouts.frontend')
{{-- Trending products --}}
@section('content')
    <section class="home-slider owl-carousel" align="center">

        <div class="slider-item" style="background-image: url({{ asset('bocacostacoffeeweb/images/pics2/1.jpg') }});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-8 col-sm-12 text-center ftco-animate">
                        <!-- <span class="subheading">Welcome</span> -->
                        <!-- <h1 class="mb-4">The Best Coffee Testing Experience</h1> -->
                        <img src="{{ asset('bocacostacoffeeweb/images/logos/logoorojo.png') }}" class="img-fluid" height="325px" width="200px"
                            alt="">
                        <!-- <p class="mb-4 mb-md-5">Our coffee comes from Guatemala, a country recognized for having one of the best and unique coffees in the world.</p> -->
                        <!-- <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p> -->
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url({{ asset('bocacostacoffeeweb/images/pics2/2.jpg') }});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-8 col-sm-12 text-center ftco-animate">
                        <!-- <span class="subheading">Welcome</span> -->
                        <!-- <h1 class="mb-4">The Best Coffee Testing Experience</h1> -->
                        <img src="{{ asset('bocacostacoffeeweb/images/logos/logoorojo.png') }}" alt="">
                        <!-- <p class="mb-4 mb-md-5">High-altitude coffee, a coffee that in each cup you can feel the high quality and the best flavor you could imagine.</p> -->
                        <!-- <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p> -->
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url({{ asset('bocacostacoffeeweb/images/varias/16.jpg') }});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-8 col-sm-12 text-center ftco-animate">
                        <!-- <span class="subheading">Welcome</span> -->
                        <!-- <h1 class="mb-4">The Best Coffee Testing Experience</h1> -->
                        <img src="{{ asset('bocacostacoffeeweb/images/logos/logoorojo.png') }}" alt="">
                        <!-- <p class="mb-4 mb-md-5">High-altitude coffee, a coffee that in each cup you can feel the high quality and the best flavor you could imagine.</p> -->
                        <!-- <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p> -->
                    </div>

                </div>
            </div>
        </div>

    </section>

    {{-- <section class="ftco-intro">
        <div class="container-wrap">
            <div class="wrap d-md-flex align-items-xl-end">
                <div class="info">
                    <div class="row no-gutters">
                        <!-- <div class="col-md-12 d-flex ftco-animate">
                            <div class="icon"><span class="icon-phone"></span></div>
                            <div class="text">
                                <h3>+1(346) 971 2038</h3>
                                <p>Call us we are here to solve your doubts</p>
                            </div>
                        </div> -->
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="icon"><span class="icon-my_location"></span></div>
                            <div class="text">
                                <h2>Portland, Oregon, USA</h2>
                                <!-- <p> Portland Oregon, USA</p> -->
                            </div>
                        </div>
                        <!-- <div class="col-md-4 d-flex ftco-animate">
                            <div class="icon"><span class="icon icon-envelope"></span></div>
                            <div class="text">
                                <h3>info@bocacostacoffee.com</h3>
                                <p>We'd love to hear</p>
                            </div>
                        </div> -->
                    </div>
                </div>
                <!-- <div class="book p-4">
                    <h3>Book a Table</h3>
                    <form action="#" class="appointment-form">
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name">
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="text" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-md-calendar"></span></div>
                                    <input type="text" class="form-control appointment_date" placeholder="Date">
                                </div>
                            </div>
                            <div class="form-group ml-md-4">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-ios-clock"></span></div>
                                    <input type="text" class="form-control appointment_time" placeholder="Time">
                                </div>
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="text" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="submit" value="Appointment" class="btn btn-white py-3 px-4">
                            </div>
                        </div>
                    </form>
                </div> -->
            </div>
        </div>
    </section> --}}

    <section class="ftco-section ftco-services">
        <div class="container">
            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <div class="media d-block text-center block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-5">
                            <span class="flaticon-choices"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">{{ __('Easy to Order') }}</h3>
                            <!-- <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="media d-block text-center block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-5">
                            <span class="flaticon-delivery-truck"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">{{ __('Fastest Delivery') }}</h3>
                            <!-- <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="media d-block text-center block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-5">
                            <span class="flaticon-coffee-bean"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">{{ __('Quality Coffee') }}</h3>
                            <!-- <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-about d-md-flex">
        <div class="one-half img" style="background-image: url({{ asset('bocacostacoffeeweb/images/pics2/OUR-HISTORY_HW.jpg') }});"></div>
        <div class="one-half ftco-animate">
            <div class="overlap">
                <div class="heading-section ftco-animate ">
                    <!-- <span class="subheading">Discover</span> -->
                    <h2 class="mb-4">{{ __('Why Bocacosta Coffee?') }}</h2>
                </div>
                <div>
                    <p>{{ __("Bocacosta Coffee is not just a premium coffee brand. We have the best coffee, working with professionals with years of experience. Our competition coffee, you can't find it anywhere. That is why Bocacosta has no comparison. From the first sip of coffee, you can feel the special notes.") }}</p>
                    <p>{{ __('The coffee is unique from its collection. Therefore, we ensure the care required to guarantee its flavor and quality.') }}</p>
                    <!-- <span class="subheading">Place and date of foundation:</span> -->
                    <!-- <p>
                       Portland, Oregon, 2019. The founders have more than 30 years of experience in coffee. We are working so that each cup of Bocacosta coffee is a unique experience and you can enjoy a coffee with the highest quality standards.</p> -->
                    <!-- <p>When our founder arrived at a coffee shop in Portland, he ordered a cup of coffee, and when he tasted it, he could see that the coffee was not of good quality. He knows he was left with doubt because there was no good quality. Seeing that there was no such good quality coffee in the coffee market, our founder began with the idea of offering high-quality coffee. Our name is inspired by a region where the rain comes to refresh after the high temperatures. So we choose the best coffee in the country and region.</p>
                    <p> Have more than 30 years of experience in coffee. We are working so that each cup of Bocacosta coffee is a unique experience, and you can enjoy coffee with the highest quality standards.</p> -->
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 pr-md-5">
                    <div class="heading-section text-md-right ftco-animate">
                        <!-- <span class="subheading">Discover</span> -->
                        <h2 class="mb-4">{{ __('Our Coffee') }}</h2>
                        <p class="mb-4">{{ __("Our coffee comes from Guatemala, a country recognized for having one of the world's best and most unique coffees. High-altitude coffee is coffee in which you can feel the high quality and the best flavor you could imagine in each cup.") }}</p>
                        <h4><strong>{{ __('Cup of Coffee') }}</strong></h4>
                        <p class="mb-4">{{ __('It is not just a premium coffee. It is with which you accompany. Early in the morning to achieve those goals, going out with those special people, in work meetings, at the end of a long work day. For every moment, there is Bocacosta Coffee.') }}</p>
                        <p><a href="{{ url('category') }}" class="btn btn-primary btn-outline-primary px-4 py-3">{{ __('Our Coffee') }}</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="menu-entry">
                                <a href="ourcoffee.html" class="img"
                                    style="background-image: url({{ asset('bocacostacoffeeweb/images/menu-14.jpg') }});"></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="menu-entry mt-lg-4">
                                <a href="ourcoffee.html" class="img"
                                    style="background-image: url({{ asset('bocacostacoffeeweb/images/menu-3.jpg') }});"></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="menu-entry">
                                <a href="ourcoffee.html" class="img"
                                    style="background-image: url({{ asset('bocacostacoffeeweb/images/menu-4.jpg') }});"></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="menu-entry mt-lg-4">
                                <a href="ourcoffee.html" class="img"
                                    style="background-image: url({{ asset('bocacostacoffeeweb/images/menu-5.jpg') }});"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">{{ __('Categories') }}</h2>
            <p>{{ __('Choose one of our categories and buy the best coffee') }}</p>
          </div>
        </div>
        <div class="row">
            @php
                $numCats = $categories->count();
                if ($numCats > 4) {
                    $numCats = 3;
                }else {
                    $numCats = 12/$numCats;
                }
            @endphp
            @foreach ($categories as $cat)
                <div class="col-md-{{ $numCats }}">
                    <div class="menu-entry">
                        <a href="{{ url('view-category/'.$cat->slug) }}" class="img" style="background-image: url({{ asset('assets/uploads/category/'.$cat->image) }});"></a>
                        <div class="text text-center pt-4">
                            <h3><a href="{{ url('view-category/'.$cat->slug) }}">{{ $cat->name }}</a></h3>
                            <p>{{ $cat->description }}</p>
                            @if ($cat->popular == "1")
                                <span class="badge badge-info">{{ $cat->popular == '1'? 'Popular':''}}</span>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    	</div>
    </section> --}}

    <section class="ftco-counter ftco-bg-dark img" id="section-counter"
        style="background-image: url({{ asset('bocacostacoffeeweb/images/varias/12.jpg') }});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-coffee-bean"></span></div>
                                    <strong class="number" data-number="6">0</strong>
                                    <span>{{ __('Coffee Branches') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="icon-globe"></span></div>
                                    <strong class="number">+</strong><strong class="number" data-number="6">0</strong>
                                    <span>{{ __('Countries around the world') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="icon-users"></span></div>
                                    <strong class="number" data-number="10567">0</strong>
                                    <span>{{ __('Happy Customer') }}</span>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                                    <strong class="number" data-number="900">0</strong>
                                    <span>Staff</span>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-gallery">
        <div class="container-wrap">
            <div class="row no-gutters">

                <div class="col-md-3 ftco-animate">
                    <a href="#" class="gallery img d-flex align-items-center"
                        style="background-image: url({{ asset('bocacostacoffeeweb/images/pics2/1.jpg') }});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>

                <div class="col-md-3 ftco-animate">
                    <a href="#" class="gallery img d-flex align-items-center"
                        style="background-image: url({{ asset('bocacostacoffeeweb/images/pics2/2.jpg') }});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>

                <div class="col-md-3 ftco-animate">
                    <a href="#" class="gallery img d-flex align-items-center"
                        style="background-image: url({{ asset('bocacostacoffeeweb/images/pics2/3.jpg') }});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>

                <div class="col-md-3 ftco-animate">
                    <a href="#" class="gallery img d-flex align-items-center"
                        style="background-image: url({{ asset('bocacostacoffeeweb/images/pics2/4.jpg') }});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <section class="ftco-section img" id="ftco-testimony" style="background-image: url({{ asset('bocacostacoffeeweb/images/varias/17.jpg') }});"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <!-- <span class="subheading">Testimony</span> -->
                    <h2 class="mb-4">{{ __('Customers Says') }}</h2>
                    <p>{{ __('Your opinion is important to us.') }}</p>
                </div>
            </div>
        </div>
        <div class="container-wrap">
            <div class="row d-flex no-gutters">
                <div class="col-lg align-self-sm-end ftco-animate">
                    <div class="testimony">
                        <blockquote>
                            <p>&ldquo;{{ __('I was looking for coffee from this region, and thanks to the internet, I found Bocacosta, and now I am buying here for my business.') }}&rdquo;</p>
                        </blockquote>
                        <!-- <div class="author d-flex mt-4">
                            <div class="image mr-3 align-self-center">
                                <img src="{{ asset('bocacostacoffeeweb/images/person_1.jpg')}}" alt="">
                            </div>
                            <div class="name align-self-center">Louise Kelly
                                <span class="position">Illustrator Designer</span>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg align-self-sm-end">
                    <div class="testimony overlay">
                        <blockquote>
                            <p>&ldquo;{{ __('The smell when the coffee maker makes the coffee is simply spectacular, and when visitors come to my house, I recommend Bocacosta.') }}&rdquo;</p>
                        </blockquote>
                        <!-- <div class="author d-flex mt-4">
                            <div class="image mr-3 align-self-center">
                                <img src="{{ asset('bocacostacoffeeweb/images/person_2.jpg')}}" alt="">
                            </div>
                            <div class="name align-self-center">Louise Kelly
                                <span class="position">Illustrator Designer</span>
                                </div>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg align-self-sm-end">
                    <div class="testimony overlay">
                        <blockquote>
                            <p>&ldquo;{{ __('My friend recommended this coffee to me, and I bought a bag. Then I started buying wholesale for my cafeterias, which is selling spectacularly.') }}&rdquo;</p>
                        </blockquote>
                        <!-- <div class="author d-flex mt-4">
                            <div class="image mr-3 align-self-center">
                                <img src="{{ asset('bocacostacoffeeweb/images/person_2.jpg')}}" alt="">
                            </div>
                            <div class="name align-self-center">Louise Kelly
                                <span class="position">Illustrator Designer</span>
                                </div>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg align-self-sm-end ftco-animate">
                    <div class="testimony">
                        <blockquote>
                            <p>&ldquo;{{ __("I thought I had tasted good coffee, and when I tried it, I knew it was good. I'm happy because I have already found my coffee supplier.") }}&rdquo;</p>
                        </blockquote>
                        <!-- <div class="author d-flex mt-4">
                            <div class="image mr-3 align-self-center">
                                <img src="{{ asset('bocacostacoffeeweb/images/person_3.jpg')}}" alt="">
                            </div>
                            <div class="name align-self-center">Louise Kelly
                                <span class="position">Illustrator Designer</span>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
