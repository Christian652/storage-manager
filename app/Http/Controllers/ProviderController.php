<?php

namespace App\Http\Controllers;

use App\Product;
use App\Provider;
use App\Storage;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $providers = Provider::all();
        return view('admin.ProviderList', ['providers'=>$providers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ProviderCreateForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $provider = new Provider();
        $provider->name = $request->name;
        $provider->save();

        return redirect()->route('providers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function show(Provider $provider)
    {
        $produtosFornecidos = $provider->products()->get();

        return view('admin.ProviderShow',['provider'=>$provider, 'products'=>$produtosFornecidos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function edit(Provider $provider)
    {
        return view('admin.FormEditProvider', ['provider'=>$provider]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Provider $provider)
    {
        $provider->name = $request->name;
        $provider->save();

        return redirect()->route('providers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Provider $provider)
    {
        $provider->delete();

        return redirect()->route('providers.index');
    }

    public function storeLote(Provider $provider)
    {
        $products = $provider->products()->get();

        return view('admin.FormCreateLote', ['products'=>$products, 'provider'=>$provider]);
    }

    public function storeLoteProvide(Request $request)
    {
        $product = new Product();
        $product->id = $request->product_id;

        $storage = $product->storage()->first();

        $storage->amount += $request->amount;

        $storage->save();

        return redirect()->route('providers.show', ['provider'=>$request->provider]);

    }
}
