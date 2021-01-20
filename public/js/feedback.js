$(document).ready(function() {
    //sending feedback
    $(document).on('click','.sendFeedback', function(){
        const base_url = $("#base_url").val();
        const token = $("#token").val();

        let id = $(this).attr('data-id');
        let feedback = $(this).siblings('textarea').val();
        console.log(feedback);

        $.ajax({
            type: "post",
            url: base_url+"/writeFeedback",
            data: {id:id, _token:token, feedback},
            success: function (r) {
                $('.feedback').html(`<h3 class="product-name"> <a href="#">${feedback}</a>`);
            }
        })
    });
    // end of *sending feedback*

    //evaluating with stars
    $(document).on('click','.evStars', function(){
        const base_url = $('#base_url').val();
        const token = $('#token').val();

        let id = $(this).data('id');
        let starId = id[0];
        let orderDetailId = id[1];
        $.ajax({
            type: "post",
            url: base_url+"/evStars",
            data: {orderDetailId, starId, _token:token},
            success: function(res){
                //TODO:: select parent element of ::after
            }
        })

    })
    // end of *evaluating with stars*


})
