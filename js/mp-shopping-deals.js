var mp_popover = {

    position : "",
    popover_position : "",
    screen_size : "lg",
    screen_width : "",
    hide_popover : true,
    popoverPositions : [],

    setPopoverPosition : function(position){
        mp_popover.position = position;
    },
    resizeWindow : function(){
        var _previous_screen_size = this.screen_size;
        screen_width =  $('body .container').css('width').replace('px','');
        screen_width = parseInt(screen_width);
        if(screen_width >= 1148){
            if(mp_deals.popoverPositions && mp_deals.popoverPositions.length > 0){
                mp_popover.popover_position = mp_deals.popoverPositions[0];

            }
            else{
                mp_popover.popover_position = mp_popover.position ;
            }
            mp_popover.screen_size = "lg";

        }else if(screen_width >= 948 ){
            if(mp_deals.popoverPositions && mp_deals.popoverPositions.length > 0){
                mp_popover.popover_position = mp_deals.popoverPositions[1];

            }
            else{
                mp_popover.popover_position = mp_popover.position ;
            }
            mp_popover.screen_size = "md";
        }else if(screen_width >=728 ){
            if(mp_deals.popoverPositions && mp_deals.popoverPositions.length > 0){
                mp_popover.popover_position = mp_deals.popoverPositions[2];

            }
            else{
                mp_popover.popover_position = mp_popover.position - 1 ;
            }
            mp_popover.screen_size = "sm";
        }else if(screen_width < 728){
            if(mp_deals.popoverPositions && mp_deals.popoverPositions.length > 0){

                mp_popover.popover_position = mp_deals.popoverPositions[3];
            }
            else{
                mp_popover.popover_position = Math.max(mp_popover.position - 2,2) ;
            }

            mp_popover.screen_size = "xs";
        }
        /* If the item has any hidden classes close popover*/
        if( $('.selected_deal') && $('.selected_deal').prop('class') && $('.selected_deal').prop('class').indexOf('hidden-') > 0 ){
            mp_popover.closePopover();
            return;
        }

        if(mp_popover.screen_size != _previous_screen_size){
            $('.popover.bottom').remove();
            $('img.arr_pointer').hide();
            mp_popover.hide_popover = false;
            $('.selected_deal').each(mp_popover.displayPopover);

        }
    },
    closePopover : function(){
        $('img.arr_pointer').hide();
        $('.selected_deal').removeClass('selected_deal');
        $( ".popover.bottom" ).animate(
            {"height": "0px" },
            {	duration: 400,
                complete: function() {
                    $('.popover.bottom').remove();
                }
            }
        );
    },

    displayPopover : function(){
        if(!$(this).hasClass('suppressed')) {
            if($(this).hasClass('selected_deal') && mp_popover.hide_popover){
                mp_popover.closePopover();
                return;
            }
            $('.selected_deal').removeClass('selected_deal');
            $(this).addClass('selected_deal');

            var animate = true, offerHTML = '';
            if(!mp_popover.hide_popover) animate = false;

            var visible_popoverId = $('.popover.bottom').attr('id');

            var deal_id = $(this).attr('id');
            if(deal_id){
                prod_id = deal_id.replace("deal_","");
                var provider = mp_deals.getDealDetails(prod_id, 'provider');
                if(provider != "Amazon"){
                    var deal_announcement_title = mp_deals.getDealDetails(prod_id, 'title');
                    //var deal_title = mp_deals.getDealDetails(prod_id, 'title');
                    var deal_image = mp_deals.getDealDetails(prod_id, 'imageurl');
                    var percent_back = mp_deals.getDealDetails(prod_id, 'percentBack');
                    var pointsText = mp_deals.getDealDetails(prod_id, 'calculatedPointsText');
                    var redemptionLocation = mp_deals.getDealDetails(prod_id, 'redemptionLocation');
                    var merchant = mp_deals.getDealDetails(prod_id, 'merchant');
                    var deal_link = mp_deals.getDealDetails(prod_id, 'dealurl');
                    var price = mp_deals.getDealDetails(prod_id, 'price');
                    var original_price = mp_deals.getDealDetails(prod_id, 'originalPrice');
                    var isNonAuth = ( $('.i_p_d').size() > 0 );

                    var popover_id = Math.ceil(parseInt(prod_id)/mp_popover.popover_position);

                    var popover_offset = popover_id * mp_popover.popover_position;


                    if($('.deals').size()  < popover_offset ){
                        popover_offset = $('.deals').size();
                    }

                    if ( $('.popover.bottom').remove().size() > 0 && visible_popoverId == popover_id ) { animate = false; }
                    $('img.arr_pointer').hide();

                    var nonAuthHTML = "";
                    var nonAuthClass = "";
                    if (isNonAuth){
                        nonAuthClass = "noAuth";
                        nonAuthHTML =  $("#"+deal_id).children('div.product-tile').find('a div.i_p_d')[0].outerHTML;
                        nonAuthHTML = nonAuthHTML +"";
                    }


                    var popover_content = "<div class='col-xs-12 col-sm-6'>" +
                        "<img src='"+deal_image+"' class='img-responsive'>"+
                        "</div>"+
                        " <div class='col-xs-12 col-sm-6'>"+
                        "<p class='product-title' style='font-size:95%;font-weight:bold;color:#555;'>"+deal_announcement_title+"</p>";

                    var _date = new Date(mp_deals.getDealDetails(prod_id, 'enddate'));
                    var _dateString = "Offer Expires on " + (_date.getMonth() + 1) + '/' + _date.getDate() + '/' +  _date.getFullYear();
                    if(_date.getFullYear() > ( new Date().getFullYear() + 1 )){
                        _dateString = "Ongoing ";
                    }
                    /*
                     popover_content = popover_content +	"<div class='deal_offer'>"+"<table><tr>" +
                     "<td class='deal-cost'><strike>"+original_price+"</strike> "+price+"</td>"+
                     "<td class='ppts orange'>"+pointsText+"</td>"+
                     "<td class='deal-store'>"+provider+"</td>"+
                     "</tr></table></div>";
                     popover_content = popover_content +	"<a target='_blank' class='btn btn-primary deal-btn empClick "+nonAuthClass+"' href='"+deal_link+"' data-brand='"+ provider +"' data-list='"+ mp_deals.product_list +"' data-variant='deal'> Buy Now </a>";
                     */

                    // was/now prices
                    popover_content = popover_content +	"<div class='row' style='padding-bottom:20px;'>" ;
                    popover_content = popover_content + "<div class='product-cost col-xs-6' style='margin:10px 0;'> ";
                    if ( typeof(original_price) !== 'undefined' && (original_price != price) ){
                        popover_content = popover_content + "<strike style='font-size:85%; color:#999;margin-right:5px;'>"+original_price+"</strike> ";
                    }
                    popover_content = popover_content + "<span style='font-size:90%; font-weight:bold;'>"+price+"</span></div>";

                    // savings and point earnings
                    popover_content = popover_content + "<div class='product-cost col-xs-6' style='font-size:80%; margin:10px 0;'> ";
                    if ( (typeof(percent_off) !== 'undefined') ){
                        popover_content = popover_content +	"Save <span class='orange' style='font-weight:bold;'>"+percent_off+"</span> and ";

                    }
                    popover_content = popover_content +	"Earn <span class='orange' style='font-weight:bold;'>" +pointsText+"</span></div>";

                    // buy now
                    popover_content = popover_content + "<div class='col-xs-12' style='margin: 20px 0;'><a target='_blank' class='btn btn-primary empClick "+nonAuthClass+"' href='"+deal_link+"' "+
                        "data-brand ='"+provider+"' "+
                        "data-list ='"+mp_deals.product_list+"' "+
                        "data-variant ='deal' "+
                        ">Buy Now</a> <span style='font-size:90%;'>at "+provider+"</span></div>";

                    /*
                     if(merchant && merchant != ""){
                     popover_content = popover_content +	"<p class='deal-merchant'>"+merchant+"</p>";
                     }
                     */
                    if(redemptionLocation && redemptionLocation != ""){
                        popover_content = popover_content +	"<div class='col-xs-12' style='font-size:85%; color:#555;'><i class='glyphicon glyphicon-map-marker'></i> "+redemptionLocation+"</div>";
                    }
                    if(_dateString && _dateString != ""){
                        popover_content = popover_content +	"<div class='col-xs-12' style='font-size:85%; color:#555;'><i class='glyphicon glyphicon-time'></i> "+_dateString+"</div>";
                    }

                    popover_content = popover_content +	"</div>";

                    var popover_element = "<div class='popover bottom col-"+mp_popover.screen_size+"-12' id='"+popover_id+"' style='height:0px'>"+
                        "<a href='javascript:void(0)' class='btn btn-default pull-right close' onClick='mp_popover.closePopover();'>&times;</a>"+
                        "<div class='popover-content'>"+
                        popover_content+
                        "</div>"+
                        "</div>";

                    $('#deal_'+popover_offset).after(popover_element);
                    $('.popover.bottom').show();

                    $('.popover.bottom .popover-content').find('a.deal-btn').append(nonAuthHTML);

                    $('.ps_desc_toggle').on("click",mp_shopping.showDescription);

                    if(isNonAuth)initLoginRegModals();

                    if ( animate ) {
                        $(".popover.bottom").animate(
                            {"height": "340px" },
                            {	duration: 700,
                                complete: function() {
                                    $('.popover.bottom').css('height','100%');
                                    $('.popover.bottom').css('min-height','340px');
                                }
                            }
                        );
                    } else {
                        $('.popover.bottom').css('height','100%');
                    }
                    $("#arr_"+prod_id).show();
                    mp_popover.hide_popover = true;
                }
            }
        }
    }
};


