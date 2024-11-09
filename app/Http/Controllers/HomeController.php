<?php

namespace App\Http\Controllers;

use App\Models\Product; 

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user()->isAdmin()){
            return view('dashboard'); // admin dashboard page
            
        } else {

            return view('home');  // user landing page
        }
    }
    
    public function indexnew()
    {
        // Retrieve all products from the database
        $product = Product::all();

        //  products view for Customers and Admin
        return view('products', ['product' => $product]);
    }

}
