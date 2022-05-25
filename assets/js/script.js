$(document).ready(function() {
    
    // after 3 seconds, $('.loader img').addClass('.loader-img-scaled-down'), then 300ms later, $('.loader').fadeOut('slow');
    setTimeout(function() {
        $('.loader img.loader-gif').addClass('loader-img-scaled-down');
    }, 3000);
    setTimeout(function() {
        $('.loader').fadeOut('slow');

        $('.should-be-animated').addClass('animate-slide-down-fade-in');
    }, 3400);

    setTimeout(function() {
        $('.should-be-animated-pop-out').addClass('animate-pop-out');
    }, 4000)

})