; (function($){
    $(document).ready(function(){
        var slider = tns({
            container: '.slider',
            speed:300,
            autoplayTimeout:3000,
            items: 3,
            autoplayHeight:true,
            controls: false,
            nav: false,
            autoplay: true,
            autoplayButtonOutput: false
          });
    });
})(jQuery);