    <?php 
        $title = "While/Do While Loops";
        $subtitle1 = "While Loops";
        $subtitle2 = "Do While Loops";
        include 'includes/header.php'
    ?>
    <?php 
        echo "<h2>$subtitle1</h2>";
        $grade = 0;
        // Infinite Loop
        // while($grade < 10){
        //     echo '<p>I AM LESS THAN 10</p>';   
        // }
        
        while($grade < 10 ) {
            echo '<p>I AM LESS THAN 10!</p>';
            $grade++;
        }
    ?>

    <?php
        echo "<h2>$subtitle2</h2>"; 
        // Post-Condition Loop
        $grade = 0;
        do{
            echo '<p>Do While Loop Grade: ' . $grade . '<p>';
            $grade++;
        }while($grade < 10);
        echo 'DONE W LOOP!';
    ?>
<?php require 'includes/footer.php' ?>
