@extends('user.layouts.app')
@section('content')
<section class="ftco-intro">
    <div class="container-wrap">
        <div class="wrap d-md-flex align-items-xl-end">
            <div class="info">
                <div class="row no-gutters">
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span class="icon-phone"></span></div>
                        <div class="text">
                            <h3>0818-0574-6152</h3>
                            <p>Admin</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span class="icon-my_location"></span></div>
                        <div class="text">
                            <h3>Jombor</h3>
                            <p> Jl. Siliwangi, Jombor Lor, Sendangadi, Mlati, Sleman, Daerah Istimewa Yogyakarta
                                55285</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span class="icon-clock-o"></span></div>
                        <div class="text">
                            <h3>Open Monday-Friday</h3>
                            <p>8:00am - 11:00pm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-about d-md-flex">
    <div class="one-half img" style="background-image: url({{asset('user/images/about.jpg')}});"></div>
    <div class="one-half ftco-animate">
        <div class="overlap">
            <div class="heading-section ftco-animate ">
                <span class="subheading">Discover</span>
                <h2 class="mb-4">Our Story</h2>
            </div>
            <div>
                <p>Café ini didirikan berdasarkan latar belakang sebuah kota jogja,yang biasannya oaring orangnya
                    suka tongkongan, ngobrol bareng dan karena di jogja sendiri memiliki view pemandangan yang indah
                    baik di dalam kota maupun di luar kota. Oleh karena di perlukan tempat tongkrongan yang nyaman
                    dan dapat memfasilitasi mereka.</p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-services">
    <div class="container">
        <div class="row">
            <div class="col-md-4 ftco-animate">
                <div class="media d-block text-center block-6 services">
                    <div class="icon d-flex justify-content-center align-items-center mb-5">
                        <span class="flaticon-choices"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Pemesanan Mudah</h3>
                        <p>Kami berusaha memberikan pelayanan yang dapat memudahkan pelanggan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="media d-block text-center block-6 services">
                    <div class="icon d-flex justify-content-center align-items-center mb-5">
                        <span class="flaticon-delivery-truck"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Pengiriman Cepat</h3>
                        <p>Kami berusaha memberikan pelayanan pengiriman dengan cepat dan terbaik. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="media d-block text-center block-6 services">
                    <div class="icon d-flex justify-content-center align-items-center mb-5">
                        <span class="flaticon-coffee-bean"></span></div>
                    <div class="media-body">
                        <h3 class="heading">Kualitas Kopi</h3>
                        <p>Kami selalu menyajikan kopi dengan kualitas terbaik kepada pelanggan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 pr-md-5">
                <div class="heading-section text-md-right ftco-animate">
                    <span class="subheading">Discover</span>
                    <h2 class="mb-4">Our Menu</h2>
                    <p class="mb-4">Coffe Laagi menyediakan berbagai menu makanan dan minuman yang nikmat dan ramah
                        di kantong, ikuti juga berbagai promo menarik dari kami.</p>
                    <p><a href="{{route('user.menu')}}" class="btn btn-primary btn-outline-primary px-4 py-3">Menu</a></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="menu-entry">
                            <a href="#" class="img" style="background-image: url({{asset('user/images/drink-2.jpg')}});"></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="menu-entry mt-lg-4">
                            <a href="#" class="img" style="background-image: url({{asset('user/images/dessert-2.jpg')}});"></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="menu-entry">
                            <a href="#" class="img" style="background-image: url({{asset('user/images/drink-3.jpg')}});"></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="menu-entry mt-lg-4">
                            <a href="#" class="img" style="background-image: url({{asset('user/images/dish-1.jpg')}});"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-gallery">
    <div class="container-wrap">
        <div class="row no-gutters">
            <div class="col-md-3 ftco-animate">
                <a href="gallery.html" class="gallery img d-flex align-items-center"
                    style="background-image: url({{asset('user/images/gallery-1.jpg')}});">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-search"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a href="gallery.html" class="gallery img d-flex align-items-center"
                    style="background-image: url({{asset('user/images/gallery-2.jpg')}});">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-search"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a href="gallery.html" class="gallery img d-flex align-items-center"
                    style="background-image: url({{asset('user/images/gallery-3.jpg')}});">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-search"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a href="gallery.html" class="gallery img d-flex align-items-center"
                    style="background-image: url({{asset('user/images/gallery-4.jpg')}});">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-search"></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="ftco-menu">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Discover</span>
                <h2 class="mb-4">Our Products</h2>
                <p>Berikut berbagai pilihan menu yang dapat dipesan di Coffee Laagi</p>
            </div>
        </div>
        <div class="row d-md-flex">
            <div class="col-lg-12 ftco-animate p-md-5">
                <div class="row">
                    <div class="col-md-12 nav-link-wrap mb-5">
                        <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab"
                            role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1"
                                role="tab" aria-controls="v-pills-1" aria-selected="true">Main Dish</a>

                            <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab"
                                aria-controls="v-pills-2" aria-selected="false">Drinks</a>

                            <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab"
                                aria-controls="v-pills-3" aria-selected="false">Desserts</a>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex align-items-center">

                        <div class="tab-content ftco-animate" id="v-pills-tabContent">

                            <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                                aria-labelledby="v-pills-1-tab">
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url({{asset('user/images/dish-1.jpg')}});"></a>
                                            <div class="text">
                                                <h3><a href="#">Nasi Goreng</a></h3>
                                                <p>Nasi Goreng merupakan salah makanan khas Indonesia, disajikan
                                                    dengan telur diatasnya.</p>
                                                <p class="price"><span>Rp 10.000</span></p>
                                                <p><a href="#" class="btn btn-primary btn-outline-primary">Add to
                                                        cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url({{asset('user/images/dish-2.jpg')}});"></a>
                                            <div class="text">
                                                <h3><a href="#">Ayam Goreng</a></h3>
                                                <p>Ayam Goreng yang kami sajikan ada pilihan bagian dada dan paha
                                                    dengan sambal yang khas.</p>
                                                <p class="price"><span>Rp 10.000</span></p>
                                                <p><a href="#" class="btn btn-primary btn-outline-primary">Add to
                                                        cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url({{asset('user/images/dish-3.jpg')}});"></a>
                                            <div class="text">
                                                <h3><a href="#">Mie Goreng</a></h3>
                                                <p>Mie Goreng dengan tambahan sosis dan sayur yang akan menggugah
                                                    selera makan.</p>
                                                <p class="price"><span>Rp 10.000</span></p>
                                                <p><a href="#" class="btn btn-primary btn-outline-primary">Add to
                                                        cart</a></p>
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
                                                style="background-image: url({{asset('user/images/drink-1.jpg')}});"></a>
                                            <div class="text">
                                                <h3><a href="#">Americano Coffe</a></h3>
                                                <p>Kopi hitam espresso panas yang nikmat bagi pecinta kopi.</p>
                                                <p class="price"><span>Rp 7.000</span></p>
                                                <p><a href="#" class="btn btn-primary btn-outline-primary">Add to
                                                        cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url({{asset('user/images/drink-2.jpg')}});"></a>
                                            <div class="text">
                                                <h3><a href="#">Cappucino Coffee</a></h3>
                                                <p>Kopi khas Italia yang dibuat dari espreso dan susu.</p>
                                                <p class="price"><span>Rp 7.000</span></p>
                                                <p><a href="#" class="btn btn-primary btn-outline-primary">Add to
                                                        cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url({{asset('user/images/drink-3.jpg')}});"></a>
                                            <div class="text">
                                                <h3><a href="#">Lemon tea</a></h3>
                                                <p>Campuran teh dengan lemon yang menyegarkan.</p>
                                                <p class="price"><span>Rp 7.000</span></p>
                                                <p><a href="#" class="btn btn-primary btn-outline-primary">Add to
                                                        cart</a></p>
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
                                                <h3><a href="#">Roti Bakar</a></h3>
                                                <p>Roti bakar dengan berbagai varian rasa didalamnya.</p>
                                                <p class="price"><span>Rp 10.000</span></p>
                                                <p><a href="#" class="btn btn-primary btn-outline-primary">Add to
                                                        cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url({{asset('user/images/dessert-2.jpg')}});"></a>
                                            <div class="text">
                                                <h3><a href="#">Kentang Goreng</a></h3>
                                                <p>Potongan kentang yang digoreng krispi disajikan dengan saus.</p>
                                                <p class="price"><span>Rp 7.000</span></p>
                                                <p><a href="#" class="btn btn-primary btn-outline-primary">Add to
                                                        cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url({{asset('user/images/dessert-3.jpg')}});"></a>
                                            <div class="text">
                                                <h3><a href="#">Pisang Goreng</a></h3>
                                                <p>Pisang goreng disajikan dengan toping coklat dan keju.</p>
                                                <p class="price"><span>Rp 7.000</span></p>
                                                <p><a href="#" class="btn btn-primary btn-outline-primary">Add to
                                                        cart</a></p>
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

