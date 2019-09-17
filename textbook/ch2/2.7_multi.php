<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Chapter 2.7 Multidimensional Arrays</title>
</head>
<body>
    <p>Some North American States, Provinces, and Territories:</p>
    <?php # Script 2.7 - multi.php
    // Create an array
    $mexico = [
        'YU' => 'Yucatan',
        'BC' => 'Baja California',
        'OA' => 'Oaxaca'
    ];

    // Create some more arrays
    $us = [
        'MD' => 'Maryland',
        'IL' => 'Illinois',
        'PA' => 'Pennsylvania',
        'IA' => 'Iowa'
    ];

    $canada = [
        'QC' => 'Quebec',
        'AB' => 'Alberta',
        'NT' => 'Northwest Territories',
        'YT' => 'Yukon',
        'PE' => 'Prince Edward Island'
    ];

    // Combine all the arrays into one:
    $n_america = [
        'Mexico' => $mexico,
        'United States' => $us,
        'Canada' => $canada
    ];
    ?>
</body>
</html>