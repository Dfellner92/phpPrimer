    <?php 
        $title = 'Arrays and Printouts';
        include 'includes/header.php';
    ?> 
    <?php 
        echo "<h2>$title</h2>";
        //a variable
        $num = 3; 

        // an array
        // Only one datatype
        $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 101, 2, 65, 46, 26, 33, 36, 12, 34, 555, 30);
        // You can access the value in a subscript of the array using the index.
        echo $numbers[5];

        echo "<p>$numbers[9]</p>";

        $size = count($numbers);
        echo "<p>Array Numbers is size: $size</p>";    

        for($i = 0; $i < $size; $i++){
            echo "<p>$numbers[$i]</p>";
        }
    ?>
    <?php require 'includes/footer.php' ?>
