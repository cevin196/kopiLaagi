@extends('user.layouts.app')
@section('content')
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-5 pb-3">
                <h3 class="mb-5 heading-pricing ftco-animate">Main Dish</h3>
                @foreach ($makanans as $makanan)
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url({{($makanan->gambar)?asset('menu/'.$makanan->gambar):'https://awsimages.detik.net.id/community/media/visual/2021/04/22/5-makanan-enak-dari-indonesia-dan-malaysia-yang-terkenal-enak-5.jpeg?w=700&q=90'}});"></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>{{$makanan->nama}}</span></h3>
                            <span class="price">Rp. {{strrev(wordwrap(strrev($makanan->harga) , 3 , '.' , true ))}}</span>
                        </div>
                        <div class="d-block">
                            <p>{{$makanan->deskripsi}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>

            <div class="col-md-6 mb-5 pb-3">
                <h3 class="mb-5 heading-pricing ftco-animate">Drinks</h3>
                @foreach ($minumans as $minuman)
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url({{($minuman->gambar)?asset('menu/'.$minuman->gambar):'https://awsimages.detik.net.id/community/media/visual/2021/04/22/5-makanan-enak-dari-indonesia-dan-malaysia-yang-terkenal-enak-5.jpeg?w=700&q=90'}});"></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>{{$minuman->nama}}</span></h3>
                            <span class="price">Rp. {{strrev(wordwrap(strrev($minuman->harga) , 3 , '.' , true ))}}</span>
                        </div>
                        <div class="d-block">
                            <p>{{$minuman->deskripsi}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="col-md-6">
                <h3 class="mb-5 heading-pricing ftco-animate">Desserts</h3>
                @foreach ($desserts as $dessert)
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url({{($dessert->gambar)?asset('menu/'.$dessert->gambar):'https://awsimages.detik.net.id/community/media/visual/2021/04/22/5-makanan-enak-dari-indonesia-dan-malaysia-yang-terkenal-enak-5.jpeg?w=700&q=90'}});"></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>{{$dessert->nama}}</span></h3>
                            <span class="price">Rp. {{strrev(wordwrap(strrev($dessert->harga) , 3 , '.' , true ))}}</span>
                        </div>
                        <div class="d-block">
                            <p>{{$dessert->deskripsi}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
</section>

<section class="ftco-menu mb-5 pb-5">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Discover</span>
                <h2 class="mb-4">Our Products</h2>
                <p>Berikut berbagai pilihan menu yang dapat dipesan di Coffee Laagi.</p>
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
                                                <p class="price"><span>$Rp 10.000</span></p>
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
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url({{asset('user/images/dish-4.jpg')}});"></a>
                                            <div class="text">
                                                <h3><a href="#">Soto Ayam</a></h3>
                                                <p>Soto dengan kuah segar dan daging ayam.</p>
                                                <p class="price"><span>Rp 8.000</span></p>
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
                                                <h3><a href="#">Americano Coffee</a></h3>
                                                <p>Kopi hitam espresso yang nikmat bagi pecinta kopi.</p>
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
                                                style="background-image: url({{asset('user/images/drink-4.jpg')}});"></a>
                                            <div class="text">
                                                <h3><a href="#">Milkshake</a></h3>
                                                <p>Minuman dingin dari campuran susu, es krim, dan sirop.</p>
                                                <p class="price"><span>Rp 8.000</span></p>
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
                                                <h3><a href="#">Lemon Tea</a></h3>
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
                                                <p class="price"><span>Rp 7.000</span>0</span></p>
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

@endsection