<?php
define("TITLE", 'Please do fill out!');

include 'includes/header.php';
?>
<hr>
<div id="team-members" class="cf">
    <?php
    
    function strip_bad_chars( $input ) {
            $output = trim($input);
                        
            if (empty($output)) {                          
 echo "<p><a href='contact.php' class='button block'>Please only valid chars and all fields are required!</a></p>";                     
                die();   
            }   elseif (!filter_var($output, FILTER_SANITIZE_STRING)){                 
 echo "<p><a href='contact.php' class='button block'>Please only valid chars and all fields are required!</a></p>";                     
                die();   
                }   else { 
                    //echo var_dump($output);
                    return $output;        
                } 	                
    }
    
    function strip_bad_chars_email( $input ) {
        $output = trim($input);
                        
        if (!(filter_var($output, FILTER_SANITIZE_STRING)) || empty($output)) {                
            echo "<p><a href='contact.php' class='button block'>Please only valid chars and all fields are required!</a></p>";                     
            die();  
            }   else { 
                //echo var_dump($output);
                    return $output;    
                } 	                
    }
    
 
    

    if(isset($_POST['submit']) == "submit") {
        $firstName = strip_bad_chars($_POST['firstName']);
        $lastName = strip_bad_chars($_POST['lastName']);
        $email = strip_bad_chars_email($_POST['email']);
        $message = strip_bad_chars($_POST['message']);
        $subscribe = strip_bad_chars($_POST['subscribe']);        
    
        //Add the recipient email to a variable
        $to = "tb.meijer@brauliode";
        
        //Create a subject
        $subject = "$name sent you a messsage via your contact form";
        
        //Construct the message
        $message = "Frist name: $firstName\r\n";
        $message .= "Last name: $lastName\r\n";
        $message .= "Email: $email\r\n";
        $message .= "Message: $member\r\n";
    
        if (isset($_POST['subscribe'])=="subscribe") {           
            //Add a new line to the $message
            $message .= "\r\n\r\nPlease add $email to the mailing list.\r\n";
        }            
        $message = wordwrap($message,72);
        
        //Set the email header into a variable
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/plain; charset-iso-8859-l\r\n";
        $headers .= "From: $name<$email> \r\n";
        $headers .= "X-Priority: 1\r\n";
        $headers .= "X-MSMail-Priority: High\r\n\r\n";
        
        //Send the mail!
        mail($to, $subject, $headers, $message);
            if(!mail()) {
                echo "<p><a href='contact.php' class='button block'>No success with sending mail!</a></p>"; 
                die();                
            }
    ?>    
    
    <!-- Show success message after email has sent! -->
    <h5>Thanks for contacting Braulio Design Research!</h5>
    <p>Please allow 24 hours for a response.</p>
    <p><a href="index.php" class="button block">Go to the home page</a></p>
    
    <?php } else { ?>
    
    <h1><?php echo TITLE;?></h1>
    <form action="#" method="post" id="contact-form" class="contact-form">
        <label for="firstName"><strong>First name:</strong></label>
        <input type="text" id="firstName" name="firstName" placeholder="Please enter the right info!" required>
        <label for="lastName"><strong>Last name:</strong></label>
        <input type="text" id="lastName" name="lastName" placeholder="Please enter the right info!" required>

        <label for="email"><strong>Email:</strong></label>
        <input type="email" id="email" name="email" placeholder="Please enter the right info!" required>
                
        <label for="message"><strong>Message:</strong></label>
        <textarea id="message" name="message" placeholder="Please enter the right info!" required></textarea>            
        <label for="subscribe"><strong>Subscribe for newsletter:</strong></label>
        <input type="checkbox" id="subscribe" name="subscribe" value="subscribe" required>
        <br/><br/>        
        <input class="button previous" name="submit" type="submit" value="submit">
    </form>
    <?php } ?>
</div>
<br>
<hr>
<br>
<?php 
    print '<br/>';
    include 'includes/StoreHours.class.php';  
    include 'includes/footer.php';    
    print '<br/>';
    include 'includes/copyright.php';
?>