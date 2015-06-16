<?php 
    //Name of company
    define("TITLE", "Company | Braulio Desing Research");
       
    //header of website
    include_once 'includes/header.php';
?> 
<hr>
<div id="team-members" class="cf">
    <h1><?php echo TITLE;?></h1>    
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sollicitudin ultrices ipsum, quis interdum mi semper eget. Praesent eget justo felis. Nam aliquam enim eu neque porttitor, ut sagittis nulla lacinia. Ut et dictum lectus. Etiam pretium, nulla a imperdiet dignissim, sem augue semper elit, et feugiat dolor tellus quis libero. In convallis consequat nisi, in congue diam luctus nec. Suspendisse potenti.</p>
<p><strong>In at metus vitae nisi rhoncus tristique. Mauris hendrerit laoreet venenatis.</strong></p>
<br/>
<hr>
<br/>
<?php foreach($teamMembers as $member) { ?>

<div class="member">
    <img src="view/img/<?php echo $member[img];?>.png" alt="<?php echo $member[name]; ?>">    
    <h2><?php echo $member[name]; ?></h2>
    <h6><?php echo $member[position];?></h6>
    <p><?php echo $member[bio]; ?></p>
</div>

<?php } ?>
</div>
<hr>
<?php 
    print '<br/>';
    include 'includes/StoreHours.class.php';  
    include 'includes/footer.php';    
    print '<br/>';
    include 'includes/copyright.php';
?>