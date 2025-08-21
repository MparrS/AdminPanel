<?php
// filepath: c:\xampp\htdocs\AdminPanel\src\views\dashboard.php
require_once '../controllers/UserController.php';

$userController = new UserController();
$userStats = $userController->getUserStatistics(); // Assuming this method returns user statistics

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../assets/css/custom.css">
</head>

<body>
    <div class="container">
        <h1 class="mt-4">Dashboard</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5>User Statistics</h5>
                    </div>
                    <div class="card-body">
                        <p>Total Users: <?= htmlspecialchars($userStats['totalUsers']) ?></p>
                        <p>Active Users: <?= htmlspecialchars($userStats['activeUsers']) ?></p>
                        <p>Inactive Users: <?= htmlspecialchars($userStats['inactiveUsers']) ?></p>
                    </div>
                </div>
            </div>
            <!-- Additional statistics can be added here -->
        </div>
    </div>
    <?php include 'partials/footer.php'; ?>
</body>

</html>