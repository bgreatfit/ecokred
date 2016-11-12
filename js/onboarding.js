var errList = [];
var vuserErrors = null;

$(document).ready(function(e) {
	'use strict';
	
	var rotateHomepageImage = function(){
		var backgroundImages = [
				'/images/g/display/forms/signup/bg1.jpg',
				'/images/g/display/forms/signup/bg2.jpg',
				'/images/g/display/forms/signup/bg3.jpg',
				'/images/g/display/forms/signup/bg4.jpg',
				'/images/g/display/forms/signup/bg5.jpg',
				'/images/g/display/forms/signup/bg6.jpg'
			],
			randomIndex = Math.floor( Math.random() * backgroundImages.length ),
			randomImage = backgroundImages[ randomIndex ],
			$img;

		$img = $('<img/>', {
			'src': randomImage,
			'class': 'onboarding-image'
		}).appendTo('#onboarding-bg');

		$img.on('load', function(){
			$img.addClass('load');
		});
	};

	//jquery function for gender selection
	$.fn.genderSelect = function(){
		var $this = $(this),
			$input,
			$maleIcon,
			$femaleIcon;

		if ( $this.length !== 1 ){
			return;
		}

		//get the jquery elements needed
		$input = $this.find('input');
		$maleIcon = $this.find('.male-icon');
		$femaleIcon = $this.find('.female-icon');

		//highlight the appropriate icon
		var highlightIcon = function(){
			if ( $input.val() === 'M' ){
				$maleIcon.addClass('active');
				$femaleIcon.removeClass('active');
			}else if ($input.val() === 'F'){
				$femaleIcon.addClass('active');
				$maleIcon.removeClass('active');
			}
		};

		//set the value to male
		var setMale = function(){
			errList = [];
			$('.gender-select').tooltip('hide');
			$('.gender-select').css("border","none");
			$input.val('M').trigger('change');
		};

		var setFemale = function(){
			errList = [];
			$('.gender-select').tooltip('hide');
			$('.gender-select').css("border","none");
			$input.val('F').trigger('change');
		};

		$maleIcon.on('click', setMale);
		$femaleIcon.on('click', setFemale);
		$input.on('change', highlightIcon);
		highlightIcon();
	};

	var toggleCheck=function(){
		$(this).prop('checked', !($(this).is(':checked')));
	   };
	var clickInterest = function(e){
		
		$(this).toggleClass('active');
		$(this).find('input[type=checkbox]').each(toggleCheck);
		$('#js_alert_box').hide();
	};
	
	$('.gender-select').genderSelect();
	
	$('.icon-container').on('click', 'a', clickInterest);
	
	$(document).on('click','.finish-btn',function(){
		if($('#formProfile a.active').size() > 0 ){
			$('form').submit();
		}
		else{
			$('#js_alert_box').html('<p>Please select atleast one category to finish</p>');
			$('#js_alert_box').show();
		}
	});
	
	
	//add in a backgorund image
	rotateHomepageImage();


	$.fn.validate = function(){
	//simple hash of common error checks, we could swap the regex with a function that validates if you prefer
	var errorCheck = {
		email: {
			msg: 'Hmm...that doesn\'t look like a valid email. <br/>Example: "John@domain.com"',
			regex: /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
		},
		password: {
			msg: 'Enter a valid password, Must be at least 6 characters',
			regex: /^[\x20-\x7F]{6,}$/
		},
		password2: {
			msg: 'Passwords do not match',
			regex: ''
		},
		zip: {
			msg: 'Uh oh, we don\'t recognize that zip code',
			regex: /(^([A-Za-z][0-9][a-zA-Z])[-\s]*([0-9][a-zA-Z][0-9])$)|(^([0-9]{5})(?:[-\s]*([0-9]{4}))?$)/
		},
		date:{
			msg: 'Enter a valid Date',
			regex:''
		},
		fname:{
			msg:'Enter a valid First name',
			regex:/^[a-z \- ' ]*$/i
		},
		name:{
			msg:'Enter a valid name',
			regex:/^[a-z \- ' ]*$/i
		},
		gender:{
			msg:"Please select your Gender",
			regex:''
		},
		vuser:{
			msg:"Please enter a valid ID",
			regex:/^[0-9A-Z]+$/
		},
		ageRange:{
			msg:"Please confirm that you are above 18 years",
			regex:''	
		}
	};

	var validateInput = function(){
		var $this = $(this),
		validateType = $this.data('validate'),
		validateConfig;

	if ( ! validateType || ! errorCheck[ validateType ] ){
		return console.error('input is missing proper data-validate', validateType);
	}

	//set the config
	validateConfig = errorCheck[ validateType ];

	//attach a tooltip with the error message
	$this.tooltip({
		html: true,
		title: validateConfig.msg,
		trigger: 'manual',
		placement: 'right'
	});

	//on focus remove error stuff
	$this.on('focus', function(){
		errList = [];
		$this.removeClass('error');
		$this.tooltip('hide');
		if($this.attr('name') == "birthDateDay" || $this.attr('name') == "birthDateMonth" || $this.attr('name') == "birthDateYear" ){
			$('[name=birthDateYear]').tooltip('hide');
			$('.dob').css("border-color","rgba(255,255,255,0.5)");		}
	});

	if($this.attr('name') == "birthDateDay" ){}
	else if($this.attr('name') == "birthDateMonth" ){}
	else if($this.attr('name') == "birthDateYear" ){
		var now = moment();
		if ( $this.attr('data-opt') == undefined || ($('[name=birthDateYear]').val() != "" || $('[name=birthDateMonth]').val() != "" || $('[name=birthDateDay]').val() != "" ) ){
			var dob_m = moment([$('[name=birthDateYear]').val(), parseInt($('[name=birthDateMonth]').val())-1, $('[name=birthDateDay]').val()]);
			if( !dob_m.isValid() || dob_m.isBefore('1900-01-01') || dob_m.isAfter(now) ){
				errList.push(validateConfig.msg);
				$this.addClass('error');
				$('.dob').css("border-color","#d7302e");
				$this.tooltip('show').addClass('error');
			}
		}
	}
	else if ( $this.attr('name') == "age"){
		if( !$('[name=age]').prop('checked')){
			errList.push(validateConfig.msg);
			//$('label[for=age]').addClass('error');
			//$('label[for=age]').tooltip('show').addClass('error');
			$this.addClass('error');
			$this.data('bs.tooltip').options.placement = "left";
			
			$this.tooltip('show').addClass('error');
		}
	}
	else if ($this.hasClass("gender-select")) {
		if( $('#gender-input').attr('data-opt') == undefined && !$('.gender-select a.active').length > 0 ){
			errList.push(validateConfig.msg);
			$this.addClass('error');
			$this.tooltip('show').addClass('error');
		}
	}
	else if ($this.hasClass("confirm_passwd")) {
		if( $this.val() != $('#password1').val() ){
			errList.push(validateConfig.msg);
			$this.addClass('error');
			$this.tooltip('show').addClass('error');
		}
	}
	else if ($this.attr('name') == "vuser" ){

		var vnum = $this.val();
		if ( vnum == "" ) {
			errList.push(validateConfig.msg);
			$this.addClass('error');
			$this.tooltip('show').addClass('error');
		}

		var vuserRegex = $this.attr('data-vregex');
		if ( vuserRegex && vuserRegex != "" ) {
			switch(vuserRegex) {
				case "ALPHANUMERIC_UPPER":
					vnum = vnum.toUpperCase();
					$this.val(vnum);
					var regexTest = validateConfig.regex;
					if( regexTest.test(vnum) == false ){
						errList.push(validateConfig.ump_msg);
						$this.addClass('error');
						$this.tooltip('show').addClass('error');
					}
					break;
			}
		}
		
	}
	
	else{
		var value = $this.val(),
		
		regexTest = validateConfig.regex,
		errorMsg = validateConfig.msg;

		if ( ($this.attr('data-opt') == undefined) || ($this.attr('data-opt') == 'true' && value != "") ){
			if( regexTest.test(value) == false ){
				errList.push(errorMsg);
				$this.addClass('error');
				$this.tooltip('show').addClass('error');
			}else{
				if($this.attr('name') == "name.full"){
					if ( ( $("input[name='name.first']").size() > 0 ) && ( $("input[name='name.last']").size() > 0 ) ){
						var fullname = value;
						fullname = fullname.trim();
						fullname = fullname.replace(/\s\s+/g, ' ');// Replace multiple spaces with single space
						var firstName = fullname;
						var lastName = '';
						if ( fullname.lastIndexOf(' ') > 0){
							firstName = fullname.substring(0, fullname.lastIndexOf(' '));
							lastName = fullname.substring( fullname.lastIndexOf(' ')+ 1 , fullname.length);
						}
						$("input[name='name.last']").val(lastName);
						$("input[name='name.first']").val(firstName);
						$this.val(fullname);
					}
				}
			}
		}
	}
	};

	$(this).each(validateInput);
};


$('button.submit').on("click",function(event){
	event.preventDefault();
	if( $('.regForm-step-1').is(':visible')){
        $('.regForm-continue').trigger('click');
        return false;
	}
	else{
		$('#regForm .validate').each(function(){
			$(this).validate();
		});

		if(!(errList.length >0)){
			// vuser defined in js/g/vars/vuserValidation.js
			if ( typeof validateVuser != "undefined" ) {
				var _form = $('#regForm');
				vuserErrors = validateVuser.validate(_form[0]);				
			} else {
				$('form #password2').val($('form #password1').val());
				$('form').submit();
			}
		}
	}
	return false;
});

$('.regForm-continue').on("click",function(event) {
	$(".regForm-step-1 .validate").validate();
	if(!(errList.length >0)){
		if ( $('.text-carousel').length == 0 ) {
			$('.regForm-logo').hide();
		}
		$('.regForm-fb').hide();
		$('.regForm-step-1').hide();
		$('.regForm-step-2').show();
	}
	return false;
});

$('#joinModal').on('hidden.bs.modal', function (e) {
	$('#regForm')[0].reset();
	$('[name=birthDateYear]').tooltip('hide');
	$('.dob').css("border-color","rgba(255,255,255,0.5)");
});

});

function nextInputField(elmnt,content){
	if (content.length==elmnt.maxLength)
	{
		var tabIndexInitial = $('.dob input')[0].tabIndex;
		next=elmnt.tabIndex-(tabIndexInitial - 1 );
		if (next<$('.dob input').length)
		{
			$('.dob input')[next].focus();
		}
	}
}

//Callback function from vuserValidation JS 
function showErrorMessage(errorMessage){
	vuserErrors = errorMessage;
	
	if ( vuserErrors != null ) {
		errList.push(vuserErrors);
		$('#vuser').addClass('error');
		$('#vuser').data('bs.tooltip').options.title = vuserErrors;
		$('#vuser').tooltip('show').addClass('error');
	}
}

//Adding trim function to String object
if(typeof String.prototype.trim !== 'function') {
  String.prototype.trim = function() {
    return this.replace(/^\s+|\s+$/g, '');
  };
}