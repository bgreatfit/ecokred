var mp_popover = {

    position : "",
    popover_position : "",
    screen_size : "lg",
    screen_width : "",
    hide_popover : true,

    setPopoverPosition : function(position){
        mp_popover.position = position;
    },
    resizeWindow : function(){
        var _previous_screen_size = mp_popover.screen_size;
        screen_width =  $('body .container').css('width').replace('px','');
        screen_width = parseInt(screen_width);
        if(screen_width >= 1148){
            mp_popover.popover_position = mp_popover.position ;
            mp_popover.screen_size = "lg";
        }else if(screen_width >= 948 ){
            mp_popover.popover_position = mp_popover.position -1 ;
            mp_popover.screen_size = "md";
        }else if(screen_width >=728 ){
            mp_popover.popover_position = mp_popover.position - 1 ;
            mp_popover.screen_size = "sm";
        }else if(screen_width < 728){
            mp_popover.popover_position = Math.max(mp_popover.position - 2,2) ;
            mp_popover.screen_size = "xs";
        }
        if(mp_popover.screen_size != _previous_screen_size){
            $('.popover.bottom').remove();
            $('img.arr_pointer').hide();
            mp_popover.hide_popover = false;
            $('.selected_product').each(mp_popover.displayPopover);

        }
    },
    closePopover : function(){
        $('img.arr_pointer').hide();
        $('.selected_product').removeClass('selected_product');
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
            if($(this).hasClass('selected_product') && mp_popover.hide_popover){
                mp_popover.closePopover();
                return;
            }
            if( typeof mp_curation == 'object' && mp_curation.isMemberCurationPopover ) {
                mp_curation.resetCurationPopover();
            }

            $('.selected_product').removeClass('selected_product');
            $(this).addClass('selected_product');

            var animate = true, offerHTML = '';
            if(!mp_popover.hide_popover) animate = false;

            var visible_popoverId = $('.popover.bottom').attr('id');

            var product_id = $(this).parents('.products').attr('id');
            prod_id = product_id.replace("product_","");

            if( typeof mp_curation == 'object' && mp_curation.isMemberCurationPopover ) {
                prod_id = prod_id - 1;
            }

            var c_productId = mp_products.getProductDetails(prod_id, 'productId');
            var product_title = mp_products.getProductDetails(prod_id, 'name');
            var product_image = mp_products.getProductDetails(prod_id, 'imageUrl');
            var description = mp_products.getProductDetails(prod_id, 'description');
            var offersForProduct = mp_products.getProductDetails(prod_id, 'offerCount');
            var pointsText = mp_products.getProductDetails(prod_id, 'calculatedPointsText');
            var merchant = mp_products.getProductDetails(prod_id, 'merchant');
            var product_added = mp_products.getProductDetails(prod_id, 'dateAdded');
            var product_expires = mp_products.getProductDetails(prod_id, 'dateExpires');
            var brand = mp_products.getProductDetails(prod_id, 'brand');
            var variant = mp_products.getProductDetails(prod_id, 'variant');
            var product_list = mp_shopping.product_list;
            var product_type = mp_products.getProductDetails(prod_id, 'type');
            var product_coupon_code = mp_products.getProductDetails(prod_id, 'couponCode');

            if ( offersForProduct > 1 && (product_type != 'indix') ){
                console.log('offers > 1');
                console.log('offers > 1');
                var price = mp_products.getProductDetails(prod_id, 'price_min');
                var productIndex = prod_id -1;
                var _priceComparisionMap = mp_products.details[productIndex].priceComparisionMap;
                if(_priceComparisionMap && _priceComparisionMap != undefined){
                    offerHTML = mp_products.getProductOffersHTML(_priceComparisionMap);
                }else{
                    mp_products.getAllProductOffers(productIndex ,c_productId);
                }
            }
            else{
                var product_link = mp_products.getProductDetails(prod_id, 'productUrl');
                var price = mp_products.getProductDetails(prod_id, 'price');
            }
            var org_price = mp_products.getProductDetails(prod_id, 'originalPrice');
            var percent_off = mp_products.getProductDetails(prod_id,'percentOff');

            prod_id = product_id.replace("product_","");

            var isNonAuth = ( $('.i_p_d').size() > 0 );

            var popover_id = Math.ceil(parseInt(prod_id)/mp_popover.popover_position);

            var popover_offset = popover_id * mp_popover.popover_position;

            if($('.product-link').size()  < popover_offset ){
                popover_offset = $('.product-link').size();
            }

            if ( $('.popover.bottom').remove().size() > 0 && visible_popoverId == popover_id ) { animate = false; }
            $('img.arr_pointer').hide();

            var nonAuthHTML = "";
            var nonAuthClass = "";
            if (isNonAuth){
                nonAuthClass = "noAuth";
                nonAuthHTML =  $("#"+product_id).children('div.product-tile').find('a div.i_p_d')[0].outerHTML;
                nonAuthHTML = nonAuthHTML +"";
            }


            var popover_content = "<div class='col-xs-12 col-sm-6'>" +
                "<img class='pr-img img-responsive' src='"+product_image+"'>"+
                "</div>"+
                " <div class='col-xs-12 col-sm-6'>"+
                "<p class='product-title' style='font-size:95%;font-weight:bold;color:#555;'>"+product_title+"</p>";
            if(description && description!=""){
                var _trimPosition = description.length;
                var _trimHidePosition = 0;

                if(_trimPosition > 200 ){
                    _trimHidePosition = description.lastIndexOf(" ", 200);
                }
                if(_trimHidePosition >0 ){
                    popover_content = popover_content + "<p class='product-details' style='font-size:85%;color:#555;'>"+ description.substr(0,_trimHidePosition)+
                        "<span style='display:none;'>"+description.substr(_trimHidePosition,_trimPosition)+" </span> <a href='javascript:void(0)' class='ps_desc_toggle small'>more&gt;&gt;</a></p>";
                }else{
                    popover_content = popover_content + "<p class='product-details' style='font-size:85%;color:#555;'>"+ description.substr(0,_trimPosition)+"</p>";
                }
            }
            if ( (offersForProduct > 1) && (product_type != 'indix') && (offerHTML != '') ){
                popover_content = popover_content +	"<div class='ps_offer_list'>"+offerHTML+"</div>";
            } else if( (offersForProduct > 1) && (product_type != 'indix') ) {
                popover_content = popover_content +	"<div class='ps_offer_list'><img src='/md5/eb/eb38014d2ef798792b34814f3c3e05c5_loading.gif' " +
                    "class='loading-img'/></div>";
            } else {
                popover_content = popover_content +	"<div class='row' style='padding-bottom:20px;'>" ;
                if( typeof mp_curation == 'object' && mp_curation.isMemberCurationPopover ) {
                    popover_content = popover_content + "<div class='product-cost col-xs-4'> ";
                    if ( typeof(org_price) !== 'undefined' && (org_price != price)){
                        popover_content = popover_content + "<strike style='font-size:85%; color:#999;margin-right:5px;'>"+org_price+"</strike> ";
                    }
                    popover_content = popover_content + "<span style='font-size:90%; font-weight:bold;'>"+price+"</span></div>";


                }else{
                    popover_content = popover_content + "<div class='product-cost col-xs-4' style='margin:10px 0;'> ";
                    if ( typeof(org_price) !== 'undefined' && (org_price != price) ){
                        popover_content = popover_content + "<strike style='font-size:85%; color:#999;margin-right:5px;'>"+org_price+"</strike> ";
                    }
                    popover_content = popover_content + "<span style='font-size:90%; font-weight:bold;'>"+price+"</span></div>";


                    popover_content = popover_content + "<div class='product-cost col-xs-8' style='font-size:80%; margin:10px 0;'> ";
                    if ( (typeof(percent_off) !== 'undefined') ){
                        popover_content = popover_content +	"Save <span class='orange' style='font-weight:bold;'>"+percent_off+"</span> and ";

                    }
                    popover_content = popover_content +	"Earn <span class='orange' style='font-weight:bold;'>" +pointsText+"</span></div>";
                }
                if ( merchant && merchant != undefined ) {
                    // For non deep-linkable merchants, suppress the Shop Now link
                    if (product_link && product_link != undefined) {
                        popover_content = popover_content + "<div class='col-xs-12' style='margin: 20px 0;'>";
                        if( product_coupon_code != undefined ){
                            popover_content = popover_content + "<div class='col-xs-12 col-md-6'>";
                        }
                        popover_content = popover_content + "<a target='_blank' class='btn btn-primary empClick "+nonAuthClass+"' href='"+product_link+"' "+
                            "data-brand ='"+brand+"' "+
                            "data-list ='"+product_list+"' "+
                            "data-variant ='"+variant+"' "+
                            ">Shop Now</a> <span style='font-size:90%;'>at "+merchant+"</span>";
                        if( product_coupon_code != undefined ){
                            popover_content = popover_content + "</div><div class='col-xs-12 col-md-6'><span style='font-size:90%;'>Requires Coupon: </span>"
                                + "<span class='orange dotted-border'>"+ product_coupon_code+"</span></div>";
                        }
                        popover_content = popover_content + "</div>";
                        /*
                         popover_content = popover_content + "<td class='pstore visible-xs'><a target='_blank' class=' empClick "+nonAuthClass+"' href='"+product_link+"' "+
                         "data-brand ='"+brand+"' "+
                         "data-list ='"+product_list+"' "+
                         "data-variant ='"+variant+"' "+
                         ">BBB"+merchant+"</a></td>"+
                         "<td class='pstore hidden-xs'>"+merchant+"</td>"+
                         "<td class='pshop hidden-xs'><a target='_blank' class='empClick "+nonAuthClass+"' href='"+product_link+"' "+
                         "data-brand ='"+brand+"' "+
                         "data-list ='"+product_list+"' "+
                         "data-variant ='"+variant+"' "+
                         "> Shop Now </a></td>"+
                         "</tr></table></div>"+
                         "</div>";
                         */
                    } else {
                        popover_content = popover_content + "<td class='pstore'>"+merchant+"</td>"+
                            "</tr></table></div>"+
                            "</div>";
                    }
                }

                if(typeof(product_added) !== 'undefined'){
                    popover_content = popover_content +	"<div class='col-xs-12' style='font-size:90%; color:#555;'><i class='glyphicon glyphicon-calendar'></i> Deal added on "+product_added.month+" "+product_added.day+", "+product_added.year+"</div>";
                }

                if(typeof(product_expires) !== 'undefined'){
                    popover_content = popover_content +	"<div class='col-xs-12' style='font-size:90%; color:#555;'><i class='glyphicon glyphicon-time'></i> Deal expires on "+product_expires.month+" "+product_expires.day+", "+product_expires.year+"</div>";
                }
                popover_content = popover_content +	"</div>";
            }

            var popover_element = "<div class='popover bottom col-"+mp_popover.screen_size+"-12' id='"+popover_id+"' style='height:0px'>"+
                "<a href='javascript:void(0)' class='btn btn-default pull-right close' onClick='mp_popover.closePopover();'>&times;</a>"+
                "<div class='popover-content'>"+
                popover_content+
                "</div>"+
                "</div>";

            $('#product_'+popover_offset).after(popover_element);
            $('.popover.bottom').show();
            $('.popover.bottom .popover-content').find('.pshop a').append(nonAuthHTML);
            if ( (offersForProduct > 1) && (product_type != 'indix') ){
                mp_products.addNonAuthLinks();
            }
            $('.ps_desc_toggle').on("click",mp_shopping.showDescription);
            $('.popover img').on('error', mp_shopping.displayImgNotAvailable);

            if(isNonAuth)initLoginRegModals();
            if( typeof mp_curation == 'Object' ) mp_curation.resetCurationPopover();
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
};


var mp_products = {

    details : [],
    brand : "",
    cat_id : "",
    sub_cat_id : "",
    productsFromParentCat : "",

    setProductData : function(product_details){
        mp_products.details = product_details;
    },

    getProductDetails : function(product_id,attribute) {
        return mp_products.details[product_id - 1][attribute];
    },

    appendData : function(prData){
        mp_products.details.push.apply(mp_products.details, prData);
    },

    replaceData :function(prData){
        mp_products.details = prData;
    },

    getAllProductOffers : function(productIndex,productId){
        var	path="/emp/u/data/m/popshops/popshops-product-offers.vm?prId="+productId+"&pageName="+mp_shopping.page_name+"&productList="+mp_shopping.product_list+"&moduleName="+mp_shopping.module_name+"&"+mp_shopping.carryOverSrc;
        if(mp_shopping.keyword && mp_shopping.keyword !=""){
            path = path + "&q="+mp_shopping.keyword;
        }
        jQuery.ajax({
            url 		: path,
            type		: 'GET',
            dataType    : 'json',
            error		: function(xhr, status, error) {
                $(".ps_offer_list").html("Offer details not available");
            },
            success : function(data,status){
                //Returns popshops product offers
                if( $.trim(data) != "" ) {
                    mp_products.details[productIndex].priceComparisionMap = data;
                    var offersHTML = mp_products.getProductOffersHTML(data);
                    $(".ps_offer_list").html(offersHTML);
                    $('.ps_desc_toggle').off("click",mp_shopping.showDescription);
                    $('.ps_desc_toggle').on("click",mp_shopping.showDescription);
                    mp_products.addNonAuthLinks();
                }
            }
        });

    },

    getProductOffersHTML : function(productOffersData){
        var offer_content = "<table>";
        var isNonAuth = ( $('.i_p_d').size() > 0 );
        var nonAuthClass ="";
        if (isNonAuth){
            nonAuthClass = "noAuth";
        }
        productOffersData.forEach(function(offer) {
            var isPointLessOffer = offer.isPointLessAd;
            var productList = mp_shopping.product_list;
            offer_content = offer_content +
                "<tr>" +
                "<td class='pcost'>AAA"+offer.price+"</td>"+
                "<td class='ppts orange'>"+offer.points+" PTS</td>"+
                "<td class='pstore visible-xs'><a target='_blank' class='empClick "+nonAuthClass+"' href='"+offer.url+"' "+
                "data-brand ='"+offer.brand+"' "+
                "data-list ='"+productList+"' "+
                "data-variant ='"+offer.variant+"' "+
                "data-ispscell ='"+isPointLessOffer+"'>"+offer.merchant+"</a></td>"+
                "<td class='pstore hidden-xs'>"+offer.merchant+"</td>"+
                "<td class='pshop hidden-xs'><a target='_blank' class='empClick "+nonAuthClass+"' href='"+offer.url+"' "+
                "data-brand ='"+offer.brand+"' "+
                "data-list ='"+productList+"' "+
                "data-variant ='"+offer.variant+"' "+
                "data-ispscell ='"+isPointLessOffer+"'> Shop Now </a></td>"+
                "</tr>";
        });
        offer_content = offer_content + "</table>";
        return offer_content;
    },

    addNonAuthLinks : function() {
        var isNonAuth = ( $('.i_p_d').size() > 0 );
        var nonAuthHTML = "";
        var nonAuthClass = "";
        if (isNonAuth){
            var product_id = $('.selected_product').parents('.products').attr('id');
            nonAuthClass = "noAuth";
            nonAuthHTML =  $("#"+product_id).children('div.product-tile').find('a div.i_p_d')[0].outerHTML;
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

    pageName_url_map : {"PG_SHOP_BY_BRAND":"/emp/u/shop-by-brand.vm","PG_SHOP_BY_PRODUCT":"/emp/u/shop-by-product.vm"},
    page_name : "",
    module_name : "",
    product_list : "",
    keyword:"",
    carryOverSrc : "",
    current_page_number : 1,//By default page 1 is displayed
    getPopshopsProducts : function(){
        var path = "/emp/u/data/m/popshops/popshops-products.vm?"+mp_shopping.carryOverSrc,postData;
        var $btn = $(this).button('loading');
        var resultsPerPage = 24;
        mp_shopping.current_page_number = mp_shopping.current_page_number + 1;
        if(mp_shopping.keyword && mp_shopping.keyword !=""){
            postData = {pageName : mp_shopping.page_name,productList : mp_shopping.product_list,moduleName : mp_shopping.module_name,showMore:true,page : mp_shopping.current_page_number ,rp :resultsPerPage,q : mp_shopping.keyword,shownProducts : mp_products.details.length};
        } else {
            postData = {pageName : mp_shopping.page_name,productList : mp_shopping.product_list,moduleName : mp_shopping.module_name,showMore:true,page : mp_shopping.current_page_number ,rp :resultsPerPage,pc_id :mp_products.cat_id,psc_id :mp_products.sub_cat_id,brand : mp_products.brand,shownProducts : mp_products.details.length};
        }

        jQuery.ajax({
            url 		: path,
            type		: 'POST',
            dataType 	: 'html',
            data		: postData,
            error		: function(xhr, status, error) {
                $('.all-product-items').append("Sorry! No Products Available");
                $btn.hide();
            },
            success : function(data,status){
                if ( data && data.trim() != "" ){
                    $('.all-product-items').append(data);
                    mp_popover.setPopoverPosition(4);
                    mp_popover.resizeWindow();
                    $(window).on('resize', mp_popover.resizeWindow);
                    $('.product-tile .product-link').off("click",mp_popover.displayPopover);
                    $('.product-tile .product-link').on("click",mp_popover.displayPopover);
                    if( $('.curation-link') && ( $('.curation-link').size() > 0 ) && ($('.curation-link').css('display') == "block")){
                        $('.curation-link').show();
                    }
                    $('.all-product-items img.pr-img').on('error', mp_shopping.displayImgNotAvailable);

                    $btn.button('reset');

                }else{
                    $btn.button('reset');
                    $btn.hide();
                }
            }
        });
    },
    showDescription :function(){
        $(this).siblings('span').toggle();
        $(this).text( ($(this).html() == 'more&gt;&gt;' ? '<<less' : 'more>>') );
    },
    addBreadCrumb : function(bc_list){
        var _breadCrumbContent = "";
        _breadCrumbContent = "<ol class='breadcrumb'> "+
            "<li><a href='";
        if ( mp_shopping.pageName_url_map[mp_shopping.page_name] ){
            _breadCrumbContent = _breadCrumbContent + mp_shopping.pageName_url_map[mp_shopping.page_name];
        }else{
            _breadCrumbContent = _breadCrumbContent + "/emp/u/shop-by-product.vm";
        }
        _breadCrumbContent = _breadCrumbContent + "?brand="+mp_products.brand+"&src="+mp_shopping.page_name+"'>All Products</a></li>" ;
        for(var i=0;i<bc_list.length;i++){
            var obj = bc_list[i];
            if(i == (bc_list.length - 1)){
                for(var key in obj){
                    _breadCrumbContent = _breadCrumbContent + "<li class='active'>"+obj[key]+"</li>";
                }
            }else{
                for(var key in obj){
                    _breadCrumbContent = _breadCrumbContent + "<li><a href='javascript:void(0)' class='cat-link' data-href='/emp/u/data/m/popshops/popshops-products.vm?brand="+mp_products.brand+"&src="+mp_shopping.page_name+"&psc_id="+key+"'>"+obj[key]+"</a></li>";

                }
            }
        }

        _breadCrumbContent = _breadCrumbContent+"</ol>";
        $('#product-breadcrumb').html(_breadCrumbContent);
        $('#product-breadcrumb a.cat-link').off("click",mp_shopping.getPopshopsCategoryProducts);
        $('#product-breadcrumb a.cat-link').on("click",mp_shopping.getPopshopsCategoryProducts);
    },

    displayEmptyCatInfo : function(emptySubCatInfoMsg){
        $('#empty-subcat').html(emptySubCatInfoMsg);
        $('#empty-subcat-alert').show();
        $('#empty-subcat').show();
    },

    switchShowMore :function(hideShowMore){
        if(hideShowMore){
            $('#show-more').hide();
        }else{
            $('#show-more').show();
        }
    },

    displayImgNotAvailable: function () {
        $(this).prop('src', '/images/g/display/tiles/img_not_available.jpg');
    },

    getPopshopsCategoryProducts :function(){
        var categoryLink = $(this).attr('data-href');
        categoryLink = categoryLink+"&pageName="+mp_shopping.page_name+"&moduleName="+mp_shopping.module_name;
        $('#ps-loading-bk').show();
        $('#ps-loading-img').show();
        $('#empty-subcat').hide();
        $('#empty-subcat-alert').hide();
        jQuery.ajax({
            url 		: categoryLink,
            type		: 'GET',
            dataType 	: 'html',
            error		: function(xhr, status, error) {
                $('.all-product-items').html("<p>Sorry! No Products Available</p>");

            },
            success : function(data,status){
                if ( data && data.trim() != "" ){

                    $('.all-product-items').html(data);
                    mp_popover.setPopoverPosition(4);
                    mp_popover.resizeWindow();
                    $(window).on('resize', mp_popover.resizeWindow);
                    $('.product-tile .product-link').off("click",mp_popover.displayPopover);
                    $('.product-tile .product-link').on("click",mp_popover.displayPopover);
                    mp_shopping.current_page_number = 1;
                    $('.all-product-items img.pr-img').on('error', mp_shopping.displayImgNotAvailable);
                }
                else{
                    $('.all-product-items').html("<p>Sorry! No Products Available</p>");
                }
            }
        });
    }
};


$(window).on('resize', mp_popover.resizeWindow);

$('.product-tile .product-link').on("click",mp_popover.displayPopover);

$('#show-more').on("click",mp_shopping.getPopshopsProducts);

$('.ps-categories-menu #ps-product-dropdown li a').on("click",mp_shopping.getPopshopsCategoryProducts);

$('#product-breadcrumb a.cat-link').on("click",mp_shopping.getPopshopsCategoryProducts);

$('.all-product-items img.pr-img').on('error', mp_shopping.displayImgNotAvailable);