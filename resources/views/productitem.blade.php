@extends('layouts.userlayout')

@section('title','Product')

@section('content')
{{--<h1>{{$product->name}}</h1>--}}
{{--    @foreach($product->photo as $p)--}}
{{--        <img src="{{asset('img/'.$p->url)}}" alt="" width="100">--}}
{{--    @endforeach--}}
{{--<span>by {{$product->user->name." ".$product->user->surname}}</span>--}}



    <!-- Navbar -->
    <nav>
        <div class="container">
            <!-- Header Logo -->
            <div class="logo"><a title="Datson" href="index.html"><img alt="Datson" src="{{asset('images/logo.png')}}"></a></div>
            <!-- End Header Logo -->

            <div class="mm-toggle-wrap">
                <div class="mm-toggle"><i class="fa fa-reorder"></i><span class="mm-label">Menu</span> </div>
            </div>

            <ul class="nav hidden-xs menu-item menu-item-left">
                <li class="level0 parent drop-menu active"><a href="index.html"><span>Home</span></a>

                </li>
                <li class="level0 parent drop-menu"><a href="#"><span>Pages</span> </a>
                    <ul class="level1" style="display: none;">
                        <li class="level1 first"><a href="grid.html"><span>Grid</span></a></li>
                        <li class="level1 nav-10-2"> <a href="list.html"> <span>List</span> </a> </li>
                        <li class="level1 nav-10-3"> <a href="product_detail.html"> <span>Product Detail</span> </a> </li>
                        <li class="level1 nav-10-4"> <a href="shopping_cart.html"> <span>Shopping Cart</span> </a> </li>
                        <li class="level1 first parent"><a href="checkout.html"><span>Checkout</span></a>
                            <!--sub sub category-->
                            <ul class="level2 right-sub" style="top: 0px; left: 165px; display: none;">
                                <li class="level2 nav-2-1-1 first"><a href="checkout_method.html"><span>Checkout Method</span></a></li>
                                <li class="level2 nav-2-1-5 last"><a href="checkout_billing_info.html"><span>Checkout Billing Info</span></a></li>
                            </ul>
                            <!--sub sub category-->
                        </li>
                        <li class="level1 nav-10-4"> <a href="wishlist.html"> <span>Wishlist</span> </a> </li>
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
                        <li class="level1"> <a href="login.html"> <span>Login</span> </a> </li>
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
                <li class="mega-menu"><a href="grid.html" class="level-top"><span>Women</span></a>
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
                                    <div class="menu_image"><a href="#" title=""><img src="{{asset('images/menu_image.png')}}" alt="menu_image"></a></div>
                                </div>
                            </div>
                            <!--level0-wrapper2--> </div>
                    </div>
                </li>
                <li class="mega-menu"><a href="grid.html" class="level-top"><span>Men</span></a>
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
                <li class="mega-menu"><a href="grid.html" class="level-top"><span>Electronics</span></a>
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
                <li class="mega-menu"><a class="level-top" href="grid.html"><span>Furniture</span></a>

                </li>
                <li class="level0 nav-8 level-top"><a href="grid.html" class="level-top"><span>Kids</span></a></li>

            </ul>



        </div>
    </nav>
    <!-- end nav -->
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Women</a></li>
                        <li><a href="#">Holiday</a></li>
                        <li><a href="#">Jeans</a></li>
                        <li><a href="#">Retis lapen casen</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->
    <!-- Main Container -->
    <section class="main-container col1-layout wow bounceInUp animated">
        <div class="main container">
            <div class="col-main">
                <div class="row">
                    <div class="product-view">
                        <div class="product-next-prev"> <a class="product-next" href="#"><span></span></a> <a class="product-prev" href="#"><span></span></a> </div>
                        <div class="product-essential">
                            <form action="#" method="post" id="product_addtocart_form">
                                <input name="form_key" value="6UbXroakyQlbfQzK" type="hidden">
                                <div class="product-img-box col-sm-4 col-xs-12">
                                    <div class="new-label new-top-left"> New </div>
                                    <div class="product-image">
                                        <div class="large-image"> <a href="products-images/product.jpg" class="cloud-zoom" id="zoom1"> <img src="{{asset('products-images/product.jpg')}}" alt="product image"> </a> </div>
                                        <div class="flexslider flexslider-thumb">
                                            <ul class="previews-list slides">
                                                <li><a href='products-images/product.jpg' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'products-images/product.jpg' "><img src="{{asset('products-images/product.jpg')}}" alt = "Thumbnail 1"/></a></li>
                                                <li><a href='products-images/product.jpg' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'products-images/product.jpg' "><img src="{{asset('products-images/product.jpg')}}" alt = "Thumbnail 2"/></a></li>
                                                <li><a href='products-images/product.jpg' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'products-images/product.jpg' "><img src="{{asset('products-images/product.jpg')}}" alt = "Thumbnail 1"/></a></li>
                                                <li><a href='products-images/product.jpg' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'products-images/product.jpg' "><img src="{{asset('products-images/product.jpg')}}" alt = "Thumbnail 2"/></a></li>
                                                <li><a href='products-images/product.jpg' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'products-images/product.jpg' "><img src="{{asset('products-images/product.jpg')}}" alt = "Thumbnail 2"/></a></li>
                                                <li><a href='products-images/product.jpg' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'products-images/product.jpg' "><img src="{{asset('products-images/product.jpg')}}" alt = "Thumbnail 2"/></a></li>
                                                <li><a href='products-images/product.jpg' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'products-images/product.jpg' "><img src="{{asset('products-images/product.jpg')}}" alt = "Thumbnail 2"/></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- end: more-images -->
                                </div>
                                <div class="product-shop col-sm-8 col-xs-12">
                                    <div class="product-name">
                                        <h1>Retis lapen casen</h1>
                                    </div>
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <div style="width:60%" class="rating"></div>
                                        </div>
                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Your Review</a> </p>
                                    </div>
                                    <div class="price-block">
                                        <div class="price-box">
                                            <p class="special-price"> <span class="price-label">Special Price</span> <span id="product-price-48" class="price"> $309.99 </span> </p>
                                            <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $315.99 </span> </p>
                                        </div>
                                        <p class="availability in-stock pull-right"><span>In Stock</span></p>
                                    </div>
                                    <div class="short-description">
                                        <h2>Quick Overview</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem. </p>
                                    </div>
                                    <div class="add-to-box">
                                        <div class="add-to-cart">
                                            <div class="pull-left">
                                                <div class="custom pull-left">
                                                    <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="fa fa-minus">&nbsp;</i></button>
                                                    <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                                    <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="fa fa-plus">&nbsp;</i></button>
                                                </div>
                                            </div>
                                            <button onClick="productAddToCartForm.submit(this)" class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                                        </div>
                                        <div class="email-addto-box">
                                            <p class="email-friend"><a href="#" class=""><span>Email to a Friend</span></a></p>
                                            <ul class="add-to-links">
                                                <li> <a class="link-wishlist" href="#"><span>Add to Wishlist</span></a></li>
                                                <li><span class="separator">|</span> <a class="link-compare" href="#"><span>Add to Compare</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="product-collateral col-lg-12 col-sm-12 col-xs-12 bounceInUp animated">
                            <div class="add_info">
                                <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                                    <li class="active"> <a href="#product_tabs_description" data-toggle="tab"> Product Description </a> </li>
                                    <li><a href="#product_tabs_tags" data-toggle="tab">Tags</a></li>
                                    <li> <a href="#reviews_tabs" data-toggle="tab">Reviews</a> </li>
                                    <li> <a href="#product_tabs_custom" data-toggle="tab">Custom Tab</a> </li>
                                    <li> <a href="#product_tabs_custom1" data-toggle="tab">Custom Tab1</a> </li>
                                </ul>
                                <div id="productTabContent" class="tab-content">
                                    <div class="tab-pane fade in active" id="product_tabs_description">
                                        <div class="std">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit.</p>
                                            <p> Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="product_tabs_tags">
                                        <div class="box-collateral box-tags">
                                            <div class="tags">
                                                <form id="addTagForm" action="#" method="get">
                                                    <div class="form-add-tags">
                                                        <label for="productTagName">Add Tags:</label>
                                                        <div class="input-box">
                                                            <input class="input-text" name="productTagName" id="productTagName" type="text">
                                                            <button type="button" title="Add Tags" class=" button btn-add" onClick="submitTagForm()"> <span>Add Tags</span> </button>
                                                        </div>
                                                        <!--input-box-->
                                                    </div>
                                                </form>
                                            </div>
                                            <!--tags-->
                                            <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="reviews_tabs">
                                        <div class="box-collateral box-reviews" id="customer-reviews">
                                            <div class="box-reviews1">
                                                <div class="form-add">
                                                    <form id="review-form" method="post" action="http://www.thmcommerce.com/review/product/post/id/176/">
                                                        <h3>Write Your Own Review</h3>
                                                        <fieldset>
                                                            <h4>How do you rate this product? <em class="required">*</em></h4>
                                                            <span id="input-message-box"></span>
                                                            <table id="product-review-table" class="data-table">

                                                                <thead>
                                                                <tr class="first last">
                                                                    <th>&nbsp;</th>
                                                                    <th><span class="nobr">1 *</span></th>
                                                                    <th><span class="nobr">2 *</span></th>
                                                                    <th><span class="nobr">3 *</span></th>
                                                                    <th><span class="nobr">4 *</span></th>
                                                                    <th><span class="nobr">5 *</span></th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr class="first odd">
                                                                    <th>Price</th>
                                                                    <td class="value"><input type="radio" class="radio" value="11" id="Price_1" name="ratings[3]"></td>
                                                                    <td class="value"><input type="radio" class="radio" value="12" id="Price_2" name="ratings[3]"></td>
                                                                    <td class="value"><input type="radio" class="radio" value="13" id="Price_3" name="ratings[3]"></td>
                                                                    <td class="value"><input type="radio" class="radio" value="14" id="Price_4" name="ratings[3]"></td>
                                                                    <td class="value last"><input type="radio" class="radio" value="15" id="Price_5" name="ratings[3]"></td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <th>Value</th>
                                                                    <td class="value"><input type="radio" class="radio" value="6" id="Value_1" name="ratings[2]"></td>
                                                                    <td class="value"><input type="radio" class="radio" value="7" id="Value_2" name="ratings[2]"></td>
                                                                    <td class="value"><input type="radio" class="radio" value="8" id="Value_3" name="ratings[2]"></td>
                                                                    <td class="value"><input type="radio" class="radio" value="9" id="Value_4" name="ratings[2]"></td>
                                                                    <td class="value last"><input type="radio" class="radio" value="10" id="Value_5" name="ratings[2]"></td>
                                                                </tr>
                                                                <tr class="last odd">
                                                                    <th>Quality</th>
                                                                    <td class="value"><input type="radio" class="radio" value="1" id="Quality_1" name="ratings[1]"></td>
                                                                    <td class="value"><input type="radio" class="radio" value="2" id="Quality_2" name="ratings[1]"></td>
                                                                    <td class="value"><input type="radio" class="radio" value="3" id="Quality_3" name="ratings[1]"></td>
                                                                    <td class="value"><input type="radio" class="radio" value="4" id="Quality_4" name="ratings[1]"></td>
                                                                    <td class="value last"><input type="radio" class="radio" value="5" id="Quality_5" name="ratings[1]"></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                            <input type="hidden" value="" class="validate-rating" name="validate_rating">
                                                            <div class="review1">
                                                                <ul class="form-list">
                                                                    <li>
                                                                        <label class="required" for="nickname_field">Nickname<em>*</em></label>
                                                                        <div class="input-box">
                                                                            <input type="text" class="input-text" id="nickname_field" name="nickname">
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <label class="required" for="summary_field">Summary<em>*</em></label>
                                                                        <div class="input-box">
                                                                            <input type="text" class="input-text" id="summary_field" name="title">
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="review2">
                                                                <ul>
                                                                    <li>
                                                                        <label class="required " for="review_field">Review<em>*</em></label>
                                                                        <div class="input-box">
                                                                            <textarea rows="3" cols="5" id="review_field" name="detail"></textarea>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                                <div class="buttons-set">
                                                                    <button class="button submit" title="Submit Review" type="submit"><span>Submit Review</span></button>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="box-reviews2">
                                                <h3>Customer Reviews</h3>
                                                <div class="box visible">
                                                    <ul>
                                                        <li>
                                                            <table class="ratings-table">
                                                                <colgroup>
                                                                    <col width="1">
                                                                    <col>
                                                                </colgroup>
                                                                <tbody>
                                                                <tr>
                                                                    <th>Value</th>
                                                                    <td><div class="rating-box">
                                                                            <div class="rating" style="width:100%;"></div>
                                                                        </div></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Quality</th>
                                                                    <td><div class="rating-box">
                                                                            <div class="rating" style="width:100%;"></div>
                                                                        </div></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Price</th>
                                                                    <td><div class="rating-box">
                                                                            <div class="rating" style="width:100%;"></div>
                                                                        </div></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                            <div class="review">
                                                                <h6><a href="#">Excellent</a></h6>
                                                                <small>Review by <span>Leslie Prichard </span>on 1/3/2014 </small>
                                                                <div class="review-txt"> I have purchased shirts from Minimalism a few times and am never disappointed. The quality is excellent and the shipping is amazing. It seems like it's at your front door the minute you get off your pc. I have received my purchases within two days - amazing.</div>
                                                            </div>
                                                        </li>
                                                        <li class="even">
                                                            <table class="ratings-table">
                                                                <colgroup>
                                                                    <col width="1">
                                                                    <col>
                                                                </colgroup>
                                                                <tbody>
                                                                <tr>
                                                                    <th>Value</th>
                                                                    <td><div class="rating-box">
                                                                            <div class="rating" style="width:100%;"></div>
                                                                        </div></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Quality</th>
                                                                    <td><div class="rating-box">
                                                                            <div class="rating" style="width:100%;"></div>
                                                                        </div></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Price</th>
                                                                    <td><div class="rating-box">
                                                                            <div class="rating" style="width:80%;"></div>
                                                                        </div></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                            <div class="review">
                                                                <h6><a href="#/catalog/product/view/id/60/">Amazing</a></h6>
                                                                <small>Review by <span>Sandra Parker</span>on 1/3/2014 </small>
                                                                <div class="review-txt"> Minimalism is the online ! </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <table class="ratings-table">
                                                                <colgroup>
                                                                    <col width="1">
                                                                    <col>
                                                                </colgroup>
                                                                <tbody>
                                                                <tr>
                                                                    <th>Value</th>
                                                                    <td><div class="rating-box">
                                                                            <div class="rating" style="width:100%;"></div>
                                                                        </div></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Quality</th>
                                                                    <td><div class="rating-box">
                                                                            <div class="rating" style="width:100%;"></div>
                                                                        </div></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Price</th>
                                                                    <td><div class="rating-box">
                                                                            <div class="rating" style="width:80%;"></div>
                                                                        </div></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                            <div class="review">
                                                                <h6><a href="#/catalog/product/view/id/59/">Nicely</a></h6>
                                                                <small>Review by <span>Anthony  Lewis</span>on 1/3/2014 </small>
                                                                <div class="review-txt"> Unbeatable service and selection. This store has the best business model I have seen on the net. They are true to their word, and go the extra mile for their customers. I felt like a purchasing partner more than a customer. You have a lifetime client in me. </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="actions"> <a class="button view-all" id="revies-button" href="#"><span><span>View all</span></span></a> </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="product_tabs_custom">
                                        <div class="product-tabs-content-inner clearfix">
                                            <p><strong>Lorem Ipsum</strong><span>&nbsp;is
                        simply dummy text of the printing and typesetting industry. Lorem Ipsum
                        has been the industry's standard dummy text ever since the 1500s, when
                        an unknown printer took a galley of type and scrambled it to make a type
                        specimen book. It has survived not only five centuries, but also the
                        leap into electronic typesetting, remaining essentially unchanged. It
                        was popularised in the 1960s with the release of Letraset sheets
                        containing Lorem Ipsum passages, and more recently with desktop
                        publishing software like Aldus PageMaker including versions of Lorem
                        Ipsum.</span></p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="product_tabs_custom1">
                                        <div class="product-tabs-content-inner clearfix">
                                            <p> <strong> Comfortable </strong><span>&nbsp;preshrunk shirts. Highest Quality Printing.  6.1 oz. 100% preshrunk heavyweight cotton Shoulder-to-shoulder taping Double-needle sleeves and bottom hem

                        Lorem Ipsumis
                        simply dummy text of the printing and typesetting industry. Lorem Ipsum
                        has been the industry's standard dummy text ever since the 1500s, when
                        an unknown printer took a galley of type and scrambled it to make a type
                        specimen book. It has survived not only five centuries, but also the
                        leap into electronic typesetting, remaining essentially unchanged. It
                        was popularised in the 1960s with the release of Letraset sheets
                        containing Lorem Ipsum passages, and more recently with desktop
                        publishing software like Aldus PageMaker including versions of Lorem
                        Ipsum.</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main Container End -->

    <!-- Related Products Slider -->
    <section class="related-pro wow bounceInUp animated">
        <div class="container">
            <div class="slider-items-products">
                <div class="new_title center">
                    <h2>Related Products</h2>
                </div>
                <div id="related-products-slider" class="product-flexslider hidden-buttons">
                    <div class="slider-items slider-width-col4 products-grid">
                        <div class="item">
                            <div class="item-inner">
                                <div class="item-img">
                                    <div class="item-img-info"><a href="#" title="Retis lapen casen" class="product-image"><img src="{{asset('products-images/product.jpg')}}" alt="Retis lapen casen"></a>

                                        <div class="actions">
                                            <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                            <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                                            <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                                            <div class="add_cart">
                                                <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                                            </div>
                                        </div>
                                        <div class="rating">
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:80%"></div>
                                                </div>
                                                <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title"><a href="#" title="Retis lapen casen">Retis lapen casen</a> </div>
                                        <div class="item-content">
                                            <div class="item-price">
                                                <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="item">
                            <div class="item-inner">
                                <div class="item-img">
                                    <div class="item-img-info"><a href="#" title="Retis lapen casen" class="product-image"><img src="{{asset('products-images/product.jpg')}}" alt="Retis lapen casen"></a>

                                        <div class="actions">
                                            <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                            <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                                            <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                                            <div class="add_cart">
                                                <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                                            </div>
                                        </div>
                                        <div class="rating">
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:80%"></div>
                                                </div>
                                                <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title"><a href="#" title="Retis lapen casen">Retis lapen casen</a> </div>
                                        <div class="item-content">
                                            <div class="item-price">
                                                <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="item">
                            <div class="item-inner">
                                <div class="item-img">
                                    <div class="item-img-info"><a href="#" title="Retis lapen casen" class="product-image"><img src="{{asset('products-images/product.jpg')}}" alt="Retis lapen casen"></a>

                                        <div class="actions">
                                            <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                            <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                                            <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                                            <div class="add_cart">
                                                <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                                            </div>
                                        </div>
                                        <div class="rating">
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:80%"></div>
                                                </div>
                                                <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title"><a href="#" title="Retis lapen casen">Retis lapen casen</a> </div>
                                        <div class="item-content">
                                            <div class="item-price">
                                                <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Item -->

                        <div class="item">
                            <div class="item-inner">
                                <div class="item-img">
                                    <div class="item-img-info"><a href="#" title="Retis lapen casen" class="product-image"><img src="{{asset('products-images/product.jpg')}}" alt="Retis lapen casen"></a>

                                        <div class="actions">
                                            <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                            <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                                            <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                                            <div class="add_cart">
                                                <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                                            </div>
                                        </div>
                                        <div class="rating">
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:80%"></div>
                                                </div>
                                                <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title"><a href="#" title="Retis lapen casen">Retis lapen casen</a> </div>
                                        <div class="item-content">
                                            <div class="item-price">
                                                <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="item">
                            <div class="item-inner">
                                <div class="item-img">
                                    <div class="item-img-info"><a href="#" title="Retis lapen casen" class="product-image"><img src="{{asset('products-images/product.jpg')}}" alt="Retis lapen casen"></a>

                                        <div class="actions">
                                            <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                            <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                                            <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                                            <div class="add_cart">
                                                <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                                            </div>
                                        </div>
                                        <div class="rating">
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:80%"></div>
                                                </div>
                                                <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title"><a href="#" title="Retis lapen casen">Retis lapen casen</a> </div>
                                        <div class="item-content">
                                            <div class="item-price">
                                                <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Item -->
                        <div class="item">
                            <div class="item-inner">
                                <div class="item-img">
                                    <div class="item-img-info"><a href="#" title="Retis lapen casen" class="product-image"><img src="{{asset('products-images/product.jpg')}}" alt="Retis lapen casen"></a>

                                        <div class="actions">
                                            <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                            <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                                            <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                                            <div class="add_cart">
                                                <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                                            </div>
                                        </div>
                                        <div class="rating">
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:80%"></div>
                                                </div>
                                                <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title"><a href="#" title="Retis lapen casen">Retis lapen casen</a> </div>
                                        <div class="item-content">
                                            <div class="item-price">
                                                <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Item -->
                        <div class="item">
                            <div class="item-inner">
                                <div class="item-img">
                                    <div class="item-img-info"><a href="#" title="Retis lapen casen" class="product-image"><img src="{{asset('products-images/product.jpg')}}" alt="Retis lapen casen"></a>

                                        <div class="actions">
                                            <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                            <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                                            <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                                            <div class="add_cart">
                                                <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                                            </div>
                                        </div>
                                        <div class="rating">
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:80%"></div>
                                                </div>
                                                <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title"><a href="#" title="Retis lapen casen">Retis lapen casen</a> </div>
                                        <div class="item-content">
                                            <div class="item-price">
                                                <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Item -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related Products Slider End -->

    <!-- Upsell Product Slider -->
    <section class="upsell-pro wow bounceInUp animated">
        <div class="container">
            <div class="slider-items-products">
                <div class="new_title center">
                    <h2>Upsell Products</h2>
                </div>
                <div id="upsell-products-slider" class="product-flexslider hidden-buttons">
                    <div class="slider-items slider-width-col4 products-grid">
                        <div class="item">
                            <div class="item-inner">
                                <div class="item-img">
                                    <div class="item-img-info"><a href="#" title="Retis lapen casen" class="product-image"><img src="{{asset('products-images/product.jpg')}}" alt="Retis lapen casen"></a>

                                        <div class="actions">
                                            <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                            <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                                            <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                                            <div class="add_cart">
                                                <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                                            </div>
                                        </div>
                                        <div class="rating">
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:80%"></div>
                                                </div>
                                                <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title"><a href="#" title="Retis lapen casen">Retis lapen casen</a> </div>
                                        <div class="item-content">
                                            <div class="item-price">
                                                <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="item">
                            <div class="item-inner">
                                <div class="item-img">
                                    <div class="item-img-info"><a href="#" title="Retis lapen casen" class="product-image"><img src="{{asset('products-images/product.jpg')}}" alt="Retis lapen casen"></a>

                                        <div class="actions">
                                            <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                            <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                                            <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                                            <div class="add_cart">
                                                <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                                            </div>
                                        </div>
                                        <div class="rating">
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:80%"></div>
                                                </div>
                                                <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title"><a href="#" title="Retis lapen casen">Retis lapen casen</a> </div>
                                        <div class="item-content">
                                            <div class="item-price">
                                                <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="item">
                            <div class="item-inner">
                                <div class="item-img">
                                    <div class="item-img-info"><a href="#" title="Retis lapen casen" class="product-image"><img src="{{asset('products-images/product.jpg')}}" alt="Retis lapen casen"></a>

                                        <div class="actions">
                                            <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                            <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                                            <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                                            <div class="add_cart">
                                                <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                                            </div>
                                        </div>
                                        <div class="rating">
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:80%"></div>
                                                </div>
                                                <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title"><a href="#" title="Retis lapen casen">Retis lapen casen</a> </div>
                                        <div class="item-content">
                                            <div class="item-price">
                                                <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Item -->

                        <div class="item">
                            <div class="item-inner">
                                <div class="item-img">
                                    <div class="item-img-info"><a href="#" title="Retis lapen casen" class="product-image"><img src="{{asset('products-images/product.jpg')}}" alt="Retis lapen casen"></a>

                                        <div class="actions">
                                            <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                            <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                                            <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                                            <div class="add_cart">
                                                <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                                            </div>
                                        </div>
                                        <div class="rating">
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:80%"></div>
                                                </div>
                                                <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title"><a href="#" title="Retis lapen casen">Retis lapen casen</a> </div>
                                        <div class="item-content">
                                            <div class="item-price">
                                                <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="item">
                            <div class="item-inner">
                                <div class="item-img">
                                    <div class="item-img-info"><a href="#" title="Retis lapen casen" class="product-image"><img src="{{asset('products-images/product.jpg')}}" alt="Retis lapen casen"></a>

                                        <div class="actions">
                                            <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                            <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                                            <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                                            <div class="add_cart">
                                                <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                                            </div>
                                        </div>
                                        <div class="rating">
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:80%"></div>
                                                </div>
                                                <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title"><a href="#" title="Retis lapen casen">Retis lapen casen</a> </div>
                                        <div class="item-content">
                                            <div class="item-price">
                                                <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Item -->
                        <div class="item">
                            <div class="item-inner">
                                <div class="item-img">
                                    <div class="item-img-info"><a href="#" title="Retis lapen casen" class="product-image"><img src="{{asset('products-images/product.jpg')}}" alt="Retis lapen casen"></a>

                                        <div class="actions">
                                            <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                            <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                                            <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                                            <div class="add_cart">
                                                <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                                            </div>
                                        </div>
                                        <div class="rating">
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:80%"></div>
                                                </div>
                                                <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title"><a href="#" title="Retis lapen casen">Retis lapen casen</a> </div>
                                        <div class="item-content">
                                            <div class="item-price">
                                                <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Item -->
                        <div class="item">
                            <div class="item-inner">
                                <div class="item-img">
                                    <div class="item-img-info"><a href="#" title="Retis lapen casen" class="product-image"><img src="{{asset('products-images/product.jpg')}}" alt="Retis lapen casen"></a>

                                        <div class="actions">
                                            <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                            <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                                            <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                                            <div class="add_cart">
                                                <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                                            </div>
                                        </div>
                                        <div class="rating">
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:80%"></div>
                                                </div>
                                                <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title"><a href="#" title="Retis lapen casen">Retis lapen casen</a> </div>
                                        <div class="item-content">
                                            <div class="item-price">
                                                <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Item -->

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Brand logo starts  -->
    <div class="brand-logo wow bounceInUp animated">
        <div class="container">
            <div class="slider-items-products">
                <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
                    <div class="slider-items slider-width-col6">

                        <!-- Item -->
                        <div class="item"><a href="#"><img src="{{asset('images/b-logo3.png')}}" alt="Image"></a> </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="item"><a href="#"><img src="{{asset('images/b-logo2.png')}}" alt="Image"></a> </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="item"><a href="#"><img src="{{asset('images/b-logo1.png')}}" alt="Image"></a> </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="item"><a href="#"><img src="{{asset('images/b-logo4.png')}}" alt="Image"></a> </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="item"><a href="#"><img src="{{asset('images/b-logo5.png')}}" alt="Image"></a> </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="item"><a href="#"><img src="{{asset('images/b-logo6.png')}}" alt="Image"></a> </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="item"><a href="#"><img src="{{asset('images/b-logo1.png')}}" alt="Image"></a> </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="item"><a href="#"><img src="{{asset('images/b-logo4.png')}}" alt="Image"></a> </div>
                        <!-- End Item -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand logo ends  -->

@endsection


