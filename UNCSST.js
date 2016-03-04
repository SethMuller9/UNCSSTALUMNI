
/*This function validates that all the fields have been filled out correctly on Registerpage.html*/
function regSubBut() 
{
	var reg = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if(document.getElementById('firstName').value == '')
	{
		document.getElementById('errorInformer').innerHTML = "Please enter a first name";
		document.getElementById('firstName').focus();
		return false;
	}
	
	else if (document.getElementById('lastName').value == '')
	{
		document.getElementById('errorInformer').innerHTML = "Please enter a last name";
		document.getElementById('lastName').focus();
		return false;
	}
    
	else if (document.getElementById('email').value == '')
	{
		document.getElementById('errorInformer').innerHTML = "Please enter an email address";
		document.getElementById('email').focus();
		return false;
	}
	
	else if (reg.test(document.getElementById('email').value) == false)
	{
		document.getElementById('errorInformer').innerHTML = "Please enter a valid email";
		document.getElementById('email').focus();
		return false;
	}
	
	else if (document.getElementById('password').value == "")
	{
		document.getElementById('errorInformer').innerHTML = "Please enter a password";
		document.getElementById('password').focus();
		return false;
	}
	
	else if (document.getElementById('confirmpassword').value == "")
	{
		document.getElementById('errorInformer').innerHTML = "Please confirm password";
		document.getElementById('confirmpassword').focus();
		return false;
	}
	
	else if (document.getElementById('citystate').value == "")
	{
		document.getElementById('errorInformer').innerHTML = "Please enter a city, state";
		document.getElementById('citystatefocus');
		return false;
	}
	
	else {
	document.registerform.submit();
	
}
}



/*Validates the PW's match on Registerpage.html*/
function passwordvalidator() {
	
	if (document.getElementById('password').value != document.getElementById('confirmpassword').value)
	{
		document.getElementById('doesnotmatch').innerHTML = "does not match"
		return false;
	}
	document.getElementById('doesnotmatch').innerHTML = "";
}

/*fades in the Alumni Banner and the presidents letter on Homepage.php*/
$("#alumniHeader").delay(1000).fadeIn(3400);
$("#welcomeLetter").delay(1000).fadeIn(3400);
/*creates overlay in photo album on Mediapage.html*/






var $overlay = $(
"<div id='overlay'><div id='popoutWrapper'><div id='overlayImageWrapper'><div id='leftArrow'></div><div id='rightArrow'></div><img id='albumExpandedImg'></div><div id='commentsBar'><h1>comments coming soon</h1></div></div></div>"
);

$("body").append($overlay);

$("#albumContainer a").click(function(event) {
	event.preventDefault();
	var imageLocation = $(this).attr("href");
	// set the "clicked-on" html link class to "selected" when it is clicked
	$(this).addClass("selected");
	$("#albumExpandedImg").attr("src", imageLocation);
	$($overlay).show();
});

$("#popoutWrapper, #overlayImageWrapper, #leftArrow, #rightArrow, #albumExpandedImg").click(function(event){
	event.stopPropagation();
});

// make function that fires when #leftArrowLink is clicked
$("#leftArrow").click(function(event){
	// prevent default 
	event.preventDefault();
	// find html <a> link with class of "selected" and find its previous sibling and that sibling's href value
	// make a variable for it
	var previousImg = $(".selected").prev();
	$("#albumExpandedImg").attr("src", previousImg.attr("href"));
	//refresh #overlay to show new image
	$($overlay).show();
	//unset the last photo from class "selected"
	$(".selected").removeClass("selected");
	//set the new photo to class "selected"
	previousImg.addClass("selected");
	if($(".selected").href() == $("#albumContainer a").eg(0).href()) {
	
}
});
	
$("#rightArrow").click(function(event){
	// prevent default 
	event.preventDefault();
	// find html <a> link with class of "selected" and find its previous sibling and that sibling's href value
	// make a variable for it
	var nextImg = $(".selected").next();
	$("#albumExpandedImg").attr("src", nextImg.attr("href"));
	//refresh #overlay to show new image
	$($overlay).show();
	//unset the last photo from class "selected"
	$(".selected").removeClass("selected");
	//set the new photo to class "selected"
	nextImg.addClass("selected");
});


	
$("#overlay").click(function() {
	
	$overlay.hide();
	// remove the selected class from the "clicked-on" html a link when $(#overlay) is clicked
	$("#albumContainer a").removeClass("selected");
});

$("#overlayImageWrapper").mouseover(function() {
	$("#leftArrow").fadeIn(250);
	$("#rightArrow").fadeIn(250);
});

$("#overlayImageWrapper").mouseleave(function(){
	$("#leftArrow").fadeOut(250);
	$("#rightArrow").fadeOut(250);
});

//embeds videos onto mediapage



(function() {
    var v = document.getElementsByClassName("youtube-player");
    for (var n = 0; n < v.length; n++) {
        var p = document.createElement("div");
        p.innerHTML = labnolThumb(v[n].dataset.id);
        p.onclick = labnolIframe;
        v[n].appendChild(p);
    }
})();
 
function labnolThumb(id) {
    return '<img class="youtube-thumb" src="http://i.ytimg.com/vi/' + id + '/hqdefault.jpg"><div class="play-button"></div>';
}
 
function labnolIframe() {
    var iframe = document.createElement("iframe");
    iframe.setAttribute("src", "http://www.youtube.com/embed/" + this.parentNode.dataset.id + "?autoplay=1&autohide=2&border=0&wmode=opaque&enablejsapi=1&controls=0&showinfo=0");
    iframe.setAttribute("frameborder", "0");
    iframe.setAttribute("id", "youtube-iframe");
    this.parentNode.replaceChild(iframe, this);
}

/***********************************************
removes table data when it is empty on Rosterspage.php
************************************************/

/**********************
Create a Hamburger Drop Down Menu
***********************/

$( ".cross" ).hide();
$( ".menu" ).hide();
$( ".hamburger" ).click(function() {
$( ".menu" ).slideToggle( "slow", function() {
$( ".hamburger" ).hide();
$( ".cross" ).show();
});
});

$( ".cross" ).click(function() {
$( ".menu" ).slideToggle( "slow", function() {
$( ".cross" ).hide();
$( ".hamburger" ).show();
});
});