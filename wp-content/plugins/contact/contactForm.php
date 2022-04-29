<?php

/**
* Plugin Name: contact-plugin
* Plugin URI: https://wordpress.com/
* Description: This will add a welcome bar at  the top of your page.
* Version: 1.0
* Author: ieatwebsites
* Author URI: https://wordpress.com/
**/

 function contactForm_plugin_page() {
   $page_title = 'contact_Options';
   $menu_title = 'contactForm';
   $capatibily ='manage_options';
   $slug ='contactForm-plugin';         
   $callback ='contactForm_page_html';
   $icon = 'dashicons-schedule';
   $position = 60;

   add_menu_page($page_title,$menu_title,$capatibily,$slug, $callback, $icon,$position);
  
 }
 add_action('admin_menu','contactForm_plugin_page');

 function contactForm_register_settings() {
	register_setting('contactForm_option_group', 'contactForm_field');
}

add_action('admin_init', 'contactForm_register_settings');

 function contactForm_page_html() { ?>

  <div class="wrap top-bar-wrapper">

    <form method="post">

      <?php settings_errors(); ?>
      <?php settings_fields('contactForm_option_group'); ?>

      <label for="contactForm_field_cont">Username:</label>
      <input type="checkbox" id="txt_username" name="txt_username" value="true" <?php if (get_option("wp_contact_username") == "true") { echo"checked"; } ?>> <br>
      <label for="contactForm_field_cont">Phone:</label>
      <input type="checkbox" id="txt-phone" name="txt_phone" value="true" <?php if (get_option("wp_contact_phone") == "true") { echo"checked"; } ?>> <br>
      <label for="contactForm_field_cont">Email:</label>
      <input type="checkbox" id="txt-email" name="txt_email" value="true" <?php if (get_option("wp_contact_email") == "true") { echo"checked"; } ?>> <br>
      <label for="contactForm_field_cont">Address:</label>
      <input type="checkbox" id="txt-address" name="txt_address" value="true" <?php if (get_option("wp_contact_address") == "true") { echo"checked"; } ?>> <br>
      <label for="contactForm_field_cont">Password:</label>
      <input type="checkbox" id="txt-password" name="txt_password" value="true" <?php if (get_option("wp_contact_password") == "true") { echo"checked"; } ?>> <br>
      <label for="contactForm_field_cont">Message:</label>
      <input type="checkbox" id="txt-message" name="txt_message" value="true" <?php if (get_option("wp_contact_message") == "true") { echo"checked"; } ?>> <br>

      <input name="send" type="submit" value="send"> <br>


    </form>

  </div>

  <?php 

   $username = "false";
   $phone = "false";
   $email = "false";
   $address = "false";
   $password = "false";
   $message = "false";
   
   if (isset($_POST['send']) ){

    if (isset($_POST['txt_username']) ){
        $username = $_POST['txt_username'];

    }

    if (isset($_POST['txt_phone']) ){
      $phone = $_POST['txt_phone'];

    }

    if (isset($_POST['txt_email']) ){
        $email = $_POST['txt_email'];

    }

    if (isset($_POST['txt_address']) ){
        $address = $_POST['txt_address'];

    }

    if (isset($_POST['txt_password']) ){
        $password = $_POST['txt_password'];

    }

    if (isset($_POST['txt_message']) ){
        $message = $_POST['txt_message'];

    }

    update_option("wp_contact_username",$username);
    update_option("wp_contact_phone",$phone);
    update_option("wp_contact_email",$email);
    update_option("wp_contact_address",$address);
    update_option("wp_contact_password",$password);
    update_option("wp_contact_message",$message);

    echo"done";

    }

 }

 function formul($in,$lables){

  if (get_option($in) == "true") {
      echo "<label>$lables</label>
      <center><input type='text'></center>";

  }
}

function stock(){

  echo"<h2><center>contact us</center></h2>";
  formul("wp_contact_username","Username");
  formul("wp_contact_phone","Phone");
  formul("wp_contact_email","Email");
  formul("wp_contact_address","Address");
  formul("wp_contact_password","Password");
  formul("wp_contact_message","Message");
  echo "<center><input type='button' value='done'></center>";

}

add_shortcode("formulaire", "stock");

?>