var mp_deals = {

    details : [],
    brand : "",
    cat_id : "",
    sub_cat_id : "",
    dealsFromParentCat : "",
    product_list : "",

    setDealData : function(deal_details){
        mp_deals.details = deal_details;
    },

    getDealDetails : function(deal_id,attribute) {
        return mp_deals.details[deal_id - 1][attribute];
    },

    appendData : function(prData){
        mp_deals.details.push.apply(mp_deals.details, prData);
    },

    replaceData :function(prData){
        mp_deals.details = prData;
    },

    addNonAuthLinks : function() {
        var isNonAuth = ( $('.i_p_d').size() > 0 );
        var nonAuthHTML = "";
        var nonAuthClass = "";
        if (isNonAuth){
            var deal_id = $('.selected_deal').attr('id');
            nonAuthClass = "noAuth";
            nonAuthHTML =  $("#"+deal_id).children('div.product-tile').find('a div.i_p_d')[0].outerHTML;
            nonAuthHTML = nonAuthHTML +"";
        }

        $('.popover.bottom .popover-content').find('.pshop a').append(nonAuthHTML);

        $('.popover.bottom .popover-content').find('table tr a').each(function(){
            $(this).find('div.i_p_d').attr('data-href',$(this).attr('href'));
            $(this).find('div.i_p_d').attr('data-ispscell',$(this).attr('data-ispscell'));
        });
        if(isNonAuth)initLoginRegModals();
    }
};

var mp_shopping = {
    page_name : "",
    module_name : "",
    keyword:"",
    carryOverSrc : "",
    current_page_number : 1,//By default page 1 is displayed
    getPopshopsDeals : function(){

    },
    showDescription :function(){
        $(this).siblings('span').toggle();
        $(this).text( ($(this).html() == 'more&gt;&gt;' ? '<<less' : 'more>>') );
    },

    switchShowMore :function(hideShowMore){
        if(hideShowMore){
            $('#show-more').hide();
        }else{
            $('#show-more').show();
        }
    }
};

$(window).on('resize', mp_popover.resizeWindow);

$('.deals').on("click",mp_popover.displayPopover);