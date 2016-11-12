$(document).ready(function(){
    'use strict';
	var isTypeAheadOpened = false;
    var HIDE_SEARCH_BAR_CLASS = 'search-bar-focus',
        EXPAND_SEARCH_BAR_CLASS = 'expand-search-bar-focus',
        mainTimeout,
        $mainHeader;

    var getMainHeader = function(){
        if ( $mainHeader ){
            return $mainHeader;
        }

        $mainHeader = $('#main-header');
        return $mainHeader;
    };

    var focusSearch = function(_event){
        var $header = getMainHeader();
        //apply class to fade elements
        $header.addClass(HIDE_SEARCH_BAR_CLASS);
        //apply class to expand search bar
        mainTimeout = setTimeout(function(){
            $header.addClass(EXPAND_SEARCH_BAR_CLASS);
        }, 500);
		if($(this).val().length > 0){
			var _scope = angular.element(this).scope();
			if(_scope){
				_scope.$apply(function(){
					_scope.searchHandler.kw = "";
				});
			}
		}
    };

    var blurSearch = function(e){
		var $header = getMainHeader();
        if ( mainTimeout ){
            clearTimeout(mainTimeout);
        }
        //wrap in a timout to give user a chance to click icon
        mainTimeout = setTimeout(function(){
			if( !isTypeAheadOpened ){
				$header.removeClass(HIDE_SEARCH_BAR_CLASS).removeClass(EXPAND_SEARCH_BAR_CLASS);
			}
        }, 100);
    };


    //helper function to use a x to clear text fields
    $.fn.clearText = function(){
        $(this).each(function(){
            var $this = $(this),
                inputSelector = $this.data('target'),
                $target = $(inputSelector);
            
            var clearInput = function(){
                $target.val('');
            };

            $this.on('click', clearInput);
        });
    };
    
    var toggleProductFilterColumn = function(){
        var $navColumn = $('#navigation-column'),
            $recContainer = $('#recommended-container');

        //exit if we don't have the divs we need
        if ( ! $navColumn.length ){
            return;
        }

        $navColumn.removeClass('hide');
        $recContainer.addClass('hide');
        return;
    };


    /*
     * Autosuggest related code
     */
   

    var updateSearchForm = function(obj, datum, name){
		var hintVal = datum && datum.name;
		var original = obj && obj.currentTarget &&  obj.currentTarget.value;
		if( hintVal && hintVal.length > 0 && original && original.length > 0 && hintVal.indexOf(original) != -1){
			$('form.search:visible').each(function(_index, _elem){
				var _scope = angular.element(_elem).scope();
				if(_scope){
					_scope.$apply(function(){
						_scope.searchHandler.handleSearch(hintVal);
					});
					$(_elem).trigger('blur');
				}
				return;
			});
		}
    };
    
    /*------------------------------------------------
        EVENTS
    ------------------------------------------------*/
    $('.clear-text').clearText();

    $('#main-search').on({
        'focus': focusSearch,
        'blur': blurSearch
    });

    //this is only on product page for now, probably could be move just a temporary thing
    //so the developers can hook this up 
    $('#product-dropdown').on('click', 'a', toggleProductFilterColumn);
	
    /*
     * This code populates the search input value before submitting search form.
     * This was intended initially as only Brand search was supported.
     * Now, as search is extended to include Popshops keywords, having this code will not allow sub-string search of any input.
     * Therefore, commenting this as per MP - 154  
     
	$('form.search').bind('submit',function(){
		var hintVal = $(this).find('.tt-hint').val();
		var original = $(this).find('.typeahead').val();
		if( hintVal && hintVal.length > 0 && original && original.length > 0
				&& hintVal.indexOf(original) != -1){
			$('#main-search').val(hintVal);
			$('#main-search-collapse').val(hintVal);
		}
    });
	*/
    
	$('input.typeahead').on('typeahead:opened', function(){
		isTypeAheadOpened = true;
	});
	$('input.typeahead').on('typeahead:closed', function(){
		isTypeAheadOpened = false;
		$('#main-search').trigger('blur');
	});

	$('input.typeahead').on('typeahead:selected', updateSearchForm);
	$('input.typeahead').on('typeahead:autocompleted', updateSearchForm);
			
	$(".dropdown").on({
		"shown.bs.dropdown": function () {
			$(this).find("span.caret").toggleClass("caret caret-up");
		},
		"hidden.bs.dropdown": function () {
			$(this).find("span.caret-up").toggleClass("caret-up caret");
		}
	});
	
	$(".collapse").on({
		"show.bs.collapse": function () {
			$(this.parentElement).find("span.caret").toggleClass("caret caret-up");
		},
		"hide.bs.collapse": function () {
			$(this.parentElement).find("span.caret-up").toggleClass("caret-up caret");
		},
		"hidden.bs.collapse": function () {
			$(this.parentElement).find(".view-text").text("See More ");
		},
		"shown.bs.collapse": function () {
			$(this.parentElement).find(".view-text").text("See Less ");	
		}
	});
	
	$(".see-more").on('click', function(){
		var targetClass = $(this).data('target');
		$('.'+targetClass).toggleClass('force-show');

		$(this).toggleClass('expanded');
		
		if ($(this).hasClass("expanded")) {
			$(this).find(".view-text").text("See Less ");
			$(this).find("span.caret").toggleClass("caret-up caret");
		} else {
			$(this).find(".view-text").text("See More ");
			$(this).find("span.caret-up").toggleClass("caret-up caret");
		}
	});
	
	$("#joinModal").on("shown.bs.modal", function () {
		if (jQuery.placeholder) {
			jQuery.placeholder.shim();
      	}
	});

	$(".product-tile div.member-picks-icon").on("click", function(event) {
		event.stopPropagation();
		event.preventDefault();
		if ( $("#memberPicksModal").length > 0 ) {
			$('#memberPicksModal').removeData("bs.modal");
			$("#memberPicksModal").modal("show");
		}	
	});
	
	$('body').on('show.bs.drawer','.drawer',function(_event){
		$("#drawer-control").hide();
	});

	$('body').on('hidden.bs.drawer','.drawer',function(_event){
		$("#drawer-control").show();
	});
	
	$('body #search-earn-q').bind("paste",function(e) {
		e.preventDefault();
	});
	
});
