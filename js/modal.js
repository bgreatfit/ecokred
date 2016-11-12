
var formatOnOKUrl = function(_elem){
    if(!_elem || !$(_elem).attr("href")){
        return;
    }
    var _url = $(_elem).attr("href");
    _url = _url + (_url.indexOf('?') === -1 ? '?' : '&') + 'src=GA_pa_add';
    // product list
    if( $(_elem).data("list") && ($(_elem).data("list") !== "") ) {
        _url = _url + '&src=GA_pal_' + encodeURIComponent($(_elem).data("list"));
    }
    // brand
    if( $(_elem).data("brand") && ($(_elem).data("brand") !== "") ) {
        _url = _url + '&src=GA_pr1br_' + encodeURIComponent($(_elem).data("brand"));
    }
    // variant
    if( $(_elem).data("variant") && ($(_elem).data("variant") !== "") ) {
        _url = _url + '&src=GA_pr1va_' + encodeURIComponent($(_elem).data("variant"));
    }
    return _url;
}

var initBannerModals = function(){
    $('body').on('click','.bannerNonAuthLanding',function(event){
        event.preventDefault();
        if ( $(this).hasClass('d_login') ) {
            $("#loginModal").modal('hide');
        }
        clearErrors();
        clearRegForm();
        if ( $("#joinModal").hasClass('o_signup') ) {
            $("#joinModal").removeClass('o_signup');
        }
        $("#joinModal").addClass('g_signup');
        $("#regForm #ovride").val("");
        $("#joinModal").modal('show');
    });
};

var initRegisterModals = function(){
    $('body').on('click','.noAuth',function(event){
        if ( $("#joinModal").length > 0 ){
            event.preventDefault();
            clearErrors();
            clearRegForm();
            if ( $("#joinModal").hasClass('g_signup') ) {
                $("#joinModal").removeClass('g_signup');
            }
            $("#joinModal").addClass('o_signup');
            var _srcAppendedUrl = false;
            var _srcDataNode = ($(this).hasClass("empClick"))? $(this) : $(this).find("a.empClick")[0];
            if(_srcDataNode){
                _srcAppendedUrl = formatOnOKUrl(_srcDataNode);
            }
            var offerDetails = $(this).children("div.i_p_d").data();
            if ( offerDetails != undefined ) {
                $("#modal-image").attr("src", offerDetails.img);
                $("#offer_details p").html(offerDetails.desc);
                var offer_link = _srcAppendedUrl || offerDetails.href;
                $("#regForm #ovride").val("/emp/u/member/welcome-interstitial.vm?BREAKOUT=1&rloc=" + encodeURIComponent(offer_link));
                if ( offerDetails.ispscell || offerDetails.ispscell == "true") {
                    var pslink = offer_link.replace("a.do", "ps.do");
                    $("#joinModal p.np-link a").attr("href", pslink);
                    $("#joinModal p.np-link").addClass("show");
                } else {
                    $("#joinModal p.np-link").removeClass("show");
                }
                $("p.login_m a").attr("data-onok", offer_link);
            }
            $("#joinModal").modal("show");
        }
    });
};

var initLoginModals = function() {
    $('body').on('click','.loginModal',function(event){
        if ( $("#loginModal").length > 0 ){
            clearErrors();
            event.preventDefault();
            var offerDetails = $(this).data();
            if ( offerDetails.onok != undefined && offerDetails.onok != "" ) {
                $("#signinForm #ovride").val(offerDetails.onok);
            } else {
                $("#signinForm #ovride").val('');
            }
            $("#loginModal").modal('show');
        }
    });
}

function clearRegForm() {
    $('.regForm-fb').show();
    $('.regForm-step-1').show();
    $('.regForm-step-2').hide();
}

var initLoginRegModals = function() {
    initBannerModals();
    initRegisterModals();
    initLoginModals();
    $("#joinModal").on('shown.bs.modal', function(e) { $('body').addClass('c_modal-open'); });
    $("#joinModal").on('hidden.bs.modal', function (e) { $('body').removeClass('c_modal-open'); })
}


$(document).ready(function(){
    initLoginRegModals();
});