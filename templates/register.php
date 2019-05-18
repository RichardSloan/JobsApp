<?php include 'inc/header.php'; ?>


<div class="container" align="center">
        <h1>Sign Up</h1>
        <?php
        if (isset($_GET['error'])) {
            if ($_GET['error'] == "emptyfields") {
                echo '<p>Fill in all the fields!</p>';
            } else if ($_GET['error'] == "invaliduidmail") {
                echo '<p>Invalid Username And Email!</p>';
            } else if ($_GET['error'] == "invaliduid") {
                echo '<p>Invalid Username!</p>';
            } else if ($_GET['error'] == "invalidmail") {
                echo '<p>Invalid Email!</p>';
            } else if ($_GET['error'] == "passwordcheck") {
                echo '<p>Your Password Dont Match!</p>';
            } else if ($_GET['error'] == "usertaken") {
                echo '<p>Username Is Not Available!</p>';
            } else if ($_GET['signup'] == "success") {
                echo '<p>Sign Up Successful!</p>';
            }
        }

        ?>
        <form action="includes/signup.inc.php" method="post">
            <input class="form-control-reg" type="text" name="uid" placeholder="Username">
            <input class="form-control-reg" type="password" name="pwd" placeholder="Password">
            <input class="form-control-reg" type="text" name="mail" placeholder="E-mail">
            <input class="form-control-reg" type="password" name="pwd-repeat" placeholder="Confirm Password">
            <br>
            <br>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="signup-submit">Sign Up!</button>
        </form>
    <br>
        </div>


<?php include 'inc/footer.php' ?>