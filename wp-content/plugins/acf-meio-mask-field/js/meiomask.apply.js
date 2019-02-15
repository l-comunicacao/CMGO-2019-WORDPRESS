jQuery(function($) {

	var masked_inputs = $('.meio_mask');
	var datamask = datatype = '';

	$.each( masked_inputs, function() {

		datamask = $(this).attr('data-mask');
		datatype = $(this).attr('data-type');
		
		if (typeof datamask !== "undefined")
			$(this).setMask({mask: datamask});
		if (typeof datatype !== "undefined" && typeof datamask !== "undefined")
			$(this).setMask({mask: datamask,type: datatype});

	});

});