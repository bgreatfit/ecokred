'use strict';

/**
 * @ngdoc service
 * @name MyPointsApp.MemberInfoService
 * @description
 * # MemberInfoService
 * Service in the MyPointsApp.
 */
angular.module('MyPointsApp')
  .service('MemberInfoService', ['$http', '$rootScope', '$q',
    function ($http, $rootScope, $q){

		var _memberInfo = {isInitial:true};

		var _registerListener = function(_scope, _callback) {
			var _handler = $rootScope.$on('memberInfo-update', _callback);
			_scope.$on('$destroy', _handler);
		};

		var _notifyListeners = function() {
			$rootScope.$emit('memberInfo-update');
		};

		var _get = function (){
			return _memberInfo;
		};
		
		var _set = function (){
			return $http({method: 'GET',url:"/emp/u/data/g/member/info.vm",});
		};

		var _update = function(){
			_set().then(function(_response){
				_memberInfo = _response.data;
				_notifyListeners();
			}).catch(function(_errResult){
				//
			});
		};
		
		var _init = function (){
			if(_memberInfo && !_memberInfo.isInitial){
				return $q.resolve(_memberInfo);
			}else{			
				return _set().then(function(_response){
					_memberInfo = _response.data;
					return $q.resolve(_memberInfo);
				}).catch(function(_errResult){
					return $q.reject(_errResult);
				});
			}
		};

		
		return {
			init : _init,
			get : _get,
			update: _update,
			register:_registerListener 
		};
  }]);