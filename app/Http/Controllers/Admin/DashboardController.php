<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Language;
use App\Quote;
use App\Product;
use App\ProductOrder;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $data['porders'] = ProductOrder::orderBy('id', 'DESC')->limit(10)->get();
        // $data['default'] = Language::where('is_default', 1)->first();
        return view('admin.dashboard', $data);
    }
}
