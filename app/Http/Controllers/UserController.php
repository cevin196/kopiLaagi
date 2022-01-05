<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.home');
    }

    public function menu()
    {
        $makanans = Menu::where('jenis', 'Makanan')->get();
        $minumans = Menu::where('jenis', 'Minuman')->get();
        $desserts = Menu::where('jenis', 'Dessert')->get();

        return view('user.menu', compact('makanans', 'minumans', 'desserts'));
    }

    public function about()
    {
        return view('user.about');
    }

    public function shop()
    {
        $makanans = Menu::where('jenis', 'Makanan')->get();
        $minumans = Menu::where('jenis', 'Minuman')->get();
        $desserts = Menu::where('jenis', 'Dessert')->get();
        return view('user.shop', compact('makanans', 'minumans', 'desserts'));
    }

    public function contact()
    {
        return view('user.contact');
    }
}