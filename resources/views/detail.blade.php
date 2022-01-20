@extends('layouts.layout')
@section('content')
<link rel="stylesheet" href="<?php echo asset('css/detail.css')?>" type="text/css">

    <div class="container">
        <div class="left">
            <img src="{{ asset('images')}}/{{ $product->image }}" />
        </div>
        <div class="right">
            <div class="detail">Title:  {{ $product->title }} </div>
            <div class="detail">Category:  {{ $product->category }} </div>
            <div class="detail">Description:    {{ $product->description}}</div>
            <div class="detail">Price:    {{ $product->price}}</div>
            <div class="detail">Stock:    {{ $product->stock}}</div>

            <button><a href="">Add to Cart</a></button>
        </div>
    </div>



    @endsection
