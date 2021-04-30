// IIFE - Immediately Invoked Function Expression
(function($, window, document) {


    // Listen for the jQuery ready event on the document
    $(function() {

        // The DOM is ready!

        // colorpicker
        $('[name="relpoststh_background"], [name="relpoststh_hoverbackground"], [name="relpoststh_bordercolor"], [name="relpoststh_fontcolor"]').wpColorPicker();

        // datepicker
        $('.rpt_post_include').datepicker({
            dateFormat: 'yy-mm-dd'
        });

        // Clear datepicker value
        $('.rpt_clear_date').on('click', function(event) {
            event.preventDefault();
            $('.rpt_post_include').datepicker('setDate', null);
        });


        $('[name="relpoststh_number"],[name="relpoststh_customwidth"],[name="relpoststh_customheight"],[name="relpoststh_fontsize"],[name="relpoststh_textlength"],[name="relpoststh_excerptlength"],[name="relpoststh_textblockheight"]').keypress(function(e) {
            //if the letter is not digit then display error and don't type anything
            if (e.which !== 8 && e.which !== 0 && (e.which < 48 || e.which > 57)) {
                //display error message
                $(this).nextAll('.rpt-no-validate-error').show().delay(2000).fadeOut("400");
                return false;
            }
        });


        // $('#wpbr_rpt_relation_options').on('click', function(){
        //
        //   $('.nav-tab').removeClass('nav-tab-active');
        //   $(this).addClass('nav-tab-active');
        //
        //   $('#content_general_options').hide();
        //   $('#content_style_options').hide();
        //   $('#content_thumbnail_options').hide();
        //   $('#content_relation_options').show();
        //
        // });
        //
        // $('#wpbr_rpt_general_options').on('click', function(){
        //
        //   $('.nav-tab').removeClass('nav-tab-active');
        //   $(this).addClass('nav-tab-active');
        //
        //   $('#content_general_options').show();
        //   $('#content_style_options').hide();
        //   $('#content_thumbnail_options').hide();
        //   $('#content_relation_options').hide();
        //
        // });
        //
        //
        // $('#wpbr_rpt_style_options').on('click', function(){
        //
        //   $('.nav-tab').removeClass('nav-tab-active');
        //   $(this).addClass('nav-tab-active');
        //
        //   $('#content_general_options').hide();
        //   $('#content_style_options').show();
        //   $('#content_thumbnail_options').hide();
        //   $('#content_relation_options').hide();
        //
        // });
        //
        //
        // $('#wpbr_rpt_thumbnails_source').on('click', function(){
        //
        //   $('.nav-tab').removeClass('nav-tab-active');
        //   $(this).addClass('nav-tab-active');
        //
        //   $('#content_general_options').hide();
        //   $('#content_style_options').hide();
        //   $('#content_thumbnail_options').show();
        //   $('#content_relation_options').hide();
        //
        // });

        // Settings Tabs
        $(".select_all").click(function() {
            if (this.checked) {
                $(this).parent().find("div.select_specific").hide();
            } else {
                $(this).parent().find("div.select_specific").show();
            }
        });

        // TODO Following is to be done with css.
        if ($('#relpoststh_thsource').val() == 'custom-field') {
            $('#relpoststh-post-thumbnails').hide();
            $('#relpoststh-custom-field').show();
        } else if ($('#relpoststh_thsource').val() == 'post-thumbnails') {
            $('#relpoststh-post-thumbnails').show();
            $('#relpoststh-custom-field').hide();
        }

        $('#relpoststh_thsource').change(function() {
            if (this.value == 'post-thumbnails') {
                $('#relpoststh-post-thumbnails').show();
                $('#relpoststh-custom-field').hide();
            } else {
                $('#relpoststh-post-thumbnails').hide();
                $('#relpoststh-custom-field').show();
            }
        });
        $('#relpoststh_output_style').change(function() {
            if (this.value == 'list') {
                $('#relpoststh_cleanhtml').show();
            } else {
                $('#relpoststh_cleanhtml').hide();
            }
        });
        $("input[name='relpoststh_relation']").change(function() {
            if ($("input[name='relpoststh_relation']:checked").val() == 'custom') {
                $('#custom_taxonomies').show();
            } else {
                $('#custom_taxonomies').hide();
            }
        });

        // Ajax for subsriber
        $('#rpt_subscribe_btn').on('click', function(event) {
            event.preventDefault();

            var subscriber_mail = $('#rpt_subscribe_mail').val();
            var name = $('#rpt_subscribe_name').val();
            if (!subscriber_mail) {
                $('.rpt_subscribe_warning').html('Please Enter Email');
                return;
            }

            $.ajax({
                    url: 'https://wpbrigade.com/wp-json/wpbrigade/v1/subsribe-to-mailchimp',
                    type: 'POST',
                    data: {
                        subscriber_mail: subscriber_mail,
                        name: name,
                        plugin_name: 'rpt'
                    },
                    beforeSend: function() {
                        $('.rpt_subscribe_loader').show();
                        $('#rpt_subscribe_btn').attr('disabled', 'disabled');
                    }
                })
                .done(function(res) {
                    $('.rpt_return_message').html(res);
                    $('.rpt_subscribe_loader').hide();
                });

        });


        // Switches option sections
        $('#relpoststh-settings .postbox').hide();
        var activetab = '';
        if (typeof(localStorage) != 'undefined') {
            activetab = localStorage.getItem("rpt-activetab");
        }

        //if url has section id as hash then set it as active or override the current local storage value
        if (window.location.hash) {
            activetab = window.location.hash;
            if (typeof(localStorage) != 'undefined') {
                localStorage.setItem("rpt-activetab", activetab);
            }
        }

        if (activetab != '' && $(activetab).length) {
            $(activetab).fadeIn();
        } else {
            $('#relpoststh-settings .postbox:first').fadeIn();
        }
        $('#relpoststh-settings .postbox .collapsed').each(function() {
            $(this).find('input:checked').parent().parent().parent().nextAll().each(
                function() {
                    if ($(this).hasClass('last')) {
                        $(this).removeClass('hidden');
                        return false;
                    }
                    $(this).filter('.hidden').removeClass('hidden');
                });
        });

        if (activetab != '' && $(activetab + '-tab').length) {
            $(activetab + '-tab').addClass('nav-tab-active');
        } else {
            $('.nav-tab-wrapper a:first').addClass('nav-tab-active');
        }
        $('.nav-tab-wrapper a').click(function(evt) {
            $('.nav-tab-wrapper a').removeClass('nav-tab-active');
            $(this).addClass('nav-tab-active').blur();
            var clicked_group = $(this).attr('href');
            if (typeof(localStorage) != 'undefined') {
                localStorage.setItem("rpt-activetab", $(this).attr('href'));
            }
            $('#relpoststh-settings .postbox').hide();
            $(clicked_group).fadeIn();
            evt.preventDefault();
        });

        /// Gallery image selection script
        // jQuery(document).ready(function() {
        //   var $ = jQuery;
        //   if ($('.relpoststh_set_def_image').length > 0) {
        //       if ( typeof wp !== 'undefined' && wp.media && wp.media.editor) {
        //           $(document).on('click', '.relpoststh_set_def_image', function(e) {
        //               e.preventDefault();
        //               var button = $(this);
        //               var id = button.prev();
        //               wp.media.editor.send.attachment = function(props, attachment) {
        //                 // console.log(attachment);
        //                   // id.val(attachment.url);
        //                   id.attr('src', attachment.url);
        //                   $('#relpoststh_default_image').val(attachment.url);
        //               };
        //               wp.media.editor.open(button);
        //               return false;
        //           });
        //       }
        //   }
        // });
        $('.relpoststh_set_def_image').on('click', function(event) {
            event.preventDefault();
            var self = $(this);
            var file_frame = wp.media.frames.file_frame = wp.media({
                    title: self.data('uploader_title'),
                    button: {
                        text: self.data('uploader_button_text'),
                    },
                    multiple: false
                })
                .on('select', function() {
                    attachment = file_frame.state().get('selection').first().toJSON();
                    $('#relpoststh_default_image_prev').attr('src', attachment.url);
                    $('#relpoststh_default_image').val(attachment.url);
                })
                .open();
        });

        $(document).on('click', '.relpoststh_set_plug_image', function(e) {
            e.preventDefault();
            var defValue = $(this).val();
            $('#relpoststh_default_image_prev').attr('src', defValue);
            $('#relpoststh_default_image').val(defValue);
        });


    }); // End of document ready

    // The rest of the code goes here!

}(window.jQuery, window, document));