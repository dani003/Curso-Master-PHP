<?php
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}
?>
<style>
    .vvv_textbox{
        height: 150px;
        width:100%;
    }
    #wpbody-content .notice {
        margin: 5px 20px 15px 0;
    }
    .notice, div.updated, div.error{
        margin: 5px 20px 15px 0;
    }
</style>
<script type="text/javascript">
    var cli_success_message='<?php echo __('Settings updated.', 'cookie-law-info');?>';
    var cli_error_message='<?php echo __('Unable to update Settings.', 'cookie-law-info');?>';
</script>   
<div class="wrap">
    <div class="cookie-law-info-form-container">
        <div class="cli-plugin-toolbar top">
            <h3><?php echo __('Necessary Cookie Settings','cookie-law-info'); ?></h3>
        </div>
        <form method="post" action="<?php echo esc_url($_SERVER["REQUEST_URI"]); ?>" id="cli_ncessary_form" class="cookie-sensitivity-form">
            <?php wp_nonce_field('cookielawinfo-update-necessary'); ?> 
            <table class="form-table cli_necessary_form cli-admin-table">
                <tr>
                    <td>
                        <label for="wt_cli_necessary_title"><?php _e('Title', 'cookie-law-info'); ?></label>
                        <input type="text" id="wt_cli_necessary_title" name="wt_cli_necessary_title" value="<?php echo stripslashes( $wt_cli_necessary_title ); ?>" class="cli-textbox" />
                    </td>
                </tr>
                <tr>
                    <td>
                       <label for="necessary_description"><?php echo __('Description','cookie-law-info');?></label>
                        <textarea name="necessary_description" class="vvv_textbox"><?php
                        echo apply_filters('format_to_edit', stripslashes($wt_cli_necessary_description));
                        ?></textarea>
                    </td>
                </tr>
                
            </table>
            <div class="cli-plugin-toolbar bottom">
                <div class="left">
                </div>
                <div class="right">
                    <input type="hidden" name="cli_necessary_ajax_update" value="1">
                    <input type="submit" name="update_admin_settings_form" value="<?php _e('Update Settings', 'cookie-law-info'); ?>" class="button-primary" style="float:right;" onClick="return cli_store_settings_btn_click(this.name)" />
                    <span class="spinner" style="margin-top:9px"></span>
                </div>
            </div>
        </form>
    </div>
</div>