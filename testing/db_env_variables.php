<?php
//Connect To Database
$hostname   = getenv('DB_HOSTNAME');
$username   = getenv('DB_USERNAME_PUBLIC');
$password   = getenv('DB_PW_PUBLIC');
$dbname     = getenv('DB_NAME');

$connection = mysqli_connect($hostname, $username, $password, $dbname);

$query = 'SELECT * FROM PRODUCT';
$result = mysqli_query($connection, $query);

if($result) {
    while($row = mysqli_fetch_array($result)){
        $product_name = $row['product_name'];
        echo '<p>Product Name: ' . $product_name . '</p>';
    }
}
?>