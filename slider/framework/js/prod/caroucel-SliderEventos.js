$('.caroucelPadrao').owlCarousel({
    loop:true,
    margin: 30,
    // autoWidth:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        800:{
            items:3
        },
        1170:{
            items:4,
            loop:false
        }
    }
});

$('#caroucelSolucoes').owlCarousel({
    loop:true,
    margin: 30,
    autoWidth:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        800:{
            items:2
        },
        1170:{
            items:3,
            loop:false
        }
    }
});
var caroucelSolucoes = $('#caroucelSolucoes');
caroucelSolucoes.owlCarousel();
// Custom Navigation Events
$(".solucao-next").click(function(){
    caroucelSolucoes.trigger('next.owl.carousel');
    
})
$(".solucao-prev").click(function(){
    caroucelSolucoes.trigger('prev.owl.carousel');
})