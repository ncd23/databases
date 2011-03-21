$(function(){
	$('#styleDropdown')
	  .change(function(){
		var styleValue = $(this).val();
		/*
		$('#detailsDisplay').load(
		  'colors/colors_for_style/'+styleValue
		);
		*/
		adjustColorDropdown();
	  })
	  .change();
	$('#colorDropdown')
	  .change(function(){ adjustSizeDropdown();});
});

function adjustColorDropdown() {
	var styleValue = $('#styleDropdown').val();
	var dropdownSet = $('#colorDropdown');
	if (styleValue.length == 0) {
		dropdownSet.attr("disabled",true);
		dropdownSet.emptySelect();
		//adjustSizeDropdown();
	} else {
		dropdownSet.attr("disabled",false);
		$.get(
			'colors/colors_for_style/'+styleValue,
			function(data) {
				dropdownSet.loadSelect(data);
			},
			'text'
		);
	}
}

function adjustSizeDropdown() {
	var styleValue = $('#styleDropdown').val();
	var colorValue = $('#colorDropdown').val();
	var dropdownSet = $('#sizeDropdown');
	if ((styleValue.length == 0)||(colorValue.length == 0) ) {
		dropdownSet.attr("disabled",true);
		dropdownSet.emptySelect();
	}
	else {
		dropdownSet.attr("disabled",false);
		$.getJSON(
			'sizes/sizes_for_style',
			{style:styleValue,color:colorValue},
			function(data){dropdownSet.loadSelect(data)}
		);
	}
}