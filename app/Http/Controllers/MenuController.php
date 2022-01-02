<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Facades\File;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::all();
        return view('admin.menu.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|integer',
            'jenis' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $imageName = time() . '.' . $request->gambar->extension();

        $request->gambar->move(public_path('menu'), $imageName);

        $menu = new Menu;
        $menu->nama         = $request->nama;
        $menu->deskripsi    = $request->deskripsi;
        $menu->harga        = $request->harga;
        $menu->jenis        = $request->jenis;
        $menu->gambar       = $imageName;
        $menu->save();
        return redirect(route('menu.index'))->with('success', 'Menu berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $menu = Menu::find($id);
        return view('admin.menu.show', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = Menu::find($id);
        return view('admin.menu.edit', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|integer',
            'jenis' => 'required',
        ]);

        $menu = Menu::find($id);
        $menu->nama         = $request->nama;
        $menu->deskripsi    = $request->deskripsi;
        $menu->harga        = $request->harga;
        $menu->jenis        = $request->jenis;
        $menu->update();
        return redirect(route('menu.index'))->with('success', 'Menu berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $menu = Menu::find($id);
        ($menu->gambar != "") ? File::delete('menu/' . $menu->gambar) : "";
        $menu->delete();
        return redirect()->back()->with('success', 'Data Berhasil Dihapus');
    }
}
