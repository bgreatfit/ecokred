'use strict';

/**
 * @ngdoc service
 * @name MyPointsApp.GTMService
 * @description
 * # GTMService
 * Service in the MyPointsApp.
 */
angular.module('MyPointsApp')
  .service('GTMService', ['$rootScope', '$window', '$location',
    function ($rootScope, $window, $location){
		
		var _getTrackerName =  function(){
			return $window.ga && $window.ga.getAll()[0].get('name');
		}
	
		var _trackPageView = function(_url){
			/**
			* NOTE: we dont have a GTM trigger or variables set up for page views from dataLayer variables, page views are fired via the gtm.load
			* 				so instead, get a reference to the ga tracker name (loaded and set by GTM)
			* 				then set the location to be the _url param, then fire a normal analytics page view
			*/
			_url = _url || $location.absUrl() || $window.location.href;
			if($window.ga){
				var _trackerName = _getTrackerName();
				if(_trackerName){
					$window.ga(_trackerName + '.set', 'location', _url);
					$window.ga(_trackerName + ".send","pageview");					
				}
			}
		};
		
		// fire imprsssions to analytics - populates ec:addImpression and then fires a nonInteraction event to make sure the impressions are fired
		var _trackImpressionsAnalytics = function(_preparedImpressionList){
			var _trackerName = _getTrackerName();
			if(_trackerName && _preparedImpressionList.length > 0){
				_preparedImpressionList.forEach(function(_impressionItem, _index){
					if(_impressionItem){
						$window.ga(_trackerName + '.ec:addImpression', _impressionItem);
					}
				});
				$window.ga(_trackerName + ".send", 'event','ecommerce','addImpressions', {'nonInteraction': true});				
			}
		}

		var _trackEcommerceGTM = function(_preparedImpressionList, _productDetailsList, _eventList){
			if(!_preparedImpressionList && !_productDetailsList && !_eventList){
				return;
			}
			  // currently only handles  impressions TODO: handle detail and events
			 if(_preparedImpressionList.length > 0){
				var dataLayer = $window.dataLayer || [];
				dataLayer.push({
					'ecommerce': undefined
				  });
				dataLayer.push({
					"event" : "addImpressions",
					"ecommerce": {
						"impressions": _preparedImpressionList
					}
				});
			 }
		}
		
		var _prepareImpressionsList = function(_brandImpressionList){
			var _impressions =[];
			_brandImpressionList.forEach(function(_brandImpressionItem, _index){
				if(_brandImpressionItem.display && _brandImpressionItem.display.impression){
					var _item = {
						"id":_brandImpressionItem.display.impression.id, 
						"brand": _brandImpressionItem.display.impression.brand,
						"list": _brandImpressionItem.display.impression.list,
						"position": _brandImpressionItem.display.impression.position,
						"points" : _brandImpressionItem.display.impression.points || "",	
						"package" : _brandImpressionItem.display.impression.package || ""
					}				
					_impressions.push(_item);
				}
			});			
			return  _impressions;
		}
		
		
		
		var _trackImpressions = function(_brandImpressionList){
			var _impressions = _prepareImpressionsList(_brandImpressionList);
			_trackImpressionsAnalytics(_impressions);
			_trackEcommerceGTM(_impressions, null, null);
		}
		
/*
		var _trackDetails = function(_productDetailsList){
			_trackEcommerceGTM(null, _productDetailsList, null);
		}

		var _trackEventList = function(_eventList){
			_trackEcommerceGTM(null, null, _eventList);
		}
*/	
		return {
			TrackPageView : _trackPageView,
			TrackImpressions: _trackImpressions
		};


  }]);
