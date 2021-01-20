@extends('layouts.userlayout')

    <link rel="stylesheet" type="text/css" href="{{asset('css/internal.css')}}">

@section('content')
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
                                    <div class="menu_image"><a href="#" title=""><img src="images/menu_image.png" alt="menu_image"></a></div>
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

    <!-- Main Container -->
    <section class="main-container col1-layout">
        <div class="main container">
            <div class="col-main">
                <div class="cart">
                    <div class="page-title">
                        <h1>Shopping Cart</h1>
                    </div>
                    <div class="table-responsive">
                        <form method="post" action="#">
                            <fieldset>
                                <table class="data-table cart-table" id="shopping-cart-table">
                                    <thead>
                                    <tr class="first last">
                                        <th rowspan="1">&nbsp;</th>
                                        <th rowspan="1"><span class="nobr">Product Name</span></th>
                                        <th rowspan="1" class="hidden-phone"></th>
                                        <th rowspan="1" class="hidden-phone"><span class="nobr">Move to Wishlist</span></th>
                                        <th colspan="1" class="a-center"><span class="nobr">Unit Price</span></th>
                                        <th class="a-center " rowspan="1">Qty</th>
                                        <th colspan="1" class="a-center">Subtotal</th>
                                        <th class="a-center" rowspan="1">&nbsp;</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr class="first last">
                                        <td class="a-right last" colspan="50"><button onclick="#" class="button btn-continue" title="Continue Shopping" type="button"><span>Continue Shopping</span></button>
                                            <button class="button btn-update" title="Update Cart" value="update_qty" name="update_cart_action" type="submit"><span>Update Cart</span></button>
                                            <button id="empty_cart_button" class="button" title="Clear Cart" value="empty_cart" name="update_cart_action" type="submit"><span>Clear Cart</span></button></td>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($cart as $c)
                                    <tr class="first odd">
                                        <td class="image"><a class="product-image" title="" href="#"><img width="75" height="75" alt="Women's Crepe Printed Black" src="{{asset('img/'.$c->photo[0]->url)}}"></a></td>
                                        <td><h2 class="product-name"> <a href="#">{{$c->product->name}}</a> </h2></td>
                                        <td class="a-center hidden-table"><a title="Edit item parameters" class="edit-bnt" href="#"></a></td>
                                        <td class="a-center hidden-table"><a class="link-wishlist1 use-ajax" href="#">Move</a></td>
                                        <td class="a-center hidden-table"><span class="cart-price"> <span class="price">${{$c->product->price}}</span> </span></td>
                                        <td class="a-center movewishlist"><input maxlength="12" class="input-text qty" title="Qty" size="4" value="{{$c->count}}" name=""></td>
                                        <td class="a-center movewishlist"><span class="cart-price"> <span class="price">${{$c->product->price*$c->count}}</span> </span></td>
                                        <td class="a-center last"><a class="button remove-item" title="Remove item" href="{{url('/deleteCartProduct/'.$c->product->id)}}"><span><span>Remove item</span></span></a></td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </fieldset>
                        </form>
                    </div>
                    <!-- BEGIN CART COLLATERALS -->
                    <div class="cart-collaterals row">
                        <div class="col-sm-4">
                            <div class="shipping">
                                <h3>Estimate Shipping and Tax</h3>
                                <div class="shipping-form">
                                    <form id="shipping-zip-form" method="post" action="#">
                                        <p>Enter your destination to get a shipping estimate.</p>
                                        <ul class="form-list">
                                            <li>
                                                <label class="required" for="country"><em>*</em>Country</label>
                                                <div class="input-box">
                                                    <select title="Country" class="validate-select" id="country" name="country_id">
                                                        <option value=""> </option>
                                                        <option value="AF">Afghanistan</option>
                                                        <option value="AX">Åland Islands</option>
                                                        <option value="AL">Albania</option>
                                                    </select>
                                                </div>
                                            </li>
                                            <li>
                                                <label for="region_id">State/Province</label>
                                                <div class="input-box">
                                                    <select title="State/Province" name="region_id" id="region_id">
                                                        <option value="">Please select region, state or province</option>
                                                        <option value="1" title="Alabama">Alabama</option>
                                                        <option value="2" title="Alaska">Alaska</option>
                                                    </select>
                                                </div>
                                            </li>
                                            <li>
                                                <label for="postcode">Zip/Postal Code</label>
                                                <div class="input-box">
                                                    <input type="text" name="estimate_postcode" id="postcode" class="input-text validate-postcode">
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="buttons-set11">
                                            <button class="button get-quote" title="Get a Quote" type="button"><span>Get a Quote</span></button>
                                        </div>
                                        <!--buttons-set11-->
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="discount">
                                <h3>Discount Codes</h3>
                                <form method="post" action="#" id="discount-coupon-form">
                                    <label for="coupon_code">Enter your coupon code if you have one.</label>
                                    <input type="hidden" value="0" id="remove-coupone" name="remove">
                                    <input type="text" name="coupon_code" id="coupon_code" class="input-text fullwidth">
                                    <button value="Apply Coupon" class="button coupon " title="Apply Coupon" type="button"><span>Apply Coupon</span></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="totals">
                                <h3>Shopping Cart Total</h3>
                                <div class="inner">
                                    <table class="table shopping-cart-table-total" id="shopping-cart-totals-table">
                                        <colgroup>
                                            <col>
                                            <col width="1">
                                        </colgroup>
                                        <tfoot>
                                        <tr>
                                            <td colspan="1" class="a-left"><strong>Grand Total</strong></td>
                                            <td class="a-right"><strong><span class="price">$77.38</span></strong></td>
                                        </tr>
                                        </tfoot>
                                        <tbody>
                                        <tr>
                                            <td colspan="1" class="a-left"> Subtotal </td>
                                            <td class="a-right"><span class="price">$77.38</span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <ul class="checkout">
                                        <li>
                                            @if(count($cart) > 0)
                                            <button class="button btn-proceed-checkout" title="Proceed to Checkout" type="button"><a href="{{url('/stripe')}}">Proceed to Checkout</a></button>
                                            @endif
                                        </li>
                                        <br>
                                        <li><a title="Checkout with Multiple Addresses" href="#">Checkout with Multiple Addresses</a> </li>
                                        <br>
                                    </ul>
                                </div>
                            </div>
                            <!--inner-->

                        </div>
                    </div>

                    <!--cart-collaterals-->

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
    <!-- Brand logo ends  -->
@endsection

