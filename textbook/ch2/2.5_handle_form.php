<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Form Feedback</title>
</head>
<body>
<?php # Script 2.5 - handle_form.php #4

if(!empty($_POST['name']) && !empty($_POST['comments']) && !empty($_POST['email'])) {
    $name = $_POST['name'];
    $comments = $_POST['comments'];
    $email = $_POST['email'];
    echo "<p>Thank you, <strong>$name</strong>, for the following comments:</p>
          <pre>$comments</pre>
          <p>We will reply to you at <em>$email</em>.</p>\n";
} else { // Missing form value
    echo '<p>Please go back and fill out the form again.</p>';
}
?>
</body>
</html>