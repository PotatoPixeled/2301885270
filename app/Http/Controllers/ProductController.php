<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function index(){
        return view('insertproduct');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'category' => 'required',
            'title' => 'required|min:5|max:25',
            'description' => 'required|min:10|max:100',
            'price' => 'required',
            'stock' => 'required',
            'image' => 'required'

        ]);

        $category = $request['category'];
        $title = $request['title'];
        $description = $request['description'];
        $price = $request['price'];
        $stock = $request->input('stock');
        if ($request->file('image') == null) {
            $imageName = "";
        }else{
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }

        $product = new Product();
        $product->category = $category;
        $product->title = $title;
        $product->description = $description;
        $product->price = $price;
        $product->stock = $stock;
        $product->image = $imageName;


        $product-> save();
        return Redirect::to('/home');

  }
}
