    <?php 
        $title = 'Index';
        include 'includes/header.php';
    ?>
    <?php
        echo "<h2>$title</h2>"; 
        // Printing to HTML using echo
        echo "Hello PHP!";
        echo "<br><br>";
        echo "Second Line";
        echo "<br><br>";
    ?>

    <?php 
        // delcare variable
        $name = 'Daniel Fellner';
        // echo variable
        echo $name;
        echo '<h1>My Name Is: ' . $name . '</h1>';
        //Echo using double quotes and interpolation
        echo "<h1>My Name is: $name </h1>";
    ?>
    <!-- require will cause lapse in rendering; include will
    just give a warning -->
    <?php require 'includes/footer.php' ?>


