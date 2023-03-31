@extends('layouts.frontend')
{{-- Wholesale View --}}
@section('content')

    <section class="home-slider owl-carousel">

        <div class="slider-item" style="background-image: url({{ asset('bocacostacafeweb/images/pics2/Bocacostas-Warehouse.jpg')}});"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Wholesale</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Wholesale</span>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section contact-section">
        <div class="container mt-5">
            <div class="row block-9">
                <div class="col-md-4 contact-info ftco-animate">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <h2 class="h4">Wholesale</h2>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p>Our coffee is perfect for your business, and we constantly work hard to ensure that you always get the highest quality.
                            <br><span>THERE IS NO OTHER LIKE OURS</span></p>
                        </div>
                        <!-- <div class="col-md-12 mb-3">
                            <p><span>Address:</span> Portland Oregon, USA</p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span>Phone:</span> <a href="tel://1234567920">+1(346) 971 2038</a></p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span>Email:</span> <a href="mailto:info@bocacostacafe.com">info@bocacostacafe.com</a></p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span>Website:</span> <a href="#">www.bocacostacafe.com</a></p>
                        </div> -->
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-6 ftco-animate">
                    <form action="wholesale.php" class="contact-form" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Full Name" name="name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Job Title" name="job">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Email" name="email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name of Business" name="business">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Years in Business?</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="Years" name="years">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Number of Locations?</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="number" class="form-control number" placeholder="Locations" name="locations">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">What is your level of experience working with coffee?</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class=" form-control custom-select" placeholder="What is your level of experience working with coffee?" name="level">
                                        <option selected>Choose...</option>
                                        <option value="Non experience">Non experience</option>
                                        <option value="Experienced">Experienced</option>
                                        <option value="A lot experienced">A lot experienced</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Volume of pounds of coffee needed per week?</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="number" class="form-control number" placeholder="Volume of pounds" name="volume">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">How did you hear about us?</label>
                        </div>
                        <div class="form-group">
                            <textarea name="about" id="" cols="30" rows="7" class="form-control" placeholder="Tell us how you heard about us..."></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
