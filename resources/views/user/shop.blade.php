@extends('user.layouts.app')
@section('content')
<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url({{asset('user/images/bg_3.jpg')}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center">

                <div class="col-md-7 col-sm-12 text-center ftco-animate">
                    <h1 class="mb-3 mt-5 bread">Order Online</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Shop</span>
                    </p>
                </div>

            </div>
        </div>
    </div>
</section>


<section class="ftco-menu mb-5 pb-5">
    <div class="container">
        <div class="row d-md-flex">
            <div class="col-lg-12 ftco-animate p-md-5">
                <div class="row">
                    <div class="col-md-12 nav-link-wrap mb-5">
                        <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab"
                            role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-0-tab" data-toggle="pill" href="#v-pills-0"
                                role="tab" aria-controls="v-pills-0" aria-selected="true">Coffee</a>

                            <a class="nav-link" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab"
                                aria-controls="v-pills-1" aria-selected="false">Main Dish</a>

                            <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab"
                                aria-controls="v-pills-2" aria-selected="false">Drinks</a>

                            <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab"
                                aria-controls="v-pills-3" aria-selected="false">Desserts</a>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex align-items-center">

                        <div class="tab-content ftco-animate" id="v-pills-tabContent">

                            <div class="tab-pane fade show active" id="v-pills-0" role="tabpanel"
                                aria-labelledby="v-pills-0-tab">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="menu-entry">
                                            <a href="#" class="img"
                                                style="background-image: url({{asset('user/images/drink-1.jpg')}});"></a>
                                            <div class="text text-center pt-4">
                                                <h3><a href="product-single.html">Americano Coffee</a></h3>
                                                <p>Kopi hitam espresso yang nikmat bagi pecinta kopi.</p>
                                                <p class="price"><span>Rp 7.000</span></p>
                                                <p><a href="cart.html"
                                                        class="btn btn-primary btn-outline-primary">Add to Cart</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="menu-entry">
                                            <a href="#" class="img"
                                                style="background-image: url({{asset('user/images/drink-2.jpg')}});"></a>
                                            <div class="text text-center pt-4">
                                                <h3><a href="product-single.html">Cappucino Coffee</a></h3>
                                                <p>Kopi khas Italia yang dibuat dari espreso dan susu.</p>
                                                <p class="price"><span>Rp 7.000</span></p>
                                                <p><a href="cart.html"
                                                        class="btn btn-primary btn-outline-primary">Add to Cart</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-1" role="tabpanel"
                                aria-labelledby="v-pills-1-tab">
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url({{asset('user/images/dish-1.jpg')}});"></a>
                                            <div class="text">
                                                <h3><a href="product-single.html">Nasi Goreng</a></h3>
                                                <p>Nasi Goreng merupakan salah makanan khas Indonesia, disajikan
                                                    dengan telur diatasnya.</p>
                                                <p class="price"><span>Rp 10.000</span></p>
                                                <p><a href="cart.html"
                                                        class="btn btn-primary btn-outline-primary">Add to cart</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url({{asset('user/images/dish-2.jpg')}});"></a>
                                            <div class="text">
                                                <h3><a href="product-single.html">Ayam Goreng</a></h3>
                                                <p>Ayam Goreng yang kami sajikan ada pilihan bagian dada dan paha
                                                    dengan sambal yang khas.</p>
                                                <p class="price"><span>Rp 10.000</span></p>
                                                <p><a href="cart.html"
                                                        class="btn btn-primary btn-outline-primary">Add to cart</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url({{asset('user/images/dish-3.jpg')}});"></a>
                                            <div class="text">
                                                <h3><a href="product-single.html">Mie Goreng</a></h3>
                                                <p>Mie Goreng dengan tambahan sosis dan sayur yang akan menggugah
                                                    selera makan.</p>
                                                <p class="price"><span>Rp 10.000</span></p>
                                                <p><a href="cart.html"
                                                        class="btn btn-primary btn-outline-primary">Add to cart</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url({{asset('user/images/dish-4.jpg')}});"></a>
                                            <div class="text">
                                                <h3><a href="product-single.html">Soto</a></h3>
                                                <p>Soto dengan kuah yang segar dan daging ayam.</p>
                                                <p class="price"><span>Rp 8.000</span></p>
                                                <p><a href="cart.html"
                                                        class="btn btn-primary btn-outline-primary">Add to cart</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-2" role="tabpanel"
                                aria-labelledby="v-pills-2-tab">
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url({{asset('user/images/drink-3.jpg')}});"></a>
                                            <div class="text">
                                                <h3><a href="product-single.html">Lemon Tea</a></h3>
                                                <p>Campuran teh dengan lemon yang menyegarkan.</p>
                                                <p class="price"><span>Rp 7.000</span></p>
                                                <p><a href="cart.html"
                                                        class="btn btn-primary btn-outline-primary">Add to cart</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url({{asset('user/images/drink-4.jpg')}});"></a>
                                            <div class="text">
                                                <h3><a href="product-single.html">Milkshake</a></h3>
                                                <p>Minuman dingin dari campuran susu, es krim, dan sirop.</p>
                                                <p class="price"><span>Rp 8.000</span></p>
                                                <p><a href="cart.html"
                                                        class="btn btn-primary btn-outline-primary">Add to cart</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-3" role="tabpanel"
                                aria-labelledby="v-pills-3-tab">
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url({{asset('user/images/dessert-1.jpg')}});"></a>
                                            <div class="text">
                                                <h3><a href="product-single.html">Roti Bakar</a></h3>
                                                <p>Roti bakar dengan berbagai varian rasa didalamnya.</p>
                                                <p class="price"><span>Rp 10.000</span></p>
                                                <p><a href="cart.html"
                                                        class="btn btn-primary btn-outline-primary">Add to cart</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url({{asset('user/images/dessert-2.jpg')}});"></a>
                                            <div class="text">
                                                <h3><a href="product-single.html">Kentang Goreng</a></h3>
                                                <p>Potongan kentang yang digoreng krispi disajikan dengan saus.</p>
                                                <p class="price"><span>Rp 7.000</span></p>
                                                <p><a href="cart.html"
                                                        class="btn btn-primary btn-outline-primary">Add to cart</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url({{asset('user/images/dessert-3.jpg')}});"></a>
                                            <div class="text">
                                                <h3><a href="product-single.html">Pisang Goreng</a></h3>
                                                <p>Pisang goreng disajikan dengan toping coklat dan keju.</p>
                                                <p class="price"><span>Rp 7.000</span></p>
                                                <p><a href="cart.html"
                                                        class="btn btn-primary btn-outline-primary">Add to cart</a>
                                                </p>
                                            </div>
                                        </div>
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
@endsection