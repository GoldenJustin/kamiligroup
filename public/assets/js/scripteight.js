
function findCarNowVc() {

    /*PRICE*/
    var _price_from = jQuery('#slider-price_min').val();
    if (_price_from) {
      _price_from = _price_from.replace(/\D/g, "");
    }


    var _price_to = jQuery('#slider-price_max').val();
    if (_price_to) {
      _price_to = _price_to.replace(/\D/g, "");
    }
    jQuery('#slider-price_total').val(_price_from + "," + _price_to);

    /*BODY*/
    var checked_body = '';
    jQuery("input[name='body']").each(function (key, val) {
      if (jQuery(this).prop("checked")) {
        checked_body = checked_body + ',' + jQuery(this).val();
      }
    });
    //jQuery("input[name='body']").val(checked_body);

    /*MILEAGE*/
    var mileage_from = jQuery('#slider-mileage_min').val();
    var mileage_to = jQuery('#slider-mileage_max').val();
    jQuery('#pix-max-slider-mileage_total').val(mileage_from + "," + mileage_to);

    /*YEAR*/
    var year_from = jQuery('#slider-year_min').val();
    var year_to = jQuery('#slider-year_max').val();
    jQuery('#pix-max-slider-year_total').val(year_from + "," + year_to);

    /*ENGINE*/
    var engine_from = jQuery('#slider-engine_min').val();
    var engine_to = jQuery('#slider-engine_max').val();
    jQuery('#pix-max-slider-engine_total').val(engine_from + "," + engine_to);






    jQuery('#findCarNowForm').submit();

  }
