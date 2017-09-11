var path = 'uploads/';

$(document).ready(function(){

    function getmedia(path){
        
    
        $.ajax({
            url: 'http://'+window.location.host+'/ajax/media.ajax.php',
            type: 'post',
            data: 'target=scan&path='+path,
            success: function(data){
                $('.media_monitor').html(data);
            
            }


        });
    
    }
    getmedia(path);
});





$('.media_monitor').on('dblclick','i',function(){
    
   var type = $(this).attr('data-type'); 
    
    if(type == 'folder'){
        
        var name = $(this).attr('data-name');
        path = 'uploads/'+name+'/';
        
        $.ajax({
           url: 'http://'+window.location.host+'/ajax/media.ajax.php',
            type: 'post',
            data: 'target=scan&path='+path,
            success: function(data){
               $('.media_monitor').html(data);
                $('.media_monitor').prepend('<div><i id="i_back" class="fa fa-caret-square-o-left" aria-hidden="true"></i></div>');
            }
            
            
        });
    }
    
});

$('.media_monitor').on('click','.d_scan',function(){

        
    
    var name = $(this).attr('data-name');
    
    if(confirm("Are you sure ???")) {
        
        $.ajax({
            url: 'http://'+window.location.host+'/ajax/media.ajax.php',
            type: 'post',
            data: 'target=delete&name='+name+'&path='+path,
            success: function(data){
               
                
                $.ajax({
                    url: 'http://'+window.location.host+'/ajax/media.ajax.php',
                    type: 'post',
                    data: 'target=scan&path='+path,
                    success: function(data2){
                        $('.media_monitor').html(data2);

                    }


                });
                
            }
            
        });
    
    }
    
});


$('.media_monitor').on('click','#i_back',function(){
    
    var split = path.split('/');
    path = split[0]+'/';
    
    $.ajax({
        url: 'http://'+window.location.host+'/ajax/media.ajax.php',
        type: 'post',
        data: 'target=scan&path='+path,
        success: function(data){
            $('.media_monitor').html(data);

        }


    });
});
