<?php
/*
Plugin Name: P-Login
Description: Plugin for login page stylization
Version: 0.0
Author: Irina Velychko
*/

   

add_action('admin_menu', 'plogin_options_page');
add_action('admin_init', 'plogin_parameters');

		
function plogin_options_page() {

   add_menu_page('P-Login Settings', 'P-Login Settings', 'administrator', 'plugin-settings', 'plogin_set_param',get_bloginfo('wpurl').'/wp-content/plugins/p-login/p-login.ico');
}

function plogin_parameters() {

   register_setting('plugin_options', 'plugin_options', 'validate_set');

   add_settings_section('main_section', 'P-Login Settings', 'call_back', __FILE__);

   add_settings_field('logo', ('Logo Image:'), 'logo_set', __FILE__, 'main_section'); // Logo
   add_settings_field('bg', ('Background Image:'), 'bg_set', __FILE__, 'main_section'); // Background
   add_settings_field('bcg_cl', ('Background Color:'), 'bcg_cl_set', __FILE__, 'main_section'); // Background color
   add_settings_field('notif_cl', ('Notification Box Color:'), 'notif_cl_set', __FILE__, 'main_section');// Notification color
   add_settings_field('notif_bdr_cl', ('Notification Box Border Color:'), 'notif_bdr_cl_set', __FILE__, 'main_section');// Notification border color
   add_settings_field('notif_er_cl', ('Notification Error Box Color:'), 'notif_er_cl_set', __FILE__, 'main_section');// Notification error color
   add_settings_field('notif_bdr_er_cl', ('Notification Error Box Border Color:'), 'notif_bdr_er_cl_set', __FILE__, 'main_section');// Notification error border color
   add_settings_field('form_bg', ('Login Form Background Image:'), 'form_bg_set', __FILE__, 'main_section');// Login form background
   add_settings_field('form_cl', ('Login Form Background Color:'), 'form_cl_set', __FILE__, 'main_section');// Login form color
   add_settings_field('lbl_cl', ('Login Form Text Color:'), 'lbl_set', __FILE__, 'main_section');// Labels text color
   add_settings_field('inp_txt', ('Inputs Text Color:'), 'inp_txt_set', __FILE__, 'main_section');// Inputs text color
   add_settings_field('inp_bg', ('Inputs Background Color:'), 'inp_bg_set', __FILE__, 'main_section');// Inputs background color
   add_settings_field('inp_bdr', ('Inputs Border Color:'), 'inp_bdr_set', __FILE__, 'main_section');// Inputs border color
   add_settings_field('bt_bg', ('Button Background Image:'), 'bt_bg_set', __FILE__, 'main_section');// Button background
   add_settings_field('bt_bg_cl', ('Button Background Color:'), 'bt_bg_cl_set', __FILE__, 'main_section');// Button background color
   add_settings_field('bt_bdr', ('Button Border Color:'), 'bt_bdr_set', __FILE__, 'main_section');// Button border color
   add_settings_field('bt_txt',('Button Text Color:'), 'bt_txt_set', __FILE__, 'main_section');// Button text color
   add_settings_field('bt_bg_hv', ('Button Hover Background Image:'), 'bt_bg_hv_set', __FILE__, 'main_section');// Button background on hover
   add_settings_field('bt_bg_cl_hv', ('Button Hover Background Color:'), 'bt_bg_cl_hv_set', __FILE__, 'main_section');// Button background color on hover
   add_settings_field('bt_bdr_hv',('Button Hover Border Color:'), 'bt_bdr_hv_set', __FILE__, 'main_section');// Button border color on hover
   add_settings_field('bt_txt_hv', ('Button Hover Text Color:'), 'bt_txt_hv_set', __FILE__, 'main_section');// Button text color on hover

}


function plogin_set_param() {
?>
   <div id="theme-options-wrap" class="widefat">
      <div class="icon32" id="icon-tools"></div>
      <h2>P-Login Options</h2>
      <p>You can create your own stylish login form from this options page.</p>
      <form method="post" action="options.php" enctype="multipart/form-data">
         <?php settings_fields('plugin_options'); ?>
         <?php do_settings_sections(__FILE__); ?>
         <p class="submit">
            <input name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e('Save Changes'); ?>" />
         </p>
   </form>
</div>
<?php    
}


// Background image
function bg_set() {
   echo '<input type="file" name="bg" value="Upload" />';
}

// Logo
function logo_set() {
   echo '<input type="file" name="logo" value="Upload" />';
}

// Background color
function bcg_cl_set() {
   $options = get_option('plugin_options');
   echo "<input name='plugin_options[bcg_cl]' type='text' value='{$options['bcg_cl']}' />";
}


// Notification color
function notif_cl_set() {
   $options = get_option('plugin_options');
   echo "<input name='plugin_options[notif_cl]' type='text' value='{$options['notif_cl']}' />";
}

// Notification border color
function notif_bdr_cl_set() {
   $options = get_option('plugin_options');
   echo "<input name='plugin_options[notif_bdr_cl]' type='text' value='{$options['notif_bdr_cl']}' />";
}

// Notification error color
function notif_er_cl_set() {
   $options = get_option('plugin_options');
   echo "<input name='plugin_options[notif_er_cl]' type='text' value='{$options['notif_er_cl']}' />";
}

