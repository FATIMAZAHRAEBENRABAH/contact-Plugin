<?php
 /* Template Name: custom Registration Page */
 get_header();
 global $wpdb;

 if($_POST){

   $username = $wpdb->escape($_POST['txtUsername']);
   $phone = $wpdb->escape($_POST['txtPhone']);
   $email = $wpdb->escape($_POST['txtemail']);
   $address = $wpdb->escape($_POST['txtaddress']);
   $password = $wpdb->escape($_POST['txtPassword']);
   $ConfPassword = $wpdb->escape($_POST['txtConfirmPassword']);
   $message = $wpdb->escape($_POST['txtmessage']);

   $error = array();

   if(strpos($username, ' ') !== FALSE){
     $error['username_space'] = "Username has space";
   }

   if(empty($username)){
     $error['$username_empty'] = "Needed Username must";
   }

   if(username_exists($username)){
    $error['$username_exists'] = "Username already exists";
  }

  if(is_email($email)){
    $error['email_valid'] = "Email has no valid value";
  }

  if(email_exists($email)){
    $error['email_existence'] = "Email already exists";
  }

  if(strcmp($password , $ConfPassword) !==0){
    $error['password'] = "Password didn't match";
  }

  if(count($error) == 0){

    wp_create_user($username, $phone, $email, $address, $password, $message);
    echo "User created successfully";
    exit();

  }else{

    print_r($error);

  }

 }

?>

<form method="post">

    <p>

      <label for="txtUsername">Username:</label>

      <div>
          <input type="text" id="txtUsername" name="txtUsername" placeholder="Enter your username">
      </div>  

    </p>

      <p>
        
        <label for="txtPhone">Phone:</label>
  
        <div>
            <input type="nember" id="txtPhone" name="txtPhone" placeholder="Enter your phone">
        </div>  
  
      </p>

      <p>
        
        <label for="txtemail">Email:</label>
  
        <div>
            <input type="email" id="txtemail" name="txtemail" placeholder="Enter your email">
        </div>  
  
      </p>

      <p>
        
        <label for="txtaddress">Address:</label>
  
        <div>
            <input type="text" id="txtaddress" name="txtaddress" placeholder="Enter your address">
        </div>  
  
      </p>

      <p>
        
        <label for="txtPassword">Password:</label>
  
        <div>
            <input type="text" id="txtPassword" name="txtPassword" placeholder="Enter your Password">
        </div>  
  
      </p>

      <p>
        
        <label for="txtConfirmPassword">Confirm Password:</label>
  
        <div>
            <input type="text" id="txtConfirmPassword" name="txtConfirmPassword" placeholder="Enter your Confirm Password">
        </div>  
  
      </p>

      <p>
        
        <label for="txtmessage">Message:</label>
  
        <div>
            <input type="textarea"id="txtmessage" name="txtmessage" placeholder="Enter your message">
        </div>  
  
      </p>

      <input type="submit" name="btnSubmit">

</form>
<?php get_footer();?>