<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function shop()
    {
       // return view('shop');
        $categories = Category::all();
        //echo $categories;
        //echo "Hola";
        //print_r($categories);
       // $products_cat1 = Product::where('category_id',1)->get();
        //@foreach($products_cat1 as $item)
        //{{$item->name}}
        //@endforeach

        /*foreach($categories as $cat){
            $products[$cat->name]=Product::where('category_id',$cat->id)->get();
        }
        */

      /*  foreach($products as $index=>$product){
            $products[$cat->name]=Product::where('category_id',$cat->id)->get();
        }
        */
        /*
        foreach($categories as $category){
            echo $category->name . "<br>";
            foreach($category->products as $product){
                echo $product->name ." (".$product->price.")". "<br>";
            }

        }
        */ 

       // return view('shop',['categories'=>$categories]);
        //return view('shop',['categories'=>$categories,'products'=>$products]);
        //compact('categories','products');
        return view('shop',compact('categories'));
    }
    public function register()
    {
        return view('register');
    }
    public function login()
    {
        return view('login');
    }
    public function product_details($id){
        $product = Product::find($id);
        $comments = Comment::all()->where('product_id',$id);
        return view('detail_product',compact('product','comments','id'));
    }

    public function edit_product($id)
    {
        $product = Product::find($id);
        return view('admin.products.edit_product',compact('product'));
    }
    
    
}
