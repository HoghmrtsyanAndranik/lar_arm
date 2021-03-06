@extends('layouts.userlayout')

<link rel="stylesheet" type="text/css" href="{{asset('css/internal.css')}}">

@section('content')
    <!-- Navbar -->
    <nav>
        <div class="container">
            <!-- Header Logo -->
            <div class="logo"><a title="Datson" href="{{url('/')}}"><img alt="Datson" src="{{asset('images/logo.png')}}"></a></div>
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
    <section class="main-container col1-layout">
        <div class="main container">
            <div class="col-main">
                <div class="cart">
                    <div class="page-title">
{{--                        <h1>Order {{Input::get('id')}}</h1>--}}
                    </div>
                    <div class="table-responsive">
                        <form method="post" action="#">
                            <fieldset>
                                <table class="data-table cart-table" id="shopping-cart-table">
                                    <thead>
                                    <tr class="first last">
                                        <th rowspan="1">&nbsp;</th>
                                        <th rowspan="1"><span class="nobr">Product Name</span></th>
                                        <th colspan="1" class="a-center"><span class="nobr">Unit Current Price</span></th>
                                        <th class="a-center " rowspan="1">Qty</th>
                                        <th colspan="1" class="a-center">Subtotal</th>
                                        <th class="a-center" rowspan="1">Your rate</th>
                                        <th class="a-center feedback" rowspan="1">Your Feedback</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($order as $o)
                                        <tr class="first odd">
                                            <td class="image"><a class="product-image" title="" href="#"><img width="75" height="75" alt="Women's Crepe Printed Black" src="{{url('img/'.$o->product->photo[0]->url)}}"></a></td>
                                            <td><h2 class="product-name"> <a href="#">{{$o->product->name}}</a> </h2></td>
                                            <td class="a-center hidden-table"><span class="cart-price"> <span class="price">${{$o->product->price}}</span> </span></td>
                                            <td class="a-center movewishlist"><input maxlength="12" class="input-text qty" title="Qty" size="4" value="{{$o->count}}" name=""></td>
                                            <td class="a-center movewishlist"><span class="cart-price"> <span class="price">${{$o->order->total}}</span> </span></td>
                                            <td id="stars">
                                                @for($i=1; $i<= 5; $i++)
                                                    @if($o->stars !== 0)
                                                        @if($i <= $o->stars)
                                                            <span class="fa fa-star yellow_bg stars"></span>
                                                        @elseif($i > $o->stars)
                                                            <span class="fa fa-star stars"></span>
                                                        @endif
                                                    @else
                                                        <span class="fa fa-star evStars stars" data-id='["{{$i}}", "{{$o->id}}"]'></span>
                                                    @endif
                                                @endfor
                                            </td>
                                            @if($o->feedback)
                                            <td><h3 class="product-name"> <a href="#">{{$o->feedback}}</a> </h3></td>
                                            @else
                                            <td class="feedback"><textarea name="" id="" cols="30" rows="3" placeholder="Write your feedback here!"></textarea>
                                            <button type="button" class="sendFeedback" data-id="{{$o->id}}">Send</button></td>
                                            @endif
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </fieldset>
                        </form>
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

