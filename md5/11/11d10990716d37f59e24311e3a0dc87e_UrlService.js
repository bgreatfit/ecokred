'use strict';

/**
 * @ngdoc service
 * @name MyPointsApp.UrlService
 * @description
 * # UrlService
 * Service in the MyPointsApp.
 */
angular.module('MyPointsApp')
  .service('UrlService', ['$window', '$location', '$q',
    function ($window, $location, $q){
		
		var _currentHostname = function(){
			return $window.location.hostname;
		}

		var _currentRoot = function(){
			return $window.location.protocol + "//" + $window.location.host ;
		}
		
		var _currentUrl = function(){
			return $window.location.href;
		}
		
		var _parameters = function(){
			return $window.location.search;
		}
	
		// returns the query string (window.location.search) as a map
		var _parsedParameterMap = function(){					
			var _pairs = _parameters().slice(1).split('&');
			var _result = {};
			_pairs.forEach(function(_pair) {
				_pair = _pair.split('=');
				if(_pair[0] != "" && _pair[1] != ""){
					_result[_pair[0]] = decodeURIComponent(_pair[1] || '');
				}
			});
			return JSON.parse(JSON.stringify(_result));
		}
		
		// takes a map and returns a query-string-formatted string of the values
		var _parametersFromMap = function(_paramMap){
			if(!_paramMap){
				return "";
			}
			var _result = '';
			for(var _key in _paramMap) {
				_result += _key + '=' + _paramMap[_key] + '&';
			}
			// remove last &
			_result = _result.slice(0, _result.length - 1);
			return _result;
		}
		
		var _redirect = function(_url){
			if(_url && _url.length > 0){
				$window.location.assign(_url);
			}
		}

		var _updateDisplayedParameter = function(_paramName, _paramValue){
			if(!_paramName || !_paramValue){
				$q.reject({error: "Missing paramater"});
			}
			var _input = {};
			_input[_paramName] = _paramValue;
			return _updateDisplayedParameters(_input);
		}
		
		var _updateDisplayedParameters = function(_paramMap){
			if(!_paramMap){
				return $q.reject({error: "Missing paramater: _paramMap"});
			}
			try{
								
				var _newParamString = _parametersFromMap(_paramMap);				
				// if nothing has changed just resolve
				if(_newParamString && _newParamString === _parameters().slice(1)){
					return $q.resolve(true);
				}
				
				// keep a reference to the changed out  params - will be passed to the history object
				var _prevParamMap = _parsedParameterMap();

				_newParamString = $window.location.pathname + "?" + _newParamString;
				// HACK -  IE 9 and older Android browsers FIX - 
				// Older browsers dont support history.pushSatate, so reject with a url the caller can redirect to (or not) 
				if(!$window.history || !$window.history.pushState){
					return $q.reject({error: "Force redirect", redirectUrl: _newParamString});
				}

				$location.url(_newParamString);
				$location.replace();
				// caller has to handle listening for window.popstate and examining the state obj of the event
				history.pushState(_paramMap, "", $location.absUrl());
				
				return $q.resolve(true);
				
			}catch(_errResult){
				return $q.reject({error: _errResult});
			}
		}
		
		var _clearDisplayedParameters = function(){			
			try{				
				// if nothing to clear - no query string - resolve
				var _current = _parameters().slice(1);
				if(!_current || _current.length <= 0){
					return $q.resolve(true);
				}
				// HACK -  IE 9 and older Android browsers FIX - 
				// Older browsers dont support history.pushSatate, so reject with a url the caller can redirect to (or not) 
				if(!$window.history || !$window.history.pushState){
					return $q.reject({error: "Force redirect", redirectUrl: $window.location.pathname});
				}
				
				// keep a reference to the changed out  params - will be passed to the history object
				var _prevParamMap = _parsedParameterMap();
				
				$location.url($window.location.pathname);
				$location.replace();
				// pass an empty object to the state - caller needs to handle it correctly (or not)
				history.pushState(false, "", $location.absUrl());
				
				return $q.resolve(true);
			}catch(_errResult){
				return $q.reject({error: _errResult});
			}
		}

		
		return {
			currentUrl : _currentUrl,
			currentRoot : _currentRoot,
			currentHostname : _currentHostname,
			parameters : _parameters,
			parsedParameterMap : _parsedParameterMap,
			parametersFromMap : _parametersFromMap,
			updateDisplayedParameter : _updateDisplayedParameter,
			updateDisplayedParameters:_updateDisplayedParameters,
			clearDisplayedParameters: _clearDisplayedParameters,
			redirect : _redirect
		};
  }]);