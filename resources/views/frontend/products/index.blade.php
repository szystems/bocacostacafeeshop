@extends('layouts.frontend')
{{-- Category Products --}}
@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    {{-- <span class="subheading">Discover</span> --}}
                    <h2 class="mb-4">{{ $category->name }}</h2>
                    <p>{{$category->description}}</p>
                </div>
            </div>
            <div class="row">
                @php
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
                            <a href="{{ url('category/'.$category->slug.'/'.$prod->slug) }}" class="img" style="background-image: url({{ asset('assets/uploads/product/'.$prod->image) }});"></a>
                            <div class="text text-center pt-4">
                                <h3><a href="{{ url('category/'.$category->slug.'/'.$prod->slug) }}">{{ substr($prod->name, 0, 30) }}...</a></h3>
                                    @if ($prod->trending == "1")
                                        <span class="badge badge-info">{{ $prod->trending == '1'? 'Trending':''}}</span>
                                    @endif

                                <p>{{ $prod->small_description }}</p>
                                <p class="price">
                                    @if ($prod->discount == "1")
                                        <span>{{ $config->currency_simbol }}{{ number_format($prod->selling_price,2, '.', ',') }}</span>
                                        <span><strike><font color="c70017">{{ $config->currency_simbol }}{{ number_format($prod->original_price,2, '.', ',') }}</font></strike></span>
                                    @else
                                        <span>{{ $config->currency_simbol }}{{ number_format($prod->original_price,2, '.', ',') }}</span>
                                    @endif
                                    @if ($prod->discount == "1")
                                        <span class="badge badge-warning">{{ $prod->discount == '1'? '% Off':''}}</span>
                                    @endif
                                </p>
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
                                            <a href="{{ url('category/'.$cat->slug.'/'.$prod->slug) }}" class="btn-product"><i class="icon-search"></i><span> View Details...</span></a>
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
    </section>
@endsection
