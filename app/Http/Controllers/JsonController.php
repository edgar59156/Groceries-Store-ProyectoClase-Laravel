<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
header('Access-Control-Allow-Origin: *');

class JsonController extends Controller
{
    //

    public function json1(){
        return response()->json([
            'name' => 'Abigail',
            'state' => 'CA',
        ]);
    }

    public function json2(){

        header('Content-Type: application/json; charset=utf-8');
        return '{"name":"Abigail","state":"CA"}';
    }
    
    public function products()
    {
        $products = Product::all();
        return response()->json($products);
    }

    public function productsDataTable()
    {
        $products = Product::all();
        return response()->json(['data'=>$products]);
    }
        
    public function products_list()
    {
        return view('product_list');
    }


    public function employeesTable()
    {
        $products = Product::all();
        return response()->json(['data'=>$products]);
    }
}
