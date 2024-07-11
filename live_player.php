<?php
include "./connection.php";
// include "./session_check.php";
// echo "<h2>Welcome " . $_SESSION['username'] . "</h2>";

$display_query = mysqli_query($conn, "SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users status</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .table-container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .status-button {
            padding: 4px 10px;
            border: none;
            color: white;
            cursor: pointer;
            width: auto;
            display: inline-block;
            text-align: center;
        }

        .active {
            background-color: green;
            border-radius: 4px;
        }

        .inactive {
            background-color: red;
            border-radius: 4px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="table-container">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <h3 class="mb-4 font-italic text-decoration-underline" style="text-decoration: underline; color:#03055B;">Users Status</h3>
                <button class="btn btn-primary" onclick="window.location.href='./index.php';">Login</button>
            </div>
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    while ($data = mysqli_fetch_assoc($display_query)) {
                        $username = $data['username'];
                        $statusClass = ($data['live_player'] == '1') ? 'active' : 'inactive';
                    ?>
                        <tr>
                            <td><?php echo $data['username']; ?></td>
                            <td><?php echo $data['role']; ?></td>
                            <td>
                                <button class="btn btn-sm status-button <?php echo $statusClass; ?>">
                                    <?php echo ($data['live_player'] == '1') ? 'Active' : 'Inactive'; ?>
                                </button>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>