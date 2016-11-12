
		var app = angular.module('MyPointsApp');

		app.controller('HeaderController', ['$rootScope',  '$scope', 'UrlService','UtilService', 'SearchRoutingService', function($rootScope, $scope, UrlService,UtilService, SearchRoutingService){
		
			$scope.searchHandler = {
				kw: "",
				handleSearch : function(_kw){
					_kw = _kw || $scope.searchHandler.kw;
					if(!_kw || _kw.length <= 0){
						return;
					}
					// santize input
					_kw = UtilService.santizeString(_kw);
					if(!_kw || _kw.length <= 0){
						return;
					}
					// checks for exact match and/or brand page redirect. If current page is not the search page it will redirect there with the q param appended
					var _redirectUrl = SearchRoutingService.getRouteForSearchterm(_kw);
					if(_redirectUrl){
						UrlService.redirect(_redirectUrl);
						return;
					}
					// at this point it means we're on the search page
					$scope.searchHandler.kw =  _kw;
					// braodcast  the new value - SearchContoller listens for this event 
					$rootScope.$broadcast('update-search', $scope.searchHandler.kw);
				}
			};

			// this will fire on every load - if there is a q  param, deal with it
			var _urlParams = UrlService.parsedParameterMap();			
			if(_urlParams.kw && _urlParams.kw.length > 0){
				$scope.searchHandler.handleSearch(_urlParams.kw);
			};
			
		}]);