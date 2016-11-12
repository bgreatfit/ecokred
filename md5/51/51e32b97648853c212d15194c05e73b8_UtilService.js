'use strict';

/**
 * @ngdoc service
 * @name MyPointsApp.UtilService
 * @description
 * # UtilService
 * Service in the MyPointsApp.
 */
angular.module('MyPointsApp')
  .service('UtilService', ['$sanitize',
    function ($sanitize){
		
		var _htmlDecode = function(_term){
			var _elem = document.createElement('div');
			_elem.innerHTML = _term;
			return _elem.childNodes.length === 0 ? "" : _elem.childNodes[0].nodeValue;
		}

		var _removeSpecialChars = function(_string){
			if(!_string || _string.length <= 0){
				return undefined;
			}
			try{
				_string = _string.replace(/[^a-z\d\s]+/gi, ""); // removes special chars, leaving alpha numeric, preserving whitespace, ignoring case
				return _string; 
			}catch(_errResult){
				return undefined;
			}
		}
	
		var _santizeString = function(_str){
			if(!_str || _str.length <= 0){
				return "";
			}
			try{
				_str = _removeSpecialChars(_str);
				_str = $sanitize(_str);
				return _str;
			}catch(_errResult){
				return "";
			}
		}
		
		return {
			santizeString : _santizeString,
			removeSpecialChars : _removeSpecialChars,
			htmlDecode: _htmlDecode
		};


  }]);