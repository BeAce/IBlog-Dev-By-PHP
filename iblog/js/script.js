$(function(){
	var _index = window.location.href.split('/').length - 1;
	// alert(_index);
	// alert(window.location.href.split('/')[5]);
	var _href = window.location.href.split('/')[_index];

	//if(_href > 0) {
		$(".navbar-nav li a[href^='"+_href+"']").parent('li').addClass("active");
	//} else {
		//$(".navbar-nav li a[href^='index']").addClass("active");
	//}
})