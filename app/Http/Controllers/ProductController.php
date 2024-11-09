<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function create(){
        return view('product.create');
    }

    public function save(Request $req) {
        // handle backend logic

        // store the file
        $path = $req ->file('product_image')->store('product_image', 'public');

        // save the url to database
        $fileurl = Storage::url($path);

        Product::create([
            'pro_name' => $req->input('product_name'),
            'pro_price' => $req->input('product_price'),
            'pro_image_url' => $fileurl,
        ]);

        return redirect('home'); // after creating resource
    }

    public function index() {

        $product = Product::get();

        return view('product.index', ['product' => $product]);
    }

    public function edit(Product $item) {
        return view('product.edit', ['product' => $item]);
    }


    public function update(Product $item, Request $request) {

        // Store the file (if new one is uploaded only)
        if($request->hasFile('product_image')) {
            $path = $request ->file('product_image')->store('product_image', 'public');

        // Update save the url to database
        $fileurl = Storage::url($path);
        } else {
            $fileurl = $item->pro_image_url;
        }

        $item->update([
            'pro_name' => $request->input('product_name'),
            'pro_price' => $request->input('product_price'),
            'pro_image_url' => $fileurl,
        ]);

        return redirect ('/product/index'); // after Update resource, redirect to home
    }

    public function delete(Request $request) {
        Product::find($request->input('pro_id'))->delete();
        return redirect('product/index');
    }
}