<header class="header_area">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="/"><img src="/image/logo3.png" alt="" width="40%"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav ml-auto">
                    <li class="nav-item {{ Request::is('/') ? 'active' : '' }}"><a class="nav-link" href="/">Trang chủ</a></li>
                    <li class="nav-item "><a class="nav-link" href="/about.html">About us</a></li>
                    <li class="nav-item {{ Request::is('product') ? 'active' : '' }}"><a class="nav-link" href="/product">Khách sạn</a></li>
                    <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">Blog</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                            <li class="nav-item"><a class="nav-link" href="blog-single.html">Blog Details</a></li>
                        </ul>
                    </li>
                    {{-- <li class="nav-item"><a class="nav-link" href="elements.html">Elemests</a></li> --}}

                    <li class="nav-item submenu dropdown {{ Request::is('user/profile') ? 'active' : '' }}">
                        @auth
                            <div x-data="{ open: false }">


                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item "><a class="nav-link" href="/profile"> Hồ sơ</a>
                                    </li>
                                    <?php if ((Auth::user()->role=='admin')or(Auth::user()->role=='editor')) {?>
                                    <li class="nav-item"><a class="nav-link" href="/admin/dashboard">Quản trị</a></li>
                                    <?php }else {?>
                                    {{-- ko có --}}
                                    <?php }?>
                                    <li class="nav-item"><a class="nav-link" href="/cart">Giỏ hàng</a></li>
                                    <li class="nav-item">
                                        <form method="POST" action="{{ route('logout') }}" x-data>
                                            @csrf

                                            <a class="nav-link" href="{{ route('logout') }}"
                                                @click.prevent="$root.submit();">
                                                {{ __('Đăng xuất') }}
                                            </a>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        @else
                            <!-- Hiển thị nút đăng nhập -->

                            <a class="nav-link" href="{{ route('login') }}">{{ __('Đăng nhập') }} </a>

                        @endauth
                    </li>

                    {{-- <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li> --}}
                </ul>
            </div>
        </nav>
    </div>


</header>
