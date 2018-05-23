(function(){
 
    var $pane = $('.login'),
        $btn = $pane.find('.login__button'),
        $icon = $pane.find('.icon');
    
    
        
        $btn.click(function(event){
          
          if ($pane.attr('data-state') === '') {
              
              var name = $('input[type=text]').val();
              var psw = $('input[type=password]').val();  
              
              
              event.preventDefault();
              $pane.attr('data-state', 'loadingPrepare');
              setTimeout(function(){
                $pane.attr('data-state', 'loadingStart'); 
              }, 200);
              setTimeout(function(){
                $pane.attr('data-state', 'loading'); 
              }, 700);
              setTimeout(function(){
                $pane.attr('data-state', 'loadingEnd'); 
              }, 1250);
              setTimeout(function(){
                
                if(name === 'admin' && psw === 'password') {
                  
                  $pane.attr('data-state', 'loadingEndOk'); 
                  
                  $('.login__hi').text('Hello, ' + name);
                  
                  $('.login__button--conf.OK').click(function(event){
                    event.preventDefault();
                    event.stopPropagation();
                    $pane.attr('data-state', 'loadingAccess');
                    $('.login__hi').text('');
                  });
                  
                } else {
                  $pane.attr('data-state', 'loadingEndKo'); 
                  $('.login__button--conf.KO').click(function(event){
                    event.preventDefault();
                    event.stopPropagation();
                    $pane.attr('data-state', '');
                  });
                }
  
              }, 1300);
            
      
            }  else  {
  
              event.preventDefault();
              $pane.attr('data-state', '');
              
            }  
        });
  
    
  })();





  