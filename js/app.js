(function(){		var app = angular.module('MyPointsApp',["ngSanitize", "ngAnimate"]).run( ['$rootScope','$sanitize', '$animate' ,'$http', '$httpParamSerializerJQLike', 'MemberInfoService', 'UrlService', 'SearchRoutingService', 'ContextConfig', function($rootScope, $sanitize, $animate, $http, $httpParamSerializerJQLike, MemberInfoService, UrlService, SearchRoutingService, ContextConfig){					$rootScope.isIntegration = ContextConfig.isIntegration || false;			$rootScope.memberInfo = $rootScope.memberInfo || {"isInitial":true};			MemberInfoService.init().then(function(_memberInfo){				$rootScope.memberInfo = _memberInfo;				MemberInfoService.register($rootScope, function(){					$rootScope.memberInfo = MemberInfoService.get();				});			});						SearchRoutingService.init();		}]).config( ['$locationProvider', function( $locationProvider){					if (window.history && window.history.pushState) {				// need to set this config in order to have access to non-hash query string and prevent link re-writes				$locationProvider.html5Mode({					enabled: true,					requireBase: false,					rewriteLinks:false				});			}else{				// IE 9 and older Android browsers FIX - NOTE: this requires the base href meta tag exist in default.vm				$locationProvider.html5Mode({					enabled: false,					requireBase: true,					rewriteLinks:false				});			}		}]);		})();