$(document).ready(function(){

$(document).on('click','.add-to-wishlist', function(){
    const base_url = $("#base_url").val();
    const token = $("#token").val();

    let id = $(this).attr('data-id');
    // console.log(id);

    $.ajax({
        type: "post",
        url: base_url+"/addToWishlist",
        data: {id:id, _token:token},
        success: function (r) {
            console.log(r);
        }
    })
})

})//end ajax
