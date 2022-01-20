@extends('layouts.layout')
@section('content')
<link rel="stylesheet" href="<?php echo asset('css/editproduct.css')?>" type="text/css">
    <div class="forms">
        <form action="{{ url('update',$product->id) }}" enctype="multipart/form-data"  method="POST">
            @csrf
                <div class="inputs">
                    Category: <input type="text" name="category" id='category'  maxlength="30" value="{{$product['category']}}">
                </div>
                <div class="inputs">
                    Title: <input type="text" name='title' id='title' value="{{$product['title']}}">
                </div>
                <div class="inputs">
                    Description: <input type="text" name='description' id='description' value="{{$product['description']}}">
                </div>
                <div class="inputs">
                    Price:  <input type="integer" name='price' id='price' value="{{$product['price']}}">
                </div>
                <div class="inputs">
                    Stock:  <input type="integer" name='stock' id='stock' value="{{$product['stock']}}">
                </div>
                <div class="inputs">
                    Image: <input type="file" name="image" id="image" value="{{$product['image']}}">
                </div>

                <input type="submit" value="Update">

                <button><a href="/home">back</a></button>
        </form>
    </div>


    @endsection
