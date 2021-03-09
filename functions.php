    <?php 
        $title = "Functions";    
        include 'includes/header.php'
    ?>
    <?php
        echo "<h2>$title</h2>"; 
        
        /*Defining a Function */

        function writeMessage() {
            echo "You are a really nice person! <br>";
        }

        /*Calling a Function */
        writeMessage();
        echo "<hr>";
        writeMessage();

        /* Functions with parameters */

        function addFunction($num1, $num2) {
            $sum = $num1 + $num2;
            echo "The sum of $num1 and $num2 is: $sum <br>";
        }
        $num = 500;
        addFunction(10, 20);
        addFunction(10, $num);
    ?>
    <?php require 'includes/footer.php' ?>
