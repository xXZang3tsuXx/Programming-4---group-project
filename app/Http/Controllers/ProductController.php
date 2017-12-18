<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use JD\Cloudder\Facades\Cloudder;
use Illuminate\Support\Facades\Session;
use App\Product;
use App\Cart;

class ProductController extends Controller
{


    public function makeProduct(Request $request)
    {
    	$product = new Product();

    	$this->validate($request,[
           'image_name'=>'required|mimes:jpeg,bmp,jpg,png|between:1, 6000',
       	]);

    	$product_image = $request->file('image_name')->getRealPath();

    	Cloudder::upload($product_image, null);

    	list($width, $height) = getimagesize($product_image);

    	$image_url= Cloudder::show(Cloudder::getPublicId(), ["width" => $width, "height"=>$height]);

    	$product->product_name = $request->input('prod_name');
    	$product->product_model = $request->input('prod_model');
    	$product->product_price = $request->input('prod_price');
    	$product->product_img_url = $image_url;
    	$product->product_3D_url = $request->input('three_url');

    	$product->save();


    	return redirect()->back()->with('status', 'Image Uploaded Successfully');

    }

     public function getAddToCart(Request $request,$id){
        $product= Product::find($id);

        $oldCart=Session::has('cart') ? Session::get('cart') : null;
        $cart=new Cart($oldCart);
        $cart->add($product,$product->id);
        $request->session()->put('cart',$cart);
        return redirect()->route('product.index');

    }

    public function getCart(){
        if(!Session::has('cart')){
            return view('cart',['products'=>null]);
        }
        $oldCart = Session::get('cart');
        $cart= new Cart($oldCart);
        return view('cart',['products'=>$cart->items,'totalPrice'=>$cart->totalPrice]);
    }


}
