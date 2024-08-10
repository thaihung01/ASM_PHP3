<div class="container">
    <div class="row align-items-center">
        <div class="col-lg-3 col-md-4">
            <div class="b-logo">
                <a href="index.html">
                    <img src="/template/img/logo.png" alt="Logo">
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="b-search">
                <form action="{{ route('timkiem') }}" method="GET" class="b-search">
                    <input type="text" placeholder="Tìm kiếm.." name="query" value="{{ request('query') }}">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
        <div class="col-lg-3"></div>
        <div class="col-lg-3 col-md-4 d-flex justify-content-end">
            @if (Route::has('login'))
                <div class="">
                    @auth
                        <h5>Hi, {{ Auth::user()->name }}</h5>
                        <form action="{{ route('logout') }}" method="POST" class="">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Logout</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-link text-dark fw-bold">Đăng nhập</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-link text-dark fw-bold me-3">Đăng ký</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
</div>
