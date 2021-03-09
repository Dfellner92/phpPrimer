    <?php 
        $title = "Date and Time Manipulation";
        include 'includes/header.php';
    ?>
    <?php 
        echo "<h2>$title</h2>";

        $datenow = getdate();
        echo "Today's Date <br>";
        echo "Month: " . $datenow['mday'] . '<br>';
        echo "Day: " . $datenow['mon'] . '<br>';
        echo "Year: " . $datenow['year'] . '<br>';

        echo time();
    ?>
    <?php require 'includes/footer.php' ?>
