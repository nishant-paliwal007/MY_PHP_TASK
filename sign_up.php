<?php
include "./connection.php";
include "./insert_data.php";
?>
<!-- old form without style -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <div>
        <form action="" method="post">
            <label for="username">Username</label><br>
            <input type="text" name="username" required><br><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" required><br><br>
            <label for="role">Role</label><br>
            <select name="role" id="role" required>
                <option value="admin">admin</option>
                <option value="superadmin">superadmin</option>
                <option value="agent">agent</option>
                <option value="user">user</option>
            </select><br><br>
            <button type="submit" name="submit_f">Sign up</button>
            <br>
        </form>
    </div>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
   
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        
        .signup-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .signup-container form {
            margin-bottom: 0;
           
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="signup-container">
            <h2 class="text-center mb-4 font-italic" style="color: #007bff; text-decoration:underline;">Sign Up</h2>
            <form action="" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" class="form-control" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="form-control" name="password" required>
                </div>
                <div class="form-group">
                    <label for="role">Role</label>
                    <select class="form-control" name="role" id="role" required>
                        <option value="admin">admin</option>
                        <option value="superadmin">superadmin</option>
                        <option value="agent">agent</option>
                        <option value="user">user</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-block" name="submit_f" onclick="window.location.href='./index.php'">Sign Up</button>
            </form>
            <div>
                <p class="mt-3 text-center mb-0">Already have an account? <a class="ml-2" href="index.php">Login</a></p>
            </div>
        </div>
    </div>

  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>