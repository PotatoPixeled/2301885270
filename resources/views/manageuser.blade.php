@extends('layouts.layout')
@section('content')
<link rel="stylesheet" href="<?php echo asset('css/manageuser.css')?>" type="text/css">
    @foreach ($users as $user)
             <div class="listorder">
                <div class="item">
                     {{$user->name}}
                </div>

                <div class="delete">
                    <a href= {{"delete/".$user['id']}} ><button id="delete-but"> Delete</button></a>
                </div>
            </div>

    @endforeach

    <button><a href="/home">back</a></button>

    @endsection
