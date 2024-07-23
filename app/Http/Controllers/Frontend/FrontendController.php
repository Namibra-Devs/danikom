<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index() {
        return view('frontend.pages.index');
    }

    public function about() {
        return view('frontend.pages.about');
    }

    public function contact() {
        return view('frontend.pages.contact');
    }

    public function search() {
        return view('frontend.pages.search');
    }

    public function ppolicy() {
        return view('frontend.pages.privacypolicy');
    }

    public function rpolicy() {
        return view('frontend.pages.returnpolicy');
    }
}
