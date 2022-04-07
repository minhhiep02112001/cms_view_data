<header id="header" class="d-lg-block d-none">
    <div class="container">
        <div class="align-items-center w-100 d-flex">
            <h1 class="logo float-left navbar-brand"><a href="/" class="logo">Merinda</a></h1>
            <nav  id="main-menu" class="stick d-lg-block d-none justify-content-lg-start">
                <div class="menu-primary">
                    <ul class="d-flex" style="padding-left: 200px;">
                        <li class="current-menu-item mr-2"><a href="/">Home</a></li>
                        <li class="menu-item-has-children ml-5"><a href="Javascript:void(0)">Categories</a>
                            <ul class="sub-menu">
                                @foreach($categories as $cate)
                                    <li><a href="{{route('categories', ['url' => $cate->slug])}}">{{$cate->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        {{--                    <li><a href="typography.html">Typography</a></li>--}}
                        {{--                    <li><a href="categories.html">Politics</a></li>--}}
                        {{--                    <li><a href="categories.html">Health</a></li>--}}
                        {{--                    <li><a href="categories.html">Design</a></li>--}}
                        {{--                    <li><a href="categories.html">Startups</a></li>--}}
                        {{--                    <li><a href="categories.html">Culture</a></li>--}}
                        {{--                    <li><a href="contact.html">Contact</a></li>--}}

                    </ul>
                    <span></span>
                </div>
            </nav>
            <div class="header-right float-right w-50">
                <form action="#" method="get" class="search-form d-lg-flex float-right">
                    <a href="javascript:void(0)" class="searh-toggle">
                        <i class="icon-search"></i>
                    </a>
                    <input type="text" class="search_field" placeholder="Search..." value="" name="s">
                </form>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
{{--    <nav id="main-menu" class="stick d-lg-block d-none">--}}
{{--        <div class="container">--}}
{{--            <div class="menu-primary">--}}
{{--                <ul>--}}
{{--                    <li class="current-menu-item"><a href="/">Home</a></li>--}}
{{--                    <li class="menu-item-has-children"><a href="categories.html">Categories</a>--}}
{{--                        <ul class="sub-menu">--}}
{{--                            <li><a href="categories.html">Politics</a></li>--}}
{{--                            <li><a href="categories.html">Health</a></li>--}}
{{--                            <li><a href="categories.html">Design</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li><a href="typography.html">Typography</a></li>--}}
{{--                    <li><a href="categories.html">Politics</a></li>--}}
{{--                    <li><a href="categories.html">Health</a></li>--}}
{{--                    <li><a href="categories.html">Design</a></li>--}}
{{--                    <li><a href="categories.html">Startups</a></li>--}}
{{--                    <li><a href="categories.html">Culture</a></li>--}}
{{--                    <li><a href="contact.html">Contact</a></li>--}}

{{--                </ul>--}}
{{--                <span></span>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </nav>--}}
</header>
