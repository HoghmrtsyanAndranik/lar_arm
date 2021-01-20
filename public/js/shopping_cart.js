$(document).ready(function(){
$(document).on('change','.quantity', function(){
   const base_url = $("#base_url").val();
    let id=$(this).attr('id');
    let quantity=$(this).val();
    let token=$('#token').val();

 
     $.ajax({
        type: "post",
        url: base_url+"/update_cart",
        data: {id:id, _token:token,quantity:quantity},
        success: function (r) {
         
           
        }
    })

})
})