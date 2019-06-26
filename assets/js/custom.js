jQuery(function($) {
    
    
    
});


$(document).ready(function(){

    var cookis = $.cookie('panel');

    if (cookis != 'true') {
        $(".notif-panel").show();
    } 

    $('#btn_close').click(function (e) {      

        e.preventDefault();      

        var date = new Date();
        var minutes = 10;
        date.setTime(date.getTime() + (minutes * 60 * 1000));
        $.cookie('panel', 'true', { expires: date });

        $( '.notif-panel' ).slideUp();

    });  

    var $win = $(window);
    
    $win.scroll(function () {
        if($win.scrollTop() > 100) {
            
            $('#back-to-top').fadeIn();
            
        }else{
            $('#back-to-top').fadeOut();
        }
    });

    // $(window).scroll(function() {
    //     if ($(this).scrollTop()) {
    //         $('#back-to-top').show('fast');
    //     } else {
    //         $('#back-to-top').hide('fast');
    //     }
    // });
    
    $("#back-to-top").click(function () {
        //1 second of animation time
        //html works for FFX but not Chrome
        //body works for Chrome but not FFX
        //This strange selector seems to work universally
        $("html, body").animate({scrollTop: 0}, 1000);
     });

});


 