<?php

namespace App\Http\Controllers;

use App\Product;
use App\SaleHistoric;
use App\Storage;
use Illuminate\Http\Request;

class StorageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $storages = Storage::all();

        return view('admin.StorageList', ['storages'=>$storages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Storage  $storage
     * @return \Illuminate\Http\Response
     */
    public function show(Storage $storage)
    {
        $product = $storage->product()->first();

        return view('admin.StorageShow', ['storage'=>$storage, 'product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Storage  $storage
     * @return \Illuminate\Http\Response
     */
    public function edit(Storage $storage)
    {
        $products = Product::all();
        $product = $storage->product()->first();

        return view('admin.FormEditStorage', ['storage'=>$storage,'products'=>$products, 'product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Storage  $storage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Storage $storage)
    {
        $storage->product_id = $request->product_id;
        $storage->amount = $request->amount;

        $storage->save();

        return redirect()->route('storages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Storage  $storage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Storage $storage)
    {
        return redirect()->route('storages.index');
    }

    public function saleForm(Storage $storage)
    {
        return view('admin.SaleForm', ['storage'=>$storage]);
    }

    public function sale(Request $request, Storage $storage)
    {
        $storage->amount -= $request->amount;
        $storage->save();

        $historic = new SaleHistoric();
        $historic->product_id = $storage->product()->first()->id;
        $historic->amount = $request->amount;
        $historic->save();

        return redirect()->route('storages.index');
    }

    public function historic(Storage $storage)
    {
        $product = $storage->product()->first();
        $historics = SaleHistoric::all()->where('product_id','=',$product->id);

        return view('admin.SaleHistoric', ['storage'=>$storage, 'product'=>$product, 'historics'=>$historics]);
    }
}
