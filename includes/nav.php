
<ul>

<?php

//Nav Meu items for the buttons
    foreach ($navItems as $item) {
        echo "<li><a href=\"$item[slug]\">$item[title]</a></li>";
    }
?>

</ul>