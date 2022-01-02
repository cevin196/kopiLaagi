@extends('admin.layouts.app')
@section('content')              
<div class="toast " id="EpicToast" role="alert" aria-live="assertive" aria-atomic="true" style="position: absolute; top: 20px; right: 20px;">
    <div class="toast-header bg-success text-white">
        <strong class="mr-auto">Pemberitahuan</strong>                
    </div>
    
    <div class="toast-body" id="toastBody">
        
    </div>
</div>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Menu</h1>   
</div>

<!-- Content Row -->

<div class="row">

    <div class="col-12">
        <div class="card shadow mb-4">

            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                <a href="{{route('menu.create')}}" class="btn btn-success">Tambah Menu</a>
            </div>

            {{-- <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                
            </div> --}}
            <div class="card-body">
                <div class="table-responsive">
                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered dataTable" id="dataTable" width="100%"
                                    cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                    <thead>
                                        <tr role="row">
                                            <th class="col-1">No</th>
                                            <th>Nama</th>
                                            <th class="col-2">jenis</th>
                                            <th class="col-2">Harga</th>
                                            <th class="col-2">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>jenis</th>
                                            <th>Harga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($menus as $menu)
                                        <tr>
                                            <td>{{$loop->index + 1}}</td>
                                            <td>{{$menu->nama}}</td>
                                            <td>{{$menu->jenis}}</td>
                                            <td>Rp. {{strrev(wordwrap(strrev($menu->harga) , 3 , '.' , true ))}}</td>
                                            <td class="d-flex flex-row justify-content-around">
                                                <a href="{{route('menu.show',$menu->id)}}"><i
                                                        class="fa fa-eye text-success"></i></a>
                                                <a href="{{route('menu.edit',$menu->id)}}"><i
                                                        class="fa fa-edit text-warning"></i></a>
                                                <a href="#" onclick="event.preventDefault();
                                                document.getElementById('logout-form-{{$menu->id}}').submit();"><i class="fa fa-trash text-danger"></i></a>                                               
                                                <form id="logout-form-{{$menu->id}}" action="{{ route('menu.destroy',$menu->id) }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>   
</div>

@endsection
