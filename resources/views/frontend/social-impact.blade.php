@extends('layouts.frontend')
{{-- Social Impact View --}}
@section('content')

    <section class="home-slider owl-carousel">

        <div class="slider-item" style="background-image: url({{ asset('bocacostacafeweb/images/varias/4.jpg')}});"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Social Impact</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Social
                                Impact</span>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ftco-animate text-center">
                    <h2 class="mb-3">World</h2>
                    <p>At Bocacosta, we have the mission of caring for the planet. Our processes are in a traditional way which is a project to avoid contamination. We are convinced that one by one, we will make a difference to improve our planet. Likewise, our products are carried with recyclable material. At Bocascosta, we care not only about our world but also about your health.</p>
                    <p>
                        <img src="{{ asset('bocacostacafeweb/images/varias/10.jpg')}}" alt="" class="img-fluid">
                    </p>
                    <h2 class="mb-3">Social Impact</h2>
                    <p>We work to maintain the best coffee flavors and quality. To achieve this, we have our partners in the field, who take the coffee from the farm to the comfort of your home—supporting the development of coffee farming from the farmers to the partners. At Bocacosta, the priority is the best work environment, so when negotiating, our most important requirement is that the partners have the necessary resources. In the same way, workers must have the best comforts and social resources that can be provided.</p>
                    <p>
                        <img src="{{ asset('bocacostacafeweb/images/varias/21.jpg')}}" alt="" class="img-fluid">
                    </p>
                </div> <!-- .col-md-8 -->

            </div>
        </div>
    </section> <!-- .section -->

@endsection
