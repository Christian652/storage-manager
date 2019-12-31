<?php

namespace App\Http\Controllers;

use App\Product;
use App\Provider;
use App\Storage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('admin.ProductList', ['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $providers = Provider::all();

        // return view('admin.ProductCreateForm', ['providers'=>$providers]);

        return redirect()->route('site.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();

        $product->name = $request->name;
        $product->unitprice = $request->unitprice;
        $product->description = $request->description;
        $product->provider_id = $request->provider_id;
        
        $product->save();

        $storage = new Storage();
        $storage->product_id = $product->id;
        $storage->amount = 0;

        $storage->save();

        return redirect()->route('providers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $provider = $product->provider()->first();
        $storage = $product->storage()->first();

        return view('admin.ProductShow', ['product'=>$product, 'provider'=>$provider, 'storage'=>$storage]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $provider = $product->provider()->first();

        $providers = Provider::all();

        return view('admin.FormEditProduct', ['product'=>$product, 'providers'=>$providers, 'provider'=>$provider]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->name = $request->name;
        $product->unitprice = $request->unitprice;
        $product->description = $request->description;
        $product->provider_id = $request->provider_id;

        $product->save();

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $storage = Storage::all()->where('product_id','=',$product->id)->first();

        if($storage->amount === 0):

            // $product->delete();

        endif;

        return redirect()->route('products.index');
    }
}
