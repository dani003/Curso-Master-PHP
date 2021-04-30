jQuery( document ).ready( function ($) {
    "use strict";
    
    // Get URL
    var getURL  = window.location.href,
        baseURL = getURL.substring(0, getURL.indexOf('/wp-admin') + 9);

    // Install and Activate
    $( '#bard-demo-content-inst' ).on( 'click', function() {

            $('#bard-demo-content-inst').html( 'Installing Import Plugin...' );

            var data = {
                action: 'bard_plugin_auto_activation'
            };

            wp.updates.installPlugin({
                slug: 'bard-extra',
                success: function(){
                    $.post(ajaxurl, data, function(response) {
                        $('#bard-demo-content-inst').html( 'Redirecting...' );
                        window.location.replace( baseURL + '/admin.php?page=bard-extra' );
                    })
                }
            });

        }
    );

    // Activate
    $( '#bard-demo-content-act' ).on( 'click', function() {

            $('#bard-demo-content-act').html( 'Installing Import Plugin...' );

            var data = {
                action: 'bard_plugin_auto_activation'
            };

            $.post(ajaxurl, data, function(response) {
                $('#bard-demo-content-act').html( 'Redirecting...' );
                window.location.replace( baseURL + '/admin.php?page=bard-extra' );
            })

        }
    );

});