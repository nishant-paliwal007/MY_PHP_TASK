<?php
include "./connection.php";
// include "./session_check.php";

if (isset($_POST['submit_f'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $sql = "INSERT INTO users(`username`, `password`, `role`) VALUES('$username', '$password', '$role')";
    $insert_query = mysqli_query($conn, $sql);

    if ($insert_query) {
        echo "<script>alert('Account created succesfully!'); window.location.href='index.php'; </script>";
    } else {
        echo "<script>alert('Failed to create an account'); </script>";
    }
}
?>

