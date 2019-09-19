<?php

    $numParagraphs = $_POST['paragraphs'];
    $text = $_POST['text'];

    $textExplode = explode(' ', $text); // converts string to array
    
    shuffle($textExplode);
    
    // Use the implode function, to turn it back into a string
    $textImplode = implode(' ', $textExplode);

    for($i = 0; $i < $numParagraphs; $i++) {
        // Output a paragraph
        echo "<p>$textImplode</p>";
    }

    
    // $text = "Spicy jalapeno bacon ipsum dolor amet short loin tri-tip tongue pork chop ham 
    //         frankfurter sirloin, venison jerky. Capicola shank biltong chicken fatback turkey 
    //         sirloin turducken brisket shankle bresaola tail salami kevin pork chop. Jerky 
    //         spare ribs chuck, ham hamburger swine short loin pork loin alcatra salami tail. 
    //         Flank tongue pork chop, venison porchetta pancetta jowl.";
?>