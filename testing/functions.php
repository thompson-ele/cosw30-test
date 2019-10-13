<?php
$names = ['Ele', 'Diana', 'Bayleigh', 'Patrick', 'Ryan'];

function greeting($nametest) {
    echo '<p>Hello, my name is '.$nametest.'</p>';
}

foreach($names as $name) {
    greeting($name);
}
?>