//====================for image magnifyed==============//
$(document).ready(function(){
    $('#demo-1 .simpleLens-thumbnails-container img').simpleGallery({
        loading_image: 'demo/images/loading.gif'
    });

    $('#demo-1 .simpleLens-big-image').simpleLens({
        loading_image: 'demo/images/loading.gif'
    });

    $('#demo-2 .simpleLens-thumbnails-container img').simpleGallery({
        loading_image: 'demo/images/loading.gif',
        show_event: 'click'
    });

    $('#demo-2 .simpleLens-big-image').simpleLens({
        loading_image: 'demo/images/loading.gif',
        open_lens_event: 'click'
    });

    $(document).on('mouseout','.simpleLens-thumbnails-container a',function () {
        $(this).closest('.simpleLens-thumbnails-container').find('a').css('border','1px solid #fff');
        $(this).css('border','1px solid rgb(74, 74, 233)');
    })
});