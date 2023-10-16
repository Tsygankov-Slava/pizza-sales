<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="col-md-3 mb-2 mb-md-0">
            <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>
        </div>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="{{ route('home') }}" class="nav-link px-2 link-secondary">Home</a></li>
            <li><a href="{{ route('menu') }}" class="nav-link px-2">Menu</a></li>
            <li><a href="{{ route('basket') }}" class="nav-link px-2">Basket</a></li>
            <li><a href="{{ route('orders') }}" class="nav-link px-2">Orders</a></li>
        </ul>

        <div class="col-md-3 text-end">
            @auth('web')
                <div>
                    <div style="margin-right: 15px; display: inline-block; color: #6c757d;"> {{ auth()->user()->login }} </div>
                    <a href="{{ route('logout') }}"><button type="button" class="btn btn-outline-primary me-2">Exit</button></a>
                </div>
            @endauth

            @guest('web')
                <a href="{{ route('login') }}"><button type="button" class="btn btn-outline-primary me-2">Login</button></a>
                <a href="{{ route('register') }}"><button type="button" class="btn btn-primary">Sign-up</button></a>
            @endguest
        </div>
    </header>
</div>
