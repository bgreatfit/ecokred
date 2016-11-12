'use strict';

/**
 * @ngdoc service
 * @name MyPointsApp.SearchRoutingService
 * @description
 * # SearchRoutingService
 * Service in the MyPointsApp.
 */
angular.module('MyPointsApp')
  .service('SearchRoutingService', [ '$http', '$q', '$rootScope', '$cacheFactory', 'UtilService', 'UrlService',
    function ($http, $q, $rootScope, $cacheFactory, UtilService, UrlService){
		
//TODO move these to constants when it exists
		var SEARCH_ROUTE = "/emp/u/search.vm?kw=";
		var BRAND_ROUTE = "/emp/u/shop-by-brand.vm?brand=";
		var BRAND_ROUTE_SHOPPER_MARKETING = "/emp/u/sm/offer-details.vm?brand=";
		var GAMES_ROUTE = "/emp/u/games.vm";
		var COUPON_ROUTE = "/emp/u/grocery-coupons.vm";
		
		var EXACT_MAP_CACHE_KEY = "ExactMapCache";
		var _cache = $cacheFactory('SearchRoutingServiceeCache');

		var _gamesBrand = "MyPointsCashGames";
		var _couponBrand = "CouponsCom";		
		var _exactMatchSearchMap = {};	

		var _populateExactMatchSearchMap = function(){
			var _deferred = $q.defer();
			
			var _cachedExactMap = _cache.get(EXACT_MAP_CACHE_KEY);
			if (_cachedExactMap){
				_deferred.resolve(_cachedExactMap);
				return;
			}
			
			$http({
				method: 'GET',
				url:"/emp/u/data/g/ac/exact_match_map.vm",
			}).then(function(_response){
				_cache.put(EXACT_MAP_CACHE_KEY, _response.data);
				_deferred.resolve(_response.data);
			}).catch(function(_errResult){
				_deferred.reject(_errResult);
			});
			
			return _deferred.promise;
		};
		
		var _getRouteForSearchterm = function(_term){
			
			if((!_term || _term.length <= 0) || (Object.keys(_exactMatchSearchMap).length <= 0)){
				return false;
			}
				
			var _termLowerCase = _term.toLowerCase(); 
			var _termLowerCaseDecoded = UtilService.htmlDecode(_termLowerCase); // decode any char entities and lowercase the string
			var _termStripChars = UtilService.removeSpecialChars(_termLowerCaseDecoded);
			
			if(!_termLowerCase || !_termLowerCaseDecoded || !_termStripChars){
				return false;
			}

			var _exactMatch = false;
		
			// check for an exact match in the map
			if(typeof _exactMatchSearchMap[_termLowerCase] !== "undefined"){
				_exactMatch = _exactMatchSearchMap[_termLowerCase];
			}else if(typeof _exactMatchSearchMap[_termLowerCaseDecoded] !== "undefined"){
				_exactMatch = _exactMatchSearchMap[_termLowerCaseDecoded];
			}else if(typeof _exactMatchSearchMap[_termStripChars] !== "undefined"){
				_exactMatch = _exactMatchSearchMap[_termStripChars];
			}
			// if no match and we arent on the search page, return the search page url  with the term appended
			// if no match and we ARE on the search page, return false 
			if(!_exactMatch){
				return (UrlService.currentUrl().indexOf("/emp/u/search.vm") < 0)? SEARCH_ROUTE + encodeURIComponent(_term) : false;
			}
			
			// games page
			if(_exactMatch.brandAttrName === _gamesBrand){
				return GAMES_ROUTE;
			}
			//coupons.com page
			if(_exactMatch.brandAttrName === _couponBrand){
				return COUPON_ROUTE;
			}
			// shopper marketing
			if(_exactMatch.isShopperMarketing){
				return BRAND_ROUTE_SHOPPER_MARKETING + _exactMatch.brandAttrName + "&kw=" + encodeURIComponent(_term);
			}
			// default to brand page
			return BRAND_ROUTE + _exactMatch.brandAttrName + "&kw=" + encodeURIComponent(_term);
		}
		
		
		var _init = function(){			
			_populateExactMatchSearchMap().then(function(_response){
				_exactMatchSearchMap = _response;
			}).catch(function(_errResult){
				if($rootScope.isIntegration){
					console.error(_errResult);
				}
			});
		}
		
		return {
			init : _init,
			getRouteForSearchterm : _getRouteForSearchterm
		};


  }]);