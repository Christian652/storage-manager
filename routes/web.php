<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'admin.index')->name('index');

Route::resource('Fornecedores','ProviderController')->names('providers')->parameters(["Fornecedores"=>'provider']);
Route::get('Fornecedores/Fornecer-lote/{provider}', 'ProviderController@storeLote')->name('providers.storages');
Route::get('Fornecedores/HistoricoDeFornecimento/{provider}', 'ProviderController@historic')->name('providers.historic');
Route::put('Fornecedores/Fornecer-lote/Fornecer', 'ProviderController@storeLoteProvide')->name('providers.saveLote');


Route::resource('Produtos','ProductController')->names('products')->parameters(["Produtos"=>'product']);

Route::resource('Estoques','StorageController')->names('storages')->parameters(["Estoques"=>'storage']);
Route::put('Estoques/Venda/{storage}', 'StorageController@sale')->name('storages.sale');
Route::get('Estoques/Venda/{storage}', 'StorageController@saleForm')->name('storages.saleForm');
Route::get('Estoques/HistoricoDeVendas/{storage}', 'StorageController@historic')->name('storages.historic');

Route::resource('HistoricosDeFornecimento', 'StorageHistoricController')->names('storehistorics')->parameters('storageHistoric');
