$(function(){
	$('#styleDropdown')
	  .change(function(){
		var styleValue = $(this).val();
		$('#detailsDisplay').load(
		  'boots/details/'+styleValue,
		                function(){
                $('abbr').termifier({
                  lookupResource: 'getTerm.jsp'
                });
              }
		);
		adjustColorDropdown();
		adjustSizeDropdown();
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
		$.getJSON(
		//$.get(
			'colors/colors_for_style/'+styleValue,
			function(data) {
				console.log(data);
				//console.log($.parseJSON(data));
				dropdownSet.loadSelect(data,'Color');
				//adjustSizeDropdown();
			}//,
			//'text'
		);
	}
}

function adjustSizeDropdown() {
	var styleValue = $('#styleDropdown').val();
	var colorValue = $('#colorDropdown').val();
	var dropdownSet = $('#sizeDropdown');
	if (colorValue!=null) {
		if ((styleValue.length == 0)||(colorValue.length == 0) ) {
			dropdownSet.attr("disabled",true);
			dropdownSet.emptySelect();
		} else {
			dropdownSet.attr("disabled",false);
			$.get(
				'sizes/sizes_for_style/'+styleValue,
				function(data){dropdownSet.loadSelect(data,'Size')},
				'text'
			);
		}
	}
}