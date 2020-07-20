define(
    [
        'Magento_Checkout/js/view/payment/default',
		'jquery',
    	'mage/validation'
    ],
    function (Component, $) {
        'use strict';

        return Component.extend({
            defaults: {
                template: 'Jbcommerce_Testpayment/payment/testpayment',
				BankOwnerName:''
            },
			/** @inheritdoc */
        initObservable: function () {
            this._super()
                .observe('BankOwnerName');

            return this;
        },

        /**
         * @return {Object}
         */
        getData: function () {
            return {
                method: this.item.method,
                'additional_data': {
                    'bankowner': $('#bankowner').val()
                }
            };
        },

        /**
         * @return {jQuery}
         */
        validate: function () {
            var form = 'form[data-role=testpayment-form]';

            // JB-001-SFSDFS

            return $(form).validation() && $(form).validation('isValid');
        }
        });
    }
);
