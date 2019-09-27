<?php include('includes/header.php'); ?>
<?php

$email = "";
$password = "";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Store post data into our variables
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate
    if(empty($email)) { // email is empty
        // output an error
        $error = 'Enter your email foo';
    }
}
?>
<main>
<h1>Sticky Form yasss</h1>

<?php
    if(isset($error)) { echo $error; }
?>

<form action="login.php" method="POST">
    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="test" value="<?php echo $email; ?>">

    <label for="password">Password</label>
    <input type="password" id="password" name="password">

    <button>Login</button>
</form>
</main>

<?php include('includes/footer.php'); ?>