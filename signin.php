<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $user_name = $_POST['username'];
        $password = $_POST['password'];

        if(!empty($password) && !is_numeric($mailid))
        {
            $query = "select * from where username = '$user_name' limit 1";
            $result = mysqli_query($conn, $query);

           if($result)
           {
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);

                if($user_data['pass'] == $password)
                {
                    header("location: index.php");
                    die;
                }
            }
            }
            echo "<script type='text/javascript'> alert('Wrong username or password')</script>";
           }
           else {
            echo "<script type='text/javascript'> alert('Wrong username or password')</script>";
           }
            
        }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Vital Checker - Signin</title>
</head>
<body>
    <div class="Signin">
            <h2>Sign In</h2>
            <form method="POST">
                <label>Username:</label>
                <input type="text" name="username" required>

                <label>Password:</label>
                <input type="password" name="password" required>

                <input type="submit" name="" value="Submit">
            </form>
<p> Not have an account ? <a href="signup.html">Sign Up</p>
    </div>
<script src="app.js"></script>
</body>
</html>