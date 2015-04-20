/**
 * Created by rb on 15.12.14.
 */
jQuery(document).ready(function() {


    jQuery('#preview_btn').click(function() {
        formfield = jQuery('#meta_c').attr('name');
        tb_show('', 'media-upload.php?type=image&TB_iframe=true&ETI_field=meta_c');

        window.send_to_editor = function(html) {
            imgurl = jQuery('img',html).attr('src');
            jQuery('input[name='+formfield+']').val(imgurl);
            tb_remove();
        }
        return false;
    });
});