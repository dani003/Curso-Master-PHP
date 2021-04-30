var heateorSssReferrer = null, heateorSssReferrerVal = '', heateorSssReferrerTabId = '';
jQuery(document).ready(function() {
	heateorSssReferrer = jQuery('input[name=_wp_http_referer]'), heateorSssReferrerVal = jQuery('input[name=_wp_http_referer]').val(), heateorSssReferrerTabId = location.href.indexOf('#') > 0 ? location.href.substring(location.href.indexOf('#'), location.href.length) : '';
    if(heateorSssReferrerTabId){heateorSssSetReferrer(heateorSssReferrerTabId) }
    jQuery("#tabs").tabs(), jQuery("#heateor_sss_login_redirection_column").find("input[type=radio]").click(function() {
        jQuery(this).attr("id") && "heateor_sss_login_redirection_custom" == jQuery(this).attr("id") ? jQuery("#heateor_sss_login_redirection_url").css("display", "block") : jQuery("#heateor_sss_login_redirection_url").css("display", "none")
    }), jQuery(".heateor_sss_help_bubble").attr("title", heateorSssHelpBubbleTitle), jQuery(".heateor_sss_help_bubble").click(function() {
        jQuery("#" + jQuery(this).attr("id") + "_cont").toggle(500)
    })
    jQuery('#tabs ul a').click(function(){
    	heateorSssSetReferrer(jQuery(this).attr('href'));
    });
});
function heateorSssSetReferrer(href){
	jQuery(heateorSssReferrer).val( heateorSssReferrerVal.substring(0, heateorSssReferrerVal.indexOf('#') > 0 ? heateorSssReferrerVal.indexOf('#') : heateorSssReferrerVal.length) + href );
}
jQuery("html, body").animate({ scrollTop: 0 });