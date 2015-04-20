<?php
/*
Plugin Name: arzamath_17th
Plugin URI: https://github.com/Rita-GH/arzamath_17th
Description: 1. плагін має в налаштуваннях два поля. Одне текстове, інше випадаючий список визначених даних.
2. плагін містить кастомний тип поста з 3 полями: звичайне текстове поле, мультиселект і додавання/завантаження малюнка.
Version: 1.0
Author: Rita
License: GPL2
*/

if(!class_exists('arzamath_17th'))
{
	class arzamath_17th
	{
		/**
		 * Construct the plugin object
		 */
		public function __construct()
		{
			// Initialize Settings
			require_once(sprintf("%s/settings.php", dirname(__FILE__)));
			$arzamath_17th_Settings = new arzamath_17th_Settings();

			// Register custom post types
			require_once(sprintf("%s/post-types/post_type_template.php", dirname(__FILE__)));
			$Post_Type_Template = new Post_Type_Template();

            // Register widget
            require_once(sprintf("%s/wpb_widget.php", dirname(__FILE__)));
            $wpb_widget = new wpb_widget();

            // Register add_scripts
            require_once(sprintf("%s/my_add_upload_scripts.php", dirname(__FILE__)));
            $my_add_upload_scripts = new my_add_upload_scripts();

			$plugin = plugin_basename(__FILE__);
			add_filter("plugin_action_links_$plugin", array( $this, 'plugin_settings_link' ));
		} // END public function __construct

		/**
		 * Activate the plugin
		 */
		public static function activate()
		{
			// Do nothing
		} // END public static function activate

		/**
		 * Deactivate the plugin
		 */
		public static function deactivate()
		{
			// Do nothing
		} // END public static function deactivate

		// Add the settings link to the plugins page
		function plugin_settings_link($links)
		{
			$settings_link = '<a href="options-general.php?page=arzamath_17th">Settings</a>';
			array_unshift($links, $settings_link);
			return $links;
		}


	} // END class WP_Plugin_Template
} // END if(!class_exists('WP_Plugin_Template'))

if(class_exists('arzamath_17th'))
{
	// Installation and uninstallation hooks
	register_activation_hook(__FILE__, array('arzamath_17th', 'activate'));
	register_deactivation_hook(__FILE__, array('arzamath_17th', 'deactivate'));

	// instantiate the plugin class
	$arzamath_17th = new arzamath_17th();

}

add_action('admin_footer', 'my_action_javascript');
function my_action_javascript() {
    ?>
    <script type="text/javascript" >
        jQuery(document).ready(function($) {
            //$('form').submit(function() {
            jQuery("#btn").click(function () {
                var post_id =$('#post_id').val();
                var msg     ={
                    "meta_a":$("#meta_a").val(),
                    "meta_b":$("#meta_b").val(),
                    "meta_c":$("#meta_c").val()
                };
                //var field =$('form').serialize();//jQuery.param($('#set_form').serializeArray());
                var data = {
                    action: 'my_action',
                    post_id: post_id,
                    field:   msg,
                    dataType:'json'
                };
                // since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
                jQuery.post(ajaxurl, data, function(response) {
                    alert('Got this the server: ' + response);
                });
            });
        });
    </script>
<?php
}
add_action('wp_ajax_my_action', 'my_action_callback');
function my_action_callback() {
    global $wpdb;
    $post_id = $_POST['post_id'];
    $field = $_POST['field'];
    if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
    {
        return;
    }
    if ( isset($_POST['field']) && !empty($_POST['field']) ){
        $fields = '';
        foreach ($field as $key=>$value)
        {
            $fields .= '|'.$key.'='.$value;
            update_post_meta($post_id, $key, $value);
        }
        echo  $fields;
    }
    else
    {
        echo 'no update';
        return;
    }
    //ob_clean();
    die(); // выход нужен для того, чтобы в ответе не было ничего лишнего, только то что возвращает функция
}