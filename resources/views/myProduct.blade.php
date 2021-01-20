@extends('layouts.userlayout')

    @section('title','My Products')
    @section('content')

    <!-- CSS Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}" media="all">
    <link rel="stylesheet" type="text/css" href="{{asset('css/simple-line-icons.css')}}" media="all">
    <link rel="stylesheet" type="text/css" href="{{asset('css/revslider.css')}}" >
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.bxslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.mobile-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" media="all">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,600,600italic,400italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

    <!-- Navbar -->
    <nav>
        <div class="container">
            <!-- Header Logo -->
            <div class="logo"><a title="Datson" href="index.html"><img alt="Datson" src="images/logo.png"></a></div>
            <!-- End Header Logo -->

            <div class="mm-toggle-wrap">
                <div class="mm-toggle"><i class="fa fa-reorder"></i><span class="mm-label">Menu</span> </div>
            </div>

            <ul class="nav hidden-xs menu-item menu-item-left">
                <li class="level0 parent drop-menu active"><a href="index.html"><span>Home</span></a>

                </li>
                <li class="level0 parent drop-menu"><a href="#"><span>Pages</span> </a>
                    <ul class="level1" style="display: none;">
                        <li class="level1 first"><a href="{{url('/product')}}"><span>Grid</span></a></li>
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
                <li class="mega-menu"><a class="level-top" href="{{url('/product')}}"><span>Furniture</span></a>

                </li>
                <li class="level0 nav-8 level-top"><a href="{{url('/product')}}" class="level-top"><span>Kids</span></a></li>

            </ul>



        </div>
    </nav>
    <!-- end nav -->

    <!-- Main Container -->

    <section class="main-container col2-left-layout bounceInUp animated">
        <div class="container">

            <div class="row d-flex justify-content-center">
                <div class="col-main col-sm-11">
                    <article class="col-main">
                        <div class="page-title">
                            <h1>My products</h1>
                        </div>

                        <div class="toolbar">
                            <div class="sorter">
                                <div class="view-mode"> <a href="{{url('/product')}}" title="Grid" class="button button-grid">&nbsp;</a>&nbsp; <span title="List" class="button button-active button-list">&nbsp;</span>&nbsp; </div>
                            </div>
                            <div id="sort-by">
                                <label class="left">Sort By: </label>
                                <ul>
                                    <li><a href="#">Position<span class="right-arrow"></span></a>
                                        <ul>
                                            <li><a href="#">Name</a></li>
                                            <li><a href="#">Price</a></li>
                                            <li><a href="#">Position</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <a class="button-asc left" href="#" title="Set Descending Direction"><span class="top_arrow"></span></a> </div>
                            <div class="pager">
                                <div id="limiter">
                                    <label>View: </label>
                                    <ul>
                                        <li><a href="#">15<span class="right-arrow"></span></a>
                                            <ul>
                                                <li><a href="#">20</a></li>
                                                <li><a href="#">30</a></li>
                                                <li><a href="#">35</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pages">
                                    <label>Page:</label>
                                    <ul class="pagination">
                                        <li><a href="#">&laquo;</a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">&raquo;</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="category-products">
                            <ol class="products-list" id="products-list">

{{--                                <li class="item first">--}}
{{--                                    <div class="product-image"> <a href="#" title="HTC Rhyme Sense"> <img class="small-image" src="products-images/product.jpg" alt="HTC Rhyme Sense"> </a> </div>--}}
{{--                                    <div class="product-shop">--}}
{{--                                        <h2 class="product-name"><a href="#/htc-rhyme-sense.html" title="HTC Rhyme Sense">HTC Rhyme Sense</a></h2>--}}
{{--                                        <div class="ratings">--}}
{{--                                            <div class="rating-box">--}}
{{--                                                <div style="width:50%" class="rating"></div>--}}
{{--                                            </div>--}}
{{--                                            <p class="rating-links"> <a href="#/review/product/list/id/167/category/35/">1 Review(s)</a> <span class="separator"></p>--}}
{{--                                        </div>--}}
{{--                                        <div class="desc std">--}}
{{--                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla... <a class="link-learn" title="" href="#">Learn More</a> </p>--}}
{{--                                        </div>--}}
{{--                                        <div class="price-box">--}}

