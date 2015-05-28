
//Main Page Graphs
var $graphDiv= $("#graphs .col");
var $graphSpans = $("#graphs .col .graph-txt");


if(window.innerWidth >= 768) $graphSpans.hide();

window.onresize = function(event){
	if(window.innerWidth < 768) {
		//Showing elements incase of changing to mobile size
		$graphSpans.show();
	}
	else
		$graphSpans.hide();
};

$graphDiv.hover(function(event){
	
	if(window.innerWidth < 768) {
		//ignore function for mobile sizes
		return;
	}
	
    var $target = $(event.currentTarget);
	
    var $span = $target.children("div");
    //hide previous spans before showing next
   
    $graphSpans.stop().fadeOut("slow");
    
    if($span!=="undefined"){
        $span.stop().fadeIn(1000,null);  
    }
});


//Menu script
var e = jQuery.Event( "click" );
var $loginMain = $("#login-main");
var $loginPanel = $("#login-modal");

$loginMain.click(outsideClick);

function outsideClick(e){
	if(e !== null && e.target.firstElementChild.id === "login-modal") toggleMenu();
}

function toggleMenu() {
	$loginMain.toggle();
	$loginPanel.slideToggle("fast");
	return false;
}

