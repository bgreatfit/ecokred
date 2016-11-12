var loginErrList = [];

$(document).ready(function(e) {
	'use strict';

	$.fn.validateLogin = function(){
		//simple hash of common error checks, we could swap the regex with a function that validates if you prefer
		var errorCheck = {
			email: {
				msg: 'Hmm...that doesn\'t look like a valid email. <br/>Example: "John@domain.com"',
				errdivid:'email-error-p',
				regex: /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
			},
			password: {
				msg: 'Enter a valid password, Must be at least 6 characters',
				errdivid:'password-error-p',
				regex: /^[\x20-\x7F]{6,}$/
			},
			recaptcha: {
				msg:'Please solve the recaptcha',
				errdivId:'recaptcha-error',
				regex: ''
			}
			
		};

		var validateInput = function(){
			var $this = $(this),
			validateType = $this.data('validate'),
			validateConfig,
			hasError = false;

			if ( ! validateType || ! errorCheck[ validateType ] ){
				return console.error('input is missing proper data-validate', validateType)
			}

			//set the config
			validateConfig = errorCheck[ validateType ];

			//attach a tooltip with the error message
			$this.tooltip({
				html: true,
				title: validateConfig.msg,
				trigger: 'manual',
				placement: 'right'
			})

			$('#'+validateConfig.errdivid).html(validateConfig.msg);
			
			//on focus remove error stuff
			$this.on('focus', function(){
				loginErrList = [];
				$this.removeClass('error');
				$this.tooltip('hide');
				$('#'+validateConfig.errdivid).removeClass('visible-xs-block');
				$('#'+validateConfig.errdivid).addClass('hide');
			})

			var attr = $(this).attr('id');
			
			switch(attr) {
			case "recaptcha-login-modal":
			case "recaptcha-login-page":
				var captchaEle = $('#'+ attr +' .g-recaptcha-response');
				if ( captchaEle.size()>0 && captchaEle.val() == "" ) {
					hasError = true;
				}
				break;
			default:
				var value = $this.val(),
				regexTest = validateConfig.regex;
				
				if ( ($this.attr('data-opt') == undefined) || ($this.attr('data-opt') == 'true' && value != "") ){
					if( regexTest.test(value) == false || value == "" ){
						hasError = true;
					}
				}
			}
			if ( hasError ) {
				loginErrList.push(validateConfig.msg);
				$this.addClass('error');
				$this.tooltip('show').addClass('error');
				$('#'+validateConfig.errdivid).addClass('visible-xs-block');
				$('#'+validateConfig.errdivid).removeClass('hide');
				$('#signin-form .alert-danger').removeClass('hide');
			}
		};

		$(this).each(validateInput);
	};


	$('button.submit-base-login').click(function(event){
		loginErrList = [];
		event.preventDefault();
		$('.login-base-form .validate-login').each(function(){
			$(this).validateLogin();
		});
		if(!(loginErrList.length >0)){
			$('.login-base-form').submit();
		}
	});
	
	$('button.submit-login').click(function(event){
		loginErrList = [];
		event.preventDefault();
		$('.login-form .validate-login').each(function(){
			$(this).validateLogin();
		});
		if(!(loginErrList.length >0)){
			$('.login-form').submit();
		}
	});
	
});
