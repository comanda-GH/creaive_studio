<?php
if(!class_exists('arzamath_17th_Settings'))
{
	class arzamath_17th_Settings
	{
		/**
		 * Construct the plugin object
		 */
		public function __construct()
		{
			// register actions
            add_action('admin_init', array(&$this, 'admin_init'));
        	add_action('admin_menu', array(&$this, 'add_menu'));
		} // END public function __construct
		
        /**
         * hook into WP's admin_init action hook
         */
        public function admin_init()
        {
        	// register your plugin's settings
        	register_setting('arzamath_17th-group', 'setting_a');
        	register_setting('arzamath_17th-group', 'setting_b');

        	// add your settings section
        	add_settings_section(
        	    'arzamath_17th-section',
        	    'WP Plugin arzamath_17th Settings',
        	    array(&$this, 'settings_section_arzamath_17th'),
        	    'arzamath_17th'
        	);
        	
        	// add your setting's fields
            add_settings_field(
                'arzamath_17th-setting_a',
                'Setting A', 
                array(&$this, 'settings_field_input_text'), 
                'arzamath_17th',
                'arzamath_17th-section',
                array(
                    'field' => 'setting_a'
                )
            );
            add_settings_field(
                'arzamath_17th-setting_b',
                'Setting B', 
                array(&$this, 'settings_field_select'),
                'arzamath_17th',
                'arzamath_17th-section',
                array(
                    'field' => 'setting_b'
                )
            );
            // Possibly do additional admin_init tasks
        } // END public static function activate
        
        public function settings_section_arzamath_17th()
        {
            // Think of this as help text for the section.
            echo 'These settings do things for the WP Plugin arzamath_17th.';
        }
        
        /**
         * This function provides text inputs for settings fields
         */
        public function settings_field_input_text($args)
        {
            // Get the field name from the $args array
            $field = $args['field'];
            // Get the value of this setting
            $value = get_option($field);
            // echo a proper input type="text"
            echo sprintf('<input type="text" name="%s" id="%s" value="%s" />', $field, $field, $value);
        } // END public function settings_field_input_text($args)

        public function settings_field_select($args)
        {
            // Get the field name from the $args array
            $field = $args['field'];
            // Get the value of this setting
           $value = get_option($field);
            // echo a proper input type="text"
            echo sprintf('<select name="%s" id="%s" >

        <option  select="selected">'.$value.'</option>
        <option  >Enabled</option><option  >heelo</option>
        <option  >Disabled</option>
        <option  >none</option>
    </select>', $field, $field,   $value  );
        } // END public function settings_field_select($args)
        /**
         * add a menu
         */		
        public function add_menu()
        {
            // Add a page to manage this plugin's settings
        	add_options_page(
        	    'WP Plugin arzamath_17th Settings',
        	    'WP Plugin arzamath_17th',
        	    'manage_options', 
        	    'arzamath_17th',
        	    array(&$this, 'plugin_settings_page')
        	);
        } // END public function add_menu()
    
        /**
         * Menu Callback
         */		
        public function plugin_settings_page()
        {
        	if(!current_user_can('manage_options'))
        	{
        		wp_die(__('You do not have sufficient permissions to access this page.'));
        	}
	
        	// Render the settings template
        	include(sprintf("%s/templates/settings.php", dirname(__FILE__)));
        } // END public function plugin_settings_page()
    } // END class WP_Plugin_Template_Settings
} // END if(!class_exists('WP_Plugin_Template_Settings'))
