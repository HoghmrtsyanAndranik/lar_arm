@extends('layouts.userlayout')

    <link rel="stylesheet" type="text/css" href="{{asset('css/internal.css')}}">

@section('content')
    <!-- Navbar -->
  
    <!-- end nav -->

    <!-- Main Container -->
    <section class="main-container col1-layout">
        <div class="main container">
            <div class="col-main">
                <div class="cart">
                    <div class="page-title">
                        <h1>Wishlist</h1>
                    </div>
                    <div class="table-responsive">
                        
                                <table class="data-table cart-table" id="shopping-cart-table">
                                    <thead>
                                    <tr class="first last">
                                        <th rowspan="1">&nbsp;</th>
                                        <th rowspan="1"><span class="nobr">Product Name</span></th>
                                        <th rowspan="1" class="hidden-phone"></th>
                                        <th rowspan="1" class="hidden-phone"><span class="nobr">Move to Cart</span></th>
                                        <th colspan="1" class="a-center"><span class="nobr">Unit Price</span></th>
                                        
                                        <th colspan="1" class="a-center">Description</th>
                                        <th class="a-center" rowspan="1">&nbsp;</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr class="first last">
                                        <td class="a-right last" colspan="50"><a href="{{url('/product')}}"><button  class="button btn-continue" title="Continue Shopping" type="button" style="color:red">Continue Shopping</button></a>
                                            <button class="button btn-update" title="Update Cart" value="update_qty" name="update_cart_action" type="submit"><span>Update Cart</span></button>
                                            <button id="empty_cart_button" class="button" title="Clear Cart" value="empty_cart" name="update_cart_action"><a href="{{url('/deleteWishList')}}"><span class="done">Clear Wishlist</span></a></button></td>
                                    </tr>
                                    </tfoot>
                                    <tbody>

                                    @foreach($wishlist as $c)
                                     
                                @php
                                $url=asset('img/good.png');
                                if(isset($c->photo[0]))
                                   $url=asset('img/'.$c->photo[0]->url);
                                @endphp
                                   
                                   
                                    <tr class="first odd">
                                        <td class="image"><a class="product-image" title="" href="#"><img width="75" height="75" alt="Women's Crepe Printed Black" src="{{$url}}"></a></td>
                                        <td><h2 class="product-name"> <a href="#">{{$c->product->name}}</a> </h2></td>
                              
                                        <td class="a-center hidden-table"><a title="Edit item parameters" class="edit-bnt" href="#"></a></td>
                                        <td class="a-center  add-to-cart" id="{{$c->product->id}}">Move</td>
                                        <td class="a-center hidden-table"><span class="cart-price"> <span class="price">${{$c->product->price}}</span> </span></td>
                                       
                                        <td class="a-center movewishlist"><span class="cart-price"> <span class="price">{{$c->product->description}}</span> </span></td>
                                        <td class="a-center last"><a class="button remove-item" title="Remove item" href="{{url('/deleteWishListProduct/'.$c->id)}}"><span><span>Remove item</span></span></a></td>
                                    </tr>
                                
                                 @endforeach
                                    </tbody>
                                </table>
                         
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
                                            @if(count($wishlist) > 0)
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
<style>
    .add_to_cart:hover{
      cursor:pointer;
    }



</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script >
// $(document).ready(function(){

// $(document).on('click','.add-to-cart', function(){
//    const base_url = $("#base_url").val();

//     let id = $(this).attr('data-id');
//    let token=$('#token').val(); 
//  alert(token);
//     // console.log(id);

//     // $.ajax({
//     //     type: "post",
//     //     url: base_url+"/addToCart",
//     //     data: {id:id, _token:token},
//     //     success: function (r) {
           
           
//     //     }
//     // })
// });
// });
</script>