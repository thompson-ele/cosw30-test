<?php # Script 3.5 - calculator.php
$page_title = "Trip Cost Calculator";
include('includes/header.html');

// Check for form submission
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $distance = $_POST['distance'];
    $gallon_price = $_POST['gallon_price'];
    $efficiency = $_POST['efficiency'];

    // Minimal form validation:
    if(isset($distance, $gallon_price, $efficiency) &&
       is_numeric($distance) && is_numeric($gallon_price) && is_numeric($efficiency)) {

           // Calculate the results
           $gallons = $distance / $efficiency;
           $dollars = $gallons * $gallon_price;
           $hours = $distance / 65;

           // Print the results
           echo '<div class="page-header">
                    <h1>Total Estimated Costs</h1>
                 </div>
                 <p>The total cost of driving '.$distance.' miles, averaging'
                 .$efficiency.' miles per gallon, and paying an average of $'.
                 $gallon_price.' per gallon is, $'.number_format($dollars, 2).
                 '. If you drive at an average of 65 miles per hour, the trip will take
                 approximately '.number_format($hours,2).' hours.</p>';

    } else { // Invalid submitted values

    }
}
?>

<?php include('includes/footer.html'); ?>