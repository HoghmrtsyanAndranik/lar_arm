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
                                @php


                                foreach($products as $p){
                                $id=$p->id;
                               
                                $open_url=url("myproduct/item/{$id}");
                                $delete_url=url("deleteProduct/{$id}");
                                @endphp
                                    <li class="item first">
                                        <div class="product-image"> <a href="{{url('myproduct/item/'.$p->id)}}" title="HTC Rhyme Sense"> <img class="small-image" src="products-images/product.jpg" alt="HTC Rhyme Sense"> </a> </div>
                                        <div class="product-shop">
                                            <h2 class="product-name"><a href="{{url('myproduct/item/').$p->id}}" title="HTC Rhyme Sense"><?=$p->name?></a></h2>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div style="width:50%" class="rating"></div>
                                                </div>
                                                <p class="rating-links"> <a href="#/review/product/list/id/167/category/35/">1 Review(s)</a> <span class="separator"></p>
                                            </div>
                                            <div class="desc std">
                                                <p><?=$p->description?><a class="link-learn" title="" href="#">Learn More</a> </p>
                                            </div>
                                            <div class="price-box">

                                                <p class="special-price"> <span class="price-label"></span> <span class="price"> <?='$'.$p->price?></span> </p> <p class="old-price"> <span class="price-label"></span> <span class="price"> $442.99 </span> </p>
                                            </div>
                                            <div class="actions">
                                                <a href="{{$open_url}}"><button class="button btn-cart ajx-cart" title="open" type="button"><span>Open</span></button></a>
                                                <span class="add-to-links"> <a title="Delete" class="button link-wishlist" href="{{$delete_url}}"><span>Delete</span></a> <a title="See statistics" class="button link-compare" href="#"><span>See statistics</span></a> </span> </div>
                                        </div>
                                    </li>
                                @php    
                                }
                                @endphp
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
