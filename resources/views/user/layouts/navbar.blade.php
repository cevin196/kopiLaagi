<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">COFFEE<small>LAAGI</small></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">               
                <li class="nav-item {{(Route::currentRouteName()=='user.index')?'active':''}}"><a href="{{route('user.index')}}" class="nav-link">Home</a></li>
                <li class="nav-item {{(Route::currentRouteName()=='user.menu')?'active':''}}"><a href="{{route('user.menu')}}" class="nav-link">Menu</a></li>
                <li class="nav-item {{(Route::currentRouteName()=='user.index')?'about':''}}"><a href="{{route('user.about')}}" class="nav-link">About</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="room.html" id="dropdown04" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Shop</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="{{route('user.shop')}}">Shop</a>
                        <a class="dropdown-item" href="cart.html">Cart</a>
                        <a class="dropdown-item" href="checkout.html">Checkout</a>
                    </div>
                </li>
                <li class="nav-item {{(Route::currentRouteName()=='user.contact')?'active':''}}"><a href="{{route('user.contact')}}" class="nav-link">Contact</a></li>
                <li class="nav-item cart"><a href="{{route('user.shop')}}" class="nav-link"><span
                            class="icon icon-shopping_cart"></span><span
                            class="bag d-flex justify-content-center align-items-center"><small>1</small></span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
