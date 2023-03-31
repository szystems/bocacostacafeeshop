@extends('layouts.frontend')
{{-- OurCoffee Categories --}}
@section('content')
    <section class="ftco-menu mb-5 pb-5">
        <div class="container">
            <div class="row d-md-flex">
                <div class="col-lg-12 ftco-animate p-md-5">
                    <div class="row">
                        <div class="heading-section ftco-animate">
                            <!-- <span class="subheading" align="center">Discover</span> -->
                            <h2 class="mb-4" align="center">Our Coffee</h2>
                            <p class="mb-4">Our coffee comes from countries recognized for having one of the world's best
                                and most unique coffees high altitude coffee, which you can feel the high quality and the
                                best flavor in each cup.</p>
                        </div>
                        <div>
                            <h3>Choose your type of flavor:</h3>
                        </div>
                        <div class="col-md-12 nav-link-wrap mb-5">
                            <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">

                                @foreach ($categories as $cat)
                                    <a class="nav-link" id="v-pills-{{ $cat->id }}-tab" data-toggle="pill" href="#v-pills-{{ $cat->id }}" role="tab" aria-controls="v-pills-{{ $cat->id }}" aria-selected="true">
                                        {{ $cat->name }}
                                        @if ($cat->popular == "1")
                                            <span class="badge badge-info">{{ $cat->popular == '1'? 'Popular':''}}</span>
                                        @endif
                                    </a>

                                @endforeach

                            </div>
                        </div>
                        <div class="col-md-12 d-flex align-items-center">
                            <div class="tab-content ftco-animate" id="v-pills-tabContent">

                                @foreach ($categories as $cat)
                                <div class="tab-pane fade show " id="v-pills-{{ $cat->id }}" role="tabpanel" aria-labelledby="v-pills-0-tab">
                                    <div class="row">
                                            @php
                                                $products=DB::table('products')
                                                ->where('status','=',1)
                                                ->where('cate_id', '=', $cat->id)
                                                ->orderBy('name','asc')
                                                ->get();

                                                $numProds = $products->count();
                                                if ($numProds > 4) {
                                                    $numProds = 3;
                                                }else {
                                                    $numProds = 12/$numProds;
                                                }
                                            @endphp
                                            @foreach ($products as $prod)
                                            <div class="col-md-{{ $numProds }} product_data">
                                                <input type="hidden" value="{{ $prod->id }}" class="prod_id">
                                                <input type="hidden" value="1" class="qty-input">
                                                <div class="menu-entry">
                                                    <div class="text text-center pt-4">
                                                        <h3><a href="{{ url('category/'.$cat->slug.'/'.$prod->slug) }}">
                                                            {{ $prod->name }}
                                                        </a></h3>
                                                            @if ($prod->trending == "1")
                                                                <span class="badge badge-info">{{ $prod->trending == '1'? 'Trending':''}}</span>
                                                            @endif
                                                    </div>
                                                    <a href="{{ url('category/'.$cat->slug.'/'.$prod->slug) }}" class="img" style="background-image: url({{ asset('assets/uploads/product/'.$prod->image) }});"></a>
                                                    <div class="text text-center pt-4">
                                                        <p>{{ $prod->description }}</p>

                                                            @if ($prod->discount == "1")
                                                                <p class="price">
                                                                    <span>{{ $config->currency_simbol }}{{ number_format($prod->selling_price,2, '.', ',') }}</span>
                                                                    <span><strike><font color="c70017">{{ $config->currency_simbol }}{{ number_format($prod->original_price,2, '.', ',') }}</font></strike></span>
                                                                    @if ($prod->discount == "1")
                                                                        <span class="badge badge-warning">{{ $prod->discount == '1'? '% Off':''}}</span>
                                                                    @endif
                                                                </p>
                                                            @else
                                                                <p class="price">
                                                                    <span>{{ $config->currency_simbol }}{{ number_format($prod->original_price,2, '.', ',') }}</span>
                                                                    @if ($prod->discount == "1")
                                                                        <span class="badge badge-warning">{{ $prod->discount == '1'? '% Off':''}}</span>
                                                                    @endif
                                                                </p>
                                                            @endif


                                                        <p>
                                                            @if (Auth::guest())
                                                                <div class="product-action-vertical">
                                                                    <a href="{{ route('login') }}" class="btn btn-link addToWishlist btn-outline-white"><span class="material-symbols-outlined">favorite</span></a>
                                                                </div><!-- End .product-action-vertical -->
                                                            @else
                                                                <div class="product-action-vertical">
                                                                    <a href="#" class="btn btn-link addToWishlist btn-outline-white"><span class="material-symbols-outlined">favorite</span></a>
                                                                </div><!-- End .product-action-vertical -->
                                                            @endif

                                                            @if ($prod->qty > 0)
                                                                @if (Auth::guest())
                                                                    <a href="{{ url('login') }}" class="btn btn-primary btn-outline-primary addToCartBtn">Add to Cart</a>
                                                                @else
                                                                    <a href="#" class="btn btn-primary btn-outline-primary addToCartBtn">Add to Cart</a>
                                                                @endif
                                                            @else
                                                                <div class="product-action">
                                                                    <a href="{{ url('category/'.$prod->category->slug.'/'.$prod->slug) }}" class="btn-product"><i class="icon-search"></i><span> View Details...</span></a>
                                                                </div><!-- End .product-action -->
                                                                <a href="{{ url('category/'.$cat->slug.'/'.$prod->slug) }}" class="btn btn-primary btn-outline-primary">View Product...</a>
                                                            @endif
                                                            <br>
                                                            @if($prod->qty > 0)
                                                                <span class="badge badge-success">In stock</span>
                                                            @else
                                                                <span class="badge badge-danger">out of stock</span>
                                                            @endif
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach

                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
