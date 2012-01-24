(function($) {
	$.fn.emptySelect = function() {
		return this.each(function(){
			if (this.tagName=='SELECT') this.options.length = 0;
		});
	}

	// creepy. uses obj parameter to access the JSON data it consumes.
	$.fn.loadSelect = function(optionsDataArray,obj) {
	console.log('in loadSelect');
		return this.emptySelect().each(function(){
			//TODO: get rid of the eval here
			optionsDataArray = eval(optionsDataArray);
			if (this.tagName=='SELECT') {
				var selectElement = this;
				$.each(optionsDataArray,function(index,optionData){
					var option = new Option(optionData[obj].name, optionData[obj].value);
					if ($.browser.msie) {
						selectElement.add(option);
					} else {
						selectElement.add(option,null);
					}
				});
			}
		});
	}
})(jQuery);
