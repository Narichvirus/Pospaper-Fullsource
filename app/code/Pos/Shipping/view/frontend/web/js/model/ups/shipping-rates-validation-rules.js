/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

define([], function () {
    'use strict';

    return {
        /**
         * @return {Object}
         */
        getRules: function () {
            return {
                'region_id': {
                    'required': true
                },
                'city': {
                    'required': true
                },
                'postcode': {
                    'required': true
                },
                'country_id': {
                    'required': true
                }
            };
        }
    };
});
