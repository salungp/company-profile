$(document).ready(function() {
	$(".toggle-btn").click(function () {
		var cond = true;
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
	$("#btnToggle").click(function() {
		$(".dropdown-header-item").toggleClass("dropActive2");
	});
	$("#btnProfile").click(function() {
		$(".profile-item").toggleClass("profileActive");	
	});
	$("#openModal").click(function() {
		$(".form-modal").addClass("modalActive");
	});
	$("#closeModal").click(function() {
		$(".form-modal").removeClass("modalActive");
	});
	$("#showImage").click(function() {
		$(".modalImage").addClass("imageActive");
	});
	$("#hideImage").click(function() {
		$(".modalImage").removeClass("imageActive");
	});
});