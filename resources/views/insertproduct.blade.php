@extends('layouts.layout')
@section('content')
<link rel="stylesheet" href="<?php echo asset('css/insertproduct.css')?>" type="text/css">

    @if($errors->any())
        <div class="alert alert-danger">
            <p><strong>Whoops!</strong></p>
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif


    <div class="forms">
        <form action="/insertproduct" enctype="multipart/form-data"  method="POST">
            @csrf
                <div class="inputs">
                    Category: <input type="text" name="category" id='category'  maxlength="30">
                </div>
                <div class="inputs">
                    Title: <input type="text" name='title' id='title'>
                </div>
                <div class="inputs">
                    Description: <input type="text" name='description' id='description'>
                </div>
                <div class="inputs">
                    Price:  <input type="integer" name='price' id='price'>
                </div>
                <div class="inputs">
                    Stock:  <input type="integer" name='stock' id='stock'>
                </div>
                <div class="inputs">
                    Image: <input type="file" name="image" id="image">
                </div>

                <input type="submit" value="submit">
        </form>
    </div>

    <button><a href="/home">back</a></button>

    @endsection
