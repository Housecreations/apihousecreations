

$(window).load(function() { // makes sure the whole site is loaded
        // The slider being synced must be initialized first
      
      $('#preloader').fadeOut('slow');
    $('body').css({'overflow':'visible'});
      
 
    

    
    
    
$(document).ready(function(){    
    
/*    var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
		showLeft = document.getElementById( 'showLeft' );
    
    showLeft.onclick = function() {
	classie.toggle( this, 'active' );
	classie.toggle( menuLeft, 'cbp-spmenu-open' );

};*/
    
    
    $(".api-secret-show").on("click", function(ev){
       ev.preventDefault();
       
        var $id = this.id;
        var $url = window.location.href + '/api-secret/' + $id;
        
        console.log($url);
        
        $.ajax({
            url: $url,
            method: 'GET',
           
            dataType:"JSON",
            beforeSend: function(){ 
              

            },
            success: function(data){
              
                
         $("#api-secret-input").val(data.api_secret);
                
                
            },
            error: function(err){
                console.log(err);
               
                
                
            }
        });
        
        return false;
        
    });
    
    

});
    
});
    



  

 