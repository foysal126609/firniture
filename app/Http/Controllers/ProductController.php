<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct(){
        return view('admin.product.product',[
            'categories'=>Category::where('status',1)->get(),
            'subCategories'=>SubCategory::where('status',1)->get(),
            'brands'=>Brand::where('status',1)->get(),
        ]);
    }
    public function saveProduct(Request $request){
//        return $request->file('image');
        $product=new Product();
        $product->category_id=$request->category_id;
        $product->sub_category_id=$request->sub_category_id;
        $product->brand_id=$request->brand_id;
        $product->product_name=$request->product_name;
        $product->product_code=$request->product_code;
        $product->product_price=$request->product_price;
        $product->discount_amount=$request->discount_amount;
        $product->discount_price=$request->discount_price;
        $product->description=$request->description;
        $product->made_by=$request->made_by;
        $product->stock_amount=$request->stock_amount;
        $product->cost=$request->cost;
        if ($request->file('image')){
            $product->image=$this->saveImage($request);
        }
        return back();
    }
    private function saveImage(Request $request){
        $image=$request->file('image');
        $imageName=rand().'.'.$image->extension();
        $dir='adminAsset/image/';
        $imgUrl=$dir.$imageName;
        $image->move($dir,$imageName);
        return $imgUrl;
    }
}
