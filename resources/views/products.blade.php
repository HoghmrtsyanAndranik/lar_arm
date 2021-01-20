@extends('layouts.userlayout')

@section('title','Products')
@section('content')

    <!-- Navbar -->
 
    <!-- end nav -->
    <!-- Breadcrumbs -->
    <!-- <div class="breadcrumbs">
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
    </div> -->
    <!-- Breadcrumbs End -->
    <!-- Main Container -->
    <section class="main-container col2-left-layout bounceInUp animated">
        <div class="container">
                
 <ul class="products-list" id="products-list">
    @foreach($products as $p)
          <li class="item even">
            <div class="product-image"> <a href="#" title="HTC Rhyme Sense"> <img class="small-image" src="products-images/product.jpg" alt="HTC Rhyme Sense"> </a> </div>
            <div class="product-shop">
              <h2 class="product-name"><a href="#/htc-rhyme-sense.html" title="{{ $p->name}}">{{ $p->name}}</a></h2>
              <div class="ratings">
                <div class="rating-box">
                  <div style="width:50%" class="rating"></div>
                </div>
                <p class="rating-links"> <a href="#/review/product/list/id/167/category/35/">1 Review(s)</a> <span class="separator">|</span> <a href="#review-form">Add Your Review</a> </p>
              </div>
              <div class="desc std">
                <p>{{$p->description}}<a class="link-learn" title="" href="#">Learn More</a> </p>
              </div>
              <div class="price-box">
               
                <p class="special-price"> <span class="price-label"></span> <span class="price"> {{$p->price}} </span> </p> <p class="old-price"> <span class="price-label"></span> <span class="price"> $442.99 </span> </p>
              </div>
              <div class="actions">
                <button class="button btn-cart add-to-cart" title="Add to Cart" type="button"data-id="{{$p->id}}"><span>Add to Cart</span></button>
                <button class="button btn-cart wishlist" title="Add to Wishlist" type="button"data-id="{{$p->id}}"><span>Add to Wishlist</span></button>

              <!--   <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="#"><span class="wishlist" data-id="{{$p->id}}">Add to Wishlist</span></a> -->
               <span class="add-to-links"><a title="Add to Compare" class="button link-compare" href="#"><span>Add to Compare</span></a> </span>
               </div>
            </div>
          </li>



         <!--  <li class="item even">
            <div class="product-image"> <a href="#/microsoft-natural-ergonomic-keyboard-4000.html" title="Microsoft Natural Keyboard"> <img class="small-image" src="products-images/product.jpg" alt="Microsoft Natural Keyboard"> </a> </div>
            <div class="product-shop">
              <h2 class="product-name"><a href="#/microsoft-natural-ergonomic-keyboard-4000.html" title="Microsoft Natural Keyboard">Microsoft Natural Keyboard</a></h2>
              <div class="desc std">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla... <a class="link-learn" title="" href="#">Learn More</a></p>
              </div>
              <div class="price-box"> <span class="regular-price"> <span class="price">$99.99</span> </span> </div>
              <div class="actions">
                <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="#"><span>Add to Compare</span></a> </span> </div>
            </div>
          </li> -->
          @endforeach
            </ul>
        </div>
 



                            <!-- <ul class="products-grid">

                                @foreach($products as $p)
                                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                                    <div class="item-inner">
                                        <div class="item-img">
                                            <div class="item-img-info"><a href="{{url('product/item'.$p->id)}}" title="" class="
                                                <div class="new-label new-top-left">New</div>
                                                <div class="actions">
                                                    <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                                    <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist" class="add-to-wishlist" data-id="{{$p->id}}"><span>Add to Wishlist</span></a></div>
                                                    <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                                                    <div class="add_cart">
                                                        <button class="button btn-cart add-to-cart" data-id="{{$p->id}}" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                                                    </div>
                                                </div>
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">

                                                            <div class="rating" style="width:25%"></div>
                                                        </div>
                                                        <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title"><a href="#" title="{{$p->name}}">{{$p->name}}</a> </div>
                                                <div class="item-content">
                                                    <div class="item-price">
                                                        <div class="price-box"><span class="regular-price"><span class="price">${{$p->price}}</span> </span> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach


                            </ul> -->
                        </div>
                    </article>
                    <!--	///*///======    End article  ========= //*/// -->
                </div>
                <div class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9">
                    <aside class="col-left sidebar">
                        <div class="side-nav-categories">
                            <div class="block-title"> Categories </div>
                            <!--block-title-->
                            <!-- BEGIN BOX-CATEGORY -->
                            <div class="box-content box-category">
                                <ul>
                                    <li> <a class="active" href="#/women.html">Women</a> <span class="subDropdown minus"></span>
                                        <ul class="level0_415" style="display:block">
                                            <li> <a href="#/women/tops.html"> Handbags </a> <span class="subDropdown plus"></span>
                                                <ul class="level1" style="display:none">
                                                    <li> <a href="#/women/tops/evening-tops.html"> Clutch Handbags </a> </li>
                                                    <li> <a href="#/women/tops/shirts-blouses.html"> Diaper Bags </a> </li>
                                                    <li> <a href="#/women/tops/tunics.html"> Back Bags </a> </li>
                                                    <li> <a href="#/women/tops/vests.html"> Hobo handbags </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="#/women/bags.html"> Jackets </a> <span class="subDropdown plus"></span>
                                                <ul class="level1" style="display:none">
                                                    <li> <a href="#/women/bags/bags.html"> Bags </a> </li>
                                                    <li> <a href="#/women/bags/designer-handbags.html"> Designer Handbags </a> </li>
                                                    <li> <a href="#/women/bags/purses.html"> Purses </a> </li>
                                                    <li> <a href="#/women/bags/shoulder-bags.html"> Shoulder Bags </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="#/women/shoes.html"> Shoes </a> <span class="subDropdown plus"></span>
                                                <ul class="level1" style="display:none">
                                                    <li> <a href="#/women/shoes/flat-shoes.html"> Flat Shoes </a> </li>
                                                    <li> <a href="#/women/shoes/flat-sandals.html"> Flat Sandals </a> </li>
                                                    <li> <a href="#/women/shoes/boots.html"> Boots </a> </li>
                                                    <li> <a href="#/women/shoes/heels.html"> Heels </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="#/women/Jewellery.html"> Jewellery </a>
                                                <ul class="level1" style="display:none">
                                                    <li> <a href="#/women/Jewellery/bracelets.html"> Bracelets </a> </li>
                                                    <li> <a href="#/women/Jewellery/necklaces-pendants.html"> Necklaces &amp; Pendants </a> </li>
                                                    <li> <a href="#/women/Jewellery/pins-brooches.html"> Pins &amp; Brooches </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="#/women/dresses.html"> Dresses </a> <span class="subDropdown plus"></span>
                                                <ul class="level1" style="display:none">
                                                    <li> <a href="#/women/dresses/casual-dresses.html"> Casual Dresses </a> </li>
                                                    <li> <a href="#/women/dresses/evening.html"> Evening </a> </li>
                                                    <li> <a href="#/women/dresses/designer.html"> Designer </a> </li>
                                                    <li> <a href="#/women/dresses/party.html"> Party </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>


                                            <!--level1-->
                                            <li> <a href="#/women/swimwear.html"> Swimwear </a> <span class="subDropdown plus"></span>
                                                <ul class="level1" style="display:none">
                                                    <li> <a href="#/women/swimwear/swimsuits.html"> Swimsuits </a> </li>
                                                    <li> <a href="#/women/swimwear/beach-clothing.html"> Beach Clothing </a> </li>
                                                    <li> <a href="#/women/swimwear/bikinis.html"> Bikinis </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                        </ul>
                                        <!--level0-->
                                    </li>
                                    <!--level 0-->
                                    <li> <a href="#/men.html">Men</a> <span class="subDropdown plus"></span>
                                        <ul class="level0_455" style="display:none">
                                            <li> <a href="#/men/shoes.html"> Shoes </a> <span class="subDropdown plus"></span>
                                                <ul class="level1" style="display:none">
                                                    <li> <a href="#/men/shoes/flat-shoes.html"> Flat Shoes </a> </li>
                                                    <li> <a href="#/men/shoes/boots.html"> Boots </a> </li>
                                                    <li> <a href="#/men/shoes/heels.html"> Heels </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="#/men/Jewellery.html"> Jewellery </a> <span class="subDropdown plus"></span>
                                                <ul class="level1" style="display:none">
                                                    <li> <a href="#/men/Jewellery/bracelets.html"> Bracelets </a> </li>
                                                    <li> <a href="#/men/Jewellery/necklaces-pendants.html"> Necklaces &amp; Pendants </a> </li>
                                                    <li> <a href="#/men/Jewellery/pins-brooches.html"> Pins &amp; Brooches </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="#/men/dresses.html"> Dresses </a> <span class="subDropdown plus"></span>
                                                <ul class="level1" style="display:none">
                                                    <li> <a href="#/men/dresses/casual-dresses.html"> Casual Dresses </a> </li>
                                                    <li> <a href="#/men/dresses/evening.html"> Evening </a> </li>
                                                    <li> <a href="#/men/dresses/designer.html"> Designer </a> </li>
                                                    <li> <a href="#/men/dresses/party.html"> Party </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="#/men/jackets.html"> Jackets </a> <span class="subDropdown plus"></span>
                                                <ul class="level1" style="display:none">
                                                    <li> <a href="#/men/jackets/coats.html"> Coats </a> </li>
                                                    <li> <a href="#/men/jackets/jackets.html"> Jackets </a> </li>
                                                    <li> <a href="#/men/jackets/leather-jackets.html"> Leather Jackets </a> </li>
                                                    <li> <a href="#/men/jackets/blazers.html"> Blazers </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="#/men/swimwear.html"> Swimwear </a> <span class="subDropdown plus"></span>
                                                <ul class="level1" style="display:none">
                                                    <li> <a href="#/men/swimwear/swimsuits.html"> Swimsuits </a> </li>
                                                    <li> <a href="#/men/swimwear/beach-clothing.html"> Beach Clothing </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                        </ul>
                                        <!--level0-->
                                    </li>
                                    <!--level 0-->
                                    <li> <a href="#.html">Electronics</a> <span class="subDropdown plus"></span>
                                        <ul class="level0_482" style="display:none">
                                            <li> <a href="#/smartphones.html"> Smartphones </a> <span class="subDropdown plus"></span>
                                                <ul class="level1" style="display:none">
                                                    <li> <a href="#/smartphones/samsung.html"> Samsung </a> </li>
                                                    <li> <a href="#/smartphones/apple.html"> Apple </a> </li>
                                                    <li> <a href="#/smartphones/blackberry.html"> Blackberry </a> </li>
                                                    <li> <a href="#/smartphones/nokia.html"> Nokia </a> </li>
                                                    <li> <a href="#/smartphones/htc.html"> HTC </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="#/cameras.html"> Cameras </a> <span class="subDropdown plus"></span>
                                                <ul class="level1" style="display:none">
                                                    <li> <a href="#/cameras/digital-cameras.html"> Digital Cameras </a> </li>
                                                    <li> <a href="#/cameras/camcorders.html"> Camcorders </a> </li>
                                                    <li> <a href="#/cameras/lenses.html"> Lenses </a> </li>
                                                    <li> <a href="#/cameras/filters.html"> Filters </a> </li>
                                                    <li> <a href="#/cameras/tripod.html"> Tripod </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="#/accesories.html"> Accesories </a> <span class="subDropdown plus"></span>
                                                <ul class="level1" style="display:none">
                                                    <li> <a href="#/accesories/headsets.html"> HeadSets </a> </li>
                                                    <li> <a href="#/accesories/batteries.html"> Batteries </a> </li>
                                                    <li> <a href="#/accesories/screen-protectors.html"> Screen Protectors </a> </li>
                                                    <li> <a href="#/accesories/memory-cards.html"> Memory Cards </a> </li>
                                                    <li> <a href="#/accesories/cases.html"> Cases </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                        </ul>
                                        <!--level0-->
                                    </li>
                                    <!--level 0-->
                                    <li> <a href="#/digital.html">Furniture</a> </li>
                                    <!--level 0-->
                                    <li class="last"> <a href="#/fashion.html">Kids</a> </li>
                                    <!--level 0-->
                                </ul>
                            </div>
                            <!--box-content box-category-->
                        </div>
                        <div class="block block-layered-nav">
                            <div class="block-title">Shop By</div>
                            <div class="block-content">
                                <p class="block-subtitle">Shopping Options</p>
                                <dl id="narrow-by-list">
                                    <dt class="odd">Price</dt>
                                    <dd class="odd">
                                        <ol>
                                            <li> <a href="#"><span class="price">$0.00</span> - <span class="price">$199.99</span></a> (6) </li>
                                            <li> <a href="#"><span class="price">$200.00</span> and above</a> (6) </li>
                                        </ol>
                                    </dd>
                                    <dt class="even">Manufacturer</dt>
                                    <dd class="even">
                                        <ol>
                                            <li> <a href="#">Superb</a> (9) </li>
                                            <li> <a href="#">Nexus</a> (4) </li>
                                            <li> <a href="#">Xperia</a> (1) </li>
                                        </ol>
                                    </dd>
                                    <dt class="odd">Color</dt>
                                    <dd class="odd">
                                        <ol>
                                            <li> <a href="#">Green</a> (1) </li>
                                            <li> <a href="#">White</a> (5) </li>
                                            <li> <a href="#">Black</a> (5) </li>
                                            <li> <a href="#">Gray</a> (4) </li>
                                            <li> <a href="#">Dark Gray</a> (3) </li>
                                            <li> <a href="#">Blue</a> (1) </li>
                                        </ol>
                                    </dd>
                                    <dt class="last even">Size</dt>
                                    <dd class="last even">
                                        <ol>
                                            <li> <a href="#">S</a> (6) </li>
                                            <li> <a href="#">M</a> (6) </li>
                                            <li> <a href="#">L</a> (4) </li>
                                            <li> <a href="#">XL</a> (4) </li>
                                        </ol>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <div class="block block-cart">
                            <div class="block-title ">My Cart</div>
                            <div class="block-content">
                                <div class="summary">
                                    <p class="amount">There are <a href="#">2 items</a> in your cart.</p>
                                    <p class="subtotal"> <span class="label">Cart Subtotal:</span> <span class="price">$49.99</span> </p>
                                </div>
                                <div class="ajax-checkout">
                                    <button class="button button-checkout" title="Submit" type="submit"><span>Checkout</span></button>
                                </div>
                                <p class="block-subtitle">Recently added item(s) </p>
                                <ul>
                                    <li class="item"> <a href="#" title="Retis lapen casen" class="product-image"><img src="products-images/product.jpg" alt="Fisher-Price Bubble Mower"></a>
                                        <div class="product-details">
                                            <div class="access"> <a href="#" title="Remove This Item" class="btn-remove1"> <span class="icon"></span> Remove </a> </div>
                                            <strong>1</strong> x <span class="price">$19.99</span>
                                            <p class="product-name"> <a href="#">Office Colored Ladies Shirt</a> </p>
                                        </div>
                                    </li>
                                    <li class="item last"> <a href="#" title="Retis lapen casen" class="product-image"><img src="products-images/product.jpg" alt="Prince Lionheart Jumbo Toy Hammock"></a>
                                        <div class="product-details">
                                            <div class="access"> <a href="#" title="Remove This Item" class="btn-remove1"> <span class="icon"></span> Remove </a> </div>
                                            <strong>1</strong> x <span class="price">$8.00</span>
                                            <p class="product-name"> <a href="#">Office Colored Ladies Shirt</a> </p>

                                            <!--access clearfix-->
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="block block-compare">
                            <div class="block-title ">Compare Products (2)</div>
                            <div class="block-content">
                                <ol id="compare-items">
                                    <li class="item odd">
                                        <input type="hidden" value="2173" class="compare-item-id">
                                        <a class="btn-remove1" title="Remove This Item" href="#"></a> <a href="#" class="product-name"> Office Colored Ladies Shirt</a> </li>
                                    <li class="item last even">
                                        <input type="hidden" value="2174" class="compare-item-id">
                                        <a class="btn-remove1" title="Remove This Item" href="#"></a> <a href="#" class="product-name"> Office Colored Ladies Shirt</a> </li>
                                </ol>
                                <div class="ajax-checkout">
                                    <button type="submit" title="Submit" class="button button-compare"><span>Compare</span></button>
                                    <button type="submit" title="Submit" class="button button-clear"><span>Clear</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="block block-list block-viewed">
                            <div class="block-title"> Recently Viewed </div>
                            <div class="block-content">
                                <ol id="recently-viewed-items">
                                    <li class="item odd">
                                        <p class="product-name"><a href="#"> Retis lapen casen</a></p>
                                    </li>
                                    <li class="item even">
                                        <p class="product-name"><a href="#"> Retis lapen casen</a></p>
                                    </li>
                                    <li class="item last odd">
                                        <p class="product-name"><a href="#"> Retis lapen casen</a></p>
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="block block-poll">
                            <div class="block-title">Community Poll </div>
                            <form id="pollForm" action="#" method="post" onSubmit="return validatePollAnswerIsSelected();">
                                <div class="block-content">
                                    <p class="block-subtitle">What is your favorite Magento feature?</p>
                                    <ul id="poll-answers">
                                        <li class="odd">
                                            <input type="radio" name="vote" class="radio poll_vote" id="vote_5" value="5">
                                            <span class="label">
                      <label for="vote_5">Layered Navigation</label>
                      </span> </li>
                                        <li class="even">
                                            <input type="radio" name="vote" class="radio poll_vote" id="vote_6" value="6">
                                            <span class="label">
                      <label for="vote_6">Price Rules</label>
                      </span> </li>
                                        <li class="odd">
                                            <input type="radio" name="vote" class="radio poll_vote" id="vote_7" value="7">
                                            <span class="label">
                      <label for="vote_7">Category Management</label>
                      </span> </li>
                                        <li class="last even">
                                            <input type="radio" name="vote" class="radio poll_vote" id="vote_8" value="8">
                                            <span class="label">
                      <label for="vote_8">Compare Products</label>
                      </span> </li>
                                    </ul>
                                    <div class="actions">
                                        <button type="submit" title="Vote" class="button button-vote"><span>Vote</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="block block-tags">
                            <div class="block-title"> Popular Tags</div>
                            <div class="block-content">
                                <ul class="tags-list">
                                    <li><a href="#" style="font-size:98.3333333333%;">Camera</a></li>
                                    <li><a href="#" style="font-size:86.6666666667%;">Hohoho</a></li>
                                    <li><a href="#" style="font-size:145%;">SEXY</a></li>
                                    <li><a href="#" style="font-size:75%;">Tag</a></li>
                                    <li><a href="#" style="font-size:110%;">Test</a></li>
                                    <li><a href="#" style="font-size:86.6666666667%;">bones</a></li>
                                    <li><a href="#" style="font-size:110%;">cool</a></li>
                                    <li><a href="#" style="font-size:86.6666666667%;">cool t-shirt</a></li>
                                    <li><a href="#" style="font-size:86.6666666667%;">crap</a></li>
                                    <li><a href="#" style="font-size:86.6666666667%;">good</a></li>
                                    <li><a href="#" style="font-size:86.6666666667%;">green</a></li>
                                    <li><a href="#" style="font-size:86.6666666667%;">hip</a></li>
                                    <li><a href="#" style="font-size:75%;">laptop</a></li>
                                    <li><a href="#" style="font-size:75%;">mobile</a></li>
                                    <li><a href="#" style="font-size:75%;">nice</a></li>
                                    <li><a href="#" style="font-size:86.6666666667%;">phone</a></li>
                                    <li><a href="#" style="font-size:98.3333333333%;">red</a></li>
                                    <li><a href="#" style="font-size:86.6666666667%;">tight</a></li>
                                    <li><a href="#" style="font-size:75%;">trendy</a></li>
                                    <li><a href="#" style="font-size:86.6666666667%;">young</a></li>
                                </ul>
                                <div class="actions"> <a href="#" class="view-all">View All Tags</a> </div>
                            </div>
                        </div>
                    </aside>
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





@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
// $(document).on('click','.add-to-cart', function(){
//    const base_url = $("#base_url").val();

//     let id = $(this).attr('data-id');
//    let token=$('#token').val(); 
//    //alert(token);
//     // console.log(id);

//     $.ajax({
//         type: "post",
//         url: base_url+"/addToCart",
//         data: {id:id, _token:token},
//         success: function (r) {
           
           
//         }
//     })
// });
});
</script>
