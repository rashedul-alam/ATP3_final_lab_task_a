<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except' =>['index','show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = product::all();
        return view('products.index')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'productName' => 'required',
            'details'=>'required',
            'quantity'=>'required',
            'price'=>'required'

        ]);

        // die($request);
        $product = new product();
        $product->productName = request('productName');
        $product->details = request('details');
        $product->quantity = request('quantity');
        $product->price = request('price');
        $product->user_id = auth()->user()->id; 

        //die($product);
        $product->save();
    
        
        return redirect()->route('Products.index')->with('success','Product Added');
       
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = product::find($id);
        return view('products.show')->with('product',$product);
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $product = product::find($id);
        //die($product);
        //checked fof user
        if (Auth()->user()->id !== $product->user_id){
            return redirect('/Products')->with('error','Unauthorized PAGE');

        }

        return view('Products.edit')->with('product',$product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'productName' => 'required',
            'details'=>'required',
            'quantity'=>'required',
            'price'=>'required'

        ]);

        // die($request);
        $product = product::find($id);;
        $product->productName = request('productName');
        $product->details = request('details');
        $product->quantity = request('quantity');
        $product->price = request('price');

        //die($product);
        $product->save();
    
        
        return redirect()->route('Products.index')->with('success','Product Updated');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = product::find($id);
        if (Auth()->user()->id !== $product->user_id){
            return redirect('/Products')->with('error','Unauthorized PAGE');

        }
        $product -> delete();
        

        return redirect()->route('Products.index')->with('success','Product Deleted');
        
    }
    // public function delete($id)
    // {
    //     $product = product::find($id);
    //     return view('products.delete')->with('product',$product);
        
    // }
}

