$('.media_monitor').on('click','#paste',function(){
    
    $('.media_monitor').append('<div class="lightbox"><form method="post" action="" enctype="multipart/form-data"><div class="form-group"><label for="exampleInputFile"></label><input type="file" id="exampleInputFile"><p class="help-block"></p></div></form><a class="cl_lightbox"><i class="fa fa-window-close-o" aria-hidden="true"></i></a></div>');
    
    
});



$('.media_monitor').on('click','.lightbox a',function(){
    
    $('.media_monitor').find('.lightbox').detach();
    
});