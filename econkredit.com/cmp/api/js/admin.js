!function(t){t(document).ready(function(){t(".button-collapse").sideNav(),t(".input-field select").material_select(),t(".datepicker").pickadate({selectYears:20}),t(".slimscroll").each(function(){var e=t(this),a={};t.extend(a,e.data()),e.slimScroll(a)}),t("pre").each(function(){var e=t(this),a=e.children("code").eq(0);e.addClass("prettyprint"),e.addClass(a.attr("class")),e.attr("data-language",a.attr("class")),e.html(a.html().trim())}),t("pre").length>0&&prettyPrint()})}(jQuery);