
window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.$ = window.jQuery = require('jquery');

    require('../../../node_modules/jquery-ui/ui/effect');
    require('../../../node_modules/jquery-ui/ui/effects/effect-highlight');
    require('jquery-ujs');
} catch (e) {}

