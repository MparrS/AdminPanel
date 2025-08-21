<?php
require_once '../controllers/UserController.php';

$userController = new UserController();
$userProfile = $userController->getUserProfile();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $updatedData = [
        'name' => $_POST['name'] ?? '',
        'email' => $_POST['email'] ?? '',
        'profile_picture' => $_FILES['profile_picture']['name'] ?? ''
    ];
    
    if ($userController->updateUser($updatedData)) {
        // Handle successful update (e.g., redirect or show success message)
    } else {
        // Handle update error (e.g., show error message)
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="../assets/css/custom.css">
</head>

<body>
    <div class="container">
        <h1>User Profile</h1>
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control" value="<?= htmlspecialchars($userProfile['name']) ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" value="<?= htmlspecialchars($userProfile['email']) ?>" required>
            </div>
            <div class="form-group">
                <label for="profile_picture">Profile Picture</label>
                <input type="file" id="profile_picture" name="profile_picture" class="form-control">
                <img src="../images/profile_picture/<?= htmlspecialchars($userProfile['profile_picture']) ?>" alt="Profile Picture" class="img-thumbnail mt-2" style="width: 150px;">
            </div>
            <button type="submit" class="btn btn-primary">Update Profile</button>
        </form>
    </div>
</body>

</html>