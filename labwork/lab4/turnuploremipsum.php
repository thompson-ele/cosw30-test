<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Lorem Ipsum Generator</title>
    </head>
    <body>

<?php

// If the form has been submitted, run this code
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $words = $_POST['text'];
    $numParagraphs = $_POST['paragraphs'];
    
    // Convert words into an array
    $wordsArray = explode(' ', $words);
    
    // For each paragraph (# of paragraphs chosen by user)
    for($i = 0; $i < $numParagraphs; $i++) {
        
        // Create a new, empty array to store words in
        $newParagraph = [];
        
        // Randomly select a word and add it to the new array
        for($i = 0; $i < 50; $i++) {
            // array_rand() returns a random index in the array
            $randomKey = array_rand($wordsArray);
            // You can use the [] or array_push() to add a value
            // to an existing array
            $newParagraph[] = $wordsArray[$randomKey];
        }
        
        // Convert randomized paragraph to a string
        $outputParagraph = implode(' ', $newParagraph);
        
        // Output the randomized paragraph
        echo "<p>$outputParagraph</p>";
    }
    
} else { // If the form hasn't been submitted, show the form
?>


        <form action="turnuploremipsum.php" method="POST">
            <label for="text">Text to be Scrambled</label>
            <input type="text" id="text" name="text">
            
            <label for="paragraphs"># of Paragraphs?</label>
            <select id="paragraphs" name="paragraphs">
                <option value="1">One</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <button>Get Me Some Paragraphs, Please</button>
        </form>


<?php }?>

    </body>
</html>