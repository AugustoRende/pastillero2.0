<?php

namespace Pastillero\Http\Controllers;

use Illuminate\Http\Request;
use Pastillero\Http\Requests\SkuProductCreateRequest;
use Pastillero\Http\Requests\SkuProductUpdateRequest;
use Pastillero\Sku_product;
use Session;
use Redirect;
use Auth;
use Illuminate\Routing\Route;

class SkuProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sku_products = Sku_Product::paginate(10);
        return view('sku_product.index', compact('sku_products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctors = Auth::user()->organization->doctors;
        $patients = Auth::user()->organization->patients;
        $products = Auth::user()->organization->products;
        $sku_product = new Sku_Product;
        return view('sku_product.create', ['sku_product'=>$sku_product, 'doctors'=>$doctors, 'patients'=>$patients, 'products'=>$products]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SkuProductCreateRequest $request)
    {
        $request['organization_id'] = Auth::user()->organization_id;

        Sku_Product::create($request->all());

        Session::flash('message','Producto creado correctamente');
        return Redirect::to('/sku_product');   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctors = Auth::user()->organization->doctors;
        $patients = Auth::user()->organization->patients;
        $products = Auth::user()->organization->products;
        $sku_product = Sku_Product::find($id);
        return view('sku_product.edit',['sku_product'=>$sku_product, 'doctors'=>$doctors, 'patients'=>$patients, 'products'=>$products]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SkuProductUpdateRequest $request, $id)
    {
        $sku_product = Sku_Product::find($id);
        $sku_product->fill($request->all());
        $sku_product->save();

        Session::flash('message','Sku de Producto Actualizado correctamente');
        return Redirect::to('/sku_product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sku_product = Sku_Product::find($id);
        $sku_product->delete();
        Session::flash('message','Sku de Producto Eliminado correctamente');
        return Redirect::to('/sku_product');
    }
}
