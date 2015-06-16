<?php 
    //Name of company
    define("TITLE", "Specific services | Braulio Desing Research");
       
    //header of website
    include_once 'includes/header.php';
    
    function strip_bad_chars( $input ) {
            $output = trim($input);
                        
            if (!(filter_var($output, FILTER_SANITIZE_STRING) && !empty($output))) {                                       echo "<p><a href='services.php' class='button block'>Please only valid chars and all fields are required!</a></p>";                     
                die();   
            } else {                 
               //var_dump($output); //
               return $output;    
                 } 	                
    }
	
    if(isset($_GET['item'])) {
        $item = strip_bad_chars( $_GET['item'] );
    }      
?> 
<hr>
<div id="team-members" class="cf">
    <?php foreach ($servicesItems as $item) { ?> 
            <?php 
                echo '<br/>';   
                echo $item[title].'<br/>';
                echo $item[info].'<br/>';
                echo $item[blurb].'<br/>';
                echo $item[tip].'<br/>';
                echo '<br/>'; 
            ?> 
            <hr>
    <?php } ?>
</div>
<a href="services.php" class="button previous">&laquo; Back to the Services</a>
<?php 
    print '<br/>';
    include 'includes/StoreHours.php';  
    include 'includes/footer.php';    
    print '<br/>';
    include 'includes/copyright.php';
?>