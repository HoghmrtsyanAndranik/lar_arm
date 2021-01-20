
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicons Icon -->

    <title>@yield('title')</title>

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}" media="all">
    <link rel="stylesheet" type="text/css" href="{{asset('css/simple-line-icons.css')}}" media="all">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" media="all">
    <link rel="stylesheet" type="text/css" href="{{asset('css/revslider.css')}}" >
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/flexslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.mobile-menu.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,600,600italic,400italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    @yield('css')
</head>

<body class="inner-page">
<input type="hidden" id="base_url" value="{{url('')}}">
<input type="hidden" id="token" value="{{@csrf_token()}}">

{{--{{@csrf_field()}} <input type="hidden" name="_token" code>--}}

<div id="page">

    <!-- Header -->
    <header>
        <div class="header-container">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <!-- Header Language -->
                        <div class="col-xs-7 col-sm-6">
                            <div class="dropdown block-language-wrapper hidden-xs"> <a role="button" data-toggle="dropdown" data-target="#" class="block-language dropdown-toggle" href="#"> <img src="{{asset('images/english.png')}}" alt="language"> English <span class="caret"></span> </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="{{asset('images/english.png')}}" alt="language"> English </a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="{{asset('images/francais.png')}}" alt="language"> French </a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="{{asset('images/german.png')}}" alt="language"> German </a></li>
                                </ul>
                            </div>
                            <!-- End Header Language -->

                            <!-- Header Currency -->
                            <div class="dropdown block-currency-wrapper hidden-xs"> <a role="button" data-toggle="dropdown" data-target="#" class="block-currency dropdown-toggle" href="#"> USD <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> $ - Dollar </a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> £ - Pound </a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> € - Euro </a></li>
                                </ul>
                            </div>
                            <!-- End Header Currency -->

                            <div class="welcome-msg hidden-xs">
  @php
      $user_email =Session::get("user_email")??"guest";

      echo $user_email;
  @endphp
</div>
                        </div>
                        <div class="col-xs-5 col-sm-6">

                            <div class="top-cart-contain pull-right">
                                <!-- Top Cart -->
                                <div class="mini-cart" style="z-index: 1000">
                                    <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"><a href="#" ><span class="done">  My Cart</span> <span class="cart_count" style="color:red">2</span></a></div>
                                    <div>
                                        <div class="top-cart-content" style="display: none;">
                                            <div class="actions">
                                                <button class="btn-checkout" title="Checkout" type="button"><span>Checkout</span></button>
                                                <a href="{{url('/cart')}}" class="view-cart " ><span class="done">View Cart</span></a> </div>
                                            <!--block-subtitle-->
                                            <ul class="mini-products-list" id="cart-sidebar">
{{--                                                @foreach($cart as $c)--}}
                                                <li class="item first">
{{--                                                    <div class="item-inner"><a class="product-image" title="" href="#l"><img alt="timi &amp; leslie Sophia Diaper Bag, Lemon Yellow/Shadow White" src="{{asset($c->photo[0]->url)}}"></a>--}}
                                                        <div class="product-details">
                                                            <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
{{--                                                            <!--access--> <strong>1</strong> x <span class="price">{{$c->product[0]->price}}</span>--}}
{{--                                                            <p class="product-name"><a href="#">{{$c->product[0]->name}}</a></p>--}}
                                                        </div>
                                                    </div>
                                                </li>
{{--                                                @endforeach--}}
{{--                                                    {{dd($cart)}}--}}


                                            </ul>
                                            <!--actions-->
                                        </div>
                                    </div>
                                </div>
                                <!-- Top Cart -->
                                <div id="ajaxconfig_info" style="display:none"><a href="#/"></a>
                                    <input value="" type="hidden">
                                    <input id="enable_module" value="1" type="hidden">
                                    <input class="effect_to_cart" value="1" type="hidden">
                                    <input class="title_shopping_cart" value="Go to shopping cart" type="hidden">
                                </div>
                            </div>

                            <div class="top-search">
                                <div class="block-icon pull-right"> <a data-target=".bs-example-modal-lg" data-toggle="modal" class="search-focus dropdown-toggle links"> <i class="fa fa-search"></i> </a>
                                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button aria-label="Close" data-dismiss="modal" class="close" type="button"><img src="{{asset('images/interstitial-close.png')}}" alt="close"> </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="navbar-form">
                                                        <div id="search">
                                                            <div class="input-group">
                                                                <input name="search" placeholder="Search" class="form-control" type="text">
                                                                <button type="button" class="btn-search"><i class="fa fa-search"></i></button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Header Top Links -->
                            <div class="toplinks">
                                <div class="links">

                                    <div class="myaccount"><a title="My Account" href="{{url('profile')}}"><span class="hidden-xs done">My Account</span></a></div>
                                    <div class="check"><a title="Checkout" href="{{url('/cart')}}"><span class="hidden-xs">Checkout</span></a></div>
                                    <div class="demo"><a title="Blog" href="blog.html"><span class="hidden-xs">Blog</span></a></div>
                                    <!-- Header Company -->

                                    <!-- End Header Company -->
