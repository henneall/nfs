(function ($) {
 "use strict";
 
	$(".select2_demo_2").select2();
	$(".select2_client").select2({
		placeholder: "Select Client Name",
		allowClear: true
	});

	$(".select2_bank").select2({
		placeholder: "Select Bank",
		allowClear: true
	});

	$(".select2_insurer").select2({
		placeholder: "Select Insurer",
		allowClear: true
	});

	
 
})(jQuery); 