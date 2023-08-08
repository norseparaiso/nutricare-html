jQuery(document).ready(function($){
	// Main menu tiggers
	$(".ddown").each(function(){
		var thisAccrdion = $(this);
		thisAccrdion.find(".ddown-trigger").click(function(e){
			e.preventDefault();
			thisAccrdion.toggleClass('active');
		});
	});
	// Main menu toggler
	$("#mainmenutoggle").click(function(e){
		e.preventDefault();
		$("body").addClass("menu-open");
	});
	// CTA  dot menu toggle
	$(".cta .trigger").click(function(e){
		e.preventDefault();
		if(!$(this).closest(".cta").is(".active")){
			$(".cta").removeClass("active");
		}
		$(this).closest(".cta").toggleClass('active');
	});
	$(document).click(function(event) { 
		target = $(event.target);
		// Detect click outside of pull-out mainmenu to close it
		if((!target.closest('#adminmenu').length && $('#adminmenu').is(":visible")) && !(target.closest('#mainmenutoggle').length || target.is('#mainmenutoggle'))){
			$("body").removeClass("menu-open");
		}
		// CTA  dot menu toggle - close if clicked outside
		if(!target.closest('.cta').length && $('.cta').is(":visible")){
			$(".cta").removeClass("active")
		}
	});
	// bootstrap Data tables
	// $('#example').DataTable();
	// table sort sample class toggle
	$('th[class*="sort-"]').click(function(){
		if($(this).hasClass('asc')){
			$(this).closest("thead").find("th").removeClass("asc desc");
			$(this).addClass('desc');
		}else{
			$(this).closest("thead").find("th").removeClass("asc desc");
			$(this).addClass('asc');
		}
	});
	// prevent dropdown from closing if clicked inside
	$('.dropdown-menu.keep-open').on("click.bs.dropdown", function (e) { e.stopPropagation(); });
	// accordion
	$(".job-accrdion .accrdion-trigger").click(function(e){
		e.preventDefault();
		$(this).toggleClass("active");
	});
});