@php
$user_email =session("user_email")??null;
if($user_email){
$url=url('/logout');
   echo  "<div class='login'><a href='$url'><span class='hidden-xs done'>LOG OUT</span></a></div>";

}
else{
$login=url('/login');
$signup=url('/signup');
echo     "<div class='login'><a href='$login'><span class='hidden-xs done'>Log In</span></a></div>
         <div class='login'><a href='$signup'><span class='hidden-xs done'>SIGN UP</span></a></div>"; 
}

@endphp

                                   


                                </div>

                            </div>
                            <!-- End Header Top Links -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <nav>
    <div class="container">
        <!-- Header Logo -->
        <div class="logo"><a title="Datson" href="{{url('/')}}"><img alt="Datson" src="{{asset('images/logo.png')}}"></a></div>
        <!-- End Header Logo -->

        <div class="mm-toggle-wrap">
            <div class="mm-toggle"><i class="fa fa-reorder"></i><span class="mm-label">Menu</span> </div>
        </div>

        <ul class="nav hidden-xs menu-item menu-item-left">
            <li class="level0 parent drop-menu active"><a href="{{url('/')}}"><span class="done">Home</span></a>

            </li>
            <li class="level0 parent drop-menu"><a href="#"><span class="done">Pages</span> </a>
                <ul class="level1" style="display: none;">
                    <li class="level1 first"><a href="{{url('/products')}}"><span class="done">Products</span></a></li>
                    <li class="level1 nav-10-2"> <a href="list.html"> <span>List</span> </a> </li>
                    <li class="level1 nav-10-3"> <a href="product_detail.html"> <span>Product Detail</span> </a> </li>
                    <li class="level1 nav-10-4"> <a href="{{url('/cart')}}"> <span class="done">Shopping Cart</span> </a> </li>
                    <li class="level1 first parent"><a href="checkout.html"><span>Checkout</span></a>
                        <!--sub sub category-->
                        <ul class="level2 right-sub" style="top: 0px; left: 165px; display: none;">
                            <li class="level2 nav-2-1-1 first"><a href="checkout_method.html"><span>Checkout Method</span></a></li>
                            <li class="level2 nav-2-1-5 last"><a href="checkout_billing_info.html"><span>Checkout Billing Info</span></a></li>
                        </ul>
                        <!--sub sub category-->
                    </li>
                    <li class="level1 nav-10-4"> <a href="{{url('/showWishlist')}}"> <span class="done">Wishlist</span> </a> </li>
                    <li class="level1 first parent"><a href="dashboard.html"><span>Dashboard</span></a>
                        <!--sub sub category-->
                        <ul class="level2 right-sub" style="top: 0px; left: 165px; display: none;">
                            <li class="level2 nav-2-1-1 first"><a href="account_information.html"><span>Account Information</span></a></li>
                            <li class="level2 nav-2-1-5 last"><a href="address_book.html"><span>Address Book</span></a></li>
                            <li class="level2 nav-2-1-1 first"><a href="contact_information.html"><span>Contact Information</span></a></li>
                        </ul>
                        <!--sub sub category-->
                    </li>
                    <li class="level1"> <a href="multiple_addresses.html"> <span>Multiple Addresses</span> </a> </li>
                    <li class="level1"> <a href="about_us.html"> <span>About us</span> </a> </li>

                    <li class="level1"> <a href="faq.html"> <span>FAQ</span> </a> </li>
                    <li class="level1"> <a href="{{url('/login')}}"> <span class="done">Login</span> </a> </li>
                    <li class="level1"> <a href="forgot_password.html"> <span>Forgot Password</span> </a> </li>
                    <li class="level1"> <a href="quick_view.html"> <span>Quick view </span> </a> </li>
                    <li class="level1 first parent"><a href="blog.html"><span>Blog</span></a>
                        <ul class="level2 right-sub" style="top: 0px; left: 165px; display: none;">
                            <li class="level2 nav-2-1-1 first"><a href="blog_detail.html"><span>Blog Detail</span></a></li>
                        </ul>
                    </li>
                    <li class="level1"><a href="contact_us.html"><span>Contact us</span></a> </li>
                    <li class="level1"><a href="404error.html"><span>404 Error Page</span></a> </li>
                </ul>
            </li>
            <li class="mega-menu"><a href="{{url('/product')}}" class="level-top"><span>Women</span></a>
                <div style="left: 0px; display: none;" class="level0-wrapper dropdown-6col">
                    <div class="container">
                        <div class="level0-wrapper2">
                            <div class="col-1">
                                <div class="nav-block nav-block-center">
                                    <ul class="level0">
                                        <li class="level1 nav-6-1 parent item"><a href="#.html" class=""><span>Handbags</span></a>
                                            <ul class="level1">
                                                <li class="level2 nav-6-1-1"><a href="#" class=""><span>Clutch Handbags</span></a></li>
                                                <li class="level2 nav-6-1-1"><a href="#/diaper-bags.html" class=""><span>Diaper Bags</span></a></li>
                                                <li class="level2 nav-6-1-1"><a href="#/bags.html" class=""><span>Bags</span></a></li>
                                                <li class="level2 nav-6-1-1"><a href="#/hobo-handbags.html" class=""><span>Hobo handbags</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="level1 nav-6-1 parent item"><a href="#.html"><span>JACKETS</span></a>
                                            <ul class="level1">
                                                <li class="level2 nav-6-1-1"><a href="#/beaded-handbags.html"><span>Bathtime Goods </span></a></li>
                                                <li class="level2 nav-6-1-1"><a href="#/fabric-handbags.html"><span>Bedding</span></a></li>
                                                <li class="level2 nav-6-1-1"><a href="#/handbags.html"><span>Blankets</span></a></li>
                                                <li class="level2 nav-6-1-1"><a href="#/leather-handbags.html"><span>Shower Curtains</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="level1 nav-6-1 parent item"><a href="#.html"><span>Shoes</span></a>
                                            <ul class="level1">
                                                <li class="level2 nav-6-1-1"><a href="#/flat-shoes.html"><span>Flat Shoes</span></a></li>
                                                <li class="level2 nav-6-1-1"><a href="#/flat-sandals.html"><span>Flat Sandals</span></a></li>
                                                <li class="level2 nav-6-1-1"><a href="#/boots.html"><span>Boots</span></a></li>
                                                <li class="level2 nav-6-1-1"><a href="#/heels.html"><span>Heels</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="level1 nav-6-1 parent item"><a href="#.html"><span>Jwellery</span></a>
                                            <ul class="level1">
                                                <li class="level2 nav-6-1-1"><a href="#/bracelets.html"><span>Bracelets</span></a></li>
                                                <li class="level2 nav-6-1-1"><a href="#"><span>Necklaces &amp; Pendent</span></a></li>
                                                <li class="level2 nav-6-1-1"><a href="#/pendants.html"><span>Pendants</span></a></li>
                                                <li class="level2 nav-6-1-1"><a href="#/pins-brooches.html"><span>Pins &amp; Brooches</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="level1 nav-6-1 parent item"><a href="#.html"><span>Dresses</span></a>
                                            <ul class="level1">
                                                <li class="level2 nav-6-1-1"><a href="#/casual-dresses.html"><span>Casual Dresses</span></a></li>
                                                <li class="level2 nav-6-1-1"><a href="#/evening.html"><span>Evening</span></a></li>
                                                <li class="level2 nav-6-1-1"><a href="#/designer.html"><span>Designer</span></a></li>
                                                <li class="level2 nav-6-1-1"><a href="#/party.html"><span>Party</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="level1 nav-6-1 parent item"><a href="#/swimwear.html"><span>Swimwear</span></a>
                                            <ul class="level1">
                                                <li class="level2 nav-6-1-1"><a href="#/swimwear/swimsuits.html"><span>Swimsuits</span></a></li>
                                                <li class="level2 nav-6-1-1"><a href="#/swimwear/beach-clothing.html"><span>Beach Clothing</span></a></li>
                                                <li class="level2 nav-6-1-1"><a href="#/swimwear/clothing.html"><span>Clothing</span></a></li>
                                                <li class="level2 nav-6-1-1"><a href="#/swimwear/bikinis.html"><span>Bikinis</span></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--nav-block nav-block-center-->
                            <div class="col-2">
                                <div class="menu_image"><a href="#" title=""><img src="images/menu_image.png" alt="menu_image"></a></div>
                            </div>
                        </div>
                        <!--level0-wrapper2--> </div>
                </div>
            </li>
            <li class="mega-menu"><a href="{{url('/product')}}" class="level-top"><span>Men</span></a>
                <div  style="left: 0px; display: none;" class="level0-wrapper dropdown-6col">
                    <div class="container">
                        <div class="level0-wrapper2">
                            <div class="nav-block nav-block-center">
                                <ul class="level0">
                                    <li class="level1 nav-6-1 parent item"><a href="#.html" class=""><span>Shoes</span></a>
                                        <ul class="level1">
                                            <li class="level2 nav-6-1-1"><a href="#/sport-shoes.html"><span>Sport Shoes</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/casual-shoes.html"><span>Casual Shoes</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/leather-shoes.html"><span>Leather Shoes</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/canvas-shoes.html"><span>canvas shoes</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="level1 nav-6-1 parent item"><a href="#.html"><span>Dresses</span></a>
                                        <ul class="level1">
                                            <li class="level2 nav-6-1-1"><a href="#/casual-dresses.html"><span>Casual Dresses</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/evening.html"><span>Evening</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/designer.html"><span>Designer</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/party.html"><span>Party</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="level1 nav-6-1 parent item"><a href="#.html"><span>Jackets</span></a>
                                        <ul class="level1">
                                            <li class="level2 nav-6-1-1"><a href="#/coats.html"><span>Coats</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/formal-jackets.html"><span>Formal Jackets</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/leather-jackets.html"><span>Leather Jackets</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/blazers.html"><span>Blazers</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="level1 nav-6-1 parent item"><a href="#.html"><span>Watches</span></a>
                                        <ul class="level1">
                                            <li class="level2 nav-6-1-1"><a href="#/fasttrack.html"><span>Fasttrack</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/casio.html"><span>Casio</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/titan.html"><span>Titan</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/tommy-hilfiger.html"><span>Tommy-Hilfiger</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="level1 nav-6-1 parent item"><a href="#/sunglasses.html"><span>Sunglasses</span></a>
                                        <ul class="level1">
                                            <li class="level2 nav-6-1-1"><a href="#/sunglasses/ray-ban.html"><span>Ray Ban</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/sunglasses/fasttrack.html"><span>Fasttrack</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/sunglasses/police.html"><span>Police</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/sunglasses/oakley.html"><span>Oakley</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="level1 nav-6-1 parent item"><a href="#/accesories.html"><span>Accesories</span></a>
                                        <ul class="level1">
                                            <li class="level2 nav-6-1-1"><a href="#/accesories/backpacks.html"><span>Backpacks</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/accesories/wallets.html"><span>Wallets</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/accesories/laptops-bags.html"><span>Laptops Bags</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/accesories/belts.html"><span>Belts</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!--level0-wrapper2-->

                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <ul class="nav hidden-xs menu-item menu-item-right">
            <li class="mega-menu"><a href="{{url('/product')}}" class="level-top"><span>Electronics</span></a>
                <div style="left: 0px; display: none;" class="level0-wrapper dropdown-6col">
                    <div class="container">
                        <div class="level0-wrapper2">
                            <div class="nav-block nav-block-center">
                                <ul class="level0">
                                    <li class="level1 nav-6-1 parent item"><a href="#/mobiles.html"><span>Mobiles</span></a>
                                        <ul class="level1">
                                            <li class="level2 nav-6-1-1"><a href="#/mobiles/samsung.html"><span>Samsung</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/mobiles/nokia.html"><span>Nokia</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/mobiles/iphone.html"><span>IPhone</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/mobiles/sony.html"><span>Sony</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="level1 nav-6-1 parent item"><a href="#.html" class=""><span>Accesories</span></a>
                                        <ul class="level1">
                                            <li class="level2 nav-6-1-1"><a href="#/mobile-memory-cards.html"><span>Mobile Memory Cards</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/cases-covers.html"><span>Cases &amp; Covers</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/mobile-haedphones.html"><span>Mobile Headphones</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/bluetooth-headsets.html"><span>Bluetooth Headsets</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="level1 nav-6-1 parent item"><a href="#/cameras.html"><span>Cameras</span></a>
                                        <ul class="level1">
                                            <li class="level2 nav-6-1-1"><a href="#/cameras/camcorders.html"><span>Camcorders</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/cameras/point-shoot.html"><span>Point &amp; Shoot</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/cameras/digital-slr.html"><span>Digital SLR</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#camera-accesories.html"><span>Camera Accesories</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="level1 nav-6-1 parent item"><a href="#/audio-video.html"><span>Audio &amp; Video</span></a>
                                        <ul class="level1">
                                            <li class="level2 nav-6-1-1"><a href="#/audio-video/mp3-players.html"><span>MP3 Players</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/audio-video/ipods.html"><span>IPods</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/audio-video/speakers.html"><span>Speakers</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/audio-video/video-players.html"><span>Video Players</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="level1 nav-6-1 parent item"><a href="#/computer.html"><span>Computer</span></a>
                                        <ul class="level1">
                                            <li class="level2 nav-6-1-1"><a href="#/external-hard-disk.html"><span>External Hard Disk</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/computer/pendrives.html"><span>Pendrives</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/computer/headphones.html"><span>Headphones</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/computer/pc-components.html"><span>PC Components</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="level1 nav-6-1 parent item"><a href="#/home-appliances.html"><span>Appliances</span></a>
                                        <ul class="level1">
                                            <li class="level2 nav-6-1-1"><a href="#/vaccum-cleaners.html"><span>Vaccum Cleaners</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/indoor-lighting.html"><span>Indoor Lighting</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/kitchen-tools.html"><span>Kitchen Tools</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/water-purifier.html"><span>Water Purifier</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--level0-wrapper2-->

                    </div>
                </div>
            </li>
            <li class="mega-menu"><a class="level-top" href="{{url('/products')}}"><span>Furniture</span></a>
             
            </li>
            <li class="level0 nav-8 level-top"><a href="{{url('/product')}}" class="level-top"><span>Kids</span></a></li>

        </ul>



    </div>