// Notification error border color
function notif_bdr_er_cl_set() {
   $options = get_option('plugin_options');
   echo "<input name='plugin_options[notif_bdr_er_cl]' type='text' value='{$options['notif_bdr_er_cl']}' />";
}

//  Loginform background
function form_bg_set() {
   echo '<input type="file" name="form_bg" value="Upload" />';
}

// Loginform color
function form_cl_set() {
   $options = get_option('plugin_options');
   echo "<input name='plugin_options[form_cl]' type='text' value='{$options['form_cl']}' />";
}

// Labels text color
function lbl_set() {
   $options = get_option('plugin_options');
   echo "<input name='plugin_options[lbl_cl]' type='text' value='{$options['lbl_cl']}' />";
}

//  Inputs text color
function inp_txt_set() {
   $options = get_option('plugin_options');
   echo "<input name='plugin_options[inp_txt]' type='text' value='{$options['inp_txt']}' />";
}

//Inputs background color
function inp_bg_set() {
   $options = get_option('plugin_options');
   echo "<input name='plugin_options[inp_bg]' type='text' value='{$options['inp_bg']}' />";
}

// Inputs border color
function inp_bdr_set() {
   $options = get_option('plugin_options');
   echo "<input name='plugin_options[inp_bdr]' type='text' value='{$options['inp_bdr']}' />";
}

// Button background
function bt_bg_set() {
   echo '<input type="file" name="bt_bg" value="Upload" />';
}

//Button background color
function bt_bg_cl_set() {
   $options = get_option('plugin_options');
   echo "<input name='plugin_options[bt_bg_cl]' type='text' value='{$options['bt_bg_cl']}' />";
}

 
//Button border color
function bt_bdr_set() {
   $options = get_option('plugin_options');
   echo "<input name='plugin_options[bt_bdr]' type='text' value='{$options['bt_bdr']}' />";
}

// Button text color
function bt_txt_set() {
   $options = get_option('plugin_options');
   echo "<input name='plugin_options[bt_txt]' type='text' value='{$options['bt_txt']}' />";
}

// Button background
function bt_bg_hv_set() {
   echo '<input type="file" name="bt_bg_hv" value="Upload" />';
}

//Button background color (hover)
function bt_bg_cl_hv_set() {
   $options = get_option('plugin_options');
   echo "<input name='plugin_options[bt_bg_cl_hv]' type='text' value='{$options['bt_bg_cl_hv']}' />";
}

 
//Button border color (hover)
function bt_bdr_hv_set() {
   $options = get_option('plugin_options');
   echo "<input name='plugin_options[bt_bdr_hv]' type='text' value='{$options['bt_bdr_hv']}' />";
}

// Button text color (hover)
function bt_txt_hv_set() {
   $options = get_option('plugin_options');
   echo "<input name='plugin_options[bt_txt_hv]' type='text' value='{$options['bt_txt_hv']}' />";
}



function validate_set($plugin_options) {
   $keys = array_keys($_FILES);
   $i = 0;

   
   foreach ($_FILES as $image) {
      // if a files was upload
      if ($image['size']) {
         // if it is an image
         if (preg_match('/(jpg|jpeg|png|gif)$/', $image['type'])) {
            $override = array('test_form' => false);
            $file = wp_handle_upload($image, $override);

            $plugin_options[$keys[$i]] = $file['url'];
         } else {
            $options = get_option('plugin_options');
            $plugin_options[$keys[$i]] = $options[$logo];
            wp_die(_e('No image was uploaded.'));
         }
      }

      // else, retain the image that's already on file.
      else {
         $options = get_option('plugin_options');
         $plugin_options[$keys[$i]] = $options[$keys[$i]];
      }
      $i++;
   }
   return $plugin_options;
}

function stylish_login() {
	$options = get_option('plugin_options');

	
echo ('<style type="text/css">
h1 a { background-image:url('.$options[logo].') !important;height:100px; width:340px; }
body { border-top-style:none; }
html {background:#'.$options[bcg_cl].' url('.$options[bg].');}
#backtoblog { display:none; }
.login .message {background-color:#'.$options[notif_cl].'; border-color: #'.$options[notif_bdr_cl].';}
.error, .login #login_error {background-color:#'.$options[notif_er_cl].'; border-color:#'.$options[notif_bdr_er_cl].';}
form {background-color:#'.$options[form_cl].';background-image: url('.$options[form_bg].');}
label,.login #nav a, .login #nav a:hover, .login #nav a:active {color:#'.$options[lbl_cl].';}
input {color:#'.$options[inp_txt].';}
#user_pass, #user_login, #user_email{background-color:#'.$options[inp_bg].'; border-color: #'.$options[inp_bdr].';}
input.button-primary, button.button-primary, a.button-primary {background-color:#'.$options[bt_bg_cl].';background-image: url('.$options[bt_bg].');border-color: #'.$options[bt_bdr].';color:#'.$options[bt_txt].';}
input.button-primary:hover, button.button-primary:hover, a.button-primary:hover {background-color:#'.$options[bt_bg_cl_hv].';background-image: url('.$options[bt_bg_hv].');border-color: #'.$options[bt_bdr_hv].';color:#'.$options[bt_txt_hv].';}
</style>');
}
add_action('login_head', 'stylish_login');


function call_back() {};

?>