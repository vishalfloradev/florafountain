/* * * * * * * * * * * * * * * * * * * *
 *  ██████╗ █████╗  ██████╗ ███████╗
 * ██╔════╝██╔══██╗██╔═══██╗██╔════╝
 * ██║     ███████║██║   ██║███████╗
 * ██║     ██╔══██║██║   ██║╚════██║
 * ╚██████╗██║  ██║╚██████╔╝███████║
 *  ╚═════╝╚═╝  ╚═╝ ╚═════╝ ╚══════╝
 *
 * @author   : Daan van den Bergh
 * @url      : https://daan.dev/wordpress-plugins/optimize-analytics-wordpress/
 * @copyright: (c) 2019 Daan van den Bergh
 * @license  : GPL2v2 or later
 * * * * * * * * * * * * * * * * * * * */

function caosDownloadManually() {
    jQuery.ajax({
        type: 'POST',
        url: ajaxurl,
        data: {
            action: 'caos_analytics_ajax_manual_download'
        },
        success: function (response) {
            var successMessage = '<div id="setting-error-settings_updated" class="updated settings-error notice is-dismissible"><p><strong>' + response + '</strong></p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>';

            jQuery('html, body').animate({scrollTop: 0}, 800);

            jQuery(successMessage).insertAfter('.wrap h1');

            return false;
        }
    });
}

function showOptions(className) {
    if (className) {
        jQuery('.' + className).show();
    }
}

function hideOptions(className) {
    if (className) {
        jQuery('.' + className).hide();
    }
}

jQuery('.caos-compatibility-mode-input').click(function () {
    settings = 'caos_advanced_settings, .caos_basic_settings';
    if (this.value !== '') {
        hideOptions(settings);
        jQuery('.caos-js-file-input').val('analytics.js');
    } else {
        showOptions(settings);
    }
});

jQuery('.caos-stealth-mode-input, .caos-capture-outbound-links').click(function () {
    setting = jQuery('.caos-js-file-input');
    if (this.checked === true) {
        setting.val('analytics.js');
    }
    if (this.className === 'caos-stealth-mode-input') {
        jQuery('.caos-capture-outbound-links').attr('checked', false);
    } else {
        jQuery('.caos-stealth-mode-input').attr('checked', false);

    }
});

jQuery('.caos-js-file-input').click(function () {
    stealth = jQuery('.caos-stealth-mode-input');
    outbound = jQuery('.caos-capture-outbound-links');
    compatibility = jQuery('.caos-compatibility-mode-input');
    if (this.value !== 'analytics.js') {
        stealth.attr('checked', false);
        outbound.attr('checked', false);
        compatibility.val(null);
        // We need to trigger a click to show applicable options again.
        compatibility.click();
    }
});
