require([
    'jquery',
    'mage/url'
], function ($, url) {
    'use strict';

    jQuery(document).ready(function () {

        jQuery('.product-options-wrapper div').on('change', function (event) {
            var linkUrl = url.build('eanbarcode/index');
            var simpleId = 12345;
            var checkval = jQuery('.super-attribute-select option:selected').val();

            if (checkval) {
                jQuery.ajax({
                    url: linkUrl,
                    type: 'POST',
                    dataType: 'json',
                    showLoader: true,
                    data: {
                        product_id: simpleId
                    },
                }).done(function (data) {
                    console.log(data);
                    jQuery('.ean').show();
                    if (jQuery('#eanbarcode').length) {
                        jQuery('#eanbarcode').text(data.eannumber);
                    } else {
                        jQuery('.product-info-stock-sku').append($('<div class="product attribute ean"><strong class="type">EAN</strong><div class="value" id="eanbarcode" itemprop="ean">' + data.eannumber + '</div></div>'));
                    }
                });
            } else {
                jQuery('.ean').hide();
            }
        });
    });
});

