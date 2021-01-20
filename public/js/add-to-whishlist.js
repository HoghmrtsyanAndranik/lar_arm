$(document).ready(function(){
$(document).on('click','.wishlist', function(){
   const base_url = $("#base_url").val();
  
    let id=$(this).attr('data-id');
   
    let token=$('#token').val();
     $.ajax({
        type: "post",
        url: base_url+"/addToWishlist",
        data: {id:id, _token:token},
        success: function (r) {
         
           
        }
    })

})
})