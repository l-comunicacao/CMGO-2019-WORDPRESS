jQuery(document).ready(function(){

    setInterval(function(){ magic() }, 500);


    // jQuery('.bxslider-patrocinio').bxSlider({
    //     controls: false,
    //     pager: false,
    //     maxSlides: 4,
    //     minSlides: 4,
    //     auto: true,
    //     slideWidth: 300
    // });

    converter_element_bootstrap();

    jQuery('.city-guide-column').click(function(){
        var data = jQuery(this).attr('data');

        jQuery('.city-guide-column').removeClass('active');
        jQuery(this).addClass('active');

        //Ativar os itens selecionados
        jQuery('.container-items').removeClass('active');
        jQuery('.container-items').each(function(){
            if(jQuery(this).attr('data') == data){
                jQuery(this).addClass('active');
            }
        });

    });


    jQuery('.fundo-parallax').stellar({
        verticalOffset: 0,
        responsive: true,
        parallaxBackgrounds: true
    });

    jQuery('.wpcf7-form').addClass('form-horizontal');

    jQuery('.fancybox').fancybox();

    jQuery('.btn-action-show').click(function(){
        var list = jQuery(this).attr('data-list');
        var value = jQuery(this).attr('data-value');
        console.log('list: ', list);
        console.log('value: ', value);

        jQuery(list).each(function(){
            if(jQuery(this).hasClass(value)){
                jQuery(this).show(400);
            }else{
                jQuery(this).hide(400);
            }
        });

        return false;
    });

    // jQuery('html, body').animate({
    //     scrollTop: jQuery(document).height()
    // }, 'slow');

    return false;
});


function magic(){
}

function converter_element_bootstrap(){
    //Menus
    // jQuery('.menu').children('ul').children('li').addClass('nav-item');
}
