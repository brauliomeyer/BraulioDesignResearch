<?php 
    //Name of company
    define("TITLE", "Home | Braulio Desing Research");
    
    //header of website
    include_once 'includes/header.php';
?>  
<div id="team-members" class="cf">
    <hr>
    <h1><?php echo TITLE;?></h1>
    <p>Lorem ipsumLorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus fringilla sagittis sapien, ac blandit magna aliquet at. Morbi quis enim augue. Curabitur accumsan sit amet felis a consectetur. Aenean venenatis enim a nisi pulvinar, sed euismod felis fringilla. Vivamus id euismod odio, consectetur pulvinar nibh. Suspendisse nibh nibh, euismod ut dictum vitae, imperdiet sed magna. Etiam ultrices nulla vitae nisl interdum, non laoreet mauris porta. Quisque tempus id arcu non facilisis.</p>
<br/>
<hr>
</div>    
<?php 
    print '<br/>';
    include 'includes/StoreHours.class.php';  
    include 'includes/footer.php';    
    print '<br/>';
    include 'includes/copyright.php';
?>
