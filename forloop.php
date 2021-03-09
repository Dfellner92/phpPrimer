    <?php 
        $title = "For Loops";
        include 'includes/header.php';
    ?>
    <?php
        echo "<h2>$title</h2>"; 
        //For Loops
        for($i = 0; $i < 10; $i++){
            echo '<p>HELLO WORLD</p>';
        }

        for($i = 0; $i < 10; $i++){
            echo '<p>The Count is: ' . $i . '</p>';
        }
    
    
    ?>
    <?php require 'includes/footer.php' ?>
