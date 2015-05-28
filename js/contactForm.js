var $contactForm = $(".contact form");
$contactForm.submit(function(){
	$(".card").addClass("flip-card");
	return false;
});