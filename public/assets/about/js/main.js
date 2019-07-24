$(document).ready(function () {
    
    //The options (second parameter) are all optional. The values shown are the default values.
    skrollr.menu.init(s, {
        //skrollr will smoothly animate to the new position using `animateTo`.
        animate: true,
    
        //The easing function to use.
        easing: 'linear',
    
        //Multiply your data-[offset] values so they match those set in skrollr.init
        scale: 1,
    
        //How long the animation should take in ms.
        duration: function(currentTop, targetTop) {
            //By default, the duration is hardcoded at 500ms.
//                    return 500;
    
            //But you could calculate a value based on the current scroll position (`currentTop`) and the target scroll position (`targetTop`).
            return Math.abs(currentTop - targetTop);
        }
    });
    
    var language = window.navigator.userLanguage || window.navigator.language;
//    alert(language);
    if (language.indexOf('fr') != -1){
        $( "div.text-en" ).hide();
        $( "div.text-fr" ).show();
    }else{
        $( "div.text-fr" ).hide();
        $( "div.text-en" ).show();        
    }
    
});


$(window).load(function(){
     $('.preloader').fadeOut();
});

window.addEventListener('resize', function() {
    footer = document.querySelector('footer');
   
    if(window.orientation == 0) // Portrait
    {
        footer.style.fontSize = "2vw";        
    }
    else // Landscape
    {
        footer.style.fontSize = "1vw";
    }
        
});


$( window ).on( "orientationchange", function( event ) {    
    location.reload();
});
