// JavaScript Document
$(document).ready(function (e) {
	$(".mainmu").mouseover(
		function () {
			$(this).children(".mw").stop().show()
		}
	)
	$(".mainmu").mouseout(
		function () {
			$(this).children(".mw").hide()
		}
	)
});
function lo(x) {
	location.replace(x)
}
function op(x, y, url) {
	// console.log('op');

	$(x).fadeIn()
	if (y)
		$(y).fadeIn()
	if (y && url)
		$(y).load(url)
}
function cl(x) {
	$(x).fadeOut();
}
function updateIcon() {
	let selectedIcon = document.getElementById("icon_class").value;
	document.getElementById("iconPreview").className = selectedIcon;
}