<section class="ftco-section img" id="ftco-testimony" style="background-image: url({{asset('user/images/bg_')}}1.jpg);"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Testimony</span>
                <h2 class="mb-4">Customers Says</h2>
                <p>Berikut beberapa testimoni dari para pengunjung Coffee Laagi</p>
            </div>
        </div>
    </div>
    <div class="container-wrap">
        <div class="row d-flex no-gutters">
            <div class="col-lg align-self-sm-end ftco-animate">
                <div class="testimony">
                    <blockquote>
                        <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an
                            almost unorthographic life One day however a small.&rdquo;</p>
                    </blockquote>
                    <div class="author d-flex mt-4">
                        <div class="image mr-3 align-self-center">
                            <img src="images/person_1.jpg" alt="">
                        </div>
                        <div class="name align-self-center">Louise Kelly <span class="position">Illustrator
                                Designer</span></div>
                    </div>
                </div>
            </div>
            <div class="col-lg align-self-sm-end">
                <div class="testimony overlay">
                    <blockquote>
                        <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an
                            almost unorthographic life One day however a small line of blind text by the name of
                            Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
                    </blockquote>
                    <div class="author d-flex mt-4">
                        <div class="image mr-3 align-self-center">
                            <img src="images/person_2.jpg" alt="">
                        </div>
                        <div class="name align-self-center">Louise Kelly <span class="position">Illustrator
                                Designer</span></div>
                    </div>
                </div>
            </div>
            <div class="col-lg align-self-sm-end ftco-animate">
                <div class="testimony">
                    <blockquote>
                        <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an
                            almost unorthographic life One day however a small line of blind text by the name.
                            &rdquo;</p>
                    </blockquote>
                    <div class="author d-flex mt-4">
                        <div class="image mr-3 align-self-center">
                            <img src="images/person_3.jpg" alt="">
                        </div>
                        <div class="name align-self-center">Louise Kelly <span class="position">Illustrator
                                Designer</span></div>
                    </div>
                </div>
            </div>
            <div class="col-lg align-self-sm-end">
                <div class="testimony overlay">
                    <blockquote>
                        <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an
                            almost unorthographic life One day however.&rdquo;</p>
                    </blockquote>
                    <div class="author d-flex mt-4">
                        <div class="image mr-3 align-self-center">
                            <img src="images/person_2.jpg" alt="">
                        </div>
                        <div class="name align-self-center">Louise Kelly <span class="position">Illustrator
                                Designer</span></div>
                    </div>
                </div>
            </div>
            <div class="col-lg align-self-sm-end ftco-animate">
                <div class="testimony">
                    <blockquote>
                        <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an
                            almost unorthographic life One day however a small line of blind text by the name.
                            &rdquo;</p>
                    </blockquote>
                    <div class="author d-flex mt-4">
                        <div class="image mr-3 align-self-center">
                            <img src="images/person_3.jpg" alt="">
                        </div>
                        <div class="name align-self-center">Louise Kelly <span class="position">Illustrator
                                Designer</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection