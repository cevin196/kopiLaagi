@extends('user.layouts.app')
@section('content')

@include('includes.harga')
<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url({{asset('user/images/bg_3.jpg')}});"
        data-stellar-background-ratio="0.5">
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
                        <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-0-tab" data-toggle="pill" href="#v-pills-0"
                                role="tab" aria-controls="v-pills-0" aria-selected="true">Coffee</a>

                            <a class="nav-link" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab"
                                aria-controls="v-pills-1" aria-selected="false">Main Dish</a>

                            <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-2" role="tab"
                                aria-controls="v-pills-3" aria-selected="false">Desserts</a>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex align-items-center">

                        <form id="form-test" action="{{route('shop.store')}}" method="POST" class="w-100">
                            @csrf
                            @method('POST')

                            <div class="tab-content ftco-animate w-100" id="v-pills-tabContent">

                                <div class="tab-pane fade show active" id="v-pills-0" role="tabpanel"
                                    aria-labelledby="v-pills-0-tab">
                                    <div class="row">
                                        @foreach ($minumans as $minuman)
                                        <div class="col-md-3 text-center">
                                            <div class="menu-entry">
                                                <a href="#" class="img"
                                                    style="background-image: url({{($minuman->gambar)?asset('menu/'.$minuman->gambar):'https://awsimages.detik.net.id/community/media/visual/2021/04/22/5-makanan-enak-dari-indonesia-dan-malaysia-yang-terkenal-enak-5.jpeg?w=700&q=90'}});"></a>
                                                <div class="text text-center pt-4">
                                                    <h3><a href="product-single.html">{{$minuman->nama}}</a></h3>
                                                    <p>{{$minuman->deskripsi}}</p>
                                                    <p class="price"><span>{{harga($minuman->harga)}}</span></p>
                                                    <p id="parent-minuman-{{$minuman->id}}">
                                                        <button type="button"
                                                            onclick="tombolPesan('minuman',{{$minuman->id}})">Pesan</button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-1" role="tabpanel"
                                    aria-labelledby="v-pills-1-tab">
                                    <div class="row">
                                        @foreach ($makanans as $makanan)
                                        <div class="col-md-3 text-center">
                                            <div class="menu-entry">
                                                <a href="#" class="img"
                                                    style="background-image: url({{($makanan->gambar)?asset('menu/'.$makanan->gambar):'https://awsimages.detik.net.id/community/media/visual/2021/04/22/5-makanan-enak-dari-indonesia-dan-malaysia-yang-terkenal-enak-5.jpeg?w=700&q=90'}});"></a>
                                                <div class="text text-center pt-4">
                                                    <h3><a href="product-single.html">{{$makanan->nama}}</a></h3>
                                                    <p>{{$makanan->deskripsi}}</p>
                                                    <p class="price"><span>{{harga($makanan->harga)}}</span></p>
                                                    <p id="parent-makanan-{{$makanan->id}}">
                                                        <button type="button"
                                                            onclick="tombolPesan('makanan',{{$makanan->id}})">Pesan</button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-2" role="tabpanel"
                                    aria-labelledby="v-pills-2-tab">
                                    <div class="row">
                                        @foreach ($desserts as $dessert)
                                        <div class="col-md-3 text-center">
                                            <div class="menu-entry">
                                                <a href="#" class="img"
                                                    style="background-image: url({{($dessert->gambar)?asset('menu/'.$dessert->gambar):'https://awsimages.detik.net.id/community/media/visual/2021/04/22/5-makanan-enak-dari-indonesia-dan-malaysia-yang-terkenal-enak-5.jpeg?w=700&q=90'}});"></a>
                                                <div class="text text-center pt-4">
                                                    <h3><a href="product-single.html">{{$dessert->nama}}</a></h3>
                                                    <p>{{$dessert->deskripsi}}</p>
                                                    <p class="price"><span>{{harga($dessert->harga)}}</span></p>
                                                    <p id="parent-dessert-{{$dessert->id}}">
                                                        <button type="button"
                                                            onclick="tombolPesan('dessert',{{$dessert->id}})">Pesan</button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>

                                

                            </div>

                            

                    </div>
                    <button class="btn btn-warning mx-auto" type="submit">Sumbit</button>
                        </form>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection

@section('script')
<script>
    function tambah(jenis, id) {
        var inputJumlah = document.getElementById(jenis + "-" + id);
        inputJumlah.value++;
    }

    function kurang(jenis, id) {
        var inputJumlah = document.getElementById(jenis + "-" + id);
        if (inputJumlah.value > 0) {
            inputJumlah.value--;
        } else if (inputJumlah.value == 0) {
            hapusPesan(jenis, id);
        }
    }

    function tombolPesan(jenis, id) {
        parent = document.getElementById('parent-' + jenis + '-' + id);
        html = "";
        html += "<button type=\"button\" class=\"btn btn-warning\" onclick=\"kurang('" + jenis + "'," + id +
            ")\">-<\/button>";
        html += "<input type=\"text\" name=\"jumlah[]\" id=\"" + jenis + "-" + id +
            "\" class=\"form-control-sm col-2 text-center\"><button type=\"button\" class=\"btn btn-warning\" onclick=\"tambah('" +
            jenis + "'," + id + ")\">+<\/button>";       
        html+="<input type=\"hidden\" name=\"id[]\" value=\""+id+"\">";
        parent.innerHTML = html;
    }

    function hapusPesan(jenis, id) {
        parent = document.getElementById('parent-' + jenis + '-' + id);

        html = "";
        html += "<button type=\"button\" onclick=\"tombolPesan('" + jenis + "'," + id + ")\">Pesan</button>";
        parent.innerHTML = html;

    }

</script>
@endsection
