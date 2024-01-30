<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $user_name = $_POST['username'];
        $mailid = $_POST['mailId'];
        $password = $_POST['password'];

        if(!empty($mailid) && !empty($password) && !is_numeric($mailid))
        {
            $query = "insert into try (username, mailId, password) values('$user_name', '$mailid', '$password')";

            mysqli_query($conn, $query);

            echo "<script type= 'text/javascript'> alert('Successfully Registered')</script>";
        }
        else{
            echo "<script type='text/javascript'> alert('Please enter valid information')</script>";
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Vital Checker - Sign Up</title>
</head>
<body>
    <div class="signup">
            <h2>Sign Up</h2>
            <form method="POST">
                <label>Username:</label>
                <input type="text" name="username" required>

	            <label>MailId:</label>
                <input type="email" name="mailId" required>

                <label>Password:</label>
                <input type="password" name="password" required>

                <input type="submit" name="" value="Submit">
            </form>
<p>Already have an account ? <a href="signin.php">Sign In Here</p>
        </div>
    </div>

</body>
</html>
