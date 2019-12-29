<?php

namespace App\Http\Controllers;

use App\Product;
use App\Provider;
use App\Storage;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $providersTotal = Provider::count();

        $productsTotal = Product::count();

        $productsCountTotal = Storage::sum('amount');

        return view('admin.index', ['providerTotal'=>$providersTotal, 'productTotal'=>$productsTotal, 'storage'=>$productsCountTotal]);
    }
}
