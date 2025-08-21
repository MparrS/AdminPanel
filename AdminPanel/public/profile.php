<?php
require_once '../src/controllers/UserController.php';

session_start();

$userController = new UserController();
$userProfile = null;

if (isset($_SESSION['user_id'])) {
    $userProfile = $userController->getUserProfile($_SESSION['user_id']);
} else {
    header('Location: index.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $profilePicture = $_FILES['profile_picture'] ?? null;

    if ($profilePicture && $profilePicture['error'] === UPLOAD_ERR_OK) {
        // Handle file upload and update user profile
        $userController->updateUserProfile($_SESSION['user_id'], $name, $email, $profilePicture);
    } else {
        $userController->updateUserProfile($_SESSION['user_id'], $name, $email);
    }

    header('Location: profile.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
    <?php include '../src/views/partials/header.php'; ?>

    <div class="container">
        <h1>User Profile</h1>
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= htmlspecialchars($userProfile->name) ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($userProfile->email) ?>" required>
            </div>
            <div class="form-group">
                <label for="profile_picture">Profile Picture</label>
                <input type="file" class="form-control" id="profile_picture" name="profile_picture">
            </div>
            <button type="submit" class="btn btn-primary">Update Profile</button>
        </form>
    </div>

    <?php include '../src/views/partials/footer.php'; ?>
</body>

</html>