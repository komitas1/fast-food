<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title></title>
</head>
<body>

<nav class="nav">
    <div class="container">
        <a href="/">
            <img class="logo" src="/images/logo-nav.svg" alt="logo">
        </a>
        <span>SHAWARMA LAND</span>
    </div>
    <div class="container">
        <div class="cart-person-component">
            <div class="cart">
                <div class="cart-count">0</div>
                <img class="cart" src="/images/bag-fill.svg" alt="cart">
            </div>
            @if(Auth::user())
                <a class="person" href="{{route('profile.edit')}}">
                    <img class="person" src="/images/person-circle.svg" alt="person">
                </a>
            @else
                <button id="loginButton" type="button" class="person" data-bs-toggle="modal" data-bs-target="#loginModal">
                    <img class="person" src="/images/person-circle.svg" alt="person">
                </button>
            @endif
            @if(Auth::user() && Auth::user()->role == 1)
                <img class="admin" src="/images/admin.svg" alt="admin">
            @endif
        </div>
    </div>
</nav>
@include('partials.login')
@include('partials.register')
</body>
</html>


<style>
    body{
        margin: 0;
        padding: 0;
    }
    .nav {
        background-color: black;
        width: 100vw;
        height: 68px;
        display: flex;
        justify-content: space-between;
        position: sticky;
        top: 0;
        z-index: 1;
    }
    .cart-count{
        width: 18px;
        height: 18px;
        color: #edf2f7;
        display: flex;
        font-size: 15px;
        justify-content: center;
        align-items: center;
        background-color: red;
        border-radius: 50px;
        position: absolute;
    }
    .container span {
        color: darkorange;
        font-size: 38px;
        margin: 4px 0 0 0;
    }

    .container {
        margin: 0;
        display: flex;
        width: 700px;
    }
    .logo{
        height: 60px;
        margin: 3px 20px 0 10px;

    }
    .cart,.person,.admin {
        height: 45px;
    }
    .cart-person-component{
        margin-top: 10px;
        width: 500px;
        display: flex;
        justify-content: space-around;
    }
</style>
