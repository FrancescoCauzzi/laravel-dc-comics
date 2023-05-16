<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Comic;

class PageController extends Controller
{
    public function index()
    {

        $footerItems = config('footerItems');
        $navbarTop = config('navbarTop');
        $navbar = config('navbar');
        $dcFeatures = config('dcFeatures');
        $dcNavbarBottom = config('dcNavbarBottom');

        return view('home', compact('navbar', 'footerItems', 'dcFeatures', 'dcNavbarBottom', 'navbarTop'));
    }
}
