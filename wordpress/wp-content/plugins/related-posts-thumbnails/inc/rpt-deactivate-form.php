<style>
    .wp-rpt-hidden{
      overflow: hidden;
    }
    .wp-rpt-popup-overlay .wp-rpt-internal-message{
      margin: 3px 0 3px 22px;
      display: none;
    }
    .wp-rpt-reason-input{
      margin: 3px 0 3px 22px;
      display: none;
    }
    .wp-rpt-reason-input input[type="text"]{
      width: 100%;
      display: block;
    }
  .wp-rpt-popup-overlay{
    background: rgba(0,0,0, .8);
    position: fixed;
    top:0;
    left: 0;
    height: 100%;
    width: 100%;
    z-index: 1000;
    overflow: auto;
    visibility: hidden;
    opacity: 0;
    transition: opacity 0.3s ease-in-out:
  }
  .wp-rpt-popup-overlay.wp-rpt-active{
    opacity: 1;
    visibility: visible;
  }
  .wp-rpt-serveypanel{
    width: 600px;
    background: #fff;
    margin: 65px auto 0;
  }
  .wp-rpt-popup-header{
    background: #f1f1f1;
    padding: 20px;
    border-bottom: 1px solid #ccc;
  }
  .wp-rpt-popup-header h2{
    margin: 0;
  }
  .wp-rpt-popup-body{
      padding: 10px 20px;
  }
  .wp-rpt-popup-footer{
    background: #f9f3f3;
    padding: 10px 20px;
    border-top: 1px solid #ccc;
  }
  .wp-rpt-popup-footer:after{
    content:"";
    display: table;
    clear: both;
  }
  .action-btns{
    float: right;
  }
  .wp-rpt-anonymous{
    display: none;
  }
  .attention, .error-message {
    color: red;
    font-weight: 600;
    display: none;
  }
  .wp-rpt-spinner{
    display: none;
  }
  .wp-rpt-spinner img{
    margin-top: 3px;
  }

</style>

