

<?php
/**
 * Plugin Name
 *
 * @package           PluginPackage
 * @author            adil
 * @copyright         solicode
 * @license           adil license
 *
 * @wordpress-plugin
 * Plugin Name:       message
 * Plugin URI:        https://adil.com/plugin-name
 * Description:       this plugin for add messgae
 * Version:           1.0.0
 */
?>
<head>
<style>

.tgl {
  position: relative;
  display: inline-block;
  height: 30px;
  cursor: pointer;
}
.tgl > input {
  position: absolute;
  opacity: 0;
  z-index: -1;
  /* Put the input behind the label so it doesn't overlay text */
  visibility: hidden;
}
.tgl .tgl_body {
  width: 60px;
  height: 30px;
  background: white;
  border: 1px solid #dadde1;
  display: inline-block;
  position: relative;
  border-radius: 50px;
}
.tgl .tgl_switch {
  width: 30px;
  height: 30px;
  display: inline-block;
  background-color: white;
  position: absolute;
  left: -1px;
  top: -1px;
  border-radius: 50%;
  border: 1px solid #ccd0d6;
  -moz-box-shadow: 0 2px 2px rgba(0, 0, 0, 0.13);
  -webkit-box-shadow: 0 2px 2px rgba(0, 0, 0, 0.13);
  box-shadow: 0 2px 2px rgba(0, 0, 0, 0.13);
  -moz-transition: left cubic-bezier(0.34, 1.61, 0.7, 1) 250ms, -moz-transform cubic-bezier(0.34, 1.61, 0.7, 1) 250ms;
  -o-transition: left cubic-bezier(0.34, 1.61, 0.7, 1) 250ms, -o-transform cubic-bezier(0.34, 1.61, 0.7, 1) 250ms;
  -webkit-transition: left cubic-bezier(0.34, 1.61, 0.7, 1), -webkit-transform cubic-bezier(0.34, 1.61, 0.7, 1);
  -webkit-transition-delay: 250ms, 250ms;
  transition: left cubic-bezier(0.34, 1.61, 0.7, 1) 250ms, transform cubic-bezier(0.34, 1.61, 0.7, 1) 250ms;
  z-index: 1;
}
.tgl .tgl_track {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  overflow: hidden;
  border-radius: 50px;
}
.tgl .tgl_bgd {
  position: absolute;
  right: -10px;
  top: 0;
  bottom: 0;
  width: 55px;
  -moz-transition: left cubic-bezier(0.34, 1.61, 0.7, 1) 250ms, right cubic-bezier(0.34, 1.61, 0.7, 1) 250ms;
  -o-transition: left cubic-bezier(0.34, 1.61, 0.7, 1) 250ms, right cubic-bezier(0.34, 1.61, 0.7, 1) 250ms;
  -webkit-transition: left cubic-bezier(0.34, 1.61, 0.7, 1), right cubic-bezier(0.34, 1.61, 0.7, 1);
  -webkit-transition-delay: 250ms, 250ms;
  transition: left cubic-bezier(0.34, 1.61, 0.7, 1) 250ms, right cubic-bezier(0.34, 1.61, 0.7, 1) 250ms;
  background: #439fd8 url("http://petelada.com/images/toggle/tgl_check.png") center center no-repeat;
}
.tgl .tgl_bgd-negative {
  right: auto;
  left: -45px;
  background: white url("http://petelada.com/images/toggle/tgl_x.png") center center no-repeat;
}
.tgl:hover .tgl_switch {
  border-color: #b5bbc3;
  -moz-transform: scale(1.06);
  -ms-transform: scale(1.06);
  -webkit-transform: scale(1.06);
  transform: scale(1.06);
}
.tgl:active .tgl_switch {
  -moz-transform: scale(0.95);
  -ms-transform: scale(0.95);
  -webkit-transform: scale(0.95);
  transform: scale(0.95);
}
.tgl > :not(:checked) ~ .tgl_body > .tgl_switch {
  left: 30px;
}
.tgl > :not(:checked) ~ .tgl_body .tgl_bgd {
  right: -45px;
}
.tgl > :not(:checked) ~ .tgl_body .tgl_bgd.tgl_bgd-negative {
  right: auto;
  left: -10px;
}

