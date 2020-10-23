jQuery(document).ready(function($){
								
$(".groupTitle").click(function(){
	var group = $(this).parents(".toggle_option_group");
	if(group.hasClass("group_close")){
	group.removeClass("group_close").addClass("group_open");
	$(this).addClass("open");
	}else{
	group.removeClass("group_open").addClass("group_close");
	$(this).removeClass("open");
		}
});
/* ------------------------------------------------------------------------ */
/*  delete section             	  								  	    */
/* ------------------------------------------------------------------------ */
 $('#optionsframework').on('click','.delete-section',function(){
	$(this).parents('.home-section').remove();	
	var i = 0;
	 $('.home-section').each(function(){
			$(this).find("[name^='onetake']").each(function(){
				var name = $(this).attr('name');
				var id   = $(this).attr('id');
				var new_name = name.replace(/[0-9]+/, i);
				var new_id   = id.replace(/[0-9]+/, i);
				$(this).attr('name',new_name);
				$(this).attr('id',new_id);
               });
			i++;
			$('#section_num').val(i);
	   });
  });
 
 
  /* ------------------------------------------------------------------------ */
/*  section accordion         	  								  	    */
/* ------------------------------------------------------------------------ */
								
$('.section-accordion').click(function(){
 var accordion_item = $(this).find('.heading .textblock-titled-arrows').attr('id');
 $('.'+accordion_item).slideToggle();
 if( $(this).hasClass('close')){
	 $(this).removeClass('close').addClass('open');
	 $(this).find('.heading span.textblock-titled-arrows').removeClass('fa-plus').addClass('fa-minus');
	 }else{
		$(this).removeClass('open').addClass('close'); 
		$(this).find('.heading span.textblock-titled-arrows').removeClass('fa-minus').addClass('fa-plus');
		 }
	   
	 })	;
  
								
 });