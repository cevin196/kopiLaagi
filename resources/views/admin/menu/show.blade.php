@extends('admin.layouts.app')
@section('content')
<div class="col-12">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Menu - {{$menu->nama}}</h6>
        </div>
        
        <!-- Card Body -->
        <div class="card-body">            
            <img class="w-25 mx-auto d-block" src="{{($menu->gambar)?asset('menu/'.$menu->gambar):'https://awsimages.detik.net.id/community/media/visual/2021/04/22/5-makanan-enak-dari-indonesia-dan-malaysia-yang-terkenal-enak-5.jpeg?w=700&q=90'}}" alt="gambar makanan">
            <table class="w-75 mx-auto mt-3 " >
                <tr>
                    <td style="width: 15%">Nama</td>
                    <td>:</td>
                    <td>{{$menu->nama}}</td>
                </tr>

               
                <tr>
                    <td>Harga</td>
                    <td>:</td>
                    <td>Rp. {{strrev(wordwrap(strrev($menu->harga) , 3 , '.' , true ))}}</td>                    
                </tr>
                <tr>
                    <td>Jenis</td>
                    <td>:</td>
                    <td>{{$menu->jenis}}</td>
                </tr>
                <tr class="align-text-top">
                    <td>Deskripsi</td>
                    <td>:</td>
                    <td>{{$menu->deskripsi}}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
