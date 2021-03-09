    <?php 
        $title = 'If Statements';
        include 'includes/header.php';
    ?>    
    <?php 

        //An If statement that will carry out an action based
        // on the value of the variable
        echo "<h2>$title</h2>";
        echo '<br><br>';

        $grade = 50;
        if($grade >= 50){
            echo '<h3 style="color: green">YOU HAVE PASSED</h3>';
        } else {
            echo '<h3 style="color: red">YOU HAVE FAILED</h3>';
        }
    
    ?>
    <?php require 'includes/footer.php' ?>
