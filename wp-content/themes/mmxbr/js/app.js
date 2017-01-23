     
 
    
    $(".menu").ready(function() {
  
  
     jQuery(window).scroll(function() {
        var windowScrollPosTop = jQuery(window).scrollTop();

        if(windowScrollPosTop >= 150) {

            
          jQuery(".menu").css({"background-color": "rgba(0,0,0,.5)",});
           
         
        }
        else{
          jQuery(".menu").css({"background-color": "rgba(0,0,0,.0)",});
            
            
          
        }
     });

      
   

});

 

 
     
 
 
 

 
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64845338-1', 'auto');
  ga('send', 'pageview');

 



 