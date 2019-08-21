$(document).ready(function() {
	$("#openSearch").on("click", function() {
		if ($("#search").attr("class") != "searchActive")
		{
			$("#search").addClass("searchActive");
			$("#search").css({
				"max-width" : "400px",
				"opacity" : "1",
				"right" : "30px"
			});
			$(".itemSearch").css({
				"margin-left" : "220px"
			});
			$(this).html("&times;");
		} else {
			$("#search").removeClass("searchActive");
			$("#search").css({
				"max-width" : "0px",
				"opacity" : "0",
				"right" : "0px"
			});
			$(".itemSearch").css({
				"margin-left" : "0px"
			});
			$(this).html("Search");
		}
	});
	var cond = true;
	$(".toggle-btn").click(function () {
		cond = !cond;
		$("nav").toggleClass("navActive");
		$("aside").toggleClass("navActive");
		$(".admin-title").toggleClass("titleActive");
		$(".content-wrapper").toggleClass("wrapperActive");
		$(".sidebar").toggleClass("sidebarActive");
	});
	$(".dropBtn").click(function() {
		var item = $(this).next();
		item.toggleClass("dropActive");
	});
});

// window.onscroll = function () {scrollFunc()};

// function scrollFunc() {
// 	var nav = document.querySelector("nav");
// 	var navLogo = document.querySelector(".nav-logo");
// 	var navLink = document.getElementsByClassName("navLink");
// 	if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
// 		nav.classList.add("navActive");
// 		navLogo.querySelector("a").style.color = "#333";
// 		navLink.style.color = "#333";
// 	} else {
// 		navLogo.querySelector("a").style.color = "#fff";
// 		nav.classList.remove("navActive");
// 		navLink.style.color = "#fff";
// 	}
// }