#popUpYes
{
  width: 60px;
  height: 30px;
  background-color: black;
    color: white;
}
#popUpYes:hover
{
  background-color: white;
    color: black;
}
</style>
</head>
<?php


// if (! defined('ABSPATH')) {
//    die(' this page not for you');
// }

// function message() {
//     echo 'hello word';
// }
// add_action( 'wp_footer', 'message' );


// add_shortcode('hello', 'message'); 


// ETAPE 1 : AJOUTER LA PAGE DE REGLAGES AU DASHBOARD ADMIN
function test_plugin_setup_menu(){
    add_menu_page( 'Message Plugin', 'Message Plugin', 'manage_options', 'test-plugin','wp_message' );
}
add_action('admin_menu', 'test_plugin_setup_menu');

// ETAPE 2 : AJOUTER UN EDITEUR DE TEXTE A LA PAGE DE REGLAGES
function wp_message(){
    $content = get_option( 'wp_message_value' );
    // $editor_id = 'anyName';
    echo '<form action="" method="POST">';
    // wp_editor( "hello", "anyName" );

    echo ' <br> <input type="text" placeholder="name"> <label class="tgl">
    <input type="checkbox" name="name" value="1"/>
    <span class="tgl_body">
      <span class="tgl_switch"></span>
      <span class="tgl_track">
        <span class="tgl_bgd"></span>
        <span class="tgl_bgd tgl_bgd-negative"></span>
      </span>
    </span>
  </label> <br> <br>
  <input type="text" placeholder="email"> <label class="tgl">
    <input type="checkbox" name="email" value="1" />
    <span class="tgl_body">
      <span class="tgl_switch"></span>
      <span class="tgl_track">
        <span class="tgl_bgd"></span>
        <span class="tgl_bgd tgl_bgd-negative"></span>
      </span>
    </span>
  </label><br> <br>
  <input type="text" placeholder="Phone Number"> <label class="tgl">
  <input type="checkbox" name="Number" value="1" />
  <span class="tgl_body">
    <span class="tgl_switch"></span>
    <span class="tgl_track">
      <span class="tgl_bgd"></span>
      <span class="tgl_bgd tgl_bgd-negative"></span>
    </span>
  </span>
</label> <br> <br>
<textarea id="txtid" placeholder="Message" name="txtname" style="height: 29px;width: 181PX;"></textarea> <label class="tgl">
<input type="checkbox" name="Message" value="1" />
<span class="tgl_body">
  <span class="tgl_switch"></span>
  <span class="tgl_track">
    <span class="tgl_bgd"></span>
    <span class="tgl_bgd tgl_bgd-negative"></span>
  </span>
</span>
</label> <br> <br>
  <input type="submit" id="popUpYes" name="submit" value="Submit">
  </form>
  ';

     $name_option = "wp_contact_name";
     $email_option = "wp_contact_email";
     $Number_option = "wp_contact_Number";
     $Message_option = "wp_contact_Message";
     $name_value =  0;
     $email_value = 0;
     $Number_value =  0;
     $Message_value =  0;
     if (isset($_POST["submit"])) {

        if (isset($_POST['name'])) {
            $name_value =  $_POST['name'];
        }

        else if (isset($_POST['Number'])) {
            $email_value =  $_POST['Number'];
        }  
        else if (isset($_POST['email'])) {
            $Number_value =  $_POST['email'];
        }  
        else if (isset($_POST['Message'])) {
            $Message_value =  $_POST['Message'];
        }  
        
          update_option( $name_option, $name_value );
          update_option( $email_option, $email_value );
          update_option( $Number_option, $Number_value );
          update_option( $Message_option, $Message_value );

    
     }  

    

}

function return_value(){
   echo get_option( 'wp_message_value' );
}
        add_shortcode('hello', 'return_value');  

        