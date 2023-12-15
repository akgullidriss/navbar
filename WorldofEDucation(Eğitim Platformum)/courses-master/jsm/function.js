$(document).ready(function() {
    let height = $('#chatUl').height()
    $('#chatUl').animate({
        scrolltop: height * 100
    });


    $('.user').click(function() {
        var user = $(this).attr('user-id')

        $.ajax({
            url: "mesajkaydet.php",
            data: { user: user, chat: 'chat' },
            type: "POST",
            success: function(response) {
                $('.chat').html(response);
            }



        });




    })




})