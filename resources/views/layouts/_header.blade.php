<nav class="navbar navbar-expand-lg navbar-light">
    <a href="/" class="navbar-brand">TI<b>HO</b></a>  		
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Collection of nav links, forms, and other content for toggling -->
    <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
        <div class="navbar-nav">
            <a href="/" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">TRANG CHỦ</a>
            <a href="/tiho" class="nav-item nav-link {{ request()->is('tiho') ? 'active' : '' }}">TIHO</a>			
            <div class="nav-item dropdown">
                <a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle {{ request()->is('service') ? 'active' : '' }}">DỊCH VỤ</a>
                <div class="dropdown-menu">					
                    <a href="/service" class="dropdown-item">Tìm phòng trọ</a>
                    <a href="#" class="dropdown-item">Tìm nhà ở</a>
                    <a href="#" class="dropdown-item">Tìm khách sạn</a>
                    <a href="#" class="dropdown-item">Bất động sản</a>
                </div>
            </div>
            <a href="/invest" class="nav-item nav-link {{ request()->is('invest') ? 'active' : '' }}">ĐẦU TƯ</a>
            <a href="/blog" class="nav-item nav-link {{ request()->is('blog') ? 'active' : '' }}">TIN TỨC</a>
            <a href="/contact" class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">LIÊN HỆ</a>
        </div>
        <form class="navbar-form form-inline ml-auto">
            <div class="input-group search-box">
                <input type="text" class="form-control">
                <div class="input-group-append">
                    <button type="button" class="btn btn-danger"><span>Tìm kiếm</span></button>
                </div>
            </div>
        </form>		
    </div>
</nav>