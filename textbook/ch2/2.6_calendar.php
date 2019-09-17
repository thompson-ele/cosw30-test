<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Chapter 2 Calendar</title>
</head>
<body>
    <form action="calendar.php" method="POST">
    <?php # Script 2.6 - calendar.php #2
    // Make the months array:
    $months = [
        1 => 'January',
        'February',
        'March',
        'April',
        'May',
        'June',
        'July',
        'August',
        'September',
        'October',
        'November',
        'December'
    ];

    // Make the days and years arrays:
    $days = range(1, 31);
    $years = range(2019, 2029);

    // Make the months pull down menu:
    echo '<label for="month">Months</label>';
    echo '<select id="month" name="month">';
    foreach($months as $key => $month) {
        echo "<option value='$key'>$month</option>";
    }
    echo '</select>';

    // Make the days pull down menu:
    echo '<label for="day">Day</label>';
    echo '<select id="day" name="day">';
    foreach($days as $day) {
        echo "<option value='$day'>$day</option>";
    }
    echo '</select>';

    // Make the years pull down menu:
    echo '<label for="year">Year</label>';
    echo '<select id="year" name="year">';
    foreach($years as $year) {
        echo "<option value='$year'>$year</option>";
    }
    echo '</select>';

    ?>
    </form>
</body>
</html>