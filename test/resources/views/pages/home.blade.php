@extends('main_layout')
@section('content')
    <div class="hero-wrap" style="background-image: url({{ asset('frontend/images/bg_2.jpg') }});"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-8 ftco-animate d-flex align-items-end">
                    <div class="text w-100 text-center">
                        <h1 class="mb-4">Good <span>Drink</span> for Good <span>Moments</span>.</h1>
                        <p><a href="#home_product" class="btn btn-primary py-2 px-4">Shop Now</a> <a href="#"
                                class="btn btn-white btn-outline-white py-2 px-4">Read more</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-intro">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-4 d-flex">
                    <div class="intro d-lg-flex w-100 ftco-animate">
                        <div class="icon">
                            <span class="flaticon-support"></span>
                        </div>
                        <div class="text">
                            <h2>Online Support 24/7</h2>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="intro color-1 d-lg-flex w-100 ftco-animate">
                        <div class="icon">
                            <span class="flaticon-cashback"></span>
                        </div>
                        <div class="text">
                            <h2>Money Back Guarantee</h2>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="intro color-2 d-lg-flex w-100 ftco-animate">
                        <div class="icon">
                            <span class="flaticon-free-delivery"></span>
                        </div>
                        <div class="text">
                            <h2>Free Shipping &amp; Return</h2>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb">
        <div class="container">
            <div class="row">
                <div class="col-md-6 img img-3 d-flex justify-content-center align-items-center"
                    style="background-image: url({{ asset('frontend/images/about.jpg') }});">
                </div>
                <div class="col-md-6 wrap-about pl-md-5 ftco-animate py-5">
                    <div class="heading-section">
                        <span class="subheading">Since 1905</span>
                        <h2 class="mb-4">Desire Meets A New Taste</h2>

                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It
                            is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it
                            would have been rewritten a thousand times and everything that was left from its origin would be
                            the word "and" and the Little Blind Text should turn around and return to its own, safe country.
                        </p>
                        <p class="year">
                            <strong class="number" data-number="115">0</strong>
                            <span>Years of Experience In Business</span>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-4 ">
                    <div class="sort w-100 text-center ftco-animate">
                        <div class="img" style="background-image: url({{ asset('frontend/images/kind-1.jpg') }});"></div>
                        <h3>Brandy</h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 ">
                    <div class="sort w-100 text-center ftco-animate">
                        <div class="img" style="background-image: url({{ asset('frontend/images/kind-2.jpg') }});"></div>
                        <h3>Gin</h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 ">
                    <div class="sort w-100 text-center ftco-animate">
                        <div class="img" style="background-image: url({{ asset('frontend/images/kind-3.jpg') }});"></div>
                        <h3>Rum</h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 ">
                    <div class="sort w-100 text-center ftco-animate">
                        <div class="img" style="background-image: url({{ asset('frontend/images/kind-4.jpg') }});"></div>
                        <h3>Tequila</h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 ">
                    <div class="sort w-100 text-center ftco-animate">
                        <div class="img" style="background-image: url({{ asset('frontend/images/kind-5.jpg') }});"></div>
                        <h3>Vodka</h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 ">
                    <div class="sort w-100 text-center ftco-animate">
                        <div class="img" style="background-image: url({{ asset('frontend/images/kind-6.jpg') }});"></div>
                        <h3>Whiskey</h3>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Our Delightful offerings</span>
                    <h2 id="home_product">Tastefully Yours</h2>
                </div>
            </div>
            <div class="row">

                @foreach ($products as $product)
                    <div class="col-md-3 d-flex">

                        <div class="product ftco-animate items-products">
                            <form>
                                @csrf
                                <input type="hidden" class="product_name_cart_{{ $product->id }}"
                                    value="{{ $product->name }}">
                                @if ($product->price != $product->sale_price)
                                    <input type="hidden" class="product_price_cart_{{ $product->id }}"
                                        value="{{ $product->sale_price }}">
                                @else
                                    <input type="hidden" class="product_price_cart_{{ $product->id }}"
                                        value="{{ $product->price }}">
                                @endif
                                <input type="hidden" class="product_quantity_cart_{{ $product->id }}" value="1">
                                <input type="hidden" class="product_image_cart_{{ $product->id }}"
                                    value="{{ $product->featured_image }}">
                                <div class="img d-flex align-items-center justify-content-center"
                                    style="background-image: url('{{ asset('frontend/images/products/' . $product->featured_image) }}');">
                                    <img class="img_{{ $product->id }}" src="{{  asset('frontend/images/products/' . $product->featured_image)  }}" height="40px" width="40px" style="visibility: hidden; position: absolute;" alt="">
                                    <div class="desc">
                                        <p class="meta-prod d-flex">
                                            @if($product->inventory_qty == 0)
                                            <a type="button" style="cursor: pointer;" data-id_product="{{ $product->id }}" class="d-flex align-items-center justify-content-center" onclick="notyf.error('Currently Out of Stock');"><span
                                                    class="flaticon-shopping-bag"></span></a>
                                            @else
                                            <a type="button" style="cursor: pointer;" data-id_product="{{ $product->id }}" class="d-flex align-items-center justify-content-center add-to-cart"><span
                                                class="flaticon-shopping-bag"></span></a>
                                            @endif
                                            @if(Auth::check())
                                                    <input type="hidden" class="user_id_wishlist_{{ $product->id }}"
                                                    value="{{ Auth::user()->id }}">
                                                        <a type="button" style="cursor: pointer;"
                                                        data-id_product="{{ $product->id }}"
                                                        class="d-flex align-items-center justify-content-center add-to-wishlist"
                                                        ><span
                                                            class="flaticon-heart
                                                            "></span></a>

                                                    @else
                                                    <a type="button"
                                                        class="d-flex align-items-center justify-content-center" style="cursor: pointer;" onclick="notyf.error('You must login before adding to wishlist');"><span
                                                            class="flaticon-heart
                                                            "></span></a>
                                                    @endif

                                            <a href="{{ url('home/single-product/'.$product->id) }}" class="d-flex align-items-center justify-content-center"><span
                                                    class="flaticon-visibility"></span></a>
                                        </p>
                                    </div>

                                </div>

                                <div class="text text-center">

                                    @if (strtotime($product->created_date) >= strtotime('-30 days') )
                                        <span class="new">New Arrival</span>
                                    @endif
                                    @if (in_array($product->name , $bestSelling))
                                        <span class="seller">Best Seller</span>
                                    @endif
                                    @if ($product->featured)
                                        <span class="sale">Featured</span>
                                    @endif
                                    <span class="category">{{ $product->category_name }}</span>
                                    <h5>{{ $product->name }}</h5>
                                    <p class="mb-0">

                                        @if ($product->price != $product->sale_price)
                                            <span class="price price-sale">${{ $product->price }}</span>
                                        @endif

                                    <span class="price">${{ $product->sale_price }}</span>
                                </p>
                                <p>Available:  {{ $product->inventory_qty }}</p>
                            </div>
                            </form>
                        </div>
                    </div>

                @endforeach


            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <a href="{{ URL::to('home/products') }}" class="btn btn-primary d-block">View All Products <span
                            class="fa fa-long-arrow-right"></span></a>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section img"
        style="background-image: url({{ asset('frontend/images/bg_4.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <span class="subheading">Testimonial</span>
                    <h2 class="mb-3">Happy Clients</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                        and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img"
                                            style="background-image: url({{ asset('frontend/images/person_1.jpg') }})">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                        and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img"
                                            style="background-image: url({{ asset('frontend/images/person_2.jpg') }})">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                        and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img"
                                            style="background-image: url({{ asset('frontend/images/person_3.jpg') }})">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                        and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img"
                                            style="background-image: url({{ asset('frontend/images/person_1.jpg') }})">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                        and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img"
                                            style="background-image: url({{ asset('frontend/images/person_2.jpg') }})">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Blog</span>
                    <h2>Recent Blog</h2>
                </div>
            </div>
            <div class="row d-flex">
                @foreach ($post as $post)

                <div class="col-lg-6 d-flex align-items-stretch ftco-animate">
                    <div class="blog-entry d-flex">
                        <a href="blog-single.html" class="block-20 img"
                        style="background-image: url({{ asset('backend/images/blogs/'. $post->featured_image) }});">
                    </a>
                    <div class="text p-4 bg-light">
                        <div class="meta">
                            <p><span class="fa fa-calendar"></span> {{ $post->publishedAt }}</p>
                        </div>
                        <h3 class="heading mb-3"><a href="#">{{ $post->title }}</a></h3>
                        <p>{{ $post->summary }}</p>
                        <a href="{{ url('/blog/details/'.$post->slug) }}" class="btn-custom">Continue <span class="fa fa-long-arrow-right"></span></a>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
        </div>
    </section>
@endsection