<div class="wp-rpt-popup-overlay">
  <div class="wp-rpt-serveypanel">
    <form action="#" method="post" id="wp-rpt-deactivate-form">
    <div class="wp-rpt-popup-header">
      <h2><?php _e( 'Quick feedback about Related Posts Thumbnails', 'related-posts-thumbnails' ); ?></h2>
    </div>
    <div class="wp-rpt-popup-body">
      <h3><?php _e( 'If you have a moment, please let us know why you are deactivating:', 'related-posts-thumbnails' ); ?></h3>
      <ul id="wp-rpt-reason-list">
        <li class="wp-rpt-reason" data-input-type="" data-input-placeholder="">
          <label>
            <span>
              <input type="radio" name="wp-rpt-selected-reason" value="1">
            </span>
            <span><?php _e( 'I only needed the plugin for a short period', 'related-posts-thumbnails' ); ?></span>
          </label>
          <div class="wp-rpt-internal-message"></div>
        </li>
        <li class="wp-rpt-reason has-input" data-input-type="textfield">
          <label>
            <span>
              <input type="radio" name="wp-rpt-selected-reason" value="2">
            </span>
            <span><?php _e( 'I found a better plugin', 'related-posts-thumbnails' ); ?></span>
          </label>
          <div class="wp-rpt-internal-message"></div>
          <div class="wp-rpt-reason-input"><span class="message error-message"><?php _e( 'Kindly tell us the name of plugin', 'related-posts-thumbnails' ); ?></span><input type="text" name="better_plugin" placeholder="What's the plugin's name?"></div>
        </li>
        <li class="wp-rpt-reason" data-input-type="" data-input-placeholder="">
          <label>
            <span>
              <input type="radio" name="wp-rpt-selected-reason" value="3">
            </span>
            <span><?php _e( 'The plugin broke my site', 'related-posts-thumbnails' ); ?></span>
          </label>
          <div class="wp-rpt-internal-message"></div>
        </li>
        <li class="wp-rpt-reason" data-input-type="" data-input-placeholder="">
          <label>
            <span>
              <input type="radio" name="wp-rpt-selected-reason" value="4">
            </span>
            <span><?php _e( 'The plugin suddenly stopped working', 'related-posts-thumbnails' ); ?></span>
          </label>
          <div class="wp-rpt-internal-message"></div>
        </li>
        <li class="wp-rpt-reason" data-input-type="" data-input-placeholder="">
          <label>
            <span>
              <input type="radio" name="wp-rpt-selected-reason" value="5">
            </span>
            <span><?php _e( 'I no longer need the plugin', 'related-posts-thumbnails' ); ?></span>
          </label>
          <div class="wp-rpt-internal-message"></div>
        </li>
        <li class="wp-rpt-reason" data-input-type="" data-input-placeholder="">
          <label>
            <span>
              <input type="radio" name="wp-rpt-selected-reason" value="6">
            </span>
            <span><?php _e( "It's a temporary deactivation. I'm just debugging an issue.", 'related-posts-thumbnails' ); ?></span>
          </label>
          <div class="wp-rpt-internal-message"></div>
        </li>
        <li class="wp-rpt-reason has-input" data-input-type="textfield" >
          <label>
            <span>
              <input type="radio" name="wp-rpt-selected-reason" value="7">
            </span>
            <span><?php _e( 'Other', 'related-posts-thumbnails' ); ?></span>
          </label>
          <div class="wp-rpt-internal-message"></div>
          <div class="wp-rpt-reason-input"><span class="message error-message "><?php _e( 'Kindly tell us the reason so we can improve.', 'related-posts-thumbnails' ); ?></span><input type="text" name="other_reason" placeholder="Would you like to share what's other reason ?"></div>
        </li>
      </ul>
    </div>
    <div class="wp-rpt-popup-footer">
      <label class="wp-rpt-anonymous"><input type="checkbox" /><?php _e( 'Anonymous feedback', 'related-posts-thumbnails' ); ?></label>
        <input type="button" class="button button-secondary button-skip wp-rpt-popup-skip-feedback" value="Skip &amp; Deactivate" >
      <div class="action-btns">
        <span class="wp-rpt-spinner"><img src="<?php echo admin_url( '/images/spinner.gif' ); ?>" alt=""></span>
        <input type="submit" class="button button-secondary button-deactivate wp-rpt-popup-allow-deactivate" value="Submit &amp; Deactivate" disabled="disabled">
        <a href="#" class="button button-primary wp-rpt-popup-button-close"><?php _e( 'Cancel', 'related-posts-thumbnails' ); ?></a>

      </div>
    </div>
  </form>
    </div>
  </div>


  <script>
    (function( $ ) {

      $(function() {

        var pluginSlug = 'related-posts-thumbnails';
        // Code to fire when the DOM is ready.

        $(document).on('click', 'tr[data-slug="' + pluginSlug + '"] .deactivate', function(e){
          e.preventDefault();

          $('.wp-rpt-popup-overlay').addClass('wp-rpt-active');
          $('body').addClass('wp-rpt-hidden');
        });
        $(document).on('click', '.wp-rpt-popup-button-close', function () {
          close_popup();
        });
        $(document).on('click', ".wp-rpt-serveypanel,tr[data-slug='" + pluginSlug + "'] .deactivate",function(e){
          e.stopPropagation();
        });

        $(document).click(function(){
          close_popup();
        });
        $('.wp-rpt-reason label').on('click', function(){
          if($(this).find('input[type="radio"]').is(':checked')){
            //$('.wp-rpt-anonymous').show();
            $(this).next().next('.wp-rpt-reason-input').show().end().end().parent().siblings().find('.wp-rpt-reason-input').hide();
          }
        });
        $('input[type="radio"][name="wp-rpt-selected-reason"]').on('click', function(event) {
          $(".wp-rpt-popup-allow-deactivate").removeAttr('disabled');
        });
        $(document).on('submit', '#wp-rpt-deactivate-form', function(event) {
          event.preventDefault();

          var _reason =  $(this).find('input[type="radio"][name="wp-rpt-selected-reason"]:checked').val();
          var _reason_details = '';
          if ( _reason == 2 ) {
            _reason_details = $(this).find("input[type='text'][name='better_plugin']").val();
          } else if ( _reason == 7 ) {
            _reason_details = $(this).find("input[type='text'][name='other_reason']").val();
          }

          if ( ( _reason == 7 || _reason == 2 ) && _reason_details == '' ) {
            $('.message.error-message').show();
            return ;
          }

          $.ajax({
            url: ajaxurl,
            type: 'POST',
            data: {
              action        : 'rpt_deactivate',
              reason        : _reason,
              reason_detail : _reason_details,
            },
            beforeSend: function(){
              $(".wp-rpt-spinner").show();
              $(".wp-rpt-popup-allow-deactivate").attr("disabled", "disabled");
            }
          })
          .done(function() {
            $(".wp-rpt-spinner").hide();
            // $(".wp-rpt-popup-allow-deactivate").removeAttr("disabled");
            window.location.href =  $("tr[data-slug='"+ pluginSlug +"'] .deactivate a").attr('href');
          });

        });

        $('.wp-rpt-popup-skip-feedback').on('click', function(e){
          window.location.href =  $("tr[data-slug='"+ pluginSlug +"'] .deactivate a").attr('href');
        })

        function close_popup() {
          $('.wp-rpt-popup-overlay').removeClass('wp-rpt-active');
          $('#wp-rpt-deactivate-form').trigger("reset");
          $(".wp-rpt-popup-allow-deactivate").attr('disabled', 'disabled');
          $(".wp-rpt-reason-input").hide();
          $('body').removeClass('wp-rpt-hidden');
          $('.message.error-message').hide();
        }
        });

        })( jQuery ); // This invokes the function above and allows us to use '$' in place of 'jQuery' in our code.
  </script>
