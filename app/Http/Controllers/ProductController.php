<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Producer;
use App\Brand;

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
        return view('admin.products.listProduct',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $producers = Producer::all();
        $brands = Brand::all();
        return view('admin.products.addProduct',['categories'=>$categories,'producers' => $producers,'brands' => $brands]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            //  Let's do everything here
            if ($request->file('image')->isValid()) {
                //
                $validated = $request->validate([
                    'title' => 'required',
                    'price' => 'required',
                    'content' => 'required',
                    'category_id' => 'required',
                    'producer_id' => 'required',
                    'brand_id' => 'required',
                    'image' => 'mimes:jpeg,png,webp|max:1014',
                    'quantity' => 'required'
                ]);
                $extension = $request->image->extension();
                $request->image->storeAs('/public/images/products', $validated['title'].".".$extension);
                $product = Product::create([
                   'title' => $validated['title'],
                   'price' => $validated['price'],
                   'category_id' => $validated['category_id'],
                   'image_path' => $validated['title'].".".$extension,
                   'producer_id' => $validated['producer_id'],
                   'description' => $validated['content'],
                   'brand_id' => $validated['brand_id'],
                   'quantity' => $validated['quantity']
                ]);
                $product->save();
                return redirect()->route('product.list');
            }
        }
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
        $product = Product::find($id);
        return view('admin.products.editProduct',['product' => $product]);
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
        
        $product = Product::find($id);
        $product->title = $request->input('product-name');
        $product->price = $request->input('price');
        $product->category_id = $request->input('category_id');
        $product->producer_id = $request->input('producer_id');
        $product->brand_id = $request->input('brand_id');
        $product->description = $request->input('description');
        $product->quantity = $request->input('quantity');
        $product->save();
        return redirect()->route('product.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.list');
    }
}
