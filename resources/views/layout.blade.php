<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="Coffee Break Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
        Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <title>Blogs Api Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css' />
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <!---- start-smoth-scrolling---->
        <script type="text/javascript" src="{{ asset('js/move-top.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                });
            });
        </script>
        <!--start-smoth-scrolling-->

    </head>
    <body>
        <!--header-top-starts-->
        <div class="header-top">
            <div class="container">
                <div class="head-main">
                    {{-- <a href="{{ url('/') }}"><img src="{{ asset('images/logo-1.png') }}" alt="" /></a> --}}
                    <style>
                        h3.logo {
                            font-size: 60px;
                            font-weight: bold;
                            color: #3d1a1b;
                        }
                    </style>
                    <a href="{{ url('/') }}"><h3 class="logo">Đồ ăn Offline.com</h3></a>
                </div>
            </div>
        </div>
        <!--header-top-end-->
        <!--start-header-->
        <div class="header">
            <div class="container">
                <div class="head">
                <div class="navigation">
                     <span class="menu"></span>
                        <ul class="navig">
                            <li><a href="{{ url('/') }}"  class="active">Trang chủ</a></li>
                            @foreach ($category as $key => $cate)
                                <li><a href="{{ route('danh-muc.show',[$cate->id,'slug'=>Str::slug($cate->title)]) }}">{{ $cate->title }}</a></li>
                            @endforeach

                            {{-- <li><a href="gallery.html">Tin tức</a></li> --}}
                            {{-- <li><a href="typo.html">Typo</a></li>
                            <li><a href="contact.html">Contact</a></li> --}}
                        </ul>
                </div>
                <div class="header-right">
                    <form action="{{ url('tim-kiem') }}" method="GET">
                        @csrf
                        <div class="search-bar">
                            <input type="text" name="keywords" placeholder="Tìm kiếm...">
                            <input type="submit" value="Tìm kiếm" name="timkiem">
                        </div>
                    </form>
                    <ul>
                        <li><a href="#"><span class="fb"> </span></a></li>
                    </ul>
                </div>
                    <div class="clearfix"></div>
                </div>
                </div>
            </div>
        <!-- script-for-menu -->
        <!-- script-for-menu -->
            <script>
                $("span.menu").click(function(){
                    $(" ul.navig").slideToggle("slow" , function(){
                    });
                });
            </script>
        <!-- script-for-menu -->

        <!--main-starts-->
        @yield('content')
        <!--main-end-->
        <!--slide-starts-->
        <div class="slide">
            <div class="container">
                <div class="fle-xsel">
                <ul id="flexiselDemo3">
                    <li>
                        <a href="#">
                            <div class="banner-1">
                                <img src="{{ asset('images/s-1.jpg') }}" class="img-responsive" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="banner-1">
                                <img src="{{ asset('images/s-2.jpg') }}" class="img-responsive" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="banner-1">
                                <img src="{{ asset('images/s-3.jpg') }}" class="img-responsive" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="banner-1">
                                <img src="{{ asset('images/s-4.jpg') }}" class="img-responsive" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="banner-1">
                                <img src="{{ asset('images/s-5.jpg') }}" class="img-responsive" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="banner-1">
                                <img src="{{ asset('images/s-6.jpg') }}" class="img-responsive" alt="">
                            </div>
                        </a>
                    </li>
                </ul>

                                 <script type="text/javascript">
                                    $(window).load(function() {

                                        $("#flexiselDemo3").flexisel({
                                            visibleItems: 5,
                                            animationSpeed: 1000,
                                            autoPlay: true,
                                            autoPlaySpeed: 3000,
                                            pauseOnHover: true,
                                            enableResponsiveBreakpoints: true,
                                            responsiveBreakpoints: {
                                                portrait: {
                                                    changePoint:480,
                                                    visibleItems: 2
                                                },
                                                landscape: {
                                                    changePoint:640,
                                                    visibleItems: 3
                                                },
                                                tablet: {
                                                    changePoint:768,
                                                    visibleItems: 3
                                                }
                                            }
                                        });

                                    });
                                    </script>
                                    <script type="text/javascript" src="{{ asset('js/jquery.flexisel.js') }}"></script>
                        <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!--slide-end-->
        <!--footer-starts-->
        <div class="footer">
            <div class="container">
                <div class="footer-text">
                    <p>© 2020 Coffee Break. All Rights Reserved | Design by  <a href="#" target="_blank">Me</a> </p>
                </div>
            </div>
        </div>
        <!--footer-end-->
    </body>
</html>
