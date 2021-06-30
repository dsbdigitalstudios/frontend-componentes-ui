// go to by Scroll
function goToByScroll(id, offset) {
	var off = offset;
	jQuery('html,body').animate({
		scrollTop: jQuery("#" + id).offset().top - off
	}, 300);
}

