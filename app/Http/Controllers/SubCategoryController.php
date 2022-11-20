<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use DB;

class SubCategoryController extends Controller
{
    public function index(){
        return view('admin.sub-category.sub-category',[
            'categories'=>Category::all(),
            'subCategories'=>DB::table('sub_categories')
                ->join('categories', 'sub_categories.category_id', '=', 'categories.id')
                ->select('sub_categories.*', 'categories.category_name')
                ->get()
        ]);
    }
    public function saveSubCategory(Request $request){
       $subCategory=new SubCategory();
       $subCategory->category_id=$request->category_id;
       $subCategory->sub_category_name=$request->sub_category_name;
       $subCategory->save();
       return back();
    }
}
