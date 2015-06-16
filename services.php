<?php 
    //Name of company
    define("TITLE", "Services | Braulio Design Research");
       
    //header of website
    include_once 'includes/header.php';
?> 
<hr>
<div id="team-members" class="cf">
<h1><?php echo TITLE;?></h1>    
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sollicitudin ultrices ipsum, quis interdum mi semper eget. Praesent eget justo felis. Nam aliquam enim eu neque porttitor, ut sagittis nulla lacinia. Ut et dictum lectus. Etiam pretium, nulla a imperdiet dignissim, sem augue semper elit, et feugiat dolor tellus quis libero. In convallis consequat nisi, in congue diam luctus nec. Suspendisse potenti.</p>
<p><em>Click on any Services to see more information about that specific thing</em></p>
<br/>    
<hr>
<br/>
<ul>
    <?php foreach ($servicesItems as $item) { ?>
    
    <li>
        <a href="allservices.php?item=<?php echo $item[title]; ?>">
            <?php echo $item[title]; ?>
        </a>
    </li>
    
    <?php } ?>
</ul>
</div> <!-- Team Members -->
<hr>
<?php 
    print '<br/>';
    include 'includes/StoreHours.class.php';  
    include 'includes/footer.php';    
    print '<br/>';
    include 'includes/copyright.php';
?>