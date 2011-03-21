(function($) {
	$.fn.emptySelect = function() {
		return this.each(function(){
			if (this.tagName=='SELECT') this.options.length = 0;
		});
	}

	$.fn.loadSelect = function(optionsDataArray) {
		return this.emptySelect().each(function(){
			//TODO: get rid of the eval here
			optionsDataArray = eval(optionsDataArray);
			if (this.tagName=='SELECT') {
				var selectElement = this;
				$.each(optionsDataArray,function(index,optionData){
					var option = new Option(optionData.Color.name, optionData.Color.value);
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
