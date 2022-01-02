@extends('admin.layouts.app')
@section('content')
<div class="col-12">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Edit Menu - {{$menu->nama}}</h6>
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <!-- Card Body -->
        <div class="card-body">
            <form action="{{route('menu.update',$menu->id)}}" method="POST">
                @csrf
                @method('PATCH')
                <label for="name" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="name" placeholder="Contoh: Ayam Goyeng" value="{{$menu->nama}}">
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="jenis" class="form-label">Jenis</label>
                        <select name="jenis" id="jenis" class="form-control">
                            <option value="Makanan" {{($menu->jenis == 'Makanan')?"selected":""}}>Makanan</option>
                            <option value="Minuman" {{($menu->jenis == 'Minuman')?"selected":""}}>Minuman</option>                            
                            <option value="Dessert" {{($menu->jenis == 'Dessert')?"selected":""}}>Dessert</option>
                        </select>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="formGroupExampleInput" class="form-label">Harga</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"
                                style="border-top-right-radius: 0px;border-bottom-right-radius: 0px ">Rp. </span>
                            <input type="text" name="harga" class="form-control"
                                aria-label="Amount (to the nearest dollar)" placeholder="Contoh: 80000" value="{{$menu->harga}}">
                        </div>
                    </div>
                </div>
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" rows="4" class="form-control ">{{$menu->deskripsi}}</textarea>

                <div class="w-100 d-flex flex-row justify-content-center mt-3">
                    <button type="submit" class="btn btn-success mx-2">Tambah</button>
                    <a href="{{route('menu.index')}}" class="btn btn-warning mx-2">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
