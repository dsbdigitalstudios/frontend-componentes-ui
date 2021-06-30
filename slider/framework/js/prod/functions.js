
jQuery(document).ready(function() {
	

	// Events
    jQuery(".menuRwdFX").on("click", function(){
        jQuery(".rwdMenu").toggleClass("showMenu");
		$(".mainHeader").toggleClass("hideMenuMain");
    });

	jQuery( "#accordion" ).accordion({
        collapsible: true,
        heightStyle: "content",
		active: 0,

		activate: function( event, ui ) {
			if(!$.isEmptyObject(ui.newHeader.offset())) {
				$('html:not(:animated), body:not(:animated)').animate({ scrollTop: ui.newHeader.offset().top - 100 }, '300');
			}
		}
    });
    
});


// Controle de elemtnos da interface
var controleElemen = true;
jQuery(window).scroll(function() {
	if(jQuery(window).width() > 250){

		if(jQuery(window).scrollTop() > 100){
			if(controleElemen){
				controleElemen = false;
                jQuery(".mainHeader").addClass('menuFixo');
				jQuery(".logo").addClass('logoFX');
				jQuery(".socialNav").css('display', 'none').animate({
					opacity: 1,
					bottom: '-10em'
				}, 300);
			}
		}else if(jQuery(window).scrollTop() < 100){
			controleElemen = true;
            jQuery(".mainHeader").removeClass('menuFixo');
			jQuery(".logo").removeClass('logoFX');
			jQuery(".socialNav").css('display', 'block').animate({
				opacity: 1,
				bottom: '2em'
			}, 300);
		}

	}
	else {
        jQuery(".mainHeader").removeClass('menuFixo');
		jQuery(".logo").removeClass('logoFX');
		jQuery(".socialNav").css('display', 'block').animate({
			opacity: 1,
			bottom: '2em'
		}, 300);
	}
});

function  abreTextos(test) {  

	if(test > 0) {
		jQuery('.controlContent').css('overflow','hidden').animate({
			height: '100%',
			margin: '0'
		}, 300);
		jQuery('.ctaContentControl').css('display','none').animate({
			opacity: 0
		}, 150);
		jQuery('.ctaContentControl.verMenos').css('display','inline-block').animate({
			opacity: 1
		}, 150);
	}else {
		jQuery('.controlContent').css('overflow','hidden').animate({
			height: '18em',
			margin: '0 0 3em'
		}, 300);
		jQuery('.ctaContentControl').css('display','inline-block').animate({
			opacity: 1
		}, 150);
		jQuery('.ctaContentControl.verMenos').css('display','none').animate({
			opacity: 0
		}, 150);
	}

}
abreTextos(0);

function abreLocais(id) {
	if (id > 0) {
		jQuery('.listLocais').css('overflow','hidden').animate({
			height: '100%',
			margin: '0'
		}, 300);
		jQuery('.ctaContentControl').css('display','none').animate({
			opacity: 0
		}, 150);
		jQuery('.ctaContentControl.verMenos').css('display','inline-block').animate({
			opacity: 1
		}, 150);
	}else { // por padrão
		jQuery('.listLocais').css('overflow','hidden').animate({
			height: '30em',
			margin: '0 0 3em'
		}, 300);
		jQuery('.ctaContentControl').css('display','inline-block').animate({
			opacity: 1
		}, 150);
		jQuery('.ctaContentControl.verMenos').css('display','none').animate({
			opacity: 0
		}, 150);
	}
}
abreLocais(0);

function navPresenca(id) {
	
	jQuery(".navOndeEstamos li a").removeClass('ativo');
	
	if (id > 0) {
		jQuery(".navOndeEstamos li a#ondeEstamos" + id).addClass('ativo');
		jQuery('.listLocais li').css('display','none').animate({
			opacity: '0'
		}, 300);
		jQuery('.listLocais li.categoria' + id).css('display','block').animate({
			opacity: '1'
		}, 300);
	}else {
		jQuery(".navOndeEstamos li a#ondeEstamos" + id).addClass('ativo');
		jQuery('.listLocais li').css('display','block').animate({
			opacity: '1'
		}, 300);
	}

}


function navForms(id) {
	
	if (id > 0) {
		jQuery(".contentFormBox").css('display','none').animate({
			opacity: '0'
		}, 150);
		jQuery(".contentFormBox#form" + id).css('display','block').animate({
			opacity: '1'
		}, 300);
		jQuery(".navFormsBox").css('display','none').animate({
			opacity: '0'
		}, 150);
		idForm = 'form' + id;
		goToByScroll(idForm, 220);
		jQuery(".goBack").css('display','block').animate({
			opacity: '1'
		}, 150);
	}else {
		jQuery(".contentFormBox").css('display','none').animate({
			opacity: '0'
		}, 150);
		jQuery(".goBack").css('display','none').animate({
			opacity: '0'
		}, 150);
		jQuery(".navFormsBox").css('display','block').animate({
			opacity: '1'
		}, 300);
		// if(jQuery(window).width() > 250)
		goToByScroll('navPageForm',80);
	}

}

// navForms(0);