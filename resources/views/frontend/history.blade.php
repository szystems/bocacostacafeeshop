@extends('layouts.frontend')
{{-- History View --}}
@section('content')

    <section class="ftco-about d-md-flex">
        <div class="one-half img" style="background-image: url({{ asset('bocacostacafeweb/images/pics/2.jpg')}});"></div>
        <div class="one-half ftco-animate">
            <div class="overlap">
                <div class="heading-section ftco-animate ">
                    <!-- <span class="subheading">Discover</span> -->
                    <h2 class="mb-4">{{ __("Our Story") }}</h2>
                </div>
                <!-- <div>
                    <p>In 2019, when our founder arrived at a coffee shop in Portland, he ordered a cup of coffee and
                        when he tasted it, he could see that the coffee was not of good quality. He knows that he was left
                        with the doubt because there was not a good quality. Our founder, seeing that there was no such
                        good quality coffee in the coffee market, began with the idea of offering high-quality coffee. Our
                        name is inspired by a region that after the high temperatures, the rain comes to refresh. We take
                        care of choosing the best coffee in the country and or the region.
                    </p>
                    <span class="subheading">Place and date of foundation:</span>
                    <p>
                        Portland, Oregon, 2019.
                        The founders have more than 30 years of experience in coffee. We are working so that each cup of
                        Bocacosta coffee is a unique experience and you can enjoy a coffee with the highest quality
                        standards.
                    </p> -->
                    <p>{{ __("When our founder arrived at a coffee shop in Portland, he ordered a cup of coffee, and when he tasted it, he could see that the coffee was not of good quality. He knows he was left with doubt because there was no good quality. Seeing that there was no such good quality coffee in the coffee market, our founder began with the idea of offering high-quality coffee. Our name is inspired by a region where the rain comes to refresh after the high temperatures. So we choose the best coffee in the country and region.") }}</p>
                    <p>{{ __("Have more than 30 years of experience in coffee. We are working so that each cup of Bocacosta coffee is a unique experience, and you can enjoy coffee with the highest quality standards.") }}</p>
                </div>
            </div>
        </div>
    </section>

@endsection
