<?php
include "./connection.php";
session_start();

if (isset($_POST['submit_l'])) {
    $name = $_POST['username'];
    $pass = $_POST['password'];

    
    $query = "SELECT * FROM `users` WHERE username='$name' AND password='$pass'";
    $result = mysqli_query($conn, $query);
    $fetch_data = mysqli_fetch_assoc($result);

    if ($fetch_data) {
        $_SESSION["username"] = $name;

       
        mysqli_query($conn, "UPDATE users SET `live_player` = '1' WHERE `username` = '$name'");

        $role = $fetch_data['role'];
        if ($role == "admin") {
            echo "<script>alert('Logged in successfully!'); window.location.href='./admin.php';</script>";
        } elseif ($role == "superadmin") {
            echo "<script>alert('Logged in successfully!'); window.location.href='./superadmin.php'; </script>";
        } elseif ($role == "agent") {
            echo "<script>alert('Logged in successfully!'); window.location.href='./agent.php'; </script>";
        } elseif ($role == "user") {
            echo "<script>alert('Logged in successfully!'); window.location.href='./user.php'; </script>";
        }
    } else {
        echo "<script>alert('Please check username and password!'); </script>";
    }
}
?>
<!-- old form without styling -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div>
        <form action="" method="post">
            <label for="username">Username</label><br>
            <input type="text" name="username" required><br><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" required><br><br>
            <button type="submit" name="submit_l">Login</button>
        </form><br>
        <button onclick="window.location.href='./sign_up.php';">Sign Up</button>
    </div>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
   
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
       
        .login-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .login-container form {
            margin-bottom: 0;
           
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="login-container">
            <h2 class="text-center mb-4 font-italic" style="color: #007bff; text-decoration:underline;">Login</h2>
            <form action="" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" class="form-control" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="username" class="form-control" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block" name="submit_l">Login</button>
            </form>
            <div class="mt-3 text-center">
                <p class="text-secondary mb-0">dont have an account? <a href="./sign_up.php" class="ml-2">Sign up</a></p>
            </div>
        </div>
    </div>

   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>