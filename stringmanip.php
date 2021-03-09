    <?php
        $title = "String Manipulation"; 
        include 'includes/header.php';
    ?>
    <?php 
        echo "<h2>$title</h2>";
        //String Concatenation
        $phrase1 = "The student who came in late";
        $phrase2 = "is now in class, wearing a dunce cap";
        $name = "dan fellner";
        echo $phrase1 . ", named Tiffany, " . $phrase2;
        echo "<br>";
        echo "<hr>";        
        //String transformation
        echo 'Uppercase first letter: ' . ucfirst($name) . '<br>';
        echo 'Uppercase first letter of each word: ' . ucwords($name) . '<br>';
        echo 'Uppercase all: ' . strtoupper($name) . '<br>';
        echo 'Lower case: ' . strtolower("THIS WAS AN UPPER CASE STRING") . '<br>';
        echo '<hr>';
        echo 'Repeat String: ' . str_repeat('a', 10) . '<br>';
        echo 'Repeat String - Nested Function: ' . strtoupper(str_repeat('a', 10)) . '<br>';
        echo 'Get a Substring: ' . substr($name, 2, 3) . '<br>';
        
        echo 'Get position of string: ' . strpos($name, 'f') . '<br>';
        // Returns NULL
        // echo 'Get position of string: ' . strpos($combine, 'z') . '<br>';
        echo 'Find Character "F": ' . strchr($name, 'F') . '<br>';
        echo 'Find Character "a": ' . strchr($name, 'a') . '<br>';
        echo 'Find Character "e": ' . strchr($name, 'e') . '<br>';
        echo 'Find Character "l": ' . strchr($name, 'l') . '<br>';

        echo 'Find Length of String: ' . strlen($name) . '<br>';

        echo 'Without Trim: ' . "A" . " B C D " . "E" . "<br>"; // A B C D E
        echo 'Trim spaces on both sides: ' . "A" . trim(" B C D ") . "E" . "<br>"; // A B C D E
        echo 'Trim spaces to the left: ' . "A" . ltrim(" B C D ") . "E" . "<br>"; // A B C D E
        echo 'Trim spaces to the right: ' . "A" . rtrim(" B C D ") . "E" . "<br>"; // A B C D E

        echo 'Replace string with another: ' . str_replace("class", "school", $phrase2) . '<br>';
?>
<?php require 'includes/footer.php' ?>
