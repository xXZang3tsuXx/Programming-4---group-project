<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\User;
use App\Product;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.a_dashboard');
    }

    public function getUserData()
    {
        $allusers = User::all();
        
        return view('admin.a_users')->with('user_data', $allusers);
    }

    public function getProducts()
    {
        $allproducts = Product::all();

        return view('admin.a_products')->with('product_data', $allproducts);
    }

    public function addUser()
    {
        return view('admin.a_adduser');
    }

    public function showAddProduct()
    {
        return view('admin.a_addproduct');
    }

    public function getLocations()
    {
        return view('admin.a_maps');
    }
}
