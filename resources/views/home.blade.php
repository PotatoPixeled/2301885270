@extends('layouts.layout')
@section('content')
<link rel="stylesheet" href="<?php echo asset('css/home.css')?>" type="text/css">


    <div class="list">
        @foreach ($products as $product)

            <div class="box">
                <div class="detail"><img src="{{ asset('images')}}/{{ $product->image }}" /></div>
                <div class="container">
                    <div class="details">
                        <div class="detail">Title:  {{ $product->title }} </div>
                        <div class="detail">Description:    {{ $product->description}}</div>
                    </div>

                    <div class="edit-button">
                        @if(Auth::user()->name == "admin")
                            <button><a href={{"edit/".$product['id']}}>edit</a></button>
                        @endif
                    </div>
                    <div class="detail-button">
                        @if(Auth::user()->name != "admin")
                            <button><a href="{{ route('productdetail', $product->id) }}">Detail Product</a></button>
                        @endif
                    </div>


            </div>



        </div>
        @endforeach
    </div>

@endsection
