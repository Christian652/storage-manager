<?php

namespace App\Http\Controllers;

use App\Product;
use App\Provider;
use App\Storage;
use App\SaleHistoric;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $products = Product::all();

        $moreSaledProduct = null;
        $maxValueSaled = 0;
        
        foreach ($products as $product):
            // select sum(amount) from sale_historics where product_id = $product->id
            $totalSaled = SaleHistoric::all()->where('product_id', '=', $product->id)->sum('amount');

            if($totalSaled > $maxValueSaled):
                
                $maxValueSaled = $totalSaled;
                $moreSaledProduct = $product;

            endif;
            
        endforeach;

        $lowerSaledProduct = null;
        $minValueSaled = 10000000000;
        
        foreach ($products as $product):
            // select sum(amount) from sale_historics where product_id = $product->id
            $totalSaled = SaleHistoric::all()->where('product_id', '=', $product->id)->sum('amount');

            if($totalSaled < $minValueSaled):
                
                $minValueSaled = $totalSaled;
                $lowerSaledProduct = $product;

            endif;
            
        endforeach;

        // =================================

        $totalQueOEstoqueTemAtualmente = Storage::sum('amount');//900
        $totalQueJaFoiVendido = SaleHistoric::sum('amount');//100
        $totalQueOEstoqueJaTeve = $totalQueOEstoqueTemAtualmente + $totalQueJaFoiVendido;//1000
        $porcentagemDoEstoqueQueFoiVendida = (($totalQueOEstoqueJaTeve / 100) / 100) * $totalQueJaFoiVendido;

        return view('admin.index', [
            'providerTotal'=>Provider::count(), 
            'productTotal'=>Product::count(), 
            'storage'=>Storage::sum('amount'), 
            'moreSaled'=>[$moreSaledProduct, $maxValueSaled],
            'lowerSaled'=>[$lowerSaledProduct, $minValueSaled],
            'porcentagemDoEstoqueQueFoiVendida'=>$porcentagemDoEstoqueQueFoiVendida
        ]);
    }
}