</nav>
    <!-- end header -->
    @yield('content')

<!-- Footer -->
    <footer>
        <div class="footer-inner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12 col-lg-8">
                        <div class="footer-column pull-left">
                            <h4>CUSTOMMER SERVICE</h4>
                            <ul class="links">
                                <li class="first"><a href="#" title="Contact us">My Account</a></li>
                                <li><a href="{{url('/orderHistory')}}" title="About us">Order History</a></li>
                                <li><a href="#" title="faq">FAQ</a></li>
                                <li><a href="#" title="Popular Searches">Specials</a></li>
                                <li class="last"><a href="#" title="Where is my order?">Help Center</a></li>

                            </ul>
                        </div>
                        <div class="footer-column pull-left">
                            <h4>Corporation</h4>
                            <ul class="links">
                                <li class="first"><a title="Your Account" href="#">About us</a></li>
                                <li><a title="Information" href="#">Customer Service</a></li>
                                <li><a title="Addresses" href="#">Company</a></li>
                                <li><a title="Addresses" href="#">Investor Relations</a></li>
                                <li class="last"><a title="Orders History" href="#">Advanced Search</a></li>

                            </ul>
                        </div>
                        <div class="footer-column pull-left">
                            <h4>Why choose Us</h4>
                            <ul class="links">
                                <li class="first"><a href="#" title="About us">Shopping Guide</a></li>
                                <li><a href="#" title="Blog">Blog</a></li>
                                <li><a href="#" title="Company">Company</a></li>
                                <li><a href="#" title="Investor Relations">Investor Relations</a></li>
                                <li class=" last"><a href="contact-us.html" title="Suppliers">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-4">
                        <div class="footer-column-last">
                            <div class="newsletter-wrap">
                                <h4>Sign up for emails</h4>
                                <form id="newsletter-validate-detail" method="post" action="#">
                                    <div id="container_form_news">
                                        <div id="container_form_news2">
                                            <input type="text" class="input-text required-entry validate-email" value="Enter your email address" onFocus=" this.value='' " title="Sign up for our newsletter" id="newsletter" name="email">
                                            <button class="button subscribe" title="Subscribe" type="submit"><span>Subscribe</span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <br>
                            <div class="social">
                                <h4>Follow Us</h4>
                                <ul class="link">
                                    <li class="fb pull-left"><a href="#"></a></li>
                                    <li class="tw pull-left"><a href="#"></a></li>
                                    <li class="googleplus pull-left"><a href="#"></a></li>
                                    <li class="rss pull-left"><a href="#"></a></li>
                                    <li class="pintrest pull-left"><a href="#"></a></li>
                                    <li class="linkedin pull-left"><a href="#"></a></li>
                                    <li class="youtube pull-left"><a href="#"></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="col-sm-12 col-xs-12 footer-logo"><img alt="Datson" src="{{asset('images/logo.png')}}"></div>
                <address>
                    <i class="fa fa-map-marker"></i>ThemesGround, 789 Main rd, Anytown, CA 12345  USA <i class="fa fa-mobile"></i><span> +(888) 123-4567</span> <i class="fa fa-envelope"></i><span> superb@themesground.com</span>
                </address>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12 coppyright">&copy; 2016 ThemesGround. All Rights Reserved.</div>

                </div>
            </div>
        </div>
    </footer>

</div>

<!-- JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/parallax.js')}}"></script>
<script type="text/javascript" src="{{asset('js/common.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.flexslider.js')}}"></script>
<script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.mobile-menu.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/cloud-zoom.js')}}"></script>
<script type="text/javascript" src="{{asset('js/shopping_cart.js')}}"></script>
<script type="text/javascript" src="{{asset('js/add-to-cart.js')}}"></script>
<script type="text/javascript" src="{{asset('js/add-to-whishlist.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revolution-slider.js')}}"></script>
<script type="text/javascript" src="{{asset('js/feedback.js')}}"></script>

@yield('js')
</body>
</html>

