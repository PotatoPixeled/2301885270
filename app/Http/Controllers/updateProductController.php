<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class updateProductController extends Controller
{
    public function list(){
        $products=Product::all();
        return view('home', ['products'=>$products]);
    }

    public function edit($id){
        $product = Product::findorfail($id);
        return view('editproduct',['product' => $product] );
    }

    public function update(Request $request, $id){
        $oldImage = Product::findorfail($id);
        $product = [
            'title' => $request->title,
            'category' => $request->category,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock
        ];
        if ($request->file('image') == null) {
            $imageName = $oldImage->image;
        }else{
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }
        $product['image'] = $imageName;
        $product['category'] = $request->get('category');
        $product['title'] = $request->get('title');
        $product['description'] = $request->get('description');
        $product['price'] = $request->get('price');
        $product['stock'] = $request->get('stock');
        Product::where('id',$id)->update($product);
        // $product->update($request->all());
        return redirect('home');
    }
}
