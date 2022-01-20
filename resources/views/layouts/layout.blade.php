<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo asset('css/layout.css')?>" type="text/css">
    <title>Loginpage</title>
</head>
<body>
    <div class="headers">

        <div class="top">
            <div class="name"><a href="/home" id="title-header"> Warmindo</a></div>
            @auth

                <div class="buttons">
                    @if(Auth::user()->name == "admin")
                        <button><a href="/insertproduct">Insert Product</a></button>
                        <button><a href="/manageuser">Manage User</a></button>
                    @endif
                </div>

                <div class="buttons">
                    @if(Auth::user()->name != "admin")
                        <button><a href="/edituser">Update Profile</a></button>
                        <button><a href="/transaction">Transaction</a></button>
                        <button><a href="/cart">Cart</a></button>
                    @endif
                </div>

                <div class="buttons">
                    <button>
                        <a href="/logout">Logout</a>
                    </button>
                </div>
            @endauth
        </div>
    </div>

    @yield('content')

    <div class="footers">
        <p>Marcellino Adryan Halim - 2301885270</p>
    </div>
</body>
</html>
