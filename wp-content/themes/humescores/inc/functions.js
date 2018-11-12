(function($){
	$('figure.wp-caption.aligncenter').rempveAttr('style');
  $('img.aligncenter').wrap('<figure class="centered-image"></figure>');
})(Jquery);