{{--                                            <p class="special-price"> <span class="price-label"></span> <span class="price"> $222.99 </span> </p> <p class="old-price"> <span class="price-label"></span> <span class="price"> $442.99 </span> </p>--}}
{{--                                        </div>--}}
{{--                                        <div class="actions">--}}
{{--                                            <button class="button btn-cart ajx-cart" title="Edit" type="button"><span>Edit</span></button>--}}
{{--                                            <span class="add-to-links"> <a title="Delete" class="button link-wishlist" href="#"><span>Delete</span></a> <a title="See statistics" class="button link-compare" href="#"><span>See statistics</span></a> </span> </div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
                                @foreach($products as $p)
                                    <li class="item first">
                                        <div class="product-image"> <a href="{{url('myproduct/item/'.$p->id)}}" title="HTC Rhyme Sense"> <img class="small-image" src="products-images/product.jpg" alt="HTC Rhyme Sense"> </a> </div>
                                        <div class="product-shop">
                                            <h2 class="product-name"><a href="{{url('myproduct/item/').$p->id}}" title="HTC Rhyme Sense">HTC Rhyme Sense</a></h2>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div style="width:50%" class="rating"></div>
                                                </div>
                                                <p class="rating-links"> <a href="#/review/product/list/id/167/category/35/">1 Review(s)</a> <span class="separator"></p>
                                            </div>
                                            <div class="desc std">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla... <a class="link-learn" title="" href="#">Learn More</a> </p>
                                            </div>
                                            <div class="price-box">

                                                <p class="special-price"> <span class="price-label"></span> <span class="price"> $222.99 </span> </p> <p class="old-price"> <span class="price-label"></span> <span class="price"> $442.99 </span> </p>
                                            </div>
                                            <div class="actions">
                                                <button class="button btn-cart ajx-cart" title="open" type="button"><span>Open</span></button>
                                                <span class="add-to-links"> <a title="Delete" class="button link-wishlist" href="#"><span>Delete</span></a> <a title="See statistics" class="button link-compare" href="#"><span>See statistics</span></a> </span> </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ol>
                        </div>
                    </article>
                    <!--	///*///======    End article  ========= //*/// -->
                </div>
            </div>
        </div>
    </section>
    <!-- Main Container End -->

    <div class="brand-logo wow bounceInUp animated">
        <div class="container">

            <div class="slider-items-products">
                <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
                    <div class="slider-items slider-width-col6">

                        <!-- Item -->
                        <div class="item"><a href="#"><img src="images/b-logo3.png" alt="Image"></a> </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="item"><a href="#"><img src="images/b-logo2.png" alt="Image"></a> </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="item"><a href="#"><img src="images/b-logo1.png" alt="Image"></a> </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="item"><a href="#"><img src="images/b-logo4.png" alt="Image"></a> </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="item"><a href="#"><img src="images/b-logo5.png" alt="Image"></a> </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="item"><a href="#"><img src="images/b-logo6.png" alt="Image"></a> </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="item"><a href="#"><img src="images/b-logo1.png" alt="Image"></a> </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="item"><a href="#"><img src="images/b-logo4.png" alt="Image"></a> </div>
                        <!-- End Item -->

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div id="mobile-menu">
    <ul>
        <li>
            <div class="mm-search">
                <form id="search_mob" name="search">
                    <div class="input-group">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="fa fa-search"></i> </button>
                        </div>
                        <input type="text" class="form-control simple" placeholder="Search ..." name="srch-term" id="srch-term">
                    </div>
                </form>
            </div>
        </li>
        <li>
            <div class="home"><a href="#"><i class="icon-home"></i>Home</a> </div>
        </li>
        <li><a href="#">Pages</a>
            <ul>
                <li><a href="{{url('/product')}}">Grid</a> </li>
                <li> <a href="list.html">List</a> </li>
                <li> <a href="product_detail.html">Product Detail</a> </li>
                <li> <a href="shopping_cart.html">Shopping Cart</a> </li>
                <li><a href="checkout.html">Checkout</a>
                    <ul>
                        <li><a href="checkout_method.html">Checkout Method</a> </li>
                        <li><a href="checkout_billing_info.html">Checkout Billing Info</a> </li>
                    </ul>
                </li>
                <li> <a href="wishlist.html">Wishlist</a> </li>
                <li> <a href="dashboard.html">Dashboard</a> </li>
                <li> <a href="multiple_addresses.html">Multiple Addresses</a> </li>
                <li> <a href="about_us.html">About us</a> </li>
                <li><a href="blog.html">Blog</a>
                    <ul>
                        <li><a href="blog-detail.html">Blog Detail</a> </li>
                    </ul>
                </li>
                <li><a href="contact_us.html">Contact us</a> </li>
                <li><a href="404error.html">404 Error Page</a> </li>
            </ul>
        </li>
        <li><a href="#">Women</a>
            <ul>
                <li> <a href="#" class="">Stylish Bag</a>
                    <ul>
                        <li> <a href="#" class="">Clutch Handbags</a> </li>
                        <li> <a href="#l" class="">Diaper Bags</a> </li>
                        <li> <a href="#" class="">Bags</a> </li>
                        <li> <a href="#" class="">Hobo handbags</a> </li>
                    </ul>
                </li>
                <li> <a href="#">Material Bag</a>
                    <ul>
                        <li> <a href="#">Beaded Handbags</a> </li>
                        <li> <a href="#">Fabric Handbags</a> </li>
                        <li> <a href="#">Handbags</a> </li>
                        <li> <a href="#">Leather Handbags</a> </li>
                    </ul>
                </li>
                <li> <a href="#">Shoes</a>
                    <ul>
                        <li> <a href="#">Flat Shoes</a> </li>
                        <li> <a href="#">Flat Sandals</a> </li>
                        <li> <a href="#">Boots</a> </li>
                        <li> <a href="#">Heels</a> </li>
                    </ul>
                </li>
                <li> <a href="#">Jwellery</a>
                    <ul>
                        <li> <a href="#">Bracelets</a> </li>
                        <li> <a href="#">Necklaces &amp; Pendent</a> </li>
                        <li> <a href="#l">Pendants</a> </li>
                        <li> <a href="#">Pins &amp; Brooches</a> </li>
                    </ul>
                </li>
                <li> <a href="#">Dresses</a>
                    <ul>
                        <li> <a href="#">Casual Dresses</a> </li>
                        <li> <a href="#">Evening</a> </li>
                        <li> <a href="#">Designer</a> </li>
                        <li> <a href="#">Party</a> </li>
                    </ul>
                </li>
                <li> <a href="#">Swimwear</a>
                    <ul>
                        <li> <a href="#">Swimsuits</a> </li>
                        <li> <a href="#">Beach Clothing</a> </li>
                        <li> <a href="#">Clothing</a> </li>
                        <li> <a href="#">Bikinis</a> </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="#">Men</a>
            <ul>
                <li> <a href="#" class="">Shoes</a>
                    <ul class="level1">
                        <li class="level2 nav-6-1-1"><a href="#">Sport Shoes</a> </li>
                        <li class="level2 nav-6-1-1"><a href="#">Casual Shoes</a> </li>
                        <li class="level2 nav-6-1-1"><a href="#">Leather Shoes</a> </li>
                        <li class="level2 nav-6-1-1"><a href="#">canvas shoes</a> </li>
                    </ul>
                </li>
                <li> <a href="#">Dresses</a>
                    <ul class="level1">
                        <li class="level2 nav-6-1-1"><a href="#">Casual Dresses</a> </li>
                        <li class="level2 nav-6-1-1"><a href="#">Evening</a> </li>
                        <li class="level2 nav-6-1-1"><a href="#">Designer</a> </li>
                        <li class="level2 nav-6-1-1"><a href="#">Party</a> </li>
                    </ul>
                </li>
                <li> <a href="#">Jackets</a>
                    <ul class="level1">
                        <li class="level2 nav-6-1-1"><a href="#">Coats</a> </li>
                        <li class="level2 nav-6-1-1"><a href="#">Formal Jackets</a> </li>
                        <li class="level2 nav-6-1-1"><a href="#">Leather Jackets</a> </li>
                        <li class="level2 nav-6-1-1"><a href="#">Blazers</a> </li>
                    </ul>
                </li>
                <li> <a href="#">Watches</a>
                    <ul class="level1">
                        <li class="level2 nav-6-1-1"><a href="#">Fasttrack</a> </li>
                        <li class="level2 nav-6-1-1"><a href="#">Casio</a> </li>
                        <li class="level2 nav-6-1-1"><a href="#">Titan</a> </li>
                        <li class="level2 nav-6-1-1"><a href="#">Tommy-Hilfiger</a> </li>
                    </ul>
                </li>
                <li> <a href="#">Sunglasses</a>
                    <ul class="level1">
                        <li class="level2 nav-6-1-1"><a href="#">Ray Ban</a> </li>
                        <li class="level2 nav-6-1-1"><a href="#">Fasttrack</a> </li>
                        <li class="level2 nav-6-1-1"><a href="#">Police</a> </li>
                        <li class="level2 nav-6-1-1"><a href="#">Oakley</a> </li>
                    </ul>
                </li>
                <li> <a href="#">Accesories</a>
                    <ul class="level1">
                        <li class="level2 nav-6-1-1"><a href="#">Backpacks</a> </li>
                        <li class="level2 nav-6-1-1"><a href="#">Wallets</a> </li>
                        <li class="level2 nav-6-1-1"><a href="#">Laptops Bags</a> </li>
                        <li class="level2 nav-6-1-1"><a href="#">Belts</a> </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="#">Electronics</a>
            <ul>
                <li> <a href="#"><span>Mobiles</span></a>
                    <ul>
                        <li> <a href="#"><span>Samsung</span></a> </li>
                        <li> <a href="#"><span>Nokia</span></a> </li>
                        <li> <a href="#"><span>IPhone</span></a> </li>
                        <li> <a href="#"><span>Sony</span></a> </li>
                    </ul>
                </li>
                <li> <a href="#" class=""><span>Accesories</span></a>
                    <ul>
                        <li> <a href="#"><span>Mobile Memory Cards</span></a> </li>
                        <li> <a href="#"><span>Cases &amp; Covers</span></a> </li>
                        <li> <a href="#"><span>Mobile Headphones</span></a> </li>
                        <li> <a href="#"><span>Bluetooth Headsets</span></a> </li>
                    </ul>
                </li>
                <li> <a href="#"><span>Cameras</span></a>
                    <ul>
                        <li> <a href="#"><span>Camcorders</span></a> </li>
                        <li> <a href="#"><span>Point &amp; Shoot</span></a> </li>
                        <li> <a href="#"><span>Digital SLR</span></a> </li>
                        <li> <a href="#"><span>Camera Accesories</span></a> </li>
                    </ul>
                </li>
                <li> <a href="#"><span>Audio &amp; Video</span></a>
                    <ul>
                        <li> <a href="#"><span>MP3 Players</span></a> </li>
                        <li> <a href="#"><span>IPods</span></a> </li>
                        <li> <a href="#"><span>Speakers</span></a> </li>
                        <li> <a href="#"><span>Video Players</span></a> </li>
                    </ul>
                </li>
                <li> <a href="#"><span>Computer</span></a>
                    <ul>
                        <li> <a href="#"><span>External Hard Disk</span></a> </li>
                        <li> <a href="#"><span>Pendrives</span></a> </li>
                        <li> <a href="#"><span>Headphones</span></a> </li>
                        <li> <a href="#"><span>PC Components</span></a> </li>
                    </ul>
                </li>
                <li> <a href="#"><span>Appliances</span></a>
                    <ul>
                        <li> <a href="#"><span>Vaccum Cleaners</span></a> </li>
                        <li> <a href="#"><span>Indoor Lighting</span></a> </li>
                        <li> <a href="#"><span>Kitchen Tools</span></a> </li>
                        <li> <a href="#"><span>Water Purifier</span></a> </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="#">Furniture</a> </li>
        <li><a href="#">Kids</a> </li>
        <li><a href="contact-us.html">Contact Us</a> </li>
    </ul>
    <div class="dropdown block-language-wrapper">
        <ul>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="images/english.png" alt="language"> English </a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="images/francais.png" alt="language"> French </a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="images/german.png" alt="language"> German </a></li>
        </ul>
    </div>
    <div class="dropdown block-currency-wrapper">
        <ul>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> $ - Dollar </a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> £ - Pound </a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> € - Euro </a></li>
        </ul>
    </div>
</div>

<!-- JavaScript -->
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/parallax.js')}}"></script>
<script type="text/javascript" src="{{asset('js/common.js')}}"></script>
<script type="text/javascript" src="{{asset('js/slider.js')}}"></script>
<script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.mobile-menu.min.js')}}"></script>

    @endsection
