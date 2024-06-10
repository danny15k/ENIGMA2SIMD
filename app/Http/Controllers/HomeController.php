<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Header;
use App\Models\Product;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $headers = Header::all();
        $products = Product::all();
        $testimonials = Testimonial::all();

        return view('home.index', compact(
            'headers',
            'products',
            'testimonials',
        ));
    }

    public function menu()
    {
        $products = Product::all();

        return view('home.menu', compact(
            'products',
        ));
    }

    public function about()
    {
        return view('home.about');
    }

    public function testimonial()
    {
        $testimonials = Testimonial::all();

        return view('home.testimonial', compact(
            'testimonials',
        ));
    }
}
