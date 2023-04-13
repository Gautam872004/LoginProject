<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class productcontroller extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = product::all();
        return view('LoginProject.ProductView',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('LoginProject.AddProduct');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        product::create($request->all());
        return redirect()->route('product.create')->with("message","Data are successfully Inserted......");
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        //
        return view('LoginProject.Edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        //
        $product->update($request->all());
        return redirect()->route('product.index')->with("message","Data are successfully updated......");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        //
        $product->delete();
        return redirect()->route('product.index')->with("message","Data are successfully deleted.....!");
    }
}
