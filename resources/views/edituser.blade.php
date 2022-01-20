@extends('layouts.layout')
@section('content')
<link rel="stylesheet" href="<?php echo asset('css/edituser.css')?>" type="text/css">

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
        <form action="{{ url('updateuser') }}" method="POST">
            @csrf
            <div class="inputs">
                Nama: <br><input type="text" name="name" id='name' maxlength="30" value="{{$user['name']}}">
            </div>
            <div class="inputs">
                Email: <br><input type="email" name='email' id='email' value="{{$user['email']}}">
            </div>
            <div class="inputs">
                Password: <br><input type="password" name='password' id='password'>
            </div>
            <div class="inputs">
                Confirm Password:  <br><input type="password" name='confirm_password' id='confirm_password'>
            </div>
            <div class="gender">
                <input type="radio" name="gender" value="male"> Male<br>
                <input type="radio" name="gender" value="female"> Female<br>
            </div>

            <input type="submit" value="submit">
            <button><a href="/home">back</a></button>
        </form>
    </div>



    @